<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItems;
use App\Models\Sph;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf as PDFS;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

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
     * Display a listing of the resource.
     */
    public function scan()
    {
        return view('admin.scan.index');
    }

    /**
     * Display a listing of the resource.
     */
    public function scanValue(Request $request)
    {
        $value = Order::where('code', $request->qr_code)->with('user', 'items')->first();

        if ($value) {
            return response()->json(['data' => $value, 'status' => 200], 200);
        } else {
            return response()->json(['message' => "Data not found", 'status' => 500], 202);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $order = new Order();
        $order->code = $this->generateKey();
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

    public function generateKey()
    {
        // Get the current year
        $year = date('Y');

        // Get the latest record to determine the next number
        $lastRecord = Order::orderBy('id', 'desc')->first();

        // If there are no records, start from 1
        $number = $lastRecord ? $lastRecord->id + 1 : 1;

        // Format the number with leading zeros (e.g., 001)
        $formattedNumber = str_pad($number, 3, '0', STR_PAD_LEFT);

        // Combine to form the key
        $key = "{$formattedNumber}/SPH-EPINS/{$year}";

        return $key;
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

    public function sph(Request $request)
    {
        $user = Auth::user();
        $pdf = PDFS::loadView('export.pdf.sph', ['user' => $user]);
        $pdf->output();
        $pdf->getDomPDF()->getCanvas()->get_cpdf();
        return $pdf->download('sph.pdf');
    }

    public function newSPH(Request $request)
    {
        $user = Auth::user();
        $kepada = $request->kepada;
        $order = Order::where('id', $request->order_id)->with(['items'])->first();
        $order->kepada = $request->kepada;
        $order->save();
        $sph = new Sph();
        $sph->order_id = $order->id;
        $sph->kepada = $order->kepada;
        $sph->save();
        $today = Carbon::now()->locale('id')->translatedFormat('d F Y');
        $file_name = 'qrcodes/transaction_' . $order->id . '.png';
        $value = $order->code;
        Storage::disk('public')->put($file_name, QrCode::format('png')->size(200)->generate($value));
        $pdf = PDFS::loadView('export.pdf.new_sph', ['user' => $user, 'kepada' => $kepada, 'order' => $order, 'today' => $today, 'qrCode' => 'storage/' . $file_name]);
        $pdf->output();
        $pdf->getDomPDF()->getCanvas()->get_cpdf();
        return $pdf->download('sph.pdf');
    }

    public function preview(Request $request)
    {
        $user = Auth::user();
        $kepada = $request->kepada ?? "Bayu Respati";
        $order = Order::where('id', $request->order_id ?? 10)->with(['items'])->first();
        $today = Carbon::now()->locale('id')->translatedFormat('d F Y');
        // $file_name = 'qrcodes/transaction_' . $order->id . '.png';
        // QrCode::format('png')->size(200)->generate($order->id, public_path($file_name));
        return view('export.pdf.new_sph', ['user' => $user, 'kepada' => $kepada, 'order' => $order, 'today' => $today]);
    }
}
