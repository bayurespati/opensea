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
        $orders = Order::with('user')->get();
        return view('admin.order.index', ['orders' => $orders]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $order = new Order();
        $order->code = uniqid();
        $order->user_id = Auth::user()->id;
        $order->total_item = sizeOf($request->items_id);
        $order->total_price = $request->total_price;
        $order->status = "Diterima";
        $order->save();
        $order->items()->attach($request->items_id);

        return response()->json(['data' => $order, 'message' => 'Success store data'], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        $list_status = [
            'Diterima',
            'Diproses',
            'Dalam perjalanan',
            'Dibatalkan',
            'Selesai'
        ];

        return view('admin.order.edit', ["order" => $order, "list_status" => $list_status]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $order->status = $request->status;
        $order->save();

        return redirect('/admin/order')->with('message', 'Order dengan kode ' . $order->code . ' barhasil diupdate');
    }
}
