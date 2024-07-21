@extends('layouts.admin')

@section('content')
<div class="tf-section-2 product-detail">
    <div class="themesflat-container">
        <div class="row">
            <div data-wow-delay="0s" class="wow fadeInUp col-12">
                <div class="tf-button style-1 h50 w190">
                    <a href="/admin/user/create">
                        Create User
                    </a>
                </div>
                <div class="product-item offers mt-10">
                    <h6>List User</h6>
                    <i class="icon-keyboard_arrow_down"></i>
                    <div class="content">
                        <div class="table-heading">
                            <div class="column" style="width: 10% !important;">NO</div>
                            <div class="column" style="width: 30% !important;">NAMA</div>
                            <div class="column" style="width: 30% !important;">EMAIL</div>
                            <div class="column" style="width: 30% !important;">PHONE</div>
                            <div class="column" style="width: 30% !important;">ROLE</div>
                            <div class="column" style="width: 10% !important;">AKSI</div>
                        </div>

                        @foreach($users as $key => $user)
                        <div class="table-item">
                            <div class="column" style="width: 10% !important;">{{ $key+1 }}</div>
                            <div class="column" style="width: 30% !important;">{{$user->name}}</div>
                            <div class="column" style="width: 30% !important;">{{$user->email}}</div>
                            <div class="column" style="width: 30% !important;">{{$user->phone}}</div>
                            <div class="column" style="width: 30% !important;">{{$user->is_admin ? "Admin" : "User"}}</div>
                            <div class="column flex gap30" style="width: 10% !important;">
                                <a <?php echo ("href=/admin/user/edit/" . $user->id) ?> class="icon">
                                    <img src="/assets/icon/custome/edit_white.svg" alt="whatsapp" style="width: 22px;">
                                </a>
                                <a <?php echo ("href=/admin/user/delete/" . $user->id) ?> class="icon">
                                    <img src="/assets/icon/custome/trash_white.svg" alt="whatsapp" style="width: 22px;">
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