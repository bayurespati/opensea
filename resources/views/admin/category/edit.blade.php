@extends('layouts.admin')

@section('content')
<div class="tf-section-2 product-detail">
    <div class="themesflat-container">
        <div class="row">
            <div data-wow-delay="0s" class="wow fadeInUp col-12">
                <div class="widget-content-inner description">
                    <!-- novalidate="novalidate" -->
                    <form id="commentform" class="comment-form" <?php echo ("action=/admin/category/update/" . $category->id) ?> method="POST">
                        @csrf
                        <div class="wrap-content w-full">

                            <fieldset class="name">
                                <label>Lini Produk *</label>
                                <select id="brand_id" name="divisi_id" required>
                                    <option value="">Pilih divisi: </option>
                                    @foreach($divisi as $data)
                                    <option value="{{$data->id}}" {{ ($category->divisi_id == $data->id) ? 'selected' : '' }}>{{$data->nama}}</option>
                                    @endforeach
                                </select>
                            </fieldset>

                            <div class="flex gap30">
                                <fieldset class="properties">
                                    <label>Nama *</label>
                                    <input value="{{ old('nama', $category->nama) }}" type="text" id="nama" placeholder="Nama" name="nama" tabindex="2" value="" aria-required="true" required>
                                </fieldset>
                                <fieldset class="properties">
                                    <label>Alias</label>
                                    <input value="{{ old('alias', $category->alias) }}" type="text" id="alias" placeholder="Alias" name="alias" tabindex="2" value="" aria-required="true">
                                </fieldset>
                            </div>

                            <div class="btn-submit flex gap30 justify-center">
                                <button class="tf-button style-1 h50 active">
                                    <a href="/admin/category" style="color: black">
                                        Cancle
                                    </a>
                                </button>
                                <button class="tf-button style-1 h50" type="submit">Update category</button>
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