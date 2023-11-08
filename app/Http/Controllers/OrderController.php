<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        return view('admin.order.index', ['orders' => $orders]);
    }

    public function store(Request $request)
    {
        $order = new Order();
        $order->code = uniqid();
        $order->user_id = Auth::user()->id;
        $order->total_item = sizeOf($request->items_id);
        $order->total_price = $request->total_price;
        $order->save();
        $order->items()->attach($request->items_id);

        return response()->json(['data' => $order, 'message' => 'Success store data'], 200);
    }
}
