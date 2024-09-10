<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: gray;
            font-size: 9px;
            width: 210mm;
            height: 297mm;
            background-color: white;
        }

        body,
        .paper {
            overflow: hidden;
        }

        .page-break {
            page-break-before: always;
        }

        table {
            page-break-inside: avoid;
        }

        .table-sm tr td {
            padding: 0;
        }

        .d-flex {
            display: flex;
        }

        .w-20 {
            width: 20%;
        }

        .w-50 {
            width: 50%;
        }

        .w-100 {
            width: 100%;
        }

        .table-bordered {
            border-collapse: collapse;
            width: 100%;
        }

        .table,
        .table th,
        .table td {
            border: 1px solid black;
        }

        .table-borderless,
        .table-borderless th,
        .table-borderless td {
            border-collapse: collapse;
            border: 0px;
        }

        .text-center {
            text-align: center;
        }

        .fw-bold {
            font-weight: bold;
        }

        .ms-2 {
            margin-left: 0.5rem;
        }

        .mt-2 {
            margin-top: 0.5rem;
        }

        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

        th,
        td {
            padding: 5px;
        }
    </style>
</head>

<body>
    <div class="paper">
        <div class="clearfix">
            <div class="logo w-20" style="float:left; margin-right:20px">
                <img src="round_logo_pins.png" class="w-100" />
            </div>
            <div class=" ms-2">
                <h2 class="fw-bold m-0" style="font-size: 16px;">PT PINS Indonesia</h2>
                <p class="m-0">The Telkom Hub, Tower II lt.42 Jl. Jendral Gatot Subroto Kav. 52, Jakarta Selatan 12710</p>
                <div class="clearfix">
                    <div style="float: left; width:30%">
                        <table class="table table-borderless table-sm" style="width: 100%;">
                            <tr>
                                <td>Sales Person</td>
                                <td>:</td>
                                <td>{{$user->name}}</td>
                            </tr>
                            <tr>
                                <td>Telepon</td>
                                <td>:</td>
                                <td>{{$user->phone}}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>{{$user->email}}</td>
                            </tr>
                            <tr>
                                <td>Instansi</td>
                                <td>:</td>
                                <td>{{$order->kepada}}</td>
                            </tr>
                            <tr>
                                <td>Nama PIC</td>
                                <td>:</td>
                                <td>{{$order->nama_pic}}</td>
                            </tr>
                            <tr>
                                <td>No Telp PIC</td>
                                <td>:</td>
                                <td>{{$order->no_telpon}}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td>{{$order->alamat}}</td>
                            </tr>
                        </table>
                    </div>
                    <div style="float: right;width:30%; margin-right:80px">
                        <table class="table table-borderless table-sm" style="width: 100%;">
                            <tr>
                                <td>Nomor SPH</td>
                                <td>:</td>
                                <td>{{$order->code}}</td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td>:</td>
                                <td>{{$today}}</td>
                            </tr>
                            <tr>
                                <td style="visibility: hidden;">tes</td>
                            </tr>
                            <tr>
                                <td style="visibility: hidden;">tes</td>
                            </tr>
                            <tr>
                                <td style="visibility: hidden;">tes</td>
                            </tr>
                            <tr>
                                <td style="visibility: hidden;">tes</td>
                            </tr>
                            <tr>
                                <td style="visibility: hidden;">tes</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="fw-bold text-center" style="font-size: 16px;">Surat Penawaran Harga</h2>

        <table class="table table-bordered text-center" style="width: 80%;">
            <tr>
                <th>No</th>
                <th>Deskripsi</th>
                <th>Harga Tayang</th>
                <th>Qty</th>
                <th>Total Harga</th>
                <th>Link Pembelian Product</th>
            </tr>
            <?php
            $total_qty = 0;
            $total_harga = 0;
            ?>
            @foreach($order->items as $key => $barang)
            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$barang->deskripsi}}</td>
                <td style="min-width: 90px;">Rp {{ number_format($barang->harga, 2, '.', ',') }}</td>
                <td>{{$barang->pivot->qty}}</td>
                <td style="min-width: 90px;">{{ number_format($barang->pivot->qty * $barang->harga, 2, '.', ',')}}</td>
                <td style="max-width:150px;word-wrap: break-word;">{{ $barang->web_marketplace }}</td>
            </tr>
            <?php
            $total_qty += $barang->pivot->qty;
            $total_harga += $barang->harga;
            ?>
            @endforeach
            <tr>
                <td colspan="2"> </td>
                <td class="fw-bold">Total</td>
                <td>{{$total_qty}}</td>
                <td>{{ number_format($total_harga, 2, '.', ',') }}</td>
                <td></td>
            </tr>
        </table>

        <p class="fw-bold m-0">Keterangan:</p>

        <ul>
            <li>Harga termasuk PPN 11%</li>
            <li>Harga FOB Jakarta</li>
            <li>Mohon Konfirmasi kembali untuk ketersediaan stok</li>
            <li>Harga SPH dapat berubah sewaktu-waktu</li>
            <li>SPH ini tidak memerlukan tandatangan</li>
        </ul>
        <div style="text-align: right; margin-top: 20px; margin-right: 150px">
            <img src="{{$qrCode}}" style="width: 100px;" />
        </div>
    </div>
</body>

</html>