<?php

namespace App\Exports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromCollection;

class OrderExport implements FromCollection, WithHeadings, WithTitle, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Order::whereHas('sph')->with(['user', 'sph'])->get();
    }

    public function map($data): array
    {
        return [
            "nama"  => $data->user->name,
            "kode" => $data->code,
            "jumlah_produk" => $data->total_item,
            "total_harga" => $data->total_price,
        ];
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'Nama',
            'Kode',
            'Jumlah Produk',
            'Total Harga',
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
