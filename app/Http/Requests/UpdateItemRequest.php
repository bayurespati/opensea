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
    public function rules($model): array
    {
        return [
            'nama_produk' => 'required|unique:items,nama_produk,' . $model->id,
            'masa_berlaku_produk' => 'required',
            'satuan' => 'required',
            'jenis_produk' => 'required',
            'deskripsi' => 'required',
            'negara_asal_produk' => 'required',
            'brand_id' => 'required',
            'divisi_id' => 'required',
            'category_id' => 'required',
            'subcategory_id' => 'required',
        ];
    }
}
