@extends('layouts.main')

@section('content')
<div class="tf-section-2 widget-box-icon">
    <div class="themesflat-container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-section-1">
                    <h2 class="tf-title pb-20" style="color: #434141">Profile</h2>
                    <p class="pb-40" style="color: #434141">Ganti Password</p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="widget-login" style="background: #DEE8E8">
                    <form id="commentform" class="comment-form" action="{{ route('user-password-update') }}" method="POST">
                        @csrf
                        <fieldset class="email">
                            <label style="color: #434141">Password lama *</label>
                            <input name="old_password" class="search-produk" type="password" id="email" placeholder="Masukan password lama" tabindex="2" value="" aria-required="true" required style="background-color: white !important">
                        </fieldset>
                        <fieldset class="password" style="margin-bottom: 10px;">
                            <label style="color: #434141">Password baru *</label>
                            <input class="search-produk password-input" type="password" tabindex="2" value="" aria-required="true" required style="background-color: white !important" id="password" placeholder="Masukan kata sandi baru" name="password">
                            <i class="icon-show password-addon" id="password-addon"></i>
                        </fieldset>
                        <fieldset class="password" style="margin-bottom: 10px;">
                            <label style="color: #434141">Konfirmasi password *</label>
                            <input class="search-produk password-input" type="password" tabindex="2" value="" aria-required="true" required style="background-color: white !important" id="password-confirmation" placeholder="Konfirmasi kata sandi" name="password_confirmation">
                            <i class="icon-show password-addon" id="password-addon-confirmation"></i>
                        </fieldset>
                        <div class="btn-submit mb-30">
                            <button class="tf-button style-1 h50 w-100" type="submit">Submit</button>
                        </div>
                        @if ($errors->any())
                        <div style="color: red;">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <div style="color: red !important; margin-bottom: 10px;">
                                    <p style="color: red">* {{ $error }}</p>
                                </div>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        @if (\Session::has('success'))
                        <div class="alert alert-success alert-dismissible">
                            <ul>
                                <li>
                                    {!! \Session::get('success') !!}
                                </li>
                                <li>
                                    <div type="" class="close" data-dismiss="alert" style="top: -20px">
                                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        @endif
                    </form>
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
<script>
    // JavaScript to toggle password visibility
    const passwordInput = document.getElementById('password');
    const passwordAddon = document.getElementById('password-addon');

    passwordAddon.addEventListener('click', function() {
        console.log("atas");
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text'; // Show the password
            passwordAddon.classList.remove('icon-show');
            passwordAddon.classList.add('icon-hide'); // Change to hide icon
        } else {
            passwordInput.type = 'password'; // Hide the password
            passwordAddon.classList.remove('icon-hide');
            passwordAddon.classList.add('icon-show'); // Change to show icon
        }
    });

    const passwordInputConfirmation = document.getElementById('password-confirmation');
    const passwordAddonConfirmation = document.getElementById('password-addon-confirmation');

    passwordAddonConfirmation.addEventListener('click', function() {
        console.log("bawah");
        if (passwordInputConfirmation.type === 'password') {
            passwordInputConfirmation.type = 'text'; // Show the password
            passwordAddonConfirmation.classList.remove('icon-show');
            passwordAddonConfirmation.classList.add('icon-hide'); // Change to hide icon
        } else {
            passwordInputConfirmation.type = 'password'; // Hide the password
            passwordAddonConfirmation.classList.remove('icon-hide');
            passwordAddonConfirmation.classList.add('icon-show'); // Change to show icon
        }
    });
</script>
@stop