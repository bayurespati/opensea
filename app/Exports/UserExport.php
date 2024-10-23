<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromCollection;

class UserExport implements FromCollection, WithHeadings, WithTitle, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return User::all();
    }

    public function map($data): array
    {
        return [
            "nama"  => $data->name,
            "email" => $data->email,
            "phone" => $data->phone,
            "area"  => $data->area,
            "witel" => $data->witel,
            "tanggal_daftar" => $data->created_at,
        ];
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'Nama',
            'Email',
            'Telpon',
            'Area',
            'witel',
            'Tanggal Daftar',
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
