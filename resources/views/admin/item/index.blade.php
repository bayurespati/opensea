@extends('layouts.admin')

@section('content')
<div class="tf-section-2 product-detail">
    <div class="themesflat-container">
        <div class="row">
            <div data-wow-delay="0s" class="wow fadeInUp col-12">
                <div class="tf-button style-1 h50 w190">
                    <a href="/admin/item/create">
                        Daftarkan Perangkat
                    </a>
                </div>
                <div class="product-item offers mt-10">
                    <h6>List Perangkat</h6>
                    <i class="icon-keyboard_arrow_down"></i>
                    <div class="content">
                        <div class="table-heading">
                            <div class="column" style="width: 10% !important;">NO</div>
                            <div class="column">PERANGKAT</div>
                            <div class="column">KETERSEDIAAN</div>
                            <div class="column">HARGA</div>
                            <div class="column">AKSI</div>
                        </div>

                        @foreach($items as $key => $item)
                        <div class="table-item">
                            <div class="column" style="width: 10% !important;">{{ $key+1 }}</div>
                            <div class="column">{{$item->type_notebook}}</div>
                            <div class="column">{{$item->is_ready ? "Ready" : "Indent"}}</div>
                            <div class="column">{{ number_format($item->price, 2, '.', ',') }}</div>
                            <div class="column flex gap30">
                                <a <?php echo ("href=/admin/item/edit/" . $item->id) ?> class="icon">
                                    <img src="/assets/icon/custome/edit_white.svg" alt="whatsapp" style="width: 22px;">
                                </a>
                                <a <?php echo ("href=/admin/item/delete/" . $item->id) ?> class="icon">
                                    <img src="/assets/icon/custome/trash_white.svg" alt="whatsapp" style="width: 22px;">
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
@stop