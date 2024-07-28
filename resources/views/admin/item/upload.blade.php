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
                <div class="widget-content-inner upload active">
                    <div class="wrap-upload w-full">
                        <form id="commentform" class="comment-form" action="/admin/item/upload" method="POST" enctype="multipart/form-data" novalidate="novalidate">
                            @csrf
                            <label class="uploadfile">
                                <h5>Upload file</h5>
                                <p class="text">Drag or choose your file to upload</p>
                                <div class="text filename">Format file excel</div>
                                <input type="file" class="" name="file">
                            </label>
                            <div class="btn-submit flex gap30 justify-center" style="margin-top: 30px;">
                                <a href="{{ route('admin-item-index') }}" style="color: black">
                                    <div class="tf-button style-1 h50 active" formaction="{{ route('admin-item-index') }}">
                                        Cancel
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
            </div>
        </div>
    </div>
</div>
@stop