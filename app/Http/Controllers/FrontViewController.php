<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Divisi;
use App\Models\Faq;
use App\Models\Item;
use App\Models\Subcategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\AssignOp\Div;

class FrontViewController extends Controller
{
    public function home()
    {
        $items = Item::all()->take(10);
        return view('client.home', ['items' => $items]);
    }

    public function faq()
    {
        $faqs = Faq::all();
        return view('client.faq', ['faqs' => $faqs]);
    }

    public function about()
    {
        return view('client.about');
    }

    public function wishlist()
    {
        $user = User::where('id', Auth::user()->id)->with(['items', 'orders.items'])->first();
        return view('client.wishlist', ['user' => $user]);
    }

    public function products()
    {
        $items = Item::with('user')->get();
        $divisi = Divisi::all();
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $brands = Brand::all();
        return view('client.browse_product', [
            'items' => $items,
            'divisi' => $divisi,
            'categories' => $categories,
            'subcategories' => $subcategories,
            'brands' => $brands
        ]);
    }

    public function detail_product(Item $item)
    {
        $item = Item::where('id', $item->id)->with('user')->first();
        return view('client.detail_product', ['item' => $item]);
    }
}
