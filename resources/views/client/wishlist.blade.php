@extends('layouts.main')

@section('content')
<div class="page-title faqs">
    <div class="themesflat-container">
        <div class="row">
            <div class="col-12">
                <h1 data-wow-delay="0s" class="wow fadeInUp heading text-center">Keranjang Belanja</h1>
            </div>
        </div>
    </div>
</div>
<div class="tf-section-2 wrap-accordion">
    <div class="themesflat-container">
        <div class="row">
            <div data-wow-delay="0s" class="wow fadeInUp col-12">
                @if (\Session::has('success'))
                <div class="alert alert-success alert-dismissible">
                    <ul>
                        <li>{!! \Session::get('success') !!}</li>
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                        </button>
                    </ul>
                </div>
                @endif
                <div class="alert alert-success alert-dismissible" id="alert-item-order">
                    <ul>
                        <li>Success order produk</li>
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                        </button>
                    </ul>
                </div>
                <div class="product-item offers" style="background: #DEE8E8;">
                    <h6 style="color: #434141">List Perangkat</h6>
                    <i class="icon-keyboard_arrow_down"></i>
                    <div class="content">
                        <div class="table-heading" style="border-bottom: .5px solid #969292;  color: #434141">
                            <div class="column" id="header-data" style="width: 10% !important;">Check</div>
                            <div class="column" style="width: 10% !important;">NO</div>
                            <div class="column">PERANGKAT</div>
                            <div class="column">KETERSEDIAAN</div>
                            <div class="column" id="qty-data">QTY</div>
                            <div class="column">HARGA</div>
                            <div class="column" style="width: 10% !important;">AKSI</div>
                        </div>
                        @foreach($user->wishlists as $key => $item)
                        <div class="table-item">
                            <div class="column data-row" style="width: 10% !important;">
                                <div class="widget-category-checkbox style-1">
                                    <div class="content-wg-category-checkbox">
                                        <input type="checkbox" class="item-check" value="{{$item->id}}#{{$item->harga}}">
                                    </div>
                                </div>
                            </div>
                            <div class="column" style="width: 10% !important; color: #434141">
                                {{ $key+1 }}
                            </div>
                            <div class="column" style="color: #434141">{{$item->nama_produk}}</div>
                            <div class="column">
                                <div class="column">
                                    <span class="{{$item->is_ready ? 'color-ready' : 'color-indent'}}">
                                        {{$item->is_ready ? "Ready" : "Indent"}}
                                    </span>
                                </div>
                            </div>
                            <div class="name qty-data" style="width: 30% !important; color: #434141">
                                <input value="{{$item->id}}#{{$item->harga}}" class="item-qty" type="number" id="{{$item->id}}#{{$item->harga}}" name="quantity" tabindex="2" style="padding: 7px 14px !important">
                            </div>
                            <div class="column" style="color: #434141">
                                {{ number_format($item->harga, 2, '.', ',') }}
                            </div>
                            <div class="column" style="width: 10% !important;">
                                <a <?php echo ("href=/wishlist/delete/" . $item->id) ?> class="icon ">
                                    <img src="/assets/icon/custome/trash_black.svg" alt="whatsapp" style="width: 22px; color: #434141">
                                </a>
                            </div>
                        </div>
                        @endforeach
                        <div class="table-item" id="total-item">
                            <div class="column data-row" style="width: 10% !important;"></div>
                            <div class="column" style="width: 10% !important;"> </div>
                            <div class="column">
                            </div>
                            <div class="column text-right" style="margin-top: 15px; color: #434141">
                                Total:
                            </div>
                            <div class="column">
                                <input type="text" id="show_total_value" value="0">
                            </div>
                            <div class="column" style="width: 10% !important;">
                            </div>
                        </div>

                        <div class="btn-submit flex justify-between">
                            <div></div>
                            <div class="flex gap30 soft-right">
                                <button class="tf-button style-1 h50 active" id="button-cancel" onclick="cancelOrder()">
                                    Cancel
                                </button>
                                <button class="tf-button style-1 h50" id="button-submit" onclick="submitItem()">Submit order</button>
                                <button class="tf-button style-1 h50" id="button-order" onclick="showOrder()">Order Produk</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-item offers">
                    <h6>List Order</h6>
                    <i class="icon-keyboard_arrow_down"></i>
                    <div class="content">
                        <div class="table-heading">
                            <div class="column" style="width: 10% !important;">NO</div>
                            <div class="column">KODE</div>
                            <div class="column">JUMLAH</div>
                            <div class="column">PRODUK</div>
                            <div class="column">QTY</div>
                            <div class="column">TOTAL HARGA</div>
                            <div class="column">STATUS</div>
                            <div class="column">AKSI</div>
                        </div>
                        @foreach($user->orders as $key => $order)
                        <div class="table-item">
                            <div class="column" style="width: 10% !important">{{ $key+1 }}</div>
                            <div class="column">{{$order->code}}</div>
                            <div class="column">{{$order->total_item}}</div>
                            <div class="column">
                                <?php $qty = 0 ?>
                                @foreach($order->order_items as $key => $item)
                                <div class="column">
                                    {{$item->item_nama}}
                                    <?php $qty += $item->qty; ?>
                                </div>
                                @endforeach
                            </div>
                            <div class="column">
                                <?php echo ($qty) ?>
                            </div>
                            <div class="column">
                                {{ number_format($order->total_price, 2, '.', ',') }}
                            </div>
                            <div class="column">{{$order->status}}</div>
                            <div class="column">
                                <a data-toggle="modal" data-target="#popup_bid" class="tf-button style-101" data-order-id="{{ $order->id }}">
                                    SPH
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal content -->
    <div class="modal fade popup" id="popup_bid" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body" style="width: 100%;">
                    <h2>FORM DOWNLOAD SPH</h2>
                    <form id="commentform" class="comment-form" action="/download-new-sph" method="GET">
                        @csrf
                        <input type="text" class="style-1" id="kepada" placeholder="Kepada" name="kepada" tabindex="2" value="" aria-required="true" required="" style="margin-bottom: 15px;">
                        <input type="text" class="style-1" id="nama_pic" placeholder="Nama PIC" name="nama_pic" tabindex="2" value="" aria-required="true" required="" style="margin-bottom: 15px;">
                        <input type="text" class="style-1" id="no_telpon" placeholder="NO Telpon" name="no_telpon" tabindex="2" value="" aria-required="true" required="" style="margin-bottom: 15px;">
                        <textarea class="style-1" id="alamat" placeholder="Alamat" name="alamat" tabindex="2" aria-required="true" required="" style="margin-bottom: 15px;"></textarea>
                        <input id="hiden_order_id" type="text" name="order_id" value="" aria-required="true" hidden>
                        <div style="width: 36%; margin: 0 auto;">
                            <div class="btn-submit">
                                <button class="tf-button style-1 h50" type="submit">Download</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    let items_id = [];
    let items_harga = [];
    let items_qty = [];
    let total_price = 0;
    $('.data-row').hide();
    $('.qty-data').hide();
    $('#button-cancel').hide();
    $('#button-submit').hide();
    $('#header-data').hide();
    $('#qty-data').hide();
    $('#total-item').hide();
    $('#alert-item-order').hide();
    document.getElementById("button-submit").disabled = true;

    document.addEventListener('DOMContentLoaded', function() {
        // Select all the "Nego" buttons
        var negoButtons = document.querySelectorAll('.tf-button.style-101');

        negoButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                // Get the order ID from the clicked button
                var orderId = this.getAttribute('data-order-id');

                // Set the order ID in the hidden input field
                document.getElementById('hiden_order_id').value = orderId;
            });
        });
    });

    $('input.item-check').on('input', function() {
        let temp_id = $(this).val();
        let value = $(this).val().split("#");
        let id = parseInt(value[0]);
        let price = parseInt(value[1]);

        let index = items_id.indexOf(id);
        if (index == -1) {
            document.getElementById(temp_id).value = 1;
            items_id.push(id);
            items_harga.push(price);
            items_qty.push(1);
        } else {
            document.getElementById(temp_id).value = 0;
            items_id.splice(index, 1);
            items_harga.splice(index, 1);
            items_qty.splice(index, 1);
        }
        total_price = getTotalPrice();
        document.getElementById("show_total_value").value = numberWithCommas(total_price)
        document.getElementById("button-submit").disabled = items_id.length > 0 ? false : true;
    });

    function getTotalPrice() {
        let harga = 0;
        for (let i = 0; i < items_harga.length; i++) {
            harga += items_harga[i] * items_qty[i];
        }
        return harga;
    }

    $('input.item-qty').on('input', function() {
        let attribute = this.attributes.id.nodeValue.split("#");
        let value = $(this).val()
        let id = parseInt(attribute[0]);
        let price = parseInt(attribute[1]);
        let index = items_id.indexOf(id);
        if (index != -1) {
            items_qty[index] = parseInt(value);
            total_price = getTotalPrice();
            document.getElementById("show_total_value").value = numberWithCommas(total_price)
        }
    });

    function numberWithCommas(x) {
        x = x.toString();
        var pattern = /(-?\d+)(\d{3})/;
        while (pattern.test(x))
            x = x.replace(pattern, "$1,$2");
        return x;
    }

    function showOrder() {
        $('#button-cancel').show();
        $('#button-submit').show();
        $('#header-data').show();
        $('#qty-data').show();
        $('.data-row').show();
        $('.qty-data').show();
        $('#total-item').show();
        $('#button-order').hide();
    }

    function cancelOrder() {
        items_id = [];
        total_price = 0;
        $('#button-cancel').hide();
        $('#button-submit').hide();
        $('#header-data').hide();
        $('#qty-data').hide();
        $('.qty-data').hide();
        $('.data-row').hide();
        $('#total-item').hide();
        $('#button-order').show();
        $('input[type="radio"]').prop('checked', false);
        $('input[type="checkbox"]').prop('checked', false);
    }

    function submitItem() {
        document.getElementById("button-submit").disabled = true;
        $.ajax({
            url: "/order",
            type: "post",
            data: {
                "_token": "{{ csrf_token() }}",
                items_id: items_id,
                items_qty: items_qty,
                total_price: total_price,
            },
            success: function(response) {
                location.reload();
                cancelOrder();
                $('#alert-item-order').show();
                document.getElementById("button-submit").disabled = false;
            },
            error: function(xhr) {}
        });
    }
</script>
<style>
    /* .alert-dismissible .close {
        position: relative;
        top: -2.75rem !important;
        right: -1.25rem;
        padding: 0.75rem 1.25rem;
        color: inherit;
    }

    .tf-button.style-101 {
        width: 100px;
        height: 44px;
        gap: 10px;
        flex-shrink: 0;
        background-color: #e63946;
    } */
</style>
@stop