@extends('layouts.admin')

@section('content')
<div class="tf-section-2 product-detail">
    <div class="themesflat-container">
        <div class="row">
            <div data-wow-delay="0s" class="wow fadeInUp col-12">
                <div class="flex gap30" style="margin-bottom: 10px;">
                    <a href="{{ route('admin-user-log-download') }}">
                        <div class="tf-button style-1 h50 w190">
                            Download User Log
                        </div>
                    </a>
                </div>
                <div class="widget-search" style="margin-bottom: 10px;">
                    <form action="{{ route('admin-user-log') }}" method="GET">
                        @csrf
                        <input type="text" id="search-item" placeholder="Search" name="query" tabindex="2" value="" aria-required="true" value="" class="style-1">
                        <button class="search search-submit" title="Search" type="submit"></button>
                    </form>
                </div>
                <div class="product-item offers mt-10">
                    <h6>List log user</h6>
                    <i class="icon-keyboard_arrow_down"></i>
                    <div class="content">
                        <div class="table-heading">
                            <div class="column" style="width: 10% !important;">NO</div>
                            <div class="column" style="width: 20% !important;">NAMA</div>
                            <div class="column" style="width: 30% !important;">EMAIL</div>
                            <div class="column" style="width: 30% !important;">TANGGAL</div>
                        </div>

                        @foreach($logs as $key => $log)
                        <div class="table-item">
                            <div class="column" style="width: 10% !important;">{{ $key+1 }}</div>
                            <div class="column" style="width: 20% !important;">{{$log->user->name}}</div>
                            <div class="column" style="width: 30% !important;">{{$log->user->email}}</div>
                            <div class="column" style="width: 30% !important;">{{$log->logged_in_at}}</div>
                        </div>
                        @endforeach
                    </div>
                </div>
                {{ $logs->links('vendor.pagination.bootstrap-5') }}
            </div>
        </div>
    </div>
</div>
@stop