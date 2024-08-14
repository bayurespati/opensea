@extends('layouts.main')

@section('content')
<div class="page-title faqs">
    <div class="themesflat-container">
        <div class="row">
            <div class="col-12">
                <h1 data-wow-delay="0s" class="wow fadeInUp heading text-center" style="color: #434141">Frequently asked questions</h1>
            </div>
        </div>
    </div>
</div>

<div class="tf-section-2 wrap-accordion">
    <div class="themesflat-container w830">
        <div class="row">
            <div class="col-md-6 mb-20">
                <div class="flat-accordion2">
                    @foreach ($faqs->slice(0, 5) as $faq)
                    <div data-wow-delay="0s" class="wow fadeInUp flat-toggle2" style="background: #8b9898 !important">
                        <h6 class="toggle-title" style="color: #fff !important">{{$faq->pertanyaan}}</h6>
                        <div class="toggle-content">
                            <p style="color: #fff">{{$faq->jawaban}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-6 mb-20">
                <div class="flat-accordion2">
                    @foreach ($faqs->slice(5, 10) as $faq)
                    <div data-wow-delay="0s" class="wow fadeInUp flat-toggle2" style="background: #8b9898 !important">
                        <h6 class="toggle-title">{{$faq->pertanyaan}}</h6>
                        <div class="toggle-content">
                            <p style="color: #fff">{{$faq->jawaban}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="page-title faqs" style="padding-top: 0 !important;">
                <div class="themesflat-container">
                    <div class="row">
                        <div class="col-12">
                            <p style="color: #434141">
                                <span style="color: #434141">Masih memiliki pertanyaan?</span>
                            </p>
                            <p data-wow-delay="0.1s" class="wow fadeInUp ">
                                Tidak menemukan yang anda cari? silahkan
                                <a href="https://wa.me/6281287133571?text=Saya ada pertanyaan seputar e-Catalog PINS Indonesia" target="_blank">
                                    <span style="color: #e63946">Hubungi tim kami</span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .toggle-title.active {
        color: #e63946 !important;
    }
</style>
@stop