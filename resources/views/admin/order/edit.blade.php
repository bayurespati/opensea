@extends('layouts.admin')

@section('content')
<div class="tf-section-2 product-detail">
    <div class="themesflat-container">
        <div class="row">
            <div data-wow-delay="0s" class="wow fadeInUp col-12">
                <div class="widget-content-inner description" style="margin-bottom: 40px;">
                    <!-- novalidate="novalidate" -->
                    <form id="commentform" class="comment-form" <?php echo ("action=/admin/order/update/" . $order->id) ?> method="POST">
                        @csrf
                        <div class="flex gap30">
                            <fieldset class="properties">
                                <label>Kode</label>
                                <input value="{{ $order->code }}" type="text" tabindex="2" value="" aria-required="true" disabled>
                            </fieldset>
                            <fieldset class="properties">
                                <label>Total Price</label>
                                <input value="{{ number_format($order->total_price, 2, '.', ',') }}" type="text" tabindex="2" value="" aria-required="true" disabled>
                            </fieldset>
                        </div>

                        <fieldset class="name">
                            <label>Status *</label>
                            <select id="status" name="status" required>
                                @foreach($list_status as $status)
                                <option value="{{ $status }}" {{ ($order->status == $status) ? 'selected' : '' }}>{{ $status }}</option>
                                @endforeach
                            </select>
                        </fieldset>

                        <div class="btn-submit flex gap30 justify-center">
                            <button class="tf-button style-1 h50 active">
                                <a href="/admin/order" style="color: black">
                                    Cancel
                                </a>
                            </button>
                            <button class="tf-button style-1 h50" type="submit">Update order</button>
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

            <div class="wrap-content w-full">
                <!-- table -->
                <div class="product-item offers mt-10">
                    <h6>List Perangkat</h6>
                    <i class="icon-keyboard_arrow_down"></i>
                    <div class="content">
                        <div class="table-heading">
                            <div class="column" style="width: 10% !important;">NO</div>
                            <div class="column">PRODUK</div>
                            <div class="column">BRAND</div>
                            <div class="column">HARGA</div>
                            <div class="column">QTY</div>
                        </div>

                        @foreach($order->order_items as $key => $item)
                        <div class="table-item">
                            <div class="column" style="width: 10% !important;">{{ $key+1 }}</div>
                            <div class="column">{{$item->item_nama}}</div>
                            <div class="column">{{$item->brand->nama}}</div>
                            <div class="column">{{number_format($item->item_harga, 2, '.', ',')}}</div>
                            <div class="column">{{$item->qty}}</div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- table -->
                <div class="product-item offers mt-10">
                    <h6>List SPH</h6>
                    <i class="icon-keyboard_arrow_down"></i>
                    <div class="content">
                        <div class="table-heading">
                            <div class="column" style="width: 10% !important;">NO</div>
                            <div class="column">KEPADA</div>
                            <div class="column">NAMA PIC</div>
                            <div class="column">TELPON</div>
                            <div class="column">CREATE</div>
                            <div class="column">ACTION</div>
                        </div>

                        @foreach($order->sph as $key => $item)
                        <div class="table-item">
                            <div class="column" style="width: 10% !important;">{{ $key+1 }}</div>
                            <div class="column">{{$item->kepada}}</div>
                            <div class="column">{{$item->nama_pic}}</div>
                            <div class="column">{{$item->no_telpon}}</div>
                            <div class="column">{{ date('d-m-Y', strtotime($item->created_at)) }}</div>
                            <div class="column">
                                <form id="commentform" class="comment-form" action="/download-sph" method="GET">
                                    <input name="sph_id" value="{{$item->id}}" hidden>
                                    <div class="btn-submit">
                                        <button class="tf-button style-1 h50" type="submit">Download</button>
                                    </div>
                                </form>
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