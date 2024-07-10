@extends('layouts.main') @section('content')
<div class="tf-section-2 product-detail">
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
                        <li>Success order item</li>
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                        </button>
                    </ul>
                </div>
                <div class="product-item offers">
                    <h6>List Perangkat</h6>
                    <i class="icon-keyboard_arrow_down"></i>
                    <div class="content">
                        <div class="table-heading">
                            <div class="column" id="header-data" style="width: 10% !important;">Check</div>
                            <div class="column" style="width: 10% !important;">NO</div>
                            <div class="column">PERANGKAT</div>
                            <div class="column">KETERSEDIAAN</div>
                            <div class="column">HARGA</div>
                            <div class="column" style="width: 10% !important;">AKSI</div>
                        </div>
                        @foreach($user->items as $key => $item)
                        <div class="table-item">
                            <div class="column data-row" style="width: 10% !important;">
                                <div class="widget-category-checkbox style-1">
                                    <div class="content-wg-category-checkbox">
                                        <input type="checkbox" class="item-check" value="{{$item->id}}#{{$item->price}}">
                                    </div>
                                </div>
                            </div>
                            <div class="column" style="width: 10% !important;">
                                {{ $key+1 }}
                            </div>
                            <div class="column">{{$item->type_notebook}}</div>
                            <div class="column">
                                <div class="column">
                                    <span class="{{$item->is_ready ? 'color-ready' : 'color-indent'}}">
                                        {{$item->is_ready ? "Ready" : "Indent"}}
                                    </span>
                                </div>
                            </div>
                            <div class="column">
                                {{ number_format($item->price, 2, '.', ',') }}
                            </div>
                            <div class="column" style="width: 10% !important;">
                                <a <?php echo ("href=/wishlist/delete/" . $item->id) ?> class="icon">
                                    <img src="/assets/icon/custome/trash_white.svg" alt="whatsapp" style="width: 22px;">
                                </a>
                            </div>
                        </div>
                        @endforeach
                        <div class="table-item" id="total-item">
                            <div class="column data-row" style="width: 10% !important;"></div>
                            <div class="column" style="width: 10% !important;"> </div>
                            <div class="column">
                            </div>
                            <div class="column text-right" style="margin-top: 15px;">
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
                                <button class="tf-button style-1 h50 active" id="button-cancle" onclick="cancleOrder()">
                                    Cancle
                                </button>
                                <button class="tf-button style-1 h50" id="button-submit" onclick="submitItem()">Submit order</button>
                                <button class="tf-button style-1 h50" id="button-order" onclick="showOrder()">Order item</button>
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
                            <div class="column">ITEM</div>
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
                                @foreach($order->items as $key => $item)
                                <div class="column">
                                    {{$item->type_notebook}}
                                </div>
                                @endforeach
                            </div>
                            <div class="column">
                                {{ number_format($order->total_price, 2, '.', ',') }}
                            </div>
                            <div class="column">{{$order->status}}</div>
                            <div class="column">
                                <a <?php echo ('href="https://wa.me/6281289536383?text=Halo Admin eCatalog PINS Indonesia, saya ingin proses pengadaan perangkat dengan nomor order ' . $order->code . ' atas nama ' . Auth::user()->name . ' dengan total harga ' . $order->total_price . ', terima kasih."') ?> target="_blank" class="tf-button style-101">
                                    Nego
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    let items_id = [];
    let total_price = 0;
    $('.data-row').hide();
    $('#button-cancle').hide();
    $('#button-submit').hide();
    $('#header-data').hide();
    $('#total-item').hide();
    $('#alert-item-order').hide();
    document.getElementById("button-submit").disabled = true;

    $('input.item-check').on('input', function() {
        let value = $(this).val().split("#");
        let id = parseInt(value[0]);
        let price = parseInt(value[1]);

        let index = items_id.indexOf(id);
        if (index == -1) {
            items_id.push(id);
            total_price += price;
        } else {
            items_id.splice(index, 1);
            total_price -= price;
        }
        document.getElementById("show_total_value").value = numberWithCommas(total_price)
        document.getElementById("button-submit").disabled = items_id.length > 0 ? false : true;
    });

    function numberWithCommas(x) {
        x = x.toString();
        var pattern = /(-?\d+)(\d{3})/;
        while (pattern.test(x))
            x = x.replace(pattern, "$1,$2");
        return x;
    }

    function showOrder() {
        $('#button-cancle').show();
        $('#button-submit').show();
        $('#header-data').show();
        $('.data-row').show();
        $('#total-item').show();
        $('#button-order').hide();
    }

    function cancleOrder() {
        items_id = [];
        total_price = 0;
        $('#button-cancle').hide();
        $('#button-submit').hide();
        $('#header-data').hide();
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
                total_price: total_price,
            },
            success: function(response) {
                location.reload();
                cancleOrder();
                $('#alert-item-order').show();
                document.getElementById("button-submit").disabled = false;
            },
            error: function(xhr) {}
        });
    }
</script>
<style>
    .alert-dismissible .close {
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
    }
</style>
@stop