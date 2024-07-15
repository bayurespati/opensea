@extends('layouts.admin')

@section('content')
<div class="tf-section-2 product-detail">
    <div class="themesflat-container">
        <div class="row">
            <div data-wow-delay="0s" class="wow fadeInUp col-12">
                <div class="widget-content-inner description">
                    <!-- novalidate="novalidate" -->
                    <form id="commentform" class="comment-form" action="/admin/user/store" method="POST">
                        @csrf
                        <div class="wrap-content w-full">
                            <fieldset class="properties">
                                <label>Nama *</label>
                                <input value="{{ old('name') }}" type="text" id="name" placeholder="Nama" name="name" tabindex="2" value="" aria-required="true" required>
                            </fieldset>
                            <fieldset class="properties">
                                <label>Email *</label>
                                <input value="{{ old('email') }}" type="email" id="email" placeholder="Email" name="email" tabindex="2" value="" aria-required="true" required>
                            </fieldset>
                            <fieldset class="properties">
                                <label>Phone *</label>
                                <input value="{{ old('phone') }}" type="text" id="phone" placeholder="Phone" name="phone" tabindex="2" value="" aria-required="true" required>
                            </fieldset>
                            <fieldset class="properties">
                                <label>Password *</label>
                                <input value="{{ old('password') }}" type="password" id="password" placeholder="Password" name="password" tabindex="2" value="" aria-required="true" required>
                            </fieldset>
                            <fieldset class="properties">
                                <label>Role *</label>
                                <select id="is_admin" name="is_admin" required>
                                    <option value="">Pilih role: </option>
                                    <option value="1">Admin</option>
                                    <option value="0">User</option>
                                </select>
                            </fieldset>

                            <div class="btn-submit flex gap30 justify-center">
                                <button class="tf-button style-1 h50 active">
                                    <a href="/admin/user" style="color: black">
                                        Cancle
                                    </a>
                                </button>
                                <button class="tf-button style-1 h50" type="submit">Create User</button>
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