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

<div class="tf-section-3 discover-item ">
    <div class="themesflat-container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-section pb-30">
                    <h2 class="tf-title ">Cari Perangkat</h2>
                    <a href="/browse_product" class="">Selengkapnya<i class="icon-arrow-right2"></i></a>
                </div>
            </div>
            <div class="col-md-12 pb-30">
                <div class="tf-soft flex items-center justify-between">
                    <div class="soft-left">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.875 6.25L16.3542 15.11C16.3261 15.5875 16.1166 16.0363 15.7685 16.3644C15.4204 16.6925 14.96 16.8752 14.4817 16.875H5.51833C5.03997 16.8752 4.57962 16.6925 4.23152 16.3644C3.88342 16.0363 3.6739 15.5875 3.64583 15.11L3.125 6.25M8.33333 9.375H11.6667M2.8125 6.25H17.1875C17.705 6.25 18.125 5.83 18.125 5.3125V4.0625C18.125 3.545 17.705 3.125 17.1875 3.125H2.8125C2.295 3.125 1.875 3.545 1.875 4.0625V5.3125C1.875 5.83 2.295 6.25 2.8125 6.25Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <span class="inner">Kategori</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item">
                                    <div class="sort-filter active">
                                        <span>Semua</span>
                                        <span class="icon-tick"><span class="path2"></span></span>
                                    </div>
                                </a>
                                <a class="dropdown-item">
                                    <div class="sort-filter">
                                        <span>Commercial / Retail</span>
                                        <span class="icon-tick"><span class="path2"></span></span>
                                    </div>
                                </a>
                                <a class="dropdown-item">
                                    <div class="sort-filter">
                                        <span>Consumer / Enterprise</span>
                                        <span class="icon-tick"><span class="path2"></span></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.5 6.25L15.625 5.15583M17.5 6.25V8.125M17.5 6.25L15.625 7.34417M2.5 6.25L4.375 5.15583M2.5 6.25L4.375 7.34417M2.5 6.25V8.125M10 10.625L11.875 9.53083M10 10.625L8.125 9.53083M10 10.625V12.5M10 18.125L11.875 17.0308M10 18.125V16.25M10 18.125L8.125 17.0308M8.125 2.96833L10 1.875L11.875 2.96917M17.5 11.875V13.75L15.625 14.8442M4.375 14.8442L2.5 13.75V11.875" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <span class="inner">Brands</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item">
                                    <div class="sort-filter active">
                                        <span>Semua</span>
                                        <span class="icon-tick"><span class="path2"></span></span>
                                    </div>
                                </a>
                                <a class="dropdown-item">
                                    <div class="sort-filter">
                                        <span>Apple</span>
                                        <span class="icon-tick"><span class="path2"></span></span>
                                    </div>
                                </a>
                                <a class="dropdown-item">
                                    <div class="sort-filter">
                                        <span>ASUS</span>
                                        <span class="icon-tick"><span class="path2"></span></span>
                                    </div>
                                </a>
                                <a class="dropdown-item">
                                    <div class="sort-filter">
                                        <span>HP</span>
                                        <span class="icon-tick"><span class="path2"></span></span>
                                    </div>
                                </a>
                                <a class="dropdown-item">
                                    <div class="sort-filter">
                                        <span>DELL</span>
                                        <span class="icon-tick"><span class="path2"></span></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.25 14.0625H14.0625M14.0625 14.0625H16.875M14.0625 14.0625V11.25M14.0625 14.0625V16.875M5 8.75H6.875C7.37228 8.75 7.84919 8.55246 8.20082 8.20082C8.55246 7.84919 8.75 7.37228 8.75 6.875V5C8.75 4.50272 8.55246 4.02581 8.20082 3.67417C7.84919 3.32254 7.37228 3.125 6.875 3.125H5C4.50272 3.125 4.02581 3.32254 3.67417 3.67417C3.32254 4.02581 3.125 4.50272 3.125 5V6.875C3.125 7.37228 3.32254 7.84919 3.67417 8.20082C4.02581 8.55246 4.50272 8.75 5 8.75ZM5 16.875H6.875C7.37228 16.875 7.84919 16.6775 8.20082 16.3258C8.55246 15.9742 8.75 15.4973 8.75 15V13.125C8.75 12.6277 8.55246 12.1508 8.20082 11.7992C7.84919 11.4475 7.37228 11.25 6.875 11.25H5C4.50272 11.25 4.02581 11.4475 3.67417 11.7992C3.32254 12.1508 3.125 12.6277 3.125 13.125V15C3.125 15.4973 3.32254 15.9742 3.67417 16.3258C4.02581 16.6775 4.50272 16.875 5 16.875ZM13.125 8.75H15C15.4973 8.75 15.9742 8.55246 16.3258 8.20082C16.6775 7.84919 16.875 7.37228 16.875 6.875V5C16.875 4.50272 16.6775 4.02581 16.3258 3.67417C15.9742 3.32254 15.4973 3.125 15 3.125H13.125C12.6277 3.125 12.1508 3.32254 11.7992 3.67417C11.4475 4.02581 11.25 4.50272 11.25 5V6.875C11.25 7.37228 11.4475 7.84919 11.7992 8.20082C12.1508 8.55246 12.6277 8.75 13.125 8.75Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <span class="inner">Ketersediaan</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item">
                                    <div class="sort-filter active">
                                        <span>Semua</span>
                                        <span class="icon-tick"><span class="path2"></span></span>
                                    </div>
                                </a>
                                <a class="dropdown-item">
                                    <div class="sort-filter">
                                        <span>Ready</span>
                                        <span class="icon-tick"><span class="path2"></span></span>
                                    </div>
                                </a>
                                <a class="dropdown-item">
                                    <div class="sort-filter">
                                        <span>Indent</span>
                                        <span class="icon-tick"><span class="path2"></span></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="inner">(IDR) Rentang Harga</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item">
                                    <div class="sort-filter active">
                                        <span>Semua</span>
                                        <span class="icon-tick"><span class="path2"></span></span>
                                    </div>
                                </a>
                                <a class="dropdown-item">
                                    <div class="sort-filter">
                                        <span>0 - 999.999</span>
                                        <span class="icon-tick"><span class="path2"></span></span>
                                    </div>
                                </a>
                                <a class="dropdown-item">
                                    <div class="sort-filter">
                                        <span>1.000.000 - 4.999.999</span>
                                        <span class="icon-tick"><span class="path2"></span></span>
                                    </div>
                                </a>
                                <a class="dropdown-item">
                                    <div class="sort-filter">
                                        <span>5.000.000 - 12.999.999</span>
                                        <span class="icon-tick"><span class="path2"></span></span>
                                    </div>
                                </a>
                                <a class="dropdown-item">
                                    <div class="sort-filter">
                                        <span>13.000.000 - 50.000.000</span>
                                        <span class="icon-tick"><span class="path2"></span></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="soft-right">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span>Urutkan</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a href="#" class="dropdown-item">
                                    <div class="sort-filter" href="#">
                                        <span>IDR Tinggi ke Rendah</span>
                                        <span class="icon-tick"><span class="path2"></span></span>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <div class="sort-filter active" href="#">
                                        <span>IDR Rendah ke Tinggi</span>
                                        <span class="icon-tick"><span class="path2"></span></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-wow-delay="0s" class="wow fadeInUp col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="tf-card-box style-1">
                    <div class="card-media">
                        <a href="#">
                            <img src="assets/images/item/Product9.jpg" alt="">
                        </a>
                        <span class="wishlist-button icon-heart"></span>
                        <div class="featured-countdown">
                            <span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
                        </div>
                        <div class="button-place-bid">
                            <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Detil</span></a>
                        </div>
                    </div>
                    <h5 class="name"><a href="nft-detail-2.html">Macbook Pro 2023</a></h5>
                    <div class="divider"></div>
                    <div class="meta-info flex items-center justify-between">
                        <span class="color-ready">Ready</span>
                        <h6 class="price gem">IDR 23.000.000</h6>
                    </div>
                </div>
            </div>
            <div data-wow-delay="0s" class="wow fadeInUp col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="tf-card-box style-1">
                    <div class="card-media">
                        <a href="#">
                            <img src="assets/images/item/Product8.jpg" alt="">
                        </a>
                        <span class="wishlist-button icon-heart"></span>
                        <div class="featured-countdown">
                            <span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
                        </div>
                        <div class="button-place-bid">
                            <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Detil</span></a>
                        </div>
                    </div>
                    <h5 class="name"><a href="nft-detail-2.html">Macbook Pro 2023</a></h5>
                    <div class="divider"></div>
                    <div class="meta-info flex items-center justify-between">
                        <span class="color-ready">Ready</span>
                        <h6 class="price gem">IDR 23.000.000</h6>
                    </div>
                </div>
            </div>
            <div data-wow-delay="0s" class="wow fadeInUp col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="tf-card-box style-1">
                    <div class="card-media">
                        <a href="#">
                            <img src="assets/images/item/Product7.jpg" alt="">
                        </a>
                        <span class="wishlist-button icon-heart"></span>
                        <div class="featured-countdown">
                            <span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
                        </div>
                        <div class="button-place-bid">
                            <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Detil</span></a>
                        </div>
                    </div>
                    <h5 class="name"><a href="nft-detail-2.html">Macbook Pro 2023</a></h5>
                    <div class="divider"></div>
                    <div class="meta-info flex items-center justify-between">
                        <span class="color-ready">Ready</span>
                        <h6 class="price gem">IDR 23.000.000</h6>
                    </div>
                </div>
            </div>
            <div data-wow-delay="0s" class="wow fadeInUp col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="tf-card-box style-1">
                    <div class="card-media">
                        <a href="#">
                            <img src="assets/images/item/Product6.jpg" alt="">
                        </a>
                        <span class="wishlist-button icon-heart"></span>
                        <div class="featured-countdown">
                            <span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
                        </div>
                        <div class="button-place-bid">
                            <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Detil</span></a>
                        </div>
                    </div>
                    <h5 class="name"><a href="nft-detail-2.html">Macbook Pro 2023</a></h5>
                    <div class="divider"></div>
                    <div class="meta-info flex items-center justify-between">
                        <span class="color-ready">Ready</span>
                        <h6 class="price gem">IDR 23.000.000</h6>
                    </div>
                </div>
            </div>
            <div data-wow-delay="0s" class="wow fadeInUp col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="tf-card-box style-1">
                    <div class="card-media">
                        <a href="#">
                            <img src="assets/images/item/Product5.jpg" alt="">
                        </a>
                        <span class="wishlist-button icon-heart"></span>
                        <div class="featured-countdown">
                            <span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
                        </div>
                        <div class="button-place-bid">
                            <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Detil</span></a>
                        </div>
                    </div>
                    <h5 class="name"><a href="nft-detail-2.html">Macbook Pro 2023</a></h5>
                    <div class="divider"></div>
                    <div class="meta-info flex items-center justify-between">
                        <span class="color-ready">Ready</span>
                        <h6 class="price gem">IDR 23.000.000</h6>
                    </div>
                </div>
            </div>
            <div data-wow-delay="0s" class="wow fadeInUp col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="tf-card-box style-1">
                    <div class="card-media">
                        <a href="#">
                            <img src="assets/images/item/Product4.jpg" alt="">
                        </a>
                        <span class="wishlist-button icon-heart"></span>
                        <div class="featured-countdown">
                            <span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
                        </div>
                        <div class="button-place-bid">
                            <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Detil</span></a>
                        </div>
                    </div>
                    <h5 class="name"><a href="nft-detail-2.html">Macbook Pro 2023</a></h5>
                    <div class="divider"></div>
                    <div class="meta-info flex items-center justify-between">
                        <span class="color-ready">Ready</span>
                        <h6 class="price gem">IDR 23.000.000</h6>
                    </div>
                </div>
            </div>
            <div data-wow-delay="0s" class="wow fadeInUp col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="tf-card-box style-1">
                    <div class="card-media">
                        <a href="#">
                            <img src="assets/images/item/Product3.jpg" alt="">
                        </a>
                        <span class="wishlist-button icon-heart"></span>
                        <div class="featured-countdown">
                            <span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
                        </div>
                        <div class="button-place-bid">
                            <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Detil</span></a>
                        </div>
                    </div>
                    <h5 class="name"><a href="nft-detail-2.html">Macbook Pro 2023</a></h5>
                    <div class="divider"></div>
                    <div class="meta-info flex items-center justify-between">
                        <span class="color-ready">Ready</span>
                        <h6 class="price gem">IDR 23.000.000</h6>
                    </div>
                </div>
            </div>
            <div data-wow-delay="0s" class="wow fadeInUp col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="tf-card-box style-1">
                    <div class="card-media">
                        <a href="#">
                            <img src="assets/images/item/Product2.jpg" alt="">
                        </a>
                        <span class="wishlist-button icon-heart"></span>
                        <div class="featured-countdown">
                            <span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span>
                        </div>
                        <div class="button-place-bid">
                            <a href="#" data-toggle="modal" data-target="#popup_bid" class="tf-button"><span>Detil</span></a>
                        </div>
                    </div>
                    <h5 class="name"><a href="nft-detail-2.html">Macbook Pro 2023</a></h5>
                    <div class="divider"></div>
                    <div class="meta-info flex items-center justify-between">
                        <span class="color-ready">Ready</span>
                        <h6 class="price gem">IDR 23.000.000</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>