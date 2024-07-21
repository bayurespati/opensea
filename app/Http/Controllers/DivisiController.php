<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDivisiRequest;
use App\Http\Requests\UpdateDivisiRequest;
use App\Models\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $divisi = Divisi::all();
        return view('admin.divisi.index', ['divisi' => $divisi]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.divisi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDivisiRequest $request)
    {
        $model = new Divisi();
        $model->nama = $request->nama;
        $model->alias = $request->alias;
        $model->save();

        return redirect('/admin/divisi');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Divisi $divisi)
    {
        return view('admin.divisi.edit', ["divisi" => $divisi]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Divisi $divisi)
    {
        $request->validate((new UpdateDivisiRequest())->rules($divisi));
        $divisi->nama = $request->nama;
        $divisi->alias = $request->alias;
        $divisi->save();

        return redirect('/admin/divisi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Divisi $divisi)
    {
        if (sizeOf($divisi->items) > 0)
            return redirect()->back()->with('message', 'Divisi ' . $divisi->nama . ' tidak bisa dihapus masih ada item yang menggunakan divisi ini.');

        $divisi->delete();
        return redirect()->back()->with('message', 'Divisi ' . $divisi->nama . ' barhasil dihapus');
    }
}
