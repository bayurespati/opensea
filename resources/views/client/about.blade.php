@extends('layouts.main')

@section('content')
<div class="tf-section-2 widget-box-icon">
    <div class="themesflat-container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-section-1">
                    <h2 class="tf-title pb-20">Informasi</h2>
                    <p class="pb-40">Untuk menghubungi kantor PINS Indonesia dapat melalui beberapa opsi kontak berikut.</p>
                </div>
            </div>
            <div data-wow-delay="0s" class="wow fadeInUp col-md-4">
                <div class="box-icon-item">
                    <img src="assets/images/box-icon/address.png" alt="">
                    <div class="title"><a href="#">Alamat Kantor</a></div>
                    <p>Telkom Landmark Tower, 42th floor, Jl. Gatot Subroto Kav. 52, Jakarta - 12710</p>
                </div>
            </div>
            <div data-wow-delay="0.1s" class="wow fadeInUp col-md-4">
                <div class="box-icon-item">
                    <img src="assets/images/box-icon/email.png" alt="">
                    <div class="title"><a href="#">Email</a></div>
                    <p>
                        kontak@pins.co.id
                        <br>
                        <br>
                        <br>
                    </p>
                </div>
            </div>
            <div data-wow-delay="0.2s" class="wow fadeInUp col-md-4">
                <div class="box-icon-item">
                    <img src="assets/images/box-icon/phone.png" alt="">
                    <div class="title"><a href="#">No. Telepon Kantor</a></div>
                    <p>
                        (021) 5082079
                        <br>
                        <br>
                        <br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="flat-title-page">
    <div class="themesflat-container">
        <div class="row">
            <div class="col-12">
                <h1 class="heading text-center">Lokasi</h1>
            </div>
        </div>
    </div>
</div>

<div class="tf-section-2 contact-us">
    <div class="themesflat-container">
        <div class="row">
            <div class="col-12">
                <div class="widget-ggg-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31730.008178554417!2d106.77977177431639!3d-6.230601500000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f35c1be142df%3A0x214a20fcdaba85c6!2sPT%20PINS%20Indonesia!5e0!3m2!1sid!2sid!4v1698895561184!5m2!1sid!2sid" width="100%" height="460" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .widget-ggg-map {
        border-radius: 30px;
        overflow: hidden;
    }
</style>
@stop