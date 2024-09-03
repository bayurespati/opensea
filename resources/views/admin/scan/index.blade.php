@extends('layouts.admin')

@section('content')
<div class="tf-section-2 product-detail">
    <div class="themesflat-container">
        <div class="row">
            <div data-wow-delay="0s" class="wow fadeInUp col-12">
                <div id="reader" width="600px" style="background: white !important;"></div>
                <div id="showData" style="margin-top: 20px;">

                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    function onScanSuccess(decodedText, decodedResult) {
        $('#result').val(decodedText);
        let id = decodedText;
        html5QrcodeScanner.clear().then(_ => {
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({

                url: "{{ route('admin-order-scan-value') }}",
                type: 'GET',
                data: {
                    _methode: "GET",
                    _token: CSRF_TOKEN,
                    qr_code: id
                },
                success: function(response) {
                    let formattedPrice = response.data.total_price.toLocaleString('en-US', {
                        minimumFractionDigits: 2,
                        maximumFractionDigits: 2
                    });
                    if (response.status == 200) {
                        var htmlContent = `
                        <div class="wrap-content w-full">
                            <div class="flex gap30">
                                <fieldset class="properties">
                                    <label>Kode</label>
                                    <input value="` + response.data.code + `" type="text" tabindex="2" value="" aria-required="true" disabled>
                                </fieldset>
                                <fieldset class="properties">
                                    <label>Total Price</label>
                                    <input value="` + formattedPrice + `" type="text" tabindex="2" value="" aria-required="true" disabled>
                                </fieldset>
                            </div>

                            <fieldset class="name">
                                <label>Status *</label>
                                <input value="` + response.data.status + `" type="text" tabindex="2" value="" aria-required="true" disabled>
                            </fieldset>

                            <div class="btn-submit flex gap30 justify-center">
                                <button class="tf-button style-1 h50 active">
                                    <a href="/admin/order/edit/` + response.data.id + `" style="color: black">
                                       Detail 
                                    </a>
                                </button>
                            </div>
                        </div>
                            `;

                        // Insert the HTML content into the #showData div
                        $('#showData').html(htmlContent);
                    } else {
                        var htmlContent = `
                        <div class="wrap-content w-full">
                            <p>Data Tidak ditemukan</p>
                        </div>
                            `;

                        // Insert the HTML content into the #showData div
                        $('#showData').html(htmlContent);
                    }
                },
                complete: function() {
                    // Re-enable the scanner after the AJAX call is complete
                    html5QrcodeScanner.render(onScanSuccess);
                }
            });
        }).catch(error => {
            alert('something wrong');
        });
    }

    function onScanFailure(error) {
        // handle scan failure, usually better to ignore and keep scanning.
        // for example:
        // console.warn(`Code scan error = ${error}`);
    }

    let html5QrcodeScanner = new Html5QrcodeScanner(
        "reader", {
            fps: 10,
            qrbox: {
                width: 250,
                height: 250
            }
        },
        /* verbose= */
        false);
    html5QrcodeScanner.render(onScanSuccess);
</script>
@stop