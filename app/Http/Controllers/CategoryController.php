<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use App\Models\Divisi;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::with(['divisi'])->get();
        return view('admin.category.index', ['categories' => $categories]);
    }

    public function byDivisi(Request $request)
    {
        $categories = Category::whereIn('divisi_id', $request->divisi_id)->with(['divisi'])->get();
        return $categories;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $divisi = Divisi::all();
        return view('admin.category.create', ["divisi" => $divisi]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $model = new Category();
        $model->nama = $request->nama;
        $model->alias = $request->alias;
        $model->divisi_id = $request->divisi_id;
        $model->save();

        return redirect('/admin/category');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $divisi = Divisi::all();
        return view('admin.category.edit', ["category" => $category, "divisi" => $divisi]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate((new UpdateCategoryRequest())->rules($category));
        $category->nama = $request->nama;
        $category->alias = $request->alias;
        $category->divisi_id = $request->divisi_id;
        $category->save();

        return redirect('/admin/category');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if (sizeOf($category->items) > 0)
            return redirect()->back()->with('message', 'Category ' . $category->nama . ' tidak bisa dihapus masih ada item yang menggunakan category ini.');

        $category->delete();
        return redirect()->back()->with('message', 'Category ' . $category->nama . ' barhasil dihapus');
    }
}
