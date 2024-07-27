@extends('layouts.admin')

@section('content')
<div class="content">
    <div id="create" class="tabcontent">
        <div class="wrapper-content-create">
            @if (\Session::has('success'))
            <div class="alert alert-success alert-dismissible">
                <ul>
                    <li>
                        {!! \Session::get('success') !!}
                    </li>
                    <li>
                        <button type="button" class="close" data-dismiss="alert" style="top: -30px">
                            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                        </button>
                    </li>
                </ul>
            </div>
            @endif
            <div class="widget-content-tab">
                <div class="widget-content-inner upload active" style="margin-bottom: 30px;">
                    <div class="wrap-upload w-full">
                        <form id="commentform" class="comment-form" action="/admin/item-image/upload" method="POST" enctype="multipart/form-data" novalidate="novalidate">
                            @csrf
                            <input type="text" name="item_id" value="{{$item->id}}" hidden>
                            <label class="uploadfile">
                                <h5>Upload file</h5>
                                <p class="text">Upload image untuk {{$item->nama_produk}}</p>
                                <div class="text filename">Format file excel</div>
                                <input type="file" class="" name="image">
                            </label>
                            <div class="btn-submit flex gap30 justify-center" style="margin-top: 30px;">
                                <a href="{{ route('admin-item-index') }}" style="color: black">
                                    <div class="tf-button style-1 h50 active" formaction="{{ route('admin-item-index') }}">
                                        Cancle
                                    </div>
                                </a>
                                <button class="tf-button style-1 h50" type="submit">Submit item</button>
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
                <div class="product-item offers mt-10">
                    <h6>List Image</h6>
                    <i class="icon-keyboard_arrow_down"></i>
                    <div class="content">
                        <div class="table-heading">
                            <div class="column" style="width: 10% !important;">NO</div>
                            <div class="column">Gambar</div>
                            <div class="column">Url</div>
                            <div class="column">AKSI</div>
                        </div>

                        @foreach($item->images as $key => $item)
                        <div class="table-item">
                            <div class="column" style="width: 10% !important;">{{ $key+1 }}</div>
                            <div class="column">
                                <div class="card-media">
                                    <img src="{{$item->url}}" alt="" class="avatar" style="height: 100px; width: 100px">
                                </div>
                            </div>
                            <div class="column">{{$item->url}}</div>
                            <div class="column flex gap30">
                                <a <?php echo ("href=/admin/item/delete/" . $item->id) ?> class="icon">
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