@extends('layouts.main')

@section('content')
<div class="tf-section-2 discover-item loadmore-12-item" style="margin-top: 30px; margin-bottom: -20px !important">
    <div class="themesflat-container">
        <div class="row">
            <div class="col-12">
                <div class="widget-tabs relative">
                    <div class="tf-soft">
                        <div class="soft-right">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span>Urutkan</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a href="#" class="dropdown-item">
                                        <div class="sort-filter" href="#">
                                            <span>Tertingi</span>
                                            <span class="icon-tick"><span class="path2"></span></span>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <div class="sort-filter active" href="#">
                                            <span>Terendah</span>
                                            <span class="icon-tick"><span class="path2"></span></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="tf-section-5 artwork loadmore-12-item-1">
    <div class="themesflat-container">
        <div class="row">
            <div class="col-md-3">
                <div class="widget-category-checkbox style-1 mb-30">
                    <h5 class="active">Kategori</h5>
                    <div class="content-wg-category-checkbox">
                        <form action="#">
                            <label>Commercial / Retail
                                <input type="checkbox">
                                <span class="btn-checkbox"></span>
                            </label><br>
                            <label>Consumer / Enterprise
                                <input type="checkbox">
                                <span class="btn-checkbox"></span>
                            </label><br>
                        </form>
                    </div>
                </div>
                <div class="widget-category-checkbox style-1 mb-30">
                    <h5 class="active">Sub Kategori</h5>
                    <div class="content-wg-category-checkbox">
                        <form action="#">
                            <label>Laptop
                                <input type="checkbox">
                                <span class="btn-checkbox"></span>
                            </label><br>
                            <label>PC
                                <input type="checkbox">
                                <span class="btn-checkbox"></span>
                            </label><br>
                            <label>All-in-one
                                <input type="checkbox">
                                <span class="btn-checkbox"></span>
                            </label><br>
                            <label>Printer
                                <input type="checkbox">
                                <span class="btn-checkbox"></span>
                            </label><br>
                            <label>Tablet
                                <input type="checkbox">
                                <span class="btn-checkbox"></span>
                            </label><br>
                            <label>Aksesoris
                                <input type="checkbox">
                                <span class="btn-checkbox"></span>
                            </label><br>
                        </form>
                    </div>
                </div>
                <div class="widget-category-checkbox style-1 mb-30">
                    <h5 class="active">Brands</h5>
                    <div class="content-wg-category-checkbox">
                        <form action="#">
                            <label>Apple
                                <input type="checkbox">
                                <span class="btn-checkbox"></span>
                            </label><br>

                            <label>Asus
                                <input type="checkbox">
                                <span class="btn-checkbox"></span>
                            </label><br>

                            <label>HP
                                <input type="checkbox">
                                <span class="btn-checkbox"></span>
                            </label><br>

                            <label>DELL
                                <input type="checkbox">
                                <span class="btn-checkbox"></span>
                            </label><br>

                            <label>Microsoft
                                <input type="checkbox">
                                <span class="btn-checkbox"></span>
                            </label><br>
                        </form>
                    </div>
                </div>
                <div class="widget-category-checkbox style-1 mb-30">
                    <h5 class="active">(IDR) Rentang Harga</h5>
                    <div class="content-wg-category-checkbox">
                        <form action="#">
                            <label>0 - 1jt
                                <input type="checkbox">
                                <span class="btn-checkbox"></span>
                            </label><br>
                            <label>1jt- 5jt
                                <input type="checkbox">
                                <span class="btn-checkbox"></span>
                            </label><br>
                            <label>5jt - 13jt
                                <input type="checkbox">
                                <span class="btn-checkbox"></span>
                            </label><br>
                            <label>13jt - 25jt
                                <input type="checkbox">
                                <span class="btn-checkbox"></span>
                            </label><br>
                            <label>25jt - 50jt
                                <input type="checkbox">
                                <span class="btn-checkbox"></span>
                            </label><br>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    @for($i = 0; $i <= 16; $i++) <div data-wow-delay="0" class="wow fadeInUp fl-item-1 col-lg-4 col-md-6">
                        <?php $data = [
                            [
                                "nama" => "HP Omen Transcend 16-u0045TX",
                                "harga" => "42.299.000",
                                "image" => "assets/images/item/Product1.jpg"
                            ],
                            [
                                "nama" => "Lenovo Yoga Book 9i i7-1355U",
                                "harga" => "34.999.000",
                                "image" => "assets/images/item/Product2.jpg"
                            ],
                            [
                                "nama" => "Lenovo Yoga Book 9i i7-1355U",
                                "harga" => "34.999.000",
                                "image" => "assets/images/item/Product3.jpg"
                            ],
                            [
                                "nama" => "Lenovo ThinkPad X1 Carbon",
                                "harga" => "33.650.000",
                                "image" => "assets/images/item/Product4.jpg"
                            ],
                            [
                                "nama" => "MacBook Pro 14 M2 Pro",
                                "harga" => "32.495.000",
                                "image" => "assets/images/item/Product5.jpg"
                            ],
                            [
                                "nama" => "ASUS ROG G703VI E5209T",
                                "harga" => "50.000.000",
                                "image" => "assets/images/item/Product6.jpg"
                            ],
                            [
                                "nama" => "HP Omen 16-wf0031tx",
                                "harga" => "31.399.000",
                                "image" => "assets/images/item/Product7.jpg"
                            ],
                            [
                                "nama" => "ASUS Vivobook Pro 16X OLED",
                                "harga" => "30.999.000",
                                "image" => "assets/images/item/Product8.jpg"
                            ],
                            [
                                "nama" => "Surface Pro 2023",
                                "harga" => "30.000.000",
                                "image" => "assets/images/item/Product9.jpg"
                            ],
                        ]; ?>
                        <?php $number = rand(0, 8); ?>
                        <div class="tf-card-box style-1">
                            <div class="card-media">
                                <a href="#">
                                    <img src="<?php echo $data[$number]['image'] ?>" alt="">
                                </a>
                                <span class="wishlist-button icon-heart"></span>
                                <div class="featured-countdown">
                                    <span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
                                </div>
                                <div class="button-place-bid">
                                    <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Detail</span></a>
                                </div>
                            </div>
                            <h5 class="name"><a href="nft-detail-2.html">{{$data[$number]['nama']}}</a></h5>
                            <div class="divider"></div>
                            <div class="meta-info flex items-center justify-between">
                                <span class="color-ready">Ready</span>
                                <h6 class="price gem">{{$data[$number]['harga']}}</h6>
                            </div>
                        </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
</div>
@stop