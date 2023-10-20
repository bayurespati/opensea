@extends('layouts.main') @section('content')
<div class="tf-section-2 product-detail">
    <div class="themesflat-container">
        <div class="row">
            <div data-wow-delay="0s" class="wow fadeInUp col-12">
                <div class="product-item offers">
                    <h6><i class="icon-description"></i>Laptop</h6>
                    <i class="icon-keyboard_arrow_down"></i>
                    <div class="content">
                        <div class="table-heading">
                            <div class="column">No</div>
                            <div class="column">Perangkat</div>
                            <div class="column">ketersedian</div>
                            <div class="column">Harga</div>
                            <div class="column">Action</div>
                        </div>

                        @for($i=0; $i < 5; $i++) <?php
                                                    $data = [
                                                        [
                                                            "Nama Barang",
                                                            "Ready",
                                                            "12.000.000",
                                                        ],
                                                        [
                                                            "Nama Barang",
                                                            "Ready",
                                                            "12.000.000",
                                                        ],
                                                        [
                                                            "Nama Barang",
                                                            "Ready",
                                                            "12.000.000",
                                                        ],
                                                        [
                                                            "Nama Barang",
                                                            "Ready",
                                                            "12.000.000",
                                                        ],
                                                        [
                                                            "Nama Barang",
                                                            "Ready",
                                                            "12.000.000",
                                                        ],
                                                    ];
                                                    ?> <div class="table-item">
                            <div class="column">{{ $i+1 }}</div>
                            <div class="column">{{$data[$i][0]}}</div>
                            <div class="column">{{$data[$i][1]}}</div>
                            <div class="column">{{$data[$i][2]}}</div>
                            <div class="column">
                                <a href="" class="tf-button style-1 h50 w-100">Delete</a>
                            </div>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@stop