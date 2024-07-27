<?php

namespace App\Http\Controllers;

use App\Models\ItemImage;
use Illuminate\Http\Request;

class ItemImageController extends Controller
{
    //
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = $this->store_image($request);
        $item_image = new ItemImage;
        $item_image->item_id = $request->item_id;
        $item_image->name = $image;
        $item_image->url = $image;
        $item_image->save();

        return redirect()->back()->with('success', 'Berhasil upload image');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->back()->with('success', 'Berhasil hapus image');
    }
}
