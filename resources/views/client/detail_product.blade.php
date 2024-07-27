@extends('layouts.main')

@section('content')
<div class="tf-section-2 product-detail">
    <div class="themesflat-container">
        <div class="row">
            <div class="col-md-6">
                <div data-wow-delay="0s" class="wow fadeInLeft tf-card-box style-5">
                    <div class="card-media mb-0">
                        <a href="#">
                            <img src="{{$item->image == null ? '/solid_gray.png' : $item->image}}" alt="">
                        </a>
                    </div>
                    <!-- <h6 class="price gem"><i class="icon-gem"></i></h6> -->
                    <!-- <div class="wishlist-button">10<i class="icon-heart"></i></div> -->
                    <!-- <div class="featured-countdown">
                        <span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
                    </div> -->
                </div>
                <div class="row">
                    <!-- <div class="col-md-4">
                        <div class="tf-card-box style-4">
                            <div class="card-media">
                                <a href="#">
                                    <img src="{{$item->image == null ? '/solid_gray.png' : $item->image}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tf-card-box style-4">
                            <div class="card-media">
                                <a href="#">
                                    <img src="{{$item->image == null ? '/solid_gray.png' : $item->image}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tf-card-box style-4">
                            <div class="card-media">
                                <a href="#">
                                    <img src="{{$item->image == null ? '/solid_gray.png' : $item->image}}" alt="">
                                </a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="col-md-6">
                @if (\Session::has('success'))
                <div class="alert alert-success alert-dismissible">
                    <ul>
                        <li>{!! \Session::get('success') !!}
                            <button type="button" class="close" data-dismiss="alert" style="top: -20px">
                                <span aria-hidden="true" style="top: -20px;">&times;</span>
                            </button>
                        <li>
                    </ul>
                </div>
                @endif
                <div data-wow-delay="0s" class="wow fadeInRight infor-product">
                    <!-- <div class="text">Bagian Dari: Paket Hemat 2023 <span class="icon-tick"><span class="path1"></span><span class="path2"></span></span></div> -->
                    <div class="menu_card">
                        <div class="dropdown">
                            <!-- <div class="icon">
                                <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="icon-link-1"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#"><i class="icon-link"></i>Copy link</a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <h2>{{ $item->nama_produk }}</h2>
                    <div class="meta mb-20">
                        <!-- <div class="meta-item favorites">
                            <i class="icon-heart"></i>10 favorites
                        </div> -->
                    </div>
                </div>
                <div data-wow-delay="0s" class="wow fadeInRight product-item time-sales">
                    <!-- <h6>
                        <i class="icon-clock"></i>
                        Bundling berakhir pada <span>&nbsp;</span>
                        <span style="color: red">
                            30 nobember 2023 jam 14:00
                        </span>
                    </h6> -->
                    <div class="content">
                        <div class="text">Harga saat ini (IDR)</div>
                        <div class="flex justify-between">
                            <p>{{number_format($item->harga, 0, '.', ',')}}</p>
                            <form id="commentform" class="comment-form" action="/wishlist/store" method="POST">
                                @csrf
                                <input type="text" name="item_id" value="{{$item->id}}" hidden>
                                <button type="submit" class="tf-button h50 w216" style="background-color: #e63946 !important">
                                    {{sizeOf($item->user) > 0 ? 'Keluarkan' : 'Masukan' }}
                                    Wishlist
                                    <i class="icon-arrow-up-right2"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div data-wow-delay="0s" class="wow fadeInRight product-item description">
                    <h6><i class="icon-description"></i>Deskripsi</h6>
                    <i class="icon-keyboard_arrow_down"></i>
                    <div class="content">
                        <p>
                            {{$item->deskripsi}}
                        </p>
                    </div>
                </div>
                <div data-wow-delay="0s" class="wow fadeInRight product-item description">
                    <h6><i class="icon-description"></i>Keterangan</h6>
                    <i class="icon-keyboard_arrow_down"></i>
                    <div class="content">
                        <p>
                            {{$item->keterangan}}
                        </p>
                    </div>
                </div>
                <div data-wow-delay="0s" class="wow fadeInRight product-item traits">
                    <h6><i class="icon-description"></i>Spesifikasi Teknis</h6>
                    <i class="icon-keyboard_arrow_down"></i>
                    <div class="content">
                        <div class="trait-item">
                            <p>Prosesor</p>
                            <div class="title">{{$item->prosesor}}</div>
                        </div>
                        <div class="trait-item">
                            <p>RAM</p>
                            <div class="title">{{$item->ram}}</div>
                        </div>
                        <div class="trait-item">
                            <p>Storage</p>
                            <div class="title">{{$item->storage}}</div>
                        </div>
                        <div class="trait-item">
                            <p>VGA</p>
                            <div class="title">{{$item->vga}}</div>
                        </div>
                        <div class="trait-item">
                            <p>Sistem Operasi</p>
                            <div class="title">{{$item->sistem_operasi}}</div>
                        </div>
                        <div class="trait-item">
                            <p>Garansi</p>
                            <div class="title">{{$item->garansi}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop