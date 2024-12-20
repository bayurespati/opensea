<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Diskon;
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
        $new_items = Item::active()->orderBy('created_at', 'desc')->take(8)->get();
        $featured_items = Item::active()->where('is_featured', '=', 1)->get();
        $diskon_items = Item::active()->where('diskon_id', '!=', null)->get();
        $diskons = Diskon::all();
        return view('client.home', [
            'new_items' => $new_items,
            'featured_items' => $featured_items,
            'diskon_items' => $diskon_items,
            'diskons' => $diskons,
        ]);
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
        $user = User::where('id', Auth::user()->id)->with(['wishlists', 'orders' => function ($order) {
            return $order->with(['order_items.item']);
        }])->first();
        return view('client.wishlist', ['user' => $user]);
    }

    public function products()
    {
        $items = Item::active()->with(['user', 'brand'])->get();
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
        $produk = Item::active()->where('id', $item->id)->with(['user', 'images'])->first();
        return view('client.detail_product', ['produk' => $produk]);
    }

    public function changePassword(Item $item)
    {
        $user = Auth::user();
        return view('client.change_password', ['user' => $user]);
    }
}
