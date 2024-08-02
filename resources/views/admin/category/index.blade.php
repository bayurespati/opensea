@extends('layouts.admin')

@section('content')
<div class="tf-section-2 product-detail">
    <div class="themesflat-container">
        <div class="row">
            <div data-wow-delay="0s" class="wow fadeInUp col-12">
                @if (\Session::has('message'))
                <div class="alert alert-success alert-dismissible">
                    <ul>
                        <li>{!! \Session::get('message') !!}</li>
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                        </button>
                    </ul>
                </div>
                @endif
                <div class="tf-button style-1 h50 w190">
                    <a href="/admin/category/create">
                        Daftarkan Category
                    </a>
                </div>
                <div class="product-item offers mt-10">
                    <h6>List Category</h6>
                    <i class="icon-keyboard_arrow_down"></i>
                    <div class="content">
                        <div class="table-heading">
                            <div class="column" style="width: 10% !important;">NO</div>
                            <div class="column" style="width: 40% !important;">NAMA</div>
                            <div class="column" style="width: 40% !important;">Lini Produk</div>
                            <div class="column" style="width: 10% !important;">AKSI</div>
                        </div>

                        @foreach($categories as $key => $category)
                        <div class="table-item">
                            <div class="column" style="width: 10% !important;">{{ $key+1 }}</div>
                            <div class="column" style="width: 40% !important;">{{$category->nama}}</div>
                            <div class="column" style="width: 40% !important;">{{$category->divisi->nama}}</div>
                            <div class="column flex gap30" style="width: 10% !important;">
                                <a <?php echo ("href=/admin/category/edit/" . $category->id) ?> class="icon">
                                    <img src="/assets/icon/custome/edit_white.svg" alt="whatsapp" style="width: 22px;">
                                </a>
                                <a <?php echo ("href=/admin/category/delete/" . $category->id) ?> class="icon">
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