@extends('layouts.main')

@section('content')
<div class="tf-section-2 product-detail">
    <div class="themesflat-container">
        <div class="row">
            <div class="col-md-6">
                <div data-wow-delay="0s" class="wow fadeInLeft tf-card-box style-5">
                    <div class="card-media mb-0">
                        <a href="#">
                            <img src="assets/images/box-item/product-01.jpg" alt="">
                        </a>
                    </div>
                    <h6 class="price gem"><i class="icon-gem"></i></h6>
                    <div class="wishlist-button">10<i class="icon-heart"></i></div>
                    <div class="featured-countdown">
                        <span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="tf-card-box style-4">
                            <div class="card-media">
                                <a href="#">
                                    <img src="assets/images/box-item/card-item-49.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tf-card-box style-4">
                            <div class="card-media">
                                <a href="#">
                                    <img src="assets/images/box-item/card-item-49.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="tf-card-box style-4">
                            <div class="card-media">
                                <a href="#">
                                    <img src="assets/images/box-item/card-item-49.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div data-wow-delay="0s" class="wow fadeInRight infor-product">
                    <div class="text">Bagian Dari: Paket Hemat 2023 <span class="icon-tick"><span class="path1"></span><span class="path2"></span></span></div>
                    <div class="menu_card">
                        <div class="dropdown">
                            <div class="icon">
                                <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="icon-link-1"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#"><i class="icon-link"></i>Copy link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2>ROG STRIX G16 (2023)</h2>
                    <div class="meta mb-20">
                        <div class="meta-item view">
                            <i class="icon-show"></i>208 view
                        </div>
                        <div class="meta-item rating">
                            <i class="icon-link-2"></i>Top #2 trending
                        </div>
                        <div class="meta-item favorites">
                            <i class="icon-heart"></i>10 favorites
                        </div>
                    </div>
                </div>
                <div data-wow-delay="0s" class="wow fadeInRight product-item time-sales">
                    <h6>
                        <i class="icon-clock"></i>
                        Bundling berakhir pada <span>&nbsp;</span>
                        <span style="color: red">
                            30 nobember 2023 jam 14:00
                        </span>
                    </h6>
                    <div class="content">
                        <div class="text">Harga saat ini (IDR)</div>
                        <div class="flex justify-between">
                            <p>25.000.000</p>
                            <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button style-1 h50 w216">
                                Masukan Wishlist
                                <i class="icon-arrow-up-right2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div data-wow-delay="0s" class="wow fadeInRight product-item description">
                    <h6><i class="icon-description"></i>Description</h6>
                    <i class="icon-keyboard_arrow_down"></i>
                    <div class="content">
                        <p>
                            The ROG Strix G embodies streamlined design, offering a formidable core experience for serious gaming and multitasking on Windows 10 Pro. Featuring the latest 9th Gen Intel Core processors and GeForce RTX™ graphics, it brings impactful gaming performance to a wide audience
                        </p>
                    </div>
                </div>
                <div data-wow-delay="0s" class="wow fadeInRight product-item traits">
                    <h6><i class="icon-description"></i>Spesifikasi Teknis</h6>
                    <i class="icon-keyboard_arrow_down"></i>
                    <div class="content">
                        <div class="trait-item">
                            <p>Resolusi</p>
                            <div class="title">FHD 16:10</div>
                            <p>1920x1200 WUXGA</p>
                        </div>
                        <div class="trait-item">
                            <p>Teknologi Layar</p>
                            <div class="title">IPS Anti-Glare</div>
                            <p>Refresh rate 165Hz</p>
                        </div>
                        <div class="trait-item">
                            <p>Memory</p>
                            <div class="title">8GB Dual Channel</div>
                            <p>DDR5 - 4800</p>
                        </div>
                        <div class="trait-item">
                            <p>Penyimpanan</p>
                            <div class="title">512GB PCIe</div>
                            <p>4.0 NVMe,M.2 SSD</p>
                        </div>
                        <div class="trait-item">
                            <p>Kamera</p>
                            <div class="title">720 HD</div>
                            <p>-</p>
                        </div>
                        <div class="trait-item">
                            <p>Audio</p>
                            <div class="title">Dolby Atoms</div>
                            <p>Smart Amp Technology</p>
                        </div>
                        <div class="trait-item">
                            <p>Baterai</p>
                            <div class="title">90WHrs 4S1P</div>
                            <p>4-cell Li-ion</p>
                        </div>
                        <div class="trait-item">
                            <p>Suplay Daya</p>
                            <div class="title">240W</div>
                            <p>AC 50/60Hz Universal</p>
                        </div>
                        <div class="trait-item">
                            <p>Dimensi & Berat</p>
                            <div class="title">25.5Kg (5.51 Lbs)</div>
                            <p>35x26x2 cm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop