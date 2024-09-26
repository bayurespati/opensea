<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function store_image($request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        $path = public_path('/images');
        !is_dir($path) &&
            mkdir($path, 0777, true);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move($path, $imageName);

        return "/images/" . $imageName;
    }

    public function getWitel()
    {
        return [
            "ACEH",
            "BEKASI",
            "BANTEN",
            "SUMUT",
            "RIAU",
            "SUMBAR JAMBI",
            "SUMBANGSEL",
            "LAMPUNG BENGKULU",
            "JAKARTA INNER",
            "JAKARTA CENTRUM",
            "JAKARTA OUTER",
            "JATIM TIMUR",
            "JATIM BARAT",
            "BALI",
            "NUSA TENGGARA",
            "SEMARANG JATENG UTARA",
            "YOGYA JATENG SELATAN",
            "SOLO JATENG TIMUR",
            "BALIKPAPAN",
            "KALBAR",
            "KALSELTENG",
            "KALTIMTARA",
            "SULBAGSEL",
            "SULBAGTENG",
            "SUMALUT",
            "PAPUA",
            "PARIANGAN BARAT",
            "PAPUA BARAT"
        ];
    }
}
