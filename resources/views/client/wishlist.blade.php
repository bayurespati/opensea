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
                <div class="product-item offers">
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
                        @foreach($user->items as $key => $item)
                        <div class="table-item">
                            <div class="column" style="width: 10% !important;">{{ $key+1 }}</div>
                            <div class="column">{{$item->type_notebook}}</div>
                            <div class="column">
                                <span class="{{$item->is_ready ? 'color-ready' : 'color-indent'}}">
                                    {{$item->is_ready ? "Ready" : "Indent"}}
                                </span>
                            </div>
                            <div class="column">
                                {{ number_format($item->price, 2, '.', ',') }}
                            </div>
                            <div class="column">
                                <a <?php echo ("href=/wishlist/delete/" . $item->id) ?> class="icon">
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
<style>
    .alert-dismissible .close {
        position: relative;
        top: -2.75rem !important;
        right: -1.25rem;
        padding: 0.75rem 1.25rem;
        color: inherit;
    }
</style>
@stop