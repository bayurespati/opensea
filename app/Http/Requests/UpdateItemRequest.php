<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateItemRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'type_notebook' => 'required',
            'processor_onboard' => 'required',
            'standard_memory' => 'required',
            'video_type' => 'required',
            'display_size' => 'required',
            'display_technology' => 'required',
            'speakers_type' => 'required',
            'microphone_type' => 'required',
            'webcam_type' => 'required',
            'hard_drive_type' => 'required',
            'internal_wireless_network_type' => 'required',
            'wireless_network_protocol' => 'required',
            'internal_bluetooth' => 'required',
            'keyboard_type' => 'required',
            'input_device_mouse_type' => 'required',
            'interface_provided' => 'required',
            'operating_system' => 'required',
            'battery_type' => 'required',
            'power_supply' => 'required',
            'weight' => 'required',
            'dimensi' => 'required',
            'warranty' => 'required',
            'price' => 'required'
        ];
    }
}
