<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Requests\UpdateSubCategoryRequest;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcategories = Subcategory::with(['category'])->get();
        return view('admin.subcategory.index', ['subcategories' => $subcategories]);
    }

    /**
     * Display a listing of the resource.
     */
    public function byCategory(Request $request)
    {
        $subcategories = Subcategory::whereIn('category_id', $request->category_id)->get();
        return $subcategories;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.subcategory.create', ["categories" => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubCategoryRequest $request)
    {
        $model = new Subcategory();
        $model->nama = $request->nama;
        $model->alias = $request->alias;
        $model->category_id = $request->category_id;
        $model->save();

        return redirect('/admin/subcategory');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subcategory $subcategory)
    {
        $categories = Category::all();
        return view('admin.subcategory.edit', ["subcategory" => $subcategory, "categories" => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subcategory $subcategory)
    {
        $request->validate((new UpdateSubCategoryRequest())->rules($subcategory));
        $subcategory->nama = $request->nama;
        $subcategory->alias = $request->alias;
        $subcategory->category_id = $request->category_id;
        $subcategory->save();

        return redirect('/admin/subcategory');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subcategory $subcategory)
    {
        if (sizeOf($subcategory->items) > 0)
            return redirect()->back()->with('message', 'Subcategory ' . $subcategory->nama . ' tidak bisa dihapus masih ada item yang menggunakan subcategory ini.');

        $subcategory->delete();
        return redirect()->back()->with('message', 'Subcategory ' . $subcategory->nama . ' barhasil dihapus');
    }
}
