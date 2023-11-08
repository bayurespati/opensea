@extends('layouts.admin')

@section('content')
<div class="tf-section-2 product-detail">
    <div class="themesflat-container">
        <div class="row">
            <div data-wow-delay="0s" class="wow fadeInUp col-12">
                <div class="product-item offers mt-10">
                    <h6>List Order</h6>
                    <i class="icon-keyboard_arrow_down"></i>
                    <div class="content">
                        <div class="table-heading">
                            <div class="column" style="width: 10% !important;">NO</div>
                            <div class="column">KODE</div>
                            <div class="column">JUMLAH ITEM</div>
                            <div class="column">TOTAL HARGA</div>
                        </div>
                        @foreach($orders as $key => $order)
                        <div class="table-item">
                            <div class="column" style="width: 10% !important;">{{ $key+1 }}</div>
                            <div class="column">{{$order->code}}</div>
                            <div class="column">{{$order->total_item}}</div>
                            <div class="column">
                                {{ number_format($order->total_price, 2, '.', ',') }}
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop