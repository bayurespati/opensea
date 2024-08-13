<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\FuncCall;

class WishlistController extends Controller
{
    public function store(Request $request)
    {
        $user_id = Auth::user()->id;
        $wishlist = Wishlist::where('item_id', $request->item_id)->where('user_id', $user_id)->first();
        if ($wishlist) {
            $wishlist->delete();
            return redirect()->back()->with('success', 'Berhasil menghapus produk di dalam keranjang belanja');
        } else {
            $wishlist = new Wishlist();
            $wishlist->user_id = $user_id;
            $wishlist->item_id = $request->item_id;
            $wishlist->save();
            return redirect()->back()->with('success', 'Berhasil dimasukan kedalam keranjang belanja');
        }
    }

    public function delete(Item $item)
    {
        $user_id = Auth::user()->id;
        $wishlist = Wishlist::where('item_id', $item->id)->where('user_id', $user_id)->first();
        $wishlist->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus item wishlist');
    }
}
