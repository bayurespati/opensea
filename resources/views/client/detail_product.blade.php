@extends('layouts.main')

@section('content')
<div class="tf-section-2 product-detail">
    <div class="themesflat-container">
        <div class="row">
            <div class="col-md-6">
                <div id="imageCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        @foreach($produk->images as $index => $item)
                        <li data-target="#imageCarousel" data-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
                        @endforeach
                    </ol>

                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        @foreach($produk->images as $index => $item)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            <div class="fadeInLeft tf-card-box style-5" style="width: 100%; background: white !important;">
                                <div class="card-media mb-0">
                                    <a href="#">
                                        <img src="{{ $item->url == null ? '/solid_gray.png' : $item->url }}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Controls -->
                    <a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev" style="color: black">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p style="color: #e63946">Links:</p>
                        <br>
                        <div class="flat-accordion2">
                            <div data-wow-delay="0s" class="wow fadeInUp flat-toggle2" style="background: #DEE8E8;">
                                <h6>
                                    <a style="color: #434141" href="https://e-katalog.lkpp.go.id/productsearchcontroller/listproduk?authenticityToken=2f70cfa83593b68c95f1d755105f17dfc1dd96cf&cat=&commodityId=90424&q=&jenis_produk=&pid=258739&mid=&tkdn_produk=-99&sni=-99&btu_id=&gt=&lt=">e-Catalogue</a>
                                </h6>
                            </div>
                        </div>
                        <div class="flat-accordion2">
                            <div data-wow-delay="0s" class="wow fadeInUp flat-toggle2" style="background: #DEE8E8;">
                                <h6>
                                    <a style="color: #434141" href="https://padiumkm.id/store/64ed5a19acfa1ba5c3fa609d">Padi UMKM</a>
                                </h6>
                            </div>
                        </div>
                        <div class="flat-accordion2">
                            <div data-wow-delay="0s" class="wow fadeInUp flat-toggle2" style="background: #DEE8E8;">
                                <h6>
                                    <a style="color: #434141" href="https://siplah.blibli.com/merchant-detail/SPPI-0039?itemPerPage=40&page=0&merchantId=SPPI-0039">SIPLah BliBli</a>
                                </h6>
                            </div>
                        </div>
                        <div class="flat-accordion2">
                            <div data-wow-delay="0s" class="wow fadeInUp flat-toggle2" style="background: #DEE8E8;">
                                <h6>
                                    <a style="color: #434141" href="https://siplah.tokoladang.co.id/official-store/pt-pins-indonesia.46753">SIPLah Toko Ladang</a>
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
                    <h2 style="color: #434141">{{ $produk->nama_produk }}</h2>
                    <div class="meta mb-20">
                    </div>
                </div>
                <div data-wow-delay="0s" class="wow fadeInRight product-item time-sales" style="background: #DEE8E8;">
                    <div class="content">
                        <div class="text" style="color: #434141">Harga saat ini (IDR)</div>
                        <div class="flex justify-between">
                            <p style="color: #434141">{{number_format($produk->harga, 0, '.', ',')}}</p>
                            <form id="commentform" class="comment-form" action="/wishlist/store" method="POST">
                                @csrf
                                <input type="text" name="item_id" value="{{$produk->id}}" hidden>
                                <button type="submit" class="tf-button h50 w216" style="background-color: #e63946 !important">
                                    {{sizeOf($produk->user) > 0 ? 'Keluarkan' : 'Masukan' }}
                                    Keranjang Belanja
                                    <i class="icon-arrow-up-right2"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div data-wow-delay="0s" class="wow fadeInRight product-item description" style="background: #DEE8E8">
                    <h6 style="color: #434141"><i class="icon-description" style="color: #434141"></i>Deskripsi</h6>
                    <i class="icon-keyboard_arrow_down"></i>
                    <div class="content">
                        <p style="color: #434141">
                            {{$produk->deskripsi}}
                        </p>
                    </div>
                </div>
                <div data-wow-delay="0s" class="wow fadeInRight product-item description" style="background: #DEE8E8;">
                    <h6 style="color: #434141"><i class="icon-description"></i>Keterangan</h6>
                    <i class="icon-keyboard_arrow_down"></i>
                    <div class="content">
                        <p style="color: #434141">
                            {{$produk->keterangan}}
                        </p>
                    </div>
                </div>
                @if($produk->subcategory_id == 1 || $produk->subcategory_id == 4 || $produk->subcategory_id == 14 )
                <div data-wow-delay="0s" class="wow fadeInRight product-item traits" style="background: #DEE8E8">
                    <h6 style="color: #434141"><i class="icon-description" style="color: #434141"></i>Spesifikasi Teknis</h6>
                    <i class="icon-keyboard_arrow_down"></i>
                    <div class="content">
                        <div class="trait-item" style="border: 1px solid rgb(90 87 87 / 17%);">
                            <p style="color: #434141">Prosesor</p>
                            <div class="title" style="color: #434141">{{$produk->prosesor}}</div>
                        </div>
                        <div class="trait-item" style="border: 1px solid rgb(90 87 87 / 17%);">
                            <p style="color: #434141">RAM</p>
                            <div class="title" style="color: #434141">{{$produk->ram}}</div>
                        </div>
                        <div class="trait-item" style="border: 1px solid rgb(90 87 87 / 17%);">
                            <p style="color: #434141">Storage</p>
                            <div class="title" style="color: #434141">{{$produk->storage}}</div>
                        </div>
                        <div class="trait-item" style="border: 1px solid rgb(90 87 87 / 17%);">
                            <p style="color: #434141">VGA</p>
                            <div class="title" style="color: #434141">{{$produk->vga}}</div>
                        </div>
                        <div class="trait-item" style="border: 1px solid rgb(90 87 87 / 17%);">
                            <p style="color: #434141">Sistem Operasi</p>
                            <div class="title" style="color: #434141">{{$produk->sistem_operasi}}</div>
                        </div>
                        <div class="trait-item" style="border: 1px solid rgb(90 87 87 / 17%);">
                            <p style="color: #434141">Garansi</p>
                            <div class="title" style="color: #434141">{{$produk->garansi}}</div>
                        </div>
                    </div>
                </div>
                @else
                @endif
                <div data-wow-delay="0s" class="wow fadeInRight product-item traits" style="background: #DEE8E8">
                    <h6 style="color: #434141"><i class="icon-description" style="color: #434141"></i>Spesifikasi Teknis</h6>
                    <i class="icon-keyboard_arrow_down"></i>
                    <div class="content">
                        <div class="trait-item" style="border: 1px solid rgb(90 87 87 / 17%);">
                            <p style="color: #434141">Negara</p>
                            <div class="title" style="color: #434141">{{$produk->negara_asal_produk}}</div>
                        </div>
                        <div class="trait-item" style="border: 1px solid rgb(90 87 87 / 17%);">
                            <p style="color: #434141">Garansi</p>
                            <div class="title" style="color: #434141">{{$produk->garansi}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop