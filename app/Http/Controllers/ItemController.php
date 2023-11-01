<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItemRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateItemRequest;
use App\Models\Brand;
use App\Models\Item;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::all();
        return view('admin.item.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $brands = Brand::all();
        return view('admin.item.create', ['brands' => $brands]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreItemRequest $request)
    {

        $model = new Item();
        if ($request->image != null)
            $model->image = $this->store_image($request);
        $model->type_notebook = $request->type_notebook;
        $model->brand_id = $request->brand_id;
        $model->processor_onboard = $request->processor_onboard;
        $model->standard_memory = $request->standard_memory;
        $model->video_type = $request->video_type;
        $model->display_size = $request->display_size;
        $model->display_technology = $request->display_technology;
        $model->speakers_type = $request->speakers_type;
        $model->microphone_type = $request->microphone_type;
        $model->webcam_type = $request->webcam_type;
        $model->hard_drive_type = $request->hard_drive_type;
        $model->internal_wireless_network_type = $request->internal_wireless_network_type;
        $model->wireless_network_protocol = $request->wireless_network_protocol;
        $model->internal_bluetooth = $request->internal_bluetooth;
        $model->keyboard_type = $request->keyboard_type;
        $model->input_device_mouse_type = $request->input_device_mouse_type;
        $model->interface_provided = $request->interface_provided;
        $model->operating_system = $request->operating_system;
        $model->battery_type = $request->battery_type;
        $model->power_supply = $request->power_supply;
        $model->weight = $request->weight;
        $model->dimensi = $request->dimensi;
        $model->bundled_peripherals = $request->bundled_perpherals;
        $model->warranty = $request->warranty;
        $model->price = $request->price;
        $model->embed = $request->embed;
        $model->description = $request->description;
        $model->save();

        return redirect('/admin/item');
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        $brands = Brand::all();
        return view('admin.item.edit', ["item" => $item, "brands" => $brands]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItemRequest $request, Item $item)
    {
        if ($request->image != null)
            $item->image = $this->store_image($request);

        $item->type_notebook = $request->type_notebook;
        $item->brand_id = $request->brand_id;
        $item->processor_onboard = $request->processor_onboard;
        $item->standard_memory = $request->standard_memory;
        $item->video_type = $request->video_type;
        $item->display_size = $request->display_size;
        $item->display_technology = $request->display_technology;
        $item->speakers_type = $request->speakers_type;
        $item->microphone_type = $request->microphone_type;
        $item->webcam_type = $request->webcam_type;
        $item->hard_drive_type = $request->hard_drive_type;
        $item->internal_wireless_network_type = $request->internal_wireless_network_type;
        $item->wireless_network_protocol = $request->wireless_network_protocol;
        $item->internal_bluetooth = $request->internal_bluetooth;
        $item->keyboard_type = $request->keyboard_type;
        $item->input_device_mouse_type = $request->input_device_mouse_type;
        $item->interface_provided = $request->interface_provided;
        $item->operating_system = $request->operating_system;
        $item->battery_type = $request->battery_type;
        $item->power_supply = $request->power_supply;
        $item->weight = $request->weight;
        $item->dimensi = $request->dimensi;
        $item->bundled_peripherals = $request->bundled_perpherals;
        $item->warranty = $request->warranty;
        $item->price = $request->price;
        $item->embed = $request->embed;
        $item->description = $request->description;
        $item->save();

        return redirect('/admin/item');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        //
        $item->delete();
        return redirect('/admin/item');
    }
}
