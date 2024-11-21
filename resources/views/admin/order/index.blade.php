@extends('layouts.admin')

@section('content')
<div class="tf-section-2 product-detail">
    <div class="themesflat-container">
        <div class="row">
            @if (\Session::has('success'))
            <div class="alert alert-success alert-dismissible">
                <ul>
                    <li>{!! \Session::get('message') !!}</li>
                    <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                </ul>
            </div>
            @endif
            <div data-wow-delay="0s" class="wow fadeInUp col-12">
                <div class="flex gap30" style="margin-bottom: 10px;">
                    <a href="{{ route('admin-order-download') }}">
                        <div class="tf-button style-1 h50 w190">
                            Download Order
                        </div>
                    </a>
                </div>
                <div class="widget-search" style="margin-bottom: 10px;">
                    <form action="{{ route('admin-order-index') }}" method="GET">
                        @csrf
                        <input type="text" id="search-item" placeholder="Search" name="query" tabindex="2" value="" aria-required="true" value="" class="style-1">
                        <button class="search search-submit" title="Search" type="submit"></button>
                    </form>
                </div>
                <div class="product-item offers mt-10">
                    <h6>List Order</h6>
                    <i class="icon-keyboard_arrow_down"></i>
                    <div class="content">
                        <div class="table-heading">
                            <div class="column" style="width: 10% !important;">NO</div>
                            <div class="column">USER</div>
                            <div class="column">KODE</div>
                            <div class="column">JUMLAH PRODUK</div>
                            <div class="column">TOTAL HARGA</div>
                            <div class="column">SPH</div>
                            <div class="column">AKSI</div>
                        </div>
                        @foreach($orders as $key => $order)
                        <div class="table-item">
                            <div class="column" style="width: 10% !important;">{{ $key+1 }}</div>
                            <div class="column">{{$order->user->name}}</div>
                            <div class="column">{{$order->code}}</div>
                            <div class="column">{{$order->total_item}}</div>
                            <div class="column">
                                {{ number_format($order->total_price, 2, '.', ',') }}
                            </div>
                            <div class="column">{{count($order->sph) > 0 ? "Sudah" : "Belum"}}</div>
                            <div class="column">
                                <a <?php echo ("href=/admin/order/edit/" . $order->id) ?> class="icon">
                                    <img src="/assets/icon/custome/edit_white.svg" alt="whatsapp" style="width: 22px;">
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            {{ $orders->links('vendor.pagination.bootstrap-5') }}
        </div>
    </div>
</div>
@stop