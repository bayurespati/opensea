<?php

namespace App\Exports;

use App\Models\Item;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithMapping;

class ItemExport implements FromCollection, WithHeadings, WithTitle, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Item::active()->with(['lini', 'brand', 'category', 'subcategory'])->get();
    }

    public function map($data): array
    {
        return [
            "id" => $data->id,
            "nama" => $data->nama_produk,
            "lini" => $data->lini->nama,
            "brand" => $data->brand->nama,
            "categori" => $data->category->nama,
            "subcategori" => $data->subcategory->nama,
            "harga" => $data->harga,
            "satuan" => $data->satuan,
            "jenis_produk" => $data->jenis_produk,
            "negara_asal_produk" => $data->negara_asal_produk,
            "tipe" => $data->type,
            "deskripsi" => $data->deskripsi,
            "keterangan" => $data->keterangan,
            "garansi" => $data->garansi,
            "quantity" => $data->quantity,
            "prosesor" => $data->prosesor,
            "ram" => $data->ram,
            "storage" => $data->storage,
            "vga" => $data->vga,
            "sistem_operasi" => $data->sistem_operasi,
        ];
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'ID',
            'Nama',
            'Lini',
            'Brand',
            'Categori',
            'Subcategori',
            'Harga',
            'Satuan',
            'Jenis Produk',
            'Negara Asal Produk',
            'Tipe',
            'Deskripsi',
            'Keterangan',
            'garansi',
            'quanitity',
            'prosesor',
            'ram',
            'storage',
            'vga',
            'sistem_operasi',
        ];
    }

    /**
     * @return string
     */
    public function title(): string
    {
        return 'Sheet 1';
    }
}
