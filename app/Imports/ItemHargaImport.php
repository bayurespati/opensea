<?php

namespace App\Imports;

use App\Models\Item;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class ItemHargaImport implements ToModel, WithStartRow
{
    /**
     * @return int
     */
    public function startRow(): int
    {
        return 2;
    }

    public function model(array $row)
    {
        $item = Item::where('id', $row[0])->first();
        if ($item) {
            $item->harga = (int) $row[2];
            $item->save();
            return $item;
        }
    }
}
