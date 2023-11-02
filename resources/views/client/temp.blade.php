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
                        <!-- For from here -->
                        <div data-wow-delay="0" class="wow fadeInUp fl-item-1 col-lg-4 col-md-6">
                            <div class="tf-card-box style-1">
                                <div class="card-media">
                                    <a href="#">
                                        <img src="" alt="">
                                    </a>
                                    <span class="wishlist-button icon-heart"></span>
                                    <div class="featured-countdown">
                                        <span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
                                    </div>
                                    <div class="button-place-bid">
                                        <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Detail</span></a>
                                    </div>
                                </div>
                                <h5 class="name"><a href="nft-detail-2.html">ASUS ROG </a></h5>
                                <div class="divider"></div>
                                <div class="meta-info flex items-center justify-between">
                                    <span class="color-ready">Ready</span>
                                    <h6 class="price gem">1.000.000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop