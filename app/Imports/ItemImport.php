<?php

namespace App\Imports;

use App\Models\Item;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class ItemImport implements ToModel, WithStartRow
{
    /**
     * @return int
     */
    public function startRow(): int
    {
        return 2;
    }

    /**
     * Model 
     */
    public function model(array $row)
    {
        $item = Item::where('nama_produk', $row[1])->first();
        if ($item)
            return;
        if ($row[0] == null || $row[1] == null)
            return;
        return new Item([
            'divisi_id' => (int) $row[20],
            'brand_id' => (int) $row[19],
            'category_id' => (int) $row[21],
            'subcategory_id' => (int) $row[22],
            'nama_produk' => $row[1],
            'masa_berlaku_produk' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[2]),
            'satuan' => $row[3],
            'jenis_produk' => $row[4],
            'nilai_tkdn' => $row[5],
            'nilai_bmp' => $row[6],
            'deskripsi' => $row[7],
            'negara_asal_produk' => $row[8],
            'harga' => (int) $row[23],
            'type' => $row[9],
            'prosesor' => $row[10],
            'ram' => $row[11],
            'storage' => $row[12],
            'vga' => $row[13],
            'sistem_operasi' => $row[14],
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'garansi' => $row[15],
            'keterangan' => $row[16],
            'web_marketplace' => $row[17],
        ]);
    }
}
