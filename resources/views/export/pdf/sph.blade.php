<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Download</title>
</head>
<style>
    table {
        border-left: 0.01em solid #ccc;
        border-right: 0;
        border-top: 0.01em solid #ccc;
        border-bottom: 0;
        border-collapse: collapse;
    }

    table td,
    table th {
        border-left: 0;
        border-right: 0.01em solid #ccc;
        border-top: 0;
        border-bottom: 0.01em solid #ccc;
    }

    #watermark {
        position: fixed;

        bottom: 1cm;
        left: 5cm;

        /** Change image dimensions**/
        width: 20cm;
        height: 18cm;

        /** Your watermark should be behind every content**/
        z-index: -1000;

        opacity: .2;
    }

    table td {
        font-size: 10px !important;
    }

    table th {
        font-size: 12px !important;
    }

    br {
        display: block;
        margin-top: 0px;
        margin-bottom: 0px;
        line-height: 22px;
    }

    right {
        position: absolute;

        right: 0px;
    }
</style>

<body>
    <div style="width: 100%; padding: 10px;">
        <div style="width: 20%; float: left;">
            <img src="logo_pins.png" style="width: 100%; height: auto;" />
        </div>
        <div style="width: 78%; float: right;">
            <h6 style="font-weight: bold; margin: 0;">PINS Indonesia</h6>
            <p style="font-size: 12px; margin: 5px 0;">The Telkom Hub, Tower II lt.42 Jl. Jendral Gatot Subroto Kav. 52, Jakarta Selatan 12710</p>
            <div style="width: 50%; float: left">
                <div style="width: 20%; float: left;">
                    <p style="font-size: 10px; margin-bottom: 5px;">Sales person</p>
                    <p style="font-size: 10px; margin-bottom: 5px;">Telpon</p>
                    <p style="font-size: 10px; margin-bottom: 5px;">Email</p>
                    <p style="font-size: 10px; margin-bottom: 5px;">Instansi</p>
                </div>
                <div style="width: 80%; float: right;">
                    <p style="font-size: 10px; margin-bottom: 5px;">: {{$user->name}}</p>
                    <p style="font-size: 10px; margin-bottom: 5px;">: {{$user->phone}}</p>
                    <p style="font-size: 10px; margin-bottom: 5px;">: {{$user->email}}</p>
                    <p style="font-size: 10px; margin-bottom: 5px;">: Instansi data dari mana?</p>
                </div>
            </div>
            <div style="width: 50%; float: right;">
                <div style="width: 20%; float: left;">
                    <p style="font-size: 10px; margin-bottom: 5px;">No SPH</p>
                    <p style="font-size: 10px; margin-bottom: 5px;">Date</p>
                </div>
                <div style="width: 80%; float: right;">
                    <p style="font-size: 10px; margin-bottom: 5px;">: {{$user->name}}</p>
                    <p style="font-size: 10px; margin-bottom: 5px;">: {{$user->phone}}</p>
                </div>
            </div>
        </div>
    </div>
    <h2 class="text-center" style="margin-top: 220px; margin-left: 200px">SURAT PENAWARAN HARGA</h2>
    <br>
    <br>
    <table class="table">
        <tr>
            <th style="text-align: center; font-size: 8px !important;">No</th>
            <th style="text-align: center; font-size: 8px !important">Deskripsi</th>
            <th style="text-align: center; font-size: 8px !important">Harga Tayang</th>
            <th style="text-align: center; font-size: 8px !important">Qty</th>
            <th style="text-align: center; font-size: 8px !important">Total Harga</th>
            <th style="text-align: center; font-size: 8px !important">Link Pembelian Product</th>
        </tr>
        <tr>
            <td style="text-align: center; font-size: 8px !important; font-weight: lighter !important;">1</td>
            <td style="text-align: center; font-size: 8px !important; font-weight: lighter !important;">MSI PRO AP242 12M - 23.8 INCH LED - INTEL CORE I5 - 8GB - 1TB HDD - 256GB SSD - WINDOWS
                11 HOME - 2 TAHUN GARANSI - BLACK
            </td>
            <td style="text-align: center; font-size: 8px !important; font-weight: lighter !important;">Rp21.429.000</td>
            <td style="text-align: center; font-size: 8px !important; font-weight: lighter !important;">2</td>
            <td style="text-align: center; font-size: 8px !important; font-weight: lighter !important;">42.858.000</td>
            <td style="text-align: center; font-size: 8px !important; font-weight: lighter !important;">https://e- katalog.lkpp.go.id/katalog/produk/detail/305745
                1?lang=id&type=general
            </td>
        </tr>
        <tr>
            <td colspan="3" style="text-align: center; font-size: 8px !important; font-weight: lighter !important;">Total</td>
            <td style="text-align: center; font-size: 8px !important; font-weight: lighter !important;">2</td>
            <td style="text-align: center; font-size: 8px !important; font-weight: lighter !important;">2</td>
            <td></td>
        </tr>
    </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>