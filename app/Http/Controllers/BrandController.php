<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBrandRequest;
use App\Models\Brand;
use App\Http\Requests\UpdateBrandRequest;
use App\Models\Item;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brand.index', ['brands' => $brands]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBrandRequest $request)
    {
        $model = new Brand();
        $model->nama = $request->nama;
        $model->alias = $request->alias;
        $model->save();

        return redirect('/admin/brand');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        return view('admin.brand.edit', ["brand" => $brand]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        $request->validate((new UpdateBrandRequest())->rules($brand));
        $brand->nama = $request->nama;
        $brand->alias = $request->alias;
        $brand->save();

        return redirect('/admin/brand');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        if (sizeOf($brand->items) > 0)
            return redirect()->back()->with('message', 'Brand ' . $brand->nama . ' tidak bisa dihapus masih ada item yang menggunakan brand ini.');

        $brand->delete();
        return redirect()->back()->with('message', 'Brand ' . $brand->nama . ' barhasil dihapus');
    }
}
