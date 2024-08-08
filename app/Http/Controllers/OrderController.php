<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItems;
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
        foreach ($request->items_id as $key => $data) {
            $order_item = new OrderItems();
            $order_item->order_id = $order->id;
            $order_item->item_id = $data;
            $order_item->qty = $request->items_qty[$key];
            $order_item->save();
        }
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

        $data = Order::where('id', $order->id)->with(['items'])->first();

        return view('admin.order.edit', ["order" => $data, "list_status" => $list_status]);
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
