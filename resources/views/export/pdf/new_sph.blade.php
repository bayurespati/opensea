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
                    <div style="float: left; width:55%">
                        <table class="table table-borderless table-sm" style="width: 100%;">
                            <tr>
                                <td style="width:50px">Nomor SPH</td>
                                <td>:</td>
                                <td>{{$order->code}}</td>
                            </tr>
                            <tr>
                                <td style="width:50px">Tanggal</td>
                                <td>:</td>
                                <td>{{$today}}</td>
                            </tr>
                            <tr>
                                <td style="width:50px">Sales Person</td>
                                <td>:</td>
                                <td>{{$user->name}}</td>
                            </tr>
                            <tr>
                                <td style="width:50px">Telepon</td>
                                <td>:</td>
                                <td> {{$user->phone}}</td>
                            </tr>
                            <tr>
                                <td style="width:50px">Email</td>
                                <td>:</td>
                                <td>{{$user->email}}</td>
                            </tr>
                            <tr>
                                <td style="width:50px">Instansi</td>
                                <td>:</td>
                                <td>{{$sph->kepada}}</td>
                            </tr>
                            <tr>
                                <td style="width:50px">Nama PIC</td>
                                <td>:</td>
                                <td>{{$sph->nama_pic}}</td>
                            </tr>
                            <tr>
                                <td style="width:50px">No Telp PIC</td>
                                <td>:</td>
                                <td>{{$sph->no_telpon}}</td>
                            </tr>
                            <tr>
                                <td style="width:50px; vertical-align: top;">Alamat</td>
                                <td style="vertical-align: top;">:</td>
                                <td>{{$sph->alamat}}</td>
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
                <th>Merk</th>
                <th>Tipe</th>
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
            @foreach($order->order_items as $key => $barang)
            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$barang->item->brand->nama}}</td>
                <td>{{$barang->item_nama}}</td>
                <td>{{$barang->item->deskripsi}}</td>
                <td style="min-width: 90px;">Rp {{ number_format($barang->item_harga, 2, '.', ',') }}</td>
                <td>{{$barang->qty}}</td>
                <td style="min-width: 90px;">{{ number_format($barang->qty * $barang->item_harga, 2, '.', ',')}}</td>
                <td style="max-width:150px;word-wrap: break-word;">{{ $barang->item->web_marketplace }}</td>
            </tr>
            <?php
            $total_qty += $barang->qty;
            $total_harga += $barang->item_harga * $barang->qty;
            ?>
            @endforeach
            <tr>
                <td colspan="6" class="fw-bold">Estimasi ongkos kirim </td>
                <td>{{ number_format($sph->ongkir, 2, '.', ',') }}</td>
                <td></td>
            </tr>
            <tr>
                <td colspan="4"> </td>
                <td class="fw-bold">Total</td>
                <td>{{$total_qty}}</td>
                <td>{{ number_format($total_harga+$sph->ongkir, 2, '.', ',') }}</td>
                <td></td>
            </tr>
        </table>

        <p class="fw-bold m-0">Keterangan:</p>

        <ul>
            <li>Harga termasuk PPN 11%</li>
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