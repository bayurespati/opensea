<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Requests\UpdateSubCategoryRequest;
use App\Models\Subcategory;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcategories = Subcategory::all();
        return view('admin.subcategory.index', ['subcategories' => $subcategories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.subcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubCategoryRequest $request)
    {
        $model = new Subcategory();
        $model->nama = $request->nama;
        $model->alias = $request->alias;
        $model->save();

        return redirect('/admin/subcategory');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subcategory $subcategory)
    {
        return view('admin.subcategory.edit', ["subcategory" => $subcategory]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Subcategory $subcategory)
    {
        $subcategory->nama = $request->nama;
        $subcategory->alias = $request->alias;
        $subcategory->save();

        return redirect('/admin/subcategory');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subcategory $subcategory)
    {
        if (sizeOf($subcategory->items) > 0)
            return redirect()->back()->with('message', 'Subcategory ' . $subcategory->nama . ' tidak Bisa dihapus masih ada item yang menggunakan subcategory ini.');

        $subcategory->delete();
        return redirect()->back()->with('message', 'Subcategory' . $subcategory->nama . ' barhasil dihapus');
    }
}
