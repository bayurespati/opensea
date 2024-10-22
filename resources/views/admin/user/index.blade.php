@extends('layouts.admin')

@section('content')
<div class="tf-section-2 product-detail">
    <div class="themesflat-container">
        <div class="row">
            <div data-wow-delay="0s" class="wow fadeInUp col-12">
                <div class="flex gap30" style="margin-bottom: 10px;">
                    <a href="/admin/user/create">
                        <div class="tf-button style-1 h50 w190">
                            Create User
                        </div>
                    </a>
                    <a href="{{ route('admin-user-download') }}">
                        <div class="tf-button style-1 h50 w190">
                            Download User
                        </div>
                    </a>
                </div>
                <div class="product-item offers mt-10">
                    <h6>List User</h6>
                    <i class="icon-keyboard_arrow_down"></i>
                    <div class="content">
                        <div class="table-heading">
                            <div class="column" style="width: 5% !important;">NO</div>
                            <div class="column" style="width: 20% !important;">NAMA</div>
                            <div class="column" style="width: 35% !important;">EMAIL</div>
                            <div class="column" style="width: 15% !important;">TANGGAL</div>
                            <div class="column" style="width: 10% !important;">TIPE</div>
                            <div class="column" style="width: 10% !important;">ROLE</div>
                            <div class="column" style="width: 5% !important;">AKSI</div>
                        </div>

                        @foreach($users as $key => $user)
                        <div class="table-item">
                            <div class="column" style="width: 5% !important;">{{$key+1}}</div>
                            <div class="column" style="width: 20% !important;">{{$user->name}}</div>
                            <div class="column" style="width: 35% !important;">{{$user->email}}</div>
                            <div class="column" style="width: 15% !important;">{{$user->created_at->translatedFormat('d M Y')}}</div>
                            <div class="column" style="width: 10% !important;">{{$user->is_pins ? "PINS" : "Non PINS"}}</div>
                            <div class="column" style="width: 10% !important;">{{$user->is_admin ? "Admin" : "User"}}</div>
                            <div class="column flex gap30" style="width: 5% !important;">
                                <a <?php echo ("href=/admin/user/edit/" . $user->id) ?> class="icon">
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