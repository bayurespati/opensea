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
                    <div class="col-md-12">
                        <p style="color: #e63946">Links:</p>
                        <br>
                        <div class="flat-accordion2">
                            <div data-wow-delay="0s" class="wow fadeInUp flat-toggle2">
                                <h6>
                                    <a href="https://padiumkm.id/store/64ed5a19acfa1ba5c3fa609d">Padi UMKM</a>
                                </h6>
                            </div>
                        </div>
                        <div class="flat-accordion2">
                            <div data-wow-delay="0s" class="wow fadeInUp flat-toggle2">
                                <h6>
                                    <a href="https://siplah.tokoladang.co.id/official-store/pt-pins-indonesia.46753">SIPLah Toko Ladang</a>
                                </h6>
                            </div>
                        </div>
                        <div class="flat-accordion2">
                            <div data-wow-delay="0s" class="wow fadeInUp flat-toggle2">
                                <h6>
                                    <a href="https://e-katalog.lkpp.go.id/productsearchcontroller/listproduk?authenticityToken=2f70cfa83593b68c95f1d755105f17dfc1dd96cf&cat=&commodityId=90424&q=&jenis_produk=&pid=258739&mid=&tkdn_produk=-99&sni=-99&btu_id=&gt=&lt=">e-Catalogue</a>
                                </h6>
                            </div>
                        </div>
                        <div class="flat-accordion2">
                            <div data-wow-delay="0s" class="wow fadeInUp flat-toggle2">
                                <h6>
                                    <a href="https://siplah.blibli.com/merchant-detail/SPPI-0039?itemPerPage=40&page=0&merchantId=SPPI-0039">BliBli SIPLah</a>
                                </h6>
                            </div>
                        </div>
                        <div class="flat-accordion2">
                            <div data-wow-delay="0s" class="wow fadeInUp flat-toggle2">
                                <h6>
                                    <a href="https://siplahtelkom.com/store/2137-pins-indonesia">SIPLah Telkom</a>
                                </h6>
                            </div>
                        </div>
                    </div>
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
                    <div class="menu_card">
                        <div class="dropdown">
                        </div>
                    </div>
                    <h2>{{ $item->nama_produk }}</h2>
                    <div class="meta mb-20">
                    </div>
                </div>
                <div data-wow-delay="0s" class="wow fadeInRight product-item time-sales">
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
                @if($item->subcategory_id == 1 || $item->subcategory_id == 4 || $item->subcategory_id == 14 )
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
                @endif
            </div>
        </div>
    </div>
</div>
@stop