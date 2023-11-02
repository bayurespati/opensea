<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontViewController extends Controller
{
    public function home()
    {
        return view('client.home');
    }

    public function faq()
    {
        return view('client.faq');
    }

    public function about()
    {
        return view('client.about');
    }

    public function wishlist()
    {
        $user = User::where('id', Auth::user()->id)->with('items')->first();
        return view('client.wishlist', ['user' => $user]);
    }

    public function products()
    {
        $items = Item::with('user')->get();
        return view('client.browse_product', ['items' => $items]);
    }

    public function detail_product(Item $item)
    {
        return view('client.detail_product', ['item' => $item]);
    }
}
