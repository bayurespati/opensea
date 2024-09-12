@extends('layouts.main')

@push('additional_css')
<style>
    .image-fill {
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* Ensures the image fills the container while maintaining its aspect ratio */
    }
</style>
@endpush

@section('content')
<div class="tf-section-2 discover-item loadmore-12-item" style="margin-top: 30px; margin-bottom: -20px !important">
    <div class="themesflat-container">
        <div class="row">
            <div class="col-12">
                <div class="widget-tabs relative">
                    <div class="tf-soft">
                        <div class="soft-right">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" style="border: .5px solid black; color: #434141" type="button" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span>Urutkan</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <button href="#" class="dropdown-item" onclick="doShort('desc')">
                                        <div class="sort-filter" href="#">
                                            <span>Harga Tertingi</span>
                                            <span class="icon-tick"><span class="path2"></span></span>
                                        </div>
                                    </button>
                                    <button href="#" class="dropdown-item" onclick="doShort('asc')">
                                        <div class="sort-filter" href="#">
                                            <span>Harga Terendah</span>
                                            <span class="icon-tick"><span class="path2"></span></span>
                                        </div>
                                    </button>
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
        <div class="widget-search" style="margin-bottom: 20px">
            <input type="text" id="search-item" placeholder="Search" name="search" tabindex="2" value="" aria-required="true" value="" class="search-produk" style="background-color: white !important;border: .5px solid #434141">
            <button class="search search-submit" title="Search" onclick="searchItem()">
                <i style="color: #434141; opacity: .5" class="icon-search"></i>
            </button>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="widget-category-checkbox style-1 mb-30" style="border-bottom: 1px solid rgb(23 22 22 / 8%);">
                    <h5 class="active" style="background: #DEE8E8; color: #434141">Lini Produk</h5>
                    <div class="content-wg-category-checkbox">
                        @foreach($divisi as $data)
                        <label style="color: #434141">{{$data->nama}}
                            <input type="checkbox" class="divisi-check" value="{{$data->id}}" style="opacity: 1">
                            <span class="btn-checkbox"></span>
                        </label>
                        <br>
                        @endforeach
                    </div>
                </div>
                <div class="widget-category-checkbox style-1 mb-30" style="border-bottom: 1px solid rgb(23 22 22 / 8%);">
                    <h5 class="active" style="background: #DEE8E8; color: #434141">Kategori</h5>
                    <div class="content-wg-category-checkbox" id="show-category"></div>
                </div>
                <div class="widget-category-checkbox style-1 mb-30" style="border-bottom: 1px solid rgb(23 22 22 / 8%);">
                    <h5 class="active" style="background: #DEE8E8; color: #434141">Sub Kategori</h5>
                    <div class="content-wg-category-checkbox" id="show-sub-category"></div>
                </div>
                <div class="widget-category-checkbox style-1 mb-30" style="border-bottom: 1px solid rgb(23 22 22 / 8%);">
                    <h5 class="active" style="background: #DEE8E8; color: #434141">Brands</h5>
                    <div class="content-wg-category-checkbox">
                        @foreach($brands as $brand)
                        <label style="color: #434141">{{$brand->nama}}
                            <input type="checkbox" class="brand-check" value="{{$brand->id}}" style="opacity: 1">
                            <span class="btn-checkbox"></span>
                        </label>
                        <br>
                        @endforeach
                    </div>
                </div>
                <div class="widget-category-checkbox style-1 mb-30">
                    <h5 class="active" style="background: #DEE8E8; color: #434141">(IDR) Rentang Harga</h5>
                    <div class="content-wg-category-checkbox">
                        <form action="#">
                            <label style="color: #434141">0 - 1jt
                                <input type="checkbox" class="harga-check" value="0-1" style="opacity: 1">
                                <span class="btn-checkbox"></span>
                            </label><br>
                            <label style="color: #434141">1jt- 5jt
                                <input type="checkbox" class="harga-check" value="1-5" style="opacity: 1">
                                <span class="btn-checkbox"></span>
                            </label><br>
                            <label style="color: #434141">5jt - 13jt
                                <input type="checkbox" class="harga-check" value="5-13" style="opacity: 1">
                                <span class="btn-checkbox"></span>
                            </label><br>
                            <label style="color: #434141">13jt - 25jt
                                <input type="checkbox" class="harga-check" value="13-25" style="opacity: 1">
                                <span class="btn-checkbox"></span>
                            </label><br>
                            <label style="color: #434141">25jt - 50jt
                                <input type="checkbox" class="harga-check" value="25-50" style="opacity: 1">
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
                <div class="row" id="show-item">
                    @foreach($items as $item)
                    <div data-wow-delay="0" class="wow fadeInUp fl-item-1 col-lg-4 col-md-6">
                        <div class="tf-card-box style-1 bg-white">
                            <div class="card-media">
                                <a <?php echo ("href='/detail_product/$item->id'") ?>> <img src="{{$item->image == null ? 'solid_gray.png' : $item->image}}" alt="" style="object-fit: contain !important"></a>
                            </div>
                            <h5 class="name">
                                <a <?php echo ("href='/detail_product/$item->id'") ?>>{{$item->brand->nama}}</a>
                                <br>
                                <a <?php echo ("href='/detail_product/$item->id'") ?>>{{$item->nama_produk}}</a>
                            </h5>
                            <div class="divider"></div>
                            <div class="meta-info flex items-center justify-between">
                                @if($item->is_ready)
                                <span class="color-ready">Ready</span>
                                @else
                                <span class="color-indent">Indent</span>
                                @endif
                                <h6 class="price gem">{{number_format($item->harga, 0, '.', ',')}}</h6>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div data-wow-delay="0" class="col-12">
                        <div data-wow-delay="0.2s" class="wow fadeInUp flat-button flex justify-center" onclick="get_item_by_filter()">
                            <p class="tf-button style-1 h50 w190 active">Muat lebih banyak</p>
                        </div>
                    </div>
                </div>
                <div class="row" id="show-form-search">
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    let brands_id = [];
    let divisi_id = [];
    let category_id = [];
    let subcategory_id = [];
    let harga = [];
    let search = "";
    let short = "";
    let min = "";
    let max = "";

    $('a.close').on('click', function() {
        $(this).parent().hide();
    });

    $('input.harga-check').on('input', function() {
        let value = $(this).val();

        let index = harga.indexOf(value);

        if (index == -1) {
            harga.push(value);
        } else {
            harga.splice(index, 1);
        }

        if (harga.length > 0) {

            let data = [];
            for (let i = 0; i < harga.length; i++) {
                let temp = harga[i].split("-")
                data.push(parseInt(temp[0]));
                data.push(parseInt(temp[1]));
            }


            max = Math.max(...data);
            min = Math.min(...data);
        } else {
            max = "";
            min = "";
        }
        get_item_by_filter();
    });

    $('input.brand-check').on('input', function() {
        let value = $(this).val();

        let index = brands_id.indexOf(value);

        if (index == -1) {
            brands_id.push(value)
        } else {
            brands_id.splice(index, 1);
        }
        get_item_by_filter();
    });

    $('input.divisi-check').on('input', function() {
        let value = $(this).val();

        let index = divisi_id.indexOf(value);

        if (index == -1) {
            divisi_id.push(value)
        } else {
            divisi_id.splice(index, 1);
        }
        category_id = [];
        subcategory_id = [];
        filterCategory()
        filterSubCategory()
        get_item_by_filter();
    });

    $(document).on("input", ".category-check", function() {
        let value = $(this).val();

        let index = category_id.indexOf(value);

        if (index == -1) {
            category_id.push(value)
        } else {
            category_id.splice(index, 1);
        }
        get_item_by_filter();
        filterSubCategory()
    });

    $(document).on("input", ".subcategory-check", function() {
        let value = $(this).val();

        let index = subcategory_id.indexOf(value);

        if (index == -1) {
            subcategory_id.push(value)
        } else {
            subcategory_id.splice(index, 1);
        }
        get_item_by_filter();
    });

    function filterCategory() {
        $("#show-category").empty();
        if (divisi_id.length != 0) {
            let temp_data = null;
            $.ajax({
                url: "/category/by-divisi",
                type: "get",
                data: {
                    divisi_id: divisi_id,
                },
                success: function(response) {
                    for (let i = 0; i < response.length; i++) {
                        $('#show-category').append(`
                            <label style="color: #434141"> ` + response[i].nama + `
                            <input type="checkbox" class="category-check" value="` + response[i].id + `" style="opacity: 1">
                            <span class="btn-checkbox"></span>
                            </label>
                            <br>
                        `);
                    }
                },
                error: function(xhr) {}
            });
        }
    }

    function filterSubCategory() {
        $("#show-sub-category").empty();
        if (category_id.length != 0) {
            $.ajax({
                url: "/subcategory/by-category",
                type: "get",
                data: {
                    category_id: category_id,
                },
                success: function(response) {
                    for (let i = 0; i < response.length; i++) {
                        $('#show-sub-category').append(`
                            <label style="color: #434141"> ` + response[i].nama + `
                            <input type="checkbox" class="subcategory-check" value="` + response[i].id + `" style="opacity: 1">
                            <span class="btn-checkbox"></span>
                            </label>
                            <br>
                        `);
                    }
                },
                error: function(xhr) {}
            });
        }
    }

    var push_search = document.getElementById("search-item");
    push_search.addEventListener("keydown", function(e) {
        if (e.code === "Enter") { //checks whether the pressed key is "Enter"
            searchItem(e);
        }
    });

    function searchItem() {
        search = document.getElementById("search-item").value;
        get_item_by_filter();
    }

    function doShort(value) {
        short = value;
        get_item_by_filter();
    }

    function get_item_by_filter() {
        $("#show-item").empty();

        $.ajax({
            url: "/item/by-search",
            type: "get",
            data: {
                brands_id: brands_id,
                divisi_id: divisi_id,
                category_id: category_id,
                subcategory_id: subcategory_id,
                search: search,
                short: short,
                min: min,
                max: max
            },
            success: function(response) {
                for (let i = 0; i < response.length; i++) {
                    $('#show-item').append(`
                    <div data-wow-delay="0" class="wow fadeInUp col-lg-4 col-md-6">
                        <div class="tf-card-box style-1 bg-white">
                            <div class="card-media">
                                <a href="/detail_product/` + response[i]['id'] + `"> <img src="` + (response[i]['image'] == "" || response[i]['image'] == null ? '/solid_gray.png' : response[i]['image']) + `" alt="" class="image-fill"></a>
                                <form id="commentform" class="comment-form" action="/wishlist/store" method="POST">
                                    @csrf
                                    <input type="text" name="item_id" value="` + response[i]['id'] + `" hidden>
                                    <a href="" type="submit">
                                        <button class=" ` + (response[i]['user'].length > 0 ? 'wishlist-button active' : 'wishlist-button') + `" type="submit">
                                            <i class="icon-heart"></i>
                                        </button>
                                    </a>
                                </form>
                            </div>
                            <h5 class="name">
                            <a href="/detail_product/` + response[i]['id'] + `">` + response[i]['brand']['nama'] + `</a>
                            <br>
                            <a href="/detail_product/` + response[i]['id'] + `">` + response[i]['nama_produk'] + `</a>
                            </h5>
                           <span class="color-ready">` + response[i]['jenis_produk'].toUpperCase() + `</span> 
                            <div class="divider"></div>
                            <div class="meta-info flex items-center justify-between">
                                <span class="` + (response[i]['is_ready'] ? 'color-ready' : 'color-indent') + `">
                                ` + (response[i]['is_ready'] ? 'Ready' : 'Indent') + `
                                </span>
                                <h6 class="price gem">` + response[i]['harga'].toLocaleString() + `</h6>
                            </div>
                        </div>
                    </div>`);
                }
            },
            error: function(xhr) {}
        });
    }
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