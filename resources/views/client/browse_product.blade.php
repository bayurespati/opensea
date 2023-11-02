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
                @if (\Session::has('success'))
                <div class="alert alert-success alert-dismissible">
                    <ul>
                        <li>
                        <li>{!! \Session::get('success') !!}</li>
                        <button type="button" class="close" data-dismiss="alert">
                            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                        </button>
                        </li>
                    </ul>
                </div>
                @endif
                <div class="row">
                    @foreach($items as $item)
                    <div data-wow-delay="0" class="wow fadeInUp fl-item-1 col-lg-4 col-md-6">
                        <div class="tf-card-box style-1" name>
                            <div class="card-media">
                                <a href="">
                                    <img src="{{$item->image}}" alt="">
                                </a>
                                <form id="commentform" class="comment-form" action="/wishlist/store" method="POST">
                                    <input type="text" name="item_id" value="{{$item->id}}" hidden>
                                    @csrf
                                    <a href="" type="submit">
                                        <button class="{{sizeOf($item->user) > 0 ? 'wishlist-button active' : 'wishlist-button' }}" type="submit"><i class="icon-heart"></i></button>
                                    </a>
                                </form>
                                <!-- featur time -->
                                <!-- <div class="featured-countdown"> -->
                                <!-- <span class="js-countdown" data-timer="7500" data-labels="d,h,m,s"></span> -->
                                <!-- </div> -->
                                <div class="button-place-bid">
                                    <a <?php echo ("href='/detail_product/$item->id'") ?> class="tf-button"><span>Detail</span></a>
                                </div>
                            </div>
                            <h5 class="name"><a href="nft-detail-2.html">{{$item->type_notebook}}</a></h5>
                            <div class="divider"></div>
                            <div class="meta-info flex items-center justify-between">
                                @if($item->is_ready)
                                <span class="color-ready">Ready</span>
                                @else
                                <span class="color-indent">Indent</span>
                                @endif
                                <h6 class="price gem">{{number_format($item->price, 0, '.', ',')}}</h6>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('a.close').on('click', function() {
        $(this).parent().hide();
    });
</script>
<style>
    .alert-dismissible .close {
        position: relative;
        top: -2.75rem !important;
        right: -1.25rem;
        padding: 0.75rem 1.25rem;
        color: inherit;
    }
</style>
@stop