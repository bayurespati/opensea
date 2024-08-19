@extends('layouts.admin')

@section('content')
<div class="tf-section-2 product-detail">
    <div class="themesflat-container">
        <div class="row">
            <div data-wow-delay="0s" class="wow fadeInUp col-12">
                @if (\Session::has('success'))
                <div class="alert alert-success alert-dismissible">
                    <ul>
                        <li>
                            {!! \Session::get('success') !!}
                        </li>
                        <li>
                            <div type="" class="close" data-dismiss="alert" style="top: -20px">
                                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                            </div>
                        </li>
                    </ul>
                </div>
                @endif
                <div class="flex gap30" style="margin-bottom: 10px;">
                    <a href="/admin/item/create">
                        <div class="tf-button style-1 h50 w190">
                            Daftarkan Produk
                        </div>
                    </a>
                    <a href="/admin/item/upload-view">
                        <div class="tf-button style-1 h50 w190">
                            Upload Produk
                        </div>
                    </a>
                    <a href="{{ route('admin-item-download') }}">
                        <div class="tf-button style-1 h50 w190">
                            Download Produk
                        </div>
                    </a>
                </div>
                <div class="widget-search" style="margin-bottom: 10px;">
                    <form action="{{ route('admin-item-index') }}" method="GET">
                        @csrf
                        <input type="text" id="search-item" placeholder="Search" name="search" tabindex="2" value="" aria-required="true" value="" class="style-1">
                        <button class="search search-submit" title="Search" type="submit"></button>
                    </form>
                </div>
                <div class="product-item offers mt-10">
                    <h6>List Perangkat</h6>
                    <i class="icon-keyboard_arrow_down"></i>
                    <div class="content">
                        <div class="table-heading">
                            <div class="column" style="width: 10% !important;">NO</div>
                            <div class="column">PERANGKAT</div>
                            <div class="column">BRAND</div>
                            <div class="column">HARGA</div>
                            <div class="column">SHOW</div>
                            <div class="column">DISKON</div>
                            <div class="column">AKSI</div>
                        </div>

                        @foreach($items as $key => $item)
                        <div class="table-item">
                            <div class="column" style="width: 10% !important;">{{ $key+1 }}</div>
                            <div class="column">{{$item->nama_produk}}</div>
                            <div class="column">{{$item->brand->nama}}</div>
                            <div class="column">{{number_format($item->harga, 2, '.', ',')}}</div>
                            <div class="column">{{$item->is_featured == 1 ? "YA" : "TIDAK"}}</div>
                            <div class="column">{{$item->diskon->nilai ?? 0}}</div>
                            <div class="column flex gap30">
                                <a <?php echo ("href=/admin/item/edit/" . $item->id) ?> class="icon">
                                    <img src="/assets/icon/custome/edit_white.svg" alt="whatsapp" style="width: 22px;">
                                </a>
                                <a <?php echo ("href=/admin/item/delete/" . $item->id) ?> class="icon">
                                    <img src="/assets/icon/custome/trash_white.svg" alt="whatsapp" style="width: 22px;">
                                </a>
                                <a <?php echo ("href=/admin/item/upload-image/" . $item->id) ?> class="icon">
                                    <img src="/assets/icon/custome/image_white_1.svg" alt="whatsapp" style="width: 22px;">
                                </a>
                                <a <?php echo ("href=/admin/item/setting/" . $item->id) ?> class="icon">
                                    <img src="/assets/icon/custome/setting_white.svg" alt="whatsapp" style="width: 22px;">
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                {{ $items->links('vendor.pagination.bootstrap-5') }}
            </div>
        </div>
    </div>
</div>
@stop