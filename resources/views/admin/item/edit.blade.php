@extends('layouts.admin')

@section('content')
<div class="tf-section-2 product-detail">
    <div class="themesflat-container">
        <div class="row">
            <div data-wow-delay="0s" class="wow fadeInUp col-12">
                <div class="widget-content-inner description">
                    <!-- novalidate="novalidate" -->
                    <form id="commentform" class="comment-form" <?php echo ("action=/admin/item/update/" . $item->id) ?> method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="wrap-content w-full">
                            <fieldset class="name">
                                <label>Type Notebook *</label>
                                <input value="{{ old('type_notebook', $item->type_notebook) }}" type="text" id="type_notebook" placeholder="Type Notebook" name="type_notebook" tabindex="2" value="" aria-required="true" required>
                            </fieldset>

                            <fieldset class="name">
                                <label>Brand *</label>
                                <select id="brand_id" name="brand_id" required>
                                    @foreach($brands as $brand)
                                    <option value="{{$brand->id}}" {{ ($item->brand_id == $brand->id) ? 'selected' : '' }}>{{$brand->nama}}</option>
                                    @endforeach
                                </select>
                            </fieldset>

                            <fieldset class="name">
                                <label>Processor Onboard *</label>
                                <input value="{{ old('processor_onboard', $item->processor_onboard) }}" type="text" id="processor_onboard" placeholder="Processor Onboard" name="processor_onboard" tabindex="2" value="" aria-required="true" required>
                            </fieldset>

                            <fieldset class="name">
                                <label>Standard Memory *</label>
                                <input value="{{ old('standard_memory', $item->standard_memory) }}" type="text" id="standard_memory" placeholder="Standard Memory" name="standard_memory" tabindex="2" value="" aria-required="true" required>
                            </fieldset>

                            <fieldset class="name">
                                <label>Video Type *</label>
                                <input value="{{ old('video_type', $item->video_type) }}" type="text" id="video_type" placeholder="Video Type" name="video_type" tabindex="2" value="" aria-required="true" required>
                            </fieldset>

                            <fieldset class="name">
                                <label>Display Size *</label>
                                <input value="{{ old('display_size', $item->display_size) }}" type="text" id="display_size" placeholder="Display Size" name="display_size" tabindex="2" value="" aria-required="true" required>
                            </fieldset>

                            <fieldset class="name">
                                <label>Display Technology *</label>
                                <input value="{{ old('display_technology', $item->display_technology) }}" type="text" id="display_technology" placeholder="Display Technology" name="display_technology" tabindex="2" value="" aria-required="true" required>
                            </fieldset>

                            <fieldset class="price">
                                <label>Speakers Type *</label>
                                <input value="{{ old('speakers_type', $item->speakers_type) }}" type="text" id="speakers_type" placeholder="Speakers Type" name="speakers_type" tabindex="2" value="" aria-required="true" required>
                            </fieldset>

                            <fieldset class="size">
                                <label>Microphone Type *</label>
                                <input value="{{ old('microphone_type', $item->microphone_type) }}" type="text" id="microphone_type" placeholder="Microphone Type" name="microphone_type" tabindex="2" value="" aria-required="true" required>
                            </fieldset>

                            <fieldset class="properties">
                                <label>Webcam Type *</label>
                                <input value="{{ old('webcam_type', $item->webcam_type) }}" type="text" id="webcam_type" placeholder="Webcam Type" name="webcam_type" tabindex="2" value="" aria-required="true" required="">
                            </fieldset>

                            <fieldset class="properties">
                                <label>Hard Drive Type *</label>
                                <input value="{{ old('hard_drive_type', $item->hard_drive_type) }}" type="text" id="hard_drive_type" placeholder="Hard Drive Type" name="hard_drive_type" tabindex="2" value="" aria-required="true" required="">
                            </fieldset>

                            <fieldset class="properties">
                                <label>Internal Wireless Network Type *</label>
                                <input value="{{ old('internal_wireless_network_type', $item->internal_wireless_network_type) }}" type="text" id="internal_wireless_network_type" placeholder="Internal Wireless Network Type" name="internal_wireless_network_type" tabindex="2" value="" aria-required="true" required="">
                            </fieldset>

                            <fieldset class="properties">
                                <label>Wireless Network Protocol *</label>
                                <input value="{{ old('wireless_network_protocol', $item->wireless_network_protocol) }}" type="text" id="wireless_network_protocol" placeholder="Wireless Network Protocol" name="wireless_network_protocol" tabindex="2" value="" aria-required="true" required="">
                            </fieldset>

                            <fieldset class="properties">
                                <label>Internal Bluetooth *</label>
                                <input value="{{ old('internal_bluetooth', $item->internal_bluetooth) }}" type="text" id="internal_bluetooth" placeholder="Internal Bluetooth" name="internal_bluetooth" tabindex="2" value="" aria-required="true" required="">
                            </fieldset>

                            <fieldset class="properties">
                                <label>Interface Provided *</label>
                                <input value="{{ old('interface_provided', $item->interface_provided) }}" type="text" id="interface_provided" placeholder="Interface Provided" name="interface_provided" tabindex="2" value="" aria-required="true" required>
                            </fieldset>

                            <div class="flex gap30">
                                <fieldset class="price">
                                    <label>Input mouse Type *</label>
                                    <input value="{{ old('input_device_mouse_type', $item->input_device_mouse_type) }}" type="text" id="input_device_mouse_type" placeholder="Input mouse Type" name="input_device_mouse_type" tabindex="2" value="" aria-required="true" required>
                                </fieldset>
                                <fieldset class="properties">
                                    <label>Keyboard Type *</label>
                                    <input value="{{ old('keyboard_type', $item->keyboard_type) }}" type="text" id="keyboard_type" placeholder="Keyboard Type" name="keyboard_type" tabindex="2" value="" aria-required="true" required>
                                </fieldset>
                                <fieldset class="properties">
                                    <label>Operating System *</label>
                                    <input value="{{ old('operating_system', $item->operating_system) }}" type="text" id="operating_system" placeholder="Operating System" name="operating_system" tabindex="2" value="" aria-required="true" required>
                                </fieldset>
                            </div>

                            <fieldset class="properties">
                                <label>Battery Type *</label>
                                <input value="{{ old('battery_type', $item->battery_type) }}" type="text" id="battery_type" placeholder="Battery Type" name="battery_type" tabindex="2" value="" aria-required="true" required>
                            </fieldset>

                            <fieldset class="properties">
                                <label>Power Supply *</label>
                                <input value="{{ old('power_supply', $item->power_supply) }}" type="text" id="power_supply" placeholder="Power Supply" name="power_supply" tabindex="2" value="" aria-required="true" required>
                            </fieldset>

                            <div class="flex gap30">
                                <fieldset class="properties">
                                    <label>Weight *</label>
                                    <input value="{{ old('weight', $item->weight) }}" type="text" id="weight" placeholder="Weight" name="weight" tabindex="2" value="" aria-required="true" required>
                                </fieldset>
                                <fieldset class="properties">
                                    <label>Dimensi *</label>
                                    <input value="{{ old('dimensi', $item->dimensi) }}" type="text" id="dimensi" placeholder="Dimensi" name="dimensi" tabindex="2" value="" aria-required="true" requied>
                                </fieldset>
                            </div>

                            <fieldset class="properties">
                                <label>Warranty *</label>
                                <input value="{{ old('warranty', $item->warranty) }}" type="text" id="warranty" placeholder="Warranty" name="warranty" tabindex="2" value="" aria-required="true" required>
                            </fieldset>

                            <fieldset class="properties">
                                <label>Bundled Peripherals</label>
                                <input value="{{ old('bundled_peripherals', $item->bundled_peripherals) }}" type="text" id="bundled_peripherals" placeholder="Bundled Peripherals" name="bundled_peripherals" tabindex="2" value="" aria-required="true">
                            </fieldset>

                            <fieldset class="price">
                                <label>Price *</label>
                                <input value="{{ old('price', $item->price) }}" type="text" id="price" placeholder="Price" name="price" tabindex="2" value="" aria-required="true" required>
                            </fieldset>

                            <fieldset>
                                <label>Description</label>
                                <textarea name="description" rows="4" placeholder="Description" tabindex="4">{{$item->description}}</textarea>
                            </fieldset>

                            <div class="wrap-upload">
                                <label class="uploadfile h-full">
                                    <div class="text-center">
                                        <h5>Upload file</h5>
                                        <p class="text">Choose your file to upload</p>
                                        <div class="text filename"></div>
                                        <input type="file" class="" name="image" accept="image/png, image/jpeg">
                                    </div>
                                </label>
                            </div>

                            <fieldset class="properties">
                                <label>Embed</label>
                                <textarea name="embed" rows="4" placeholder="Embed Video" tabindex="4">{{$item->embed}}</textarea>
                            </fieldset>

                            <div class="btn-submit flex justify-between">
                                <div></div>
                                <div class="flex gap30 soft-right">
                                    <button class="tf-button style-1 h50 active">
                                        <a href="/admin/item" style="color: black">
                                            Cancle
                                        </a>
                                    </button>
                                    <button class="tf-button style-1 h50" type="submit">Submit item</button>
                                </div>
                            </div>
                            @if (count($errors) > 0)
                            <div class="alert alert-danger" style="margin-top: 10px; padding: 4px">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $("#price").on("keyup", function(event) {
        var selection = window.getSelection().toString();
        if (selection !== '') {
            return;
        }
        // When the arrow keys are pressed, abort.
        if ($.inArray(event.keyCode, [38, 40, 37, 39]) !== -1) {
            return;
        }
        var $this = $(this);
        // Get the value.
        var input = $this.val();
        input = input.replace(/[\D\s\._\-]+/g, "");
        input = input ? parseInt(input, 10) : 0;
        $this.val(function() {
            return (input === 0) ? "" : input.toLocaleString("en-US");
        });
    })
</script>
@stop