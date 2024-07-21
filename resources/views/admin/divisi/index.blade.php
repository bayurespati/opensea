@extends('layouts.admin')

@section('content')
<div class="tf-section-2 product-detail">
    <div class="themesflat-container">
        <div class="row">
            <div data-wow-delay="0s" class="wow fadeInUp col-12">
                <div class="tf-button style-1 h50 w190">
                    <a href="/admin/divisi/create">
                        Daftarkan Divisi
                    </a>
                </div>
                <div class="product-item offers mt-10">
                    <h6>List Divisi</h6>
                    <i class="icon-keyboard_arrow_down"></i>
                    <div class="content">
                        <div class="table-heading">
                            <div class="column" style="width: 10% !important;">NO</div>
                            <div class="column" style="width: 40% !important;">NAMA</div>
                            <div class="column" style="width: 40% !important;">ALIAS</div>
                            <div class="column" style="width: 10% !important;">AKSI</div>
                        </div>

                        @foreach($divisi as $key => $data)
                        <div class="table-item">
                            <div class="column" style="width: 10% !important;">{{ $key+1 }}</div>
                            <div class="column" style="width: 40% !important;">{{ $data->nama }}</div>
                            <div class="column" style="width: 40% !important;">{{ $data->alias }}</div>
                            <div class="column flex gap30" style="width: 10% !important;">
                                <a <?php echo ("href=/admin/divisi/edit/" . $data->id) ?> class="icon">
                                    <img src="/assets/icon/custome/edit_white.svg" alt="whatsapp" style="width: 22px;">
                                </a>
                                <a <?php echo ("href=/admin/divisi/delete/" . $data->id) ?> class="icon">
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