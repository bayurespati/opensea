@extends('layouts.admin')

@section('content')
<div class="tf-section-2 product-detail">
    <div class="themesflat-container">
        <div class="row">
            <div data-wow-delay="0s" class="wow fadeInUp col-12">
                <div class="widget-content-inner description">
                    <!-- novalidate="novalidate" -->
                    <form id="commentform" class="comment-form" action="/admin/category/store" method="POST">
                        @csrf
                        <div class="wrap-content w-full">

                            <fieldset class="name">
                                <label>Lini Produk *</label>
                                <select id="brand_id" name="divisi_id" required>
                                    <option value="">Pilih divisi: </option>
                                    @foreach($divisi as $data)
                                    <option value="{{$data->id}}">{{$data->nama}}</option>
                                    @endforeach
                                </select>
                            </fieldset>

                            <div class="flex gap30">
                                <fieldset class="properties">
                                    <label>Nama *</label>
                                    <input value="{{ old('nama') }}" type="text" id="nama" placeholder="Nama" name="nama" tabindex="2" value="" aria-required="true" required>
                                </fieldset>
                                <fieldset class="properties">
                                    <label>Alias</label>
                                    <input value="{{ old('alias') }}" type="text" id="alias" placeholder="Alias" name="alias" tabindex="2" value="" aria-required="true">
                                </fieldset>
                            </div>

                            <div class="btn-submit flex gap30 justify-center">
                                <button class="tf-button style-1 h50 active">
                                    <a href="/admin/category" style="color: black">
                                        Cancel
                                    </a>
                                </button>
                                <button class="tf-button style-1 h50" type="submit">Submit category</button>
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