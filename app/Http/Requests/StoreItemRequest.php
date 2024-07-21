<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItemRequest extends FormRequest
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
            'nama_produk' => 'required',
            'masa_berlaku_produk' => 'required',
            'satuan' => 'required',
            'jenis_produk' => 'required',
            'nilai_tkdn' => 'required',
            'nilai_bmp' => 'required',
            'deskripsi' => 'required',
            'negara_asal_produk' => 'required',
            'image' => 'required',
            'brand_id' => 'required',
            'divisi_id' => 'required',
            'category_id' => 'required',
            'subcategory_id' => 'required',
        ];
    }
}
