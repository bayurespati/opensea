@extends('layouts.admin')

@section('content')
<div class="tf-section-2 product-detail">
    <div class="themesflat-container">
        <div class="row">
            <div data-wow-delay="0s" class="wow fadeInUp col-12">
                <div class="product-item offers mt-10">
                    <h6>List Faq</h6>
                    <i class="icon-keyboard_arrow_down"></i>
                    <div class="content">
                        <div class="table-heading">
                            <div class="column" style="width: 10% !important;">NO</div>
                            <div class="column">PERTANYAAN</div>
                            <div class="column">JAWABAN</div>
                            <div class="column">AKSI</div>
                        </div>

                        @foreach($faqs as $key => $faq)
                        <div class="table-item">
                            <div class="column" style="width: 10% !important;">{{ $key+1 }}</div>
                            <div class="column">{{$faq->pertanyaan}}</div>
                            <div class="column">{{$faq->jawaban}}</div>
                            <div class="column flex gap30">
                                <a <?php echo ("href=/admin/faq/edit/" . $faq->id) ?> class="icon">
                                    <img src="/assets/icon/custome/edit_white.svg" alt="whatsapp" style="width: 22px;">
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop