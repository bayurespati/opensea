<?php

namespace App\Http\Controllers;

use App\Exports\ItemExport;
use App\Http\Requests\StoreItemRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateItemRequest;
use App\Imports\ItemHargaImport;
use App\Imports\ItemImport;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Diskon;
use App\Models\Divisi;
use App\Models\Item;
use App\Models\ItemImage;
use App\Models\Subcategory;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Str;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $queries = $request->input("query");
        if ($queries != null) {
            $brand_id = Brand::where('nama', 'like', '%' . $queries . '%')->get()->pluck('id');
            $items = Item::active()
                ->where(function ($query) use ($brand_id, $queries) {
                    $query->whereIn('brand_id', $brand_id)
                        ->orWhere('nama_produk', 'like', '%' . $queries . '%');
                })
                ->with(['brand', 'diskon'])
                ->orderBy('is_featured', 'DESC')
                ->paginate(10)
                ->appends(['query' => $queries]);
        } else
            $items = Item::active()->with(['brand', 'diskon'])->orderBy('is_featured', 'DESC')->paginate(10);
        return view('admin.item.index', ['items' => $items]);
    }

    public function trash(Request $request)
    {
        $queries = $request->input("query");
        if ($queries != null) {
            $brand_id = Brand::where('nama', 'like', '%' . $queries . '%')->get()->pluck('id');
            $items = Item::where('is_active', 0)
                ->where(function ($query) use ($brand_id, $queries) {
                    $query->whereIn('brand_id', $brand_id)
                        ->orWhere('nama_produk', 'like', '%' . $queries . '%');
                })
                ->with(['brand', 'diskon'])
                ->orderBy('is_featured', 'DESC')
                ->paginate(10)
                ->appends(['query' => $queries]);
        } else
            $items = Item::where('is_active', 0)->with(['brand', 'diskon'])->orderBy('is_featured', 'DESC')->paginate(10);
        return view('admin.item.trash', ['items' => $items]);
    }

    /**
     * Show the form for upload data
     */
    public function uploadView(Request $request)
    {
        return view('admin.item.upload');
    }

    /**
     * Show the form for upload data
     */
    public function uploadHargaView(Request $request)
    {
        return view('admin.item.upload_harga');
    }

    /**
     * Show the form for upload image
     */
    public function uploadImage(Request $request, Item $item)
    {
        $data = Item::active()->where('id', $item->id)->with(['images'])->first();
        return view('admin.item.upload-image', ['item' => $data]);
    }

    /**
     * Show the form for setting data
     */
    public function setting(Item $item)
    {
        $diskons = Diskon::all();
        return view('admin.item.setting', ['item' => $item, 'diskons' => $diskons]);
    }

    /**
     * Show the form for setting data
     */
    public function updateSetting(Request $request, Item $item)
    {
        $items = Item::active()->where('is_featured', "=", 1)->get();
        if ($items->count() >= 11) {
            return redirect()->back()->with('error', "Item untuk show sudah max");
        }

        $item->is_featured = (int) $request->is_featured;
        $item->diskon_id = $request->diskon_id;
        $item->save();
        return redirect('/admin/item')->with('success', "Berhasil update data");
    }

    /**
     * Upload data into storage.
     */
    public function upload(Request $request)
    {
        try {
            $file = $request->file('file');
            Excel::import(new ItemImport(), $file, \Maatwebsite\Excel\Excel::XLSX);

            return redirect()->back()->with('success', 'Berhasil upload data');
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Upload data harga into storage.
     */
    public function uploadHarga(Request $request)
    {
        try {
            $file = $request->file('file');
            Excel::import(new ItemHargaImport(), $file, \Maatwebsite\Excel\Excel::XLSX);

            return redirect()->back()->with('success', 'Berhasil upload data harga');
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function download(Request $request)
    {
        try {
            return Excel::download(new ItemExport(), "list_produk.xlsx");
        } catch (Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = Brand::all();
        $divisi = Divisi::all();
        $categories = Category::all();
        $subcategories = Subcategory::all();
        return view('admin.item.create', [
            'brands' => $brands,
            'divisi' => $divisi,
            'categories' => $categories,
            'subcategories' => $subcategories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreItemRequest $request)
    {

        DB::transaction(function () use ($request) {
            $model = new Item();
            if ($request->image != null)
                $model->image = $this->store_image($request);

            //Relation
            $model->divisi_id = $request->divisi_id;
            $model->brand_id = $request->brand_id;
            $model->category_id = $request->category_id;
            $model->subcategory_id = $request->subcategory_id;

            $model->nama_produk = $request->nama_produk;
            $model->masa_berlaku_produk = $request->masa_berlaku_produk;
            $model->satuan = $request->satuan;
            $model->jenis_produk = $request->jenis_produk;
            $model->jenis_produk = $request->jenis_produk;
            $model->nilai_tkdn = $request->nilai_tkdn;
            $model->nilai_bmp = $request->nilai_bmp;
            $model->deskripsi = $request->deskripsi;
            $model->negara_asal_produk = $request->negara_asal_produk;
            $model->harga = str_replace(",", "", $request->harga);

            //If product laptop/PC/AiO/Server
            $model->type = $request->type;
            $model->prosesor = $request->prosesor;
            $model->ram = $request->ram;
            $model->storage = $request->storage;
            $model->vga = $request->vga;
            $model->sistem_operasi = $request->sistem_operasi;

            $model->garansi = $request->garansi;
            $model->keterangan = $request->keterangan;
            $model->web_marketplace = $request->web_marketplace;
            $model->quantity = $request->quantity;
            $model->save();

            //Insert Image for many image
            $item_image = new ItemImage;
            $item_image->item_id = $model->id;
            $item_image->name = $model->image;
            $item_image->url = $model->image;
            $item_image->save();
        });

        return redirect('/admin/item');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        $brands = Brand::all();
        $divisi = Divisi::all();
        $categories = Category::all();
        $subcategories = Subcategory::all();
        return view('admin.item.edit', [
            "item" => $item,
            "brands" => $brands,
            "divisi" => $divisi,
            'categories' => $categories,
            'subcategories' => $subcategories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
        $request->validate((new UpdateItemRequest())->rules($item));

        DB::transaction(function () use ($request, $item) {
            if ($request->image != null)
                $item->image = $this->store_image($request);

            //Relation
            $item->divisi_id = $request->divisi_id;
            $item->brand_id = $request->brand_id;
            $item->category_id = $request->category_id;
            $item->subcategory_id = $request->subcategory_id;

            $item->nama_produk = $request->nama_produk;
            $item->masa_berlaku_produk = $request->masa_berlaku_produk;
            $item->satuan = $request->satuan;
            $item->jenis_produk = $request->jenis_produk;
            $item->nilai_tkdn = $request->nilai_tkdn;
            $item->nilai_bmp = $request->nilai_bmp;
            $item->deskripsi = $request->deskripsi;
            $item->negara_asal_produk = $request->negara_asal_produk;
            $item->harga = str_replace(",", "", $request->harga);

            //If product laptop/PC/AiO/Server
            $item->type = $request->type;
            $item->prosesor = $request->prosesor;
            $item->ram = $request->ram;
            $item->storage = $request->storage;
            $item->vga = $request->vga;
            $item->sistem_operasi = $request->sistem_operasi;

            $item->garansi = $request->garansi;
            $item->keterangan = $request->keterangan;
            $item->web_marketplace = $request->web_marketplace;
            $item->quantity = $request->quantity;
            $item->is_active = $request->is_active;
            $item->save();

            if (!ItemImage::where('item_id', $item->id)->first() && $request->image != null) {
                //Insert Image for many image
                $item_image = new ItemImage;
                $item_image->item_id = $item->id;
                $item_image->name = $item->image;
                $item_image->url = $item->image;
                $item_image->save();
            }
        });

        return redirect('/admin/item');
    }

    public function search(Request $request)
    {
        $items = Item::active();
        if ($request->search) {
            $brand = Brand::where('nama', "LIKE", "%" . $request->search . "%")->first();
            $subcategories = Subcategory::where('nama', "LIKE", "%" . $request->search . "%")->first();
            $categories = Category::where('nama', "LIKE", "%" . $request->search . "%")->first();
            $brand = Brand::where('nama', "LIKE", "%" . $request->search . "%")->first();
            $items->where('nama_produk', "LIKE", "%" . $request->search . "%")->orWhere('jenis_produk', "LIKE", "%" . $request->search . "%");
            if ($categories)
                $items->orWhere('category_id', $categories->id);
            if ($subcategories)
                $items->orWhere('subcategory_id', $subcategories->id);
            if ($brand)
                $items->orWhere('brand_id', $brand->id);
            if (Str::lower($request->search) == "tkdn") {
                $items->orWhere('jenis_produk', "=", "pdn");
            }
        }

        if ($request->divisi_id != null)
            $items->whereIn('divisi_id', $request->divisi_id);
        if ($request->brands_id != null)
            $items->whereIn('brand_id', $request->brands_id);
        if ($request->category_id != null)
            $items->whereIn('category_id', $request->category_id);
        if ($request->subcategory_id != null)
            $items->whereIn('subcategory_id', $request->subcategory_id);
        if ($request->diskon_nilai) {
            $diskon = Diskon::where('nilai', $request->diskon_nilai)->first();
            $items->where('diskon_id', "=", $diskon->id);
        }
        if ($request->max) {
            $items->whereBetween('harga', [$request->min * 1000000, $request->max * 1000000]);
        }
        if ($request->short) {
            $items->orderBy('harga', $request->short);
        }

        $data = $items->with(['user', 'brand'])->get();

        return $data;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        $item->is_active = 0;
        $item->save();
        return redirect('/admin/item')->with('success', "Berhasil hapus data");
    }
}
