<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItemRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateItemRequest;
use App\Imports\ItemImport;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Diskon;
use App\Models\Divisi;
use App\Models\Item;
use App\Models\Subcategory;
use Maatwebsite\Excel\Facades\Excel;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->search != null) {
            $items = Item::where('nama_produk', 'like', '%' . $request->search . '%')->with(['brand', 'diskon'])->orderBy('is_featured', 'DESC')->paginate(10);
        } else
            $items = Item::with(['brand', 'diskon'])->orderBy('is_featured', 'DESC')->paginate(10);
        return view('admin.item.index', ['items' => $items]);
    }

    /**
     * Show the form for upload data
     */
    public function uploadView(Request $request)
    {
        return view('admin.item.upload');
    }


    /**
     * Show the form for upload image
     */
    public function uploadImage(Request $request, Item $item)
    {
        $data = Item::where('id', $item->id)->with(['images'])->first();
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
        $items = Item::where('is_featured', "=", 1)->get();
        if ($items->count() >= 10) {
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
        $model = new Item();
        if ($request->image != null)
            $model->image = $this->store_image($request);

        //Relation
        $model->divisi_id = $request->divisi_id;
        $model->brand_id = $request->brand_id;
        $model->category_id = $request->category_id;
        $model->subcategory_id = $request->subcategory_id;
        //Relation

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
        //If product laptop/PC/AiO/Server

        $model->garansi = $request->garansi;
        $model->keterangan = $request->keterangan;
        $model->web_marketplace = $request->web_marketplace;
        $model->quantity = $request->quantity;

        $model->save();

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

        if ($request->image != null)
            $item->image = $this->store_image($request);

        //Relation
        $item->divisi_id = $request->divisi_id;
        $item->brand_id = $request->brand_id;
        $item->category_id = $request->category_id;
        $item->subcategory_id = $request->subcategory_id;
        //Relation

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
        //If product laptop/PC/AiO/Server

        $item->garansi = $request->garansi;
        $item->keterangan = $request->keterangan;
        $item->web_marketplace = $request->web_marketplace;
        $item->quantity = $request->quantity;
        $item->save();

        return redirect('/admin/item');
    }

    public function search(Request $request)
    {
        $items = Item::with('user');

        if ($request->divisi_id != null)
            $items->whereIn('divisi_id', $request->divisi_id);
        if ($request->brands_id != null)
            $items->whereIn('brand_id', $request->brands_id);
        if ($request->category_id != null)
            $items->whereIn('category_id', $request->category_id);
        if ($request->subcategory_id != null)
            $items->whereIn('subcategory_id', $request->subcategory_id);
        if ($request->search) {
            $brand = Brand::where('nama', "LIKE", "%" . $request->search . "%")->first();
            $items->where('nama_produk', "LIKE", "%" . $request->search . "%");
            if ($brand)
                $items->orWhere('brand_id', $brand->id);
        }
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
        $item->delete();
        return redirect('/admin/item');
    }
}
