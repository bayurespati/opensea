<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDiskonRequest;
use App\Http\Requests\UpdateDiskonRequest;
use App\Models\Diskon;
use Illuminate\Http\Request;

class DiskonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $diskons = Diskon::all();
        return view('admin.diskon.index', ['diskons' => $diskons]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.diskon.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDiskonRequest $request)
    {
        $model = new Diskon();
        $model->nama = $request->nama;
        $model->nilai = $request->nilai;
        $model->save();

        return redirect('/admin/diskon');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Diskon $diskon)
    {
        return view('admin.diskon.edit', ["diskon" => $diskon]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Diskon $diskon)
    {
        $request->validate((new UpdateDiskonRequest())->rules($diskon));
        $diskon->nama = $request->nama;
        $diskon->nilai = $request->nilai;
        $diskon->save();

        return redirect('/admin/diskon');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Diskon $diskon)
    {
        if (sizeOf($diskon->items) > 0)
            return redirect()->back()->with('message', 'Diskon ' . $diskon->nama . ' tidak bisa dihapus masih ada item yang menggunakan diskon ini.');

        $diskon->delete();
        return redirect()->back()->with('message', 'Diskon ' . $diskon->nama . ' barhasil dihapus');
    }
}
