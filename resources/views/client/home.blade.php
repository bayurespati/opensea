@extends('layouts.main')

@section('content')
<div class="flat-pages-title">
    <div class="widget-bg-line">
        <div class="wraper">
            <div class="bg-grid-line y bottom">
                <div class="bg-line"></div>
            </div>
        </div>
    </div>

    <div class="themesflat-container w1490">
        <div class="row">
            <div class="col-12 pages-title">
                <div class="content">
                    <h1 data-wow-delay="0s" class="wow fadeInUp">E-Catalog PINS</h1>
                    <p class="wow fadeInUp" data-wow-delay="0.1s">
                        Selamat datang di catalog PINS. Dimana Anda dapat menelusuri perangkat yang tersedia untuk diajukan sebagai alat bantu kerja Pegawai.
                    </p>
                    <div data-wow-delay="0.2s" class="wow fadeInUp flat-button flex justify-center">
                        <a href="/browse_product" class="tf-button style-1 h50 w190 active">Cari Perangkat<i class="icon-search"></i></a>
                    </div>
                </div>
                <div class="icon-background">
                    <!-- <img class="absolute item1" src="assets/images/item-background/item1.png" alt="">
                    <img class="absolute item2" src="assets/images/item-background/item2.png" alt="">
                    <img class="absolute item4" src="assets/images/item-background/item1.png" alt="">
                    <img class="absolute item5" src="assets/images/item-background/item1.png" alt="">
                    <img class="absolute item7" src="assets/images/item-background/item5.png" alt="">
                    <img class="absolute item8" src="assets/images/item-background/item5.png" alt=""> -->
                </div>
                <div class="relative">
                    <div class="swiper swiper-3d-7">
                        <div class="swiper-wrapper">
                            @foreach($featured_items as $item)
                            <div class="swiper-slide">
                                <div class="tf-card-box">
                                    <div class="card-media">
                                        <a href="#">
                                            <img src="{{$item->image == null ? 'solid_gray.png' : $item->image}}" alt="">
                                        </a>
                                    </div>
                                    <div class="meta-info text-center">
                                        <h5 class="name">
                                            <a href="nft-detail-2.html">
                                                <span class="text-overf">
                                                    {{$item->nama_produk}}
                                                </span>
                                            </a>
                                        </h5>
                                        <h6 class="price gem">{{number_format($item->harga, 0, '.', ',')}}</h6>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination pagination-number"></div>
                    </div>
                    <div class="swiper-button-next next-3d over"></div>
                    <div class="swiper-button-prev prev-3d over"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="tf-section featured-item style-bottom">
    <div class="themesflat-container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-section pb-20">
                    <h2 class="tf-title ">Produk Terbaru </h2>
                    <a href="/browse_product">Selengkapnya<i class="icon-arrow-right2"></i></a>
                </div>
            </div>
            <div class="col-md-12">
                <div class="featured pt-10 swiper-container carousel" data-swiper='{
                                "loop":false,
                                "slidesPerView": 1,
                                "observer": true,
                                "observeParents": true,
                                "spaceBetween": 30,
                                "navigation": {
                                    "clickable": true,
                                    "nextEl": ".slider-next",
                                    "prevEl": ".slider-prev"
                                },
                                "pagination": {
                                    "el": ".swiper-pagination",
                                    "clickable": true
                                },
                                "breakpoints": {
                                    "768": {
                                        "slidesPerView": 2,
                                        "spaceBetween": 30
                                    },
                                    "1024": {
                                        "slidesPerView": 3,
                                        "spaceBetween": 30
                                    },
                                    "1300": {
                                        "slidesPerView": 4,
                                        "spaceBetween": 30
                                    }
                                }
                            }'>
                    <div class="swiper-wrapper">
                        @foreach($new_items as $item)
                        <div class="swiper-slide">
                            <div class="tf-card-box style-1">
                                <div class="card-media">
                                    <a href="#">
                                        <img src="{{$item->image == null ? '/solid_gray.png' : $item->image}}" alt="">
                                    </a>
                                    <div class="button-place-bid">
                                        <a <?php echo ("href='/detail_product/$item->id'") ?> class="tf-button"><span>Detil</span></a>
                                    </div>
                                </div>
                                <h5 class="name"><a href="nft-detail-2.html">{{$item->nama_produk}}</a></h5>
                                <div class="divider"></div>
                                <div class="meta-info flex items-center justify-between">
                                    <span class="color-ready">Ready</span>
                                    <h6 class="price gem">{{number_format($item->harga, 0, '.', ',')}}</h6>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="slider-next swiper-button-next"></div>
                    <div class="slider-prev swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="tf-section featured-item style-bottom">
    <div class="themesflat-container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-section pb-20">
                    <h2 class="tf-title ">Bundling / Hemat
                        <span class="dropdown" id="select-day">
                            <span class="btn-selector tf-color">
                                <span>0%</span>
                            </span>
                            <ul id="diskon_value">
                                @foreach($diskons as $item)
                                <li><span>{{$item->nilai}}%</span></li>
                                @endforeach
                            </ul>
                        </span>
                    </h2>
                    <a href="/browse_product">Selengkapnya<i class="icon-arrow-right2"></i></a>
                </div>
            </div>
            <div class="col-md-12">
                <div class="featured pt-10 swiper-container carousel" data-swiper='{
                                "loop":false,
                                "slidesPerView": 1,
                                "observer": true,
                                "observeParents": true,
                                "spaceBetween": 30,
                                "navigation": {
                                    "clickable": true,
                                    "nextEl": ".slider-next",
                                    "prevEl": ".slider-prev"
                                },
                                "pagination": {
                                    "el": ".swiper-pagination",
                                    "clickable": true
                                },
                                "breakpoints": {
                                    "768": {
                                        "slidesPerView": 2,
                                        "spaceBetween": 30
                                    },
                                    "1024": {
                                        "slidesPerView": 3,
                                        "spaceBetween": 30
                                    },
                                    "1300": {
                                        "slidesPerView": 4,
                                        "spaceBetween": 30
                                    }
                                }
                            }'>
                    <div class="swiper-wrapper" id="show-item">
                        @foreach($diskon_items as $item)
                        <div class="swiper-slide">
                            <div class="tf-card-box style-1">
                                <div class="card-media">
                                    <a href="#">
                                        <img src="{{$item->image == null ? '/solid_gray.png' : $item->image}}" alt="">
                                    </a>
                                    <div class="button-place-bid">
                                        <a <?php echo ("href='/detail_product/$item->id'") ?> class="tf-button"><span>Detil</span></a>
                                    </div>
                                </div>
                                <h5 class="name"><a href="nft-detail-2.html">{{$item->nama_produk}}</a></h5>
                                <div class="divider"></div>
                                <div class="meta-info flex items-center justify-between">
                                    <span class="color-ready">Ready</span>
                                    <h6 class="price gem">{{number_format($item->harga, 0, '.', ',')}}</h6>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @if ($diskon_items->count() > 4)
                    <div class="swiper-pagination" id="pagination-diskon"></div>
                    <div class="slider-next swiper-button-next" id="next-diskon"></div>
                    <div class="slider-prev swiper-button-prev" id="prev-diskon"></div>
                    @endif
                </div>
                @if (count($diskon_items) == 0)
                <div class="col-md-12" id="information-diskon-null">
                    <div class="heading-section justify-content-center">
                        <h2 class="tf-title pb-30">Belum ada data diskon</h2>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>


<div class="tf-section create-sell">
    <div class="themesflat-container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-section justify-content-center">
                    <h2 class="tf-title pb-30">Tahapan Pemesanan Perangkat Di E-Catalog PINS</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="tf-box-icon relative text-center">
                    <div class="image">
                        <img src="assets/images/box-icon/step1.png" alt="">
                        <p>Step 1</p>
                    </div>
                    <h4 class="heading"><a href="#">Telusuri Perangkat</a></h4>
                    <p class="content">Cari perangkat sesuai dengan kebutuhan Anda</p>
                    <div class="arrow">
                        <svg width="114" height="114" viewBox="0 0 114 114" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_625_20131)">
                                <path d="M13.0682 58.6163C14.3723 57.8473 15.7186 57.1206 17.0509 56.436L16.1333 54.65C14.7448 55.3625 13.3845 56.1032 12.0524 56.9002L13.0683 58.6444L13.0682 58.6163ZM21.1465 54.4527C22.5352 53.8244 23.9381 53.2383 25.3551 52.6944L24.6057 50.8245C23.1607 51.3965 21.7298 51.9825 20.313 52.6107L21.1324 54.4386L21.1465 54.4527ZM29.6344 51.1469C31.0797 50.6592 32.5251 50.2277 33.9986 49.8244L33.4458 47.8989C31.9582 48.3162 30.4707 48.7616 28.9974 49.2493L29.6344 51.1469ZM38.4195 48.6986C39.9073 48.3656 41.3952 48.0606 42.8972 47.7977L42.5408 45.8166C41.0107 46.0793 39.4948 46.3842 37.9649 46.7312L38.4195 48.6986ZM47.4036 47.1216C48.9199 46.929 50.4222 46.7786 51.9527 46.6563L51.7788 44.6615C50.2202 44.7838 48.6898 44.9342 47.1455 45.1267L47.4036 47.1216ZM56.5024 46.4156C58.019 46.3635 59.5498 46.3536 61.0666 46.3857L61.0753 44.3774C59.5164 44.3592 57.9715 44.3551 56.4128 44.4211L56.4884 46.4297L56.5024 46.4156ZM65.6314 46.5524C67.1485 46.6407 68.6656 46.7852 70.1829 46.9578L70.4022 44.9641C68.8569 44.7915 67.2977 44.6609 65.7526 44.5725L65.6315 46.5805L65.6314 46.5524ZM74.7067 47.5598C76.2101 47.8025 77.7135 48.0734 79.203 48.3863L79.591 46.4212C78.0734 46.1082 76.5278 45.8232 74.9963 45.5803L74.6927 47.5738L74.7067 47.5598ZM83.6578 49.4235C85.1335 49.8066 86.5952 50.2319 88.057 50.6852L88.6418 48.7767C87.1659 48.3093 85.648 47.8839 84.1582 47.4867L83.6578 49.4235ZM92.3866 52.1574C93.8064 52.6808 95.2405 53.2464 96.6465 53.84L97.428 51.9883C95.9938 51.3665 94.5458 50.8149 93.0978 50.2633L92.4147 52.1574L92.3866 52.1574ZM100.795 55.7471C102.159 56.4108 103.509 57.1166 104.845 57.8645L105.809 56.1116C104.445 55.3636 103.067 54.6296 101.661 53.9517L100.795 55.7471Z" fill="#919191" />
                                <path d="M95.5845 61.1824L95.0597 59.2569L104.589 56.6842L101.292 47.336L103.186 46.681L107.205 58.0676L95.5845 61.1824Z" fill="#919191" />
                                <circle cx="8.69433" cy="59.7296" r="3.91825" transform="rotate(-135 8.69433 59.7296)" stroke="#919191" stroke-width="2" />
                            </g>
                            <defs>
                                <clipPath id="clip0_625_20131">
                                    <rect width="76.2328" height="83.6102" fill="white" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 113.026 54.5132)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="tf-box-icon relative text-center type-1">
                    <div class="image">
                        <img src="assets/images/box-icon/step2.png" alt="">
                        <p>Step 2</p>
                    </div>
                    <h4 class="heading"><a href="#">Masukan Whishlist</a></h4>
                    <p class="content">Daftarkan perangkat yang diminati ke dalam wishlist</p>
                    <div class="arrow">
                        <svg width="114" height="114" viewBox="0 0 114 114" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_625_20131)">
                                <path d="M13.0682 58.6163C14.3723 57.8473 15.7186 57.1206 17.0509 56.436L16.1333 54.65C14.7448 55.3625 13.3845 56.1032 12.0524 56.9002L13.0683 58.6444L13.0682 58.6163ZM21.1465 54.4527C22.5352 53.8244 23.9381 53.2383 25.3551 52.6944L24.6057 50.8245C23.1607 51.3965 21.7298 51.9825 20.313 52.6107L21.1324 54.4386L21.1465 54.4527ZM29.6344 51.1469C31.0797 50.6592 32.5251 50.2277 33.9986 49.8244L33.4458 47.8989C31.9582 48.3162 30.4707 48.7616 28.9974 49.2493L29.6344 51.1469ZM38.4195 48.6986C39.9073 48.3656 41.3952 48.0606 42.8972 47.7977L42.5408 45.8166C41.0107 46.0793 39.4948 46.3842 37.9649 46.7312L38.4195 48.6986ZM47.4036 47.1216C48.9199 46.929 50.4222 46.7786 51.9527 46.6563L51.7788 44.6615C50.2202 44.7838 48.6898 44.9342 47.1455 45.1267L47.4036 47.1216ZM56.5024 46.4156C58.019 46.3635 59.5498 46.3536 61.0666 46.3857L61.0753 44.3774C59.5164 44.3592 57.9715 44.3551 56.4128 44.4211L56.4884 46.4297L56.5024 46.4156ZM65.6314 46.5524C67.1485 46.6407 68.6656 46.7852 70.1829 46.9578L70.4022 44.9641C68.8569 44.7915 67.2977 44.6609 65.7526 44.5725L65.6315 46.5805L65.6314 46.5524ZM74.7067 47.5598C76.2101 47.8025 77.7135 48.0734 79.203 48.3863L79.591 46.4212C78.0734 46.1082 76.5278 45.8232 74.9963 45.5803L74.6927 47.5738L74.7067 47.5598ZM83.6578 49.4235C85.1335 49.8066 86.5952 50.2319 88.057 50.6852L88.6418 48.7767C87.1659 48.3093 85.648 47.8839 84.1582 47.4867L83.6578 49.4235ZM92.3866 52.1574C93.8064 52.6808 95.2405 53.2464 96.6465 53.84L97.428 51.9883C95.9938 51.3665 94.5458 50.8149 93.0978 50.2633L92.4147 52.1574L92.3866 52.1574ZM100.795 55.7471C102.159 56.4108 103.509 57.1166 104.845 57.8645L105.809 56.1116C104.445 55.3636 103.067 54.6296 101.661 53.9517L100.795 55.7471Z" fill="#919191" />
                                <path d="M95.5845 61.1824L95.0597 59.2569L104.589 56.6842L101.292 47.336L103.186 46.681L107.205 58.0676L95.5845 61.1824Z" fill="#919191" />
                                <circle cx="8.69433" cy="59.7296" r="3.91825" transform="rotate(-135 8.69433 59.7296)" stroke="#919191" stroke-width="2" />
                            </g>
                            <defs>
                                <clipPath id="clip0_625_20131">
                                    <rect width="76.2328" height="83.6102" fill="white" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 113.026 54.5132)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="tf-box-icon relative text-center">
                    <div class="image">
                        <img src="assets/images/box-icon/step3.png" alt="">
                        <p>Step 3</p>
                    </div>
                    <h4 class="heading"><a href="https://wa.me/6281287133571?text=Halo Admin eCatalog PINS Indonesia">Hubungi Kami</a></h4>
                    <p class="content">Hubungi Admin untuk mengetahui SOP pemesanan & negosiasi</p>
                    <div class="arrow">
                        <svg width="114" height="114" viewBox="0 0 114 114" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_625_20131)">
                                <path d="M13.0682 58.6163C14.3723 57.8473 15.7186 57.1206 17.0509 56.436L16.1333 54.65C14.7448 55.3625 13.3845 56.1032 12.0524 56.9002L13.0683 58.6444L13.0682 58.6163ZM21.1465 54.4527C22.5352 53.8244 23.9381 53.2383 25.3551 52.6944L24.6057 50.8245C23.1607 51.3965 21.7298 51.9825 20.313 52.6107L21.1324 54.4386L21.1465 54.4527ZM29.6344 51.1469C31.0797 50.6592 32.5251 50.2277 33.9986 49.8244L33.4458 47.8989C31.9582 48.3162 30.4707 48.7616 28.9974 49.2493L29.6344 51.1469ZM38.4195 48.6986C39.9073 48.3656 41.3952 48.0606 42.8972 47.7977L42.5408 45.8166C41.0107 46.0793 39.4948 46.3842 37.9649 46.7312L38.4195 48.6986ZM47.4036 47.1216C48.9199 46.929 50.4222 46.7786 51.9527 46.6563L51.7788 44.6615C50.2202 44.7838 48.6898 44.9342 47.1455 45.1267L47.4036 47.1216ZM56.5024 46.4156C58.019 46.3635 59.5498 46.3536 61.0666 46.3857L61.0753 44.3774C59.5164 44.3592 57.9715 44.3551 56.4128 44.4211L56.4884 46.4297L56.5024 46.4156ZM65.6314 46.5524C67.1485 46.6407 68.6656 46.7852 70.1829 46.9578L70.4022 44.9641C68.8569 44.7915 67.2977 44.6609 65.7526 44.5725L65.6315 46.5805L65.6314 46.5524ZM74.7067 47.5598C76.2101 47.8025 77.7135 48.0734 79.203 48.3863L79.591 46.4212C78.0734 46.1082 76.5278 45.8232 74.9963 45.5803L74.6927 47.5738L74.7067 47.5598ZM83.6578 49.4235C85.1335 49.8066 86.5952 50.2319 88.057 50.6852L88.6418 48.7767C87.1659 48.3093 85.648 47.8839 84.1582 47.4867L83.6578 49.4235ZM92.3866 52.1574C93.8064 52.6808 95.2405 53.2464 96.6465 53.84L97.428 51.9883C95.9938 51.3665 94.5458 50.8149 93.0978 50.2633L92.4147 52.1574L92.3866 52.1574ZM100.795 55.7471C102.159 56.4108 103.509 57.1166 104.845 57.8645L105.809 56.1116C104.445 55.3636 103.067 54.6296 101.661 53.9517L100.795 55.7471Z" fill="#919191" />
                                <path d="M95.5845 61.1824L95.0597 59.2569L104.589 56.6842L101.292 47.336L103.186 46.681L107.205 58.0676L95.5845 61.1824Z" fill="#919191" />
                                <circle cx="8.69433" cy="59.7296" r="3.91825" transform="rotate(-135 8.69433 59.7296)" stroke="#919191" stroke-width="2" />
                            </g>
                            <defs>
                                <clipPath id="clip0_625_20131">
                                    <rect width="76.2328" height="83.6102" fill="white" transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 113.026 54.5132)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="tf-box-icon relative text-center">
                    <div class="image">
                        <img src="assets/images/box-icon/step4.png" alt="">
                        <p>Step 4</p>
                    </div>
                    <h4 class="heading"><a href="#">Detil Daftar Perangkat</a></h4>
                    <p class="content">Cek kembali daftar pesanan Anda untuk dimasukan ke dalam pengadaan</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="tf-section action">
    <div class="themesflat-container">
        <div class="row">
            <div class="col-md-12">
                <div class="action__body">
                    <div class="tf-tsparticles">
                        <div id="tsparticles1" data-color="#161616" data-line="#000"></div>
                    </div>
                    <h2>Koleksi terbaru dari ASUS</h2>
                    <div class="flat-button flex">
                        <a href="/browse_product" class="tf-button style-2 h50 w190 mr-10">Buka Koleksi<i class="icon-arrow-up-right2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('#diskon-value').on('click', function() {
        console.log("oke", $(this).text());
    });
    $('#select-day').on('click', function() {
        console.log("oke", $(this).text());
    });
    $('#diskon-value li').click(function() {
        // $(this).closest('.headlink').find('.heading').text($(this).text());
        console.log("oke", $(this).text());
    });

    $(function() {
        monthly_payment('#select-day');
    });

    var monthly_payment = function(id) {
        if ($('span').hasClass('dropdown')) {
            var obj = $(id + '.dropdown');
            var btn = obj.find('.btn-selector');
            var dd = obj.find('ul');
            var opt = dd.find('li');
            dd.hide();
            obj.on("mouseenter", function() {
                dd.show();
                dd.addClass('show');
                $(this).css("z-index", 1000);
            }).on("mouseleave", function() {
                dd.hide();
                $(this).css("z-index", "auto")
                dd.removeClass('show');
            })

            opt.on("click", function() {
                dd.hide();
                var txt = $(this).text();
                opt.removeClass("active");
                $(this).addClass("active");
                get_item_by_filter(txt.slice(0, -1))
            });
        }
    }

    function get_item_by_filter(value) {
        $("#show-item").empty();

        $.ajax({
            url: "/item/by-search",
            type: "get",
            data: {
                diskon_nilai: value,
            },
            success: function(response) {
                for (let i = 0; i < response.length; i++) {
                    $('#show-item').append(`
                        <div class="swiper-slide">
                            <div class="tf-card-box style-1">
                                <div class="card-media">
                                    <a href="#">
                                        <img src="` + (response[i]['image'] == "" || response[i]['image'] == null ? '/solid_gray.png' : response[i]['image']) + `" alt="">
                                    </a>
                                    <div class="button-place-bid">
                                        <a href='/detail_product/` + response[i]['id'] + `' class="tf-button"><span>Detail</span></a>
                                    </div>
                                </div>
                                <h5 class="name"><a href="nft-detail-2.html">` + response[i]['nama_produk'] + `</a></h5>
                                <div class="divider"></div>
                                <div class="meta-info flex items-center justify-between">
                                    <span class="` + (response[i]['is_ready'] ? 'color-ready' : 'color-indent') + `">
                                    ` + (response[i]['is_ready'] ? 'Ready' : 'Indent') + `
                                    </span>
                                    <h6 class="price gem">` + response[i]['harga'].toLocaleString() + `</h6>
                                </div>
                            </div>
                        </div>
                    `);
                }
            },
            error: function(xhr) {}
        });
    }
</script>
@stop