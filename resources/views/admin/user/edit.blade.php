@extends('layouts.admin')

@section('content')
<div class="tf-section-2 product-detail">
    <div class="themesflat-container">
        <div class="row">
            <div data-wow-delay="0s" class="wow fadeInUp col-12">
                <div class="widget-content-inner description">
                    <!-- novalidate="novalidate" -->
                    <form id="commentform" class="comment-form" <?php echo ("action=/admin/user/update/" . $user->id) ?> method="POST">
                        @csrf
                        <div class="wrap-content w-full">

                            <fieldset class="properties">
                                <label>Nama *</label>
                                <input value="{{ old('name', $user->name) }}" type="text" id="name" placeholder="Nama" name="name" tabindex="2" value="" aria-required="true" required>
                            </fieldset>
                            <fieldset class="properties">
                                <label>Email *</label>
                                <input value="{{ old('email', $user->email) }}" type="email" id="email" placeholder="Email" name="email" tabindex="2" value="" aria-required="true" required>
                            </fieldset>
                            <fieldset class="properties">
                                <label>Phone *</label>
                                <input value="{{ old('phone', $user->phone) }}" type="text" id="phone" placeholder="Phone" name="phone" tabindex="2" value="" aria-required="true" required>
                            </fieldset>
                            <fieldset class="properties">
                                <label>Tipe *</label>
                                <select id="is_pins" name="is_pins" required>
                                    <option value="">Pilih tipe: </option>
                                    <option value="1" {{ $user->is_pins == 1 ? 'selected' : '' }}>PINS</option>
                                    <option value="0" {{ $user->is_pins == 0 ? 'selected' : '' }}>Non PINS</option>
                                </select>
                            </fieldset>
                            <fieldset class="properties">
                                <label>Role *</label>
                                <select id="is_admin" name="is_admin" required>
                                    <option value="">Pilih role: </option>
                                    <option value="1" {{ $user->is_admin == 1 ? 'selected' : '' }}>Admin</option>
                                    <option value="0" {{ $user->is_admin == 0 ? 'selected' : '' }}>User</option>
                                </select>
                            </fieldset>

                            <fieldset class="properties">
                                <label>Status *</label>
                                <select id="is_accepted" name="is_accepted" required>
                                    <option value="">Pilih role: </option>
                                    <option value="1" {{ $user->is_accepted == 1 ? 'selected' : '' }}>Aktif</option>
                                    <option value="0" {{ $user->is_accepted == 0 ? 'selected' : '' }}>Non Aktif</option>
                                </select>
                            </fieldset>

                            <fieldset class="password" style="margin-bottom: 10px;">
                                <label style="color: #434141">Password</label>
                                <input class="search-produk password-input" type="password" id="password" placeholder="Masukan kata sandi Anda" name="password" tabindex="2" value="" aria-required="true">
                                <i class="icon-show password-addon" id="password-addon"></i>
                            </fieldset>

                            <div class="btn-submit flex gap30 justify-center">
                                <a href="/admin/user" class="tf-button style-1 h50 active">
                                    Cancel
                                </a>
                                <button class="tf-button style-1 h50" type="submit">Update user</button>
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
<script>
    // JavaScript to toggle password visibility
    const passwordInput = document.getElementById('password');
    const passwordAddon = document.getElementById('password-addon');

    passwordAddon.addEventListener('click', function() {
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
</script>
@stop