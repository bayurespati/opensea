@extends('layouts.admin')

@section('content')
<div class="tf-section-2 product-detail">
    <div class="themesflat-container">
        <div class="row">
            <div data-wow-delay="0s" class="wow fadeInUp col-12">
                <div class="widget-content-inner description">
                    <!-- novalidate="novalidate" -->
                    <form id="commentform" class="comment-form" <?php echo ("action=/admin/faq/update/" . $faq->id) ?> method="POST">
                        @csrf
                        <div class="wrap-content w-full">

                            <fieldset class="properties">
                                <label>Pertanyaan *</label>
                                <input value="{{ old('pertanyaan', $faq->pertanyaan) }}" type="text" id="pertanyaan" placeholder="Pertanyaan" name="pertanyaan" tabindex="2" value="" aria-required="true" required>
                            </fieldset>

                            <fieldset>
                                <label>Jawaban *</label>
                                <textarea name="jawaban" rows="4" placeholder="Jawaban" tabindex="4" required>{{$faq->jawaban}}</textarea>
                            </fieldset>

                            <div class="btn-submit flex gap30 justify-center">
                                <button class="tf-button style-1 h50 active">
                                    <a href="/admin/faq" style="color: black">
                                        Cancle
                                    </a>
                                </button>
                                <button class="tf-button style-1 h50" type="submit">Update FAQ</button>
                            </div>
                            @if (count($errors) > 0)
                            <div class="alert alert-danger" style="margin-top: 10px; padding: 4px">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop