<?php

namespace App\Exports;

use App\Models\Item;
use App\Models\UserLogin;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromCollection;

class UserLogExport implements FromCollection, WithHeadings, WithTitle, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return UserLogin::with(['user'])->get();
    }

    public function map($data): array
    {
        return [
            "nama" => $data->user->name,
            "tanggal_login" => $data->logged_in_at,
        ];
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'Nama',
            'Tanggal',
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
