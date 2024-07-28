@extends('layouts.admin')

@section('content')
<div class="themesflat-container">
    <div class="row">
        <div data-wow-delay="0s" class="wow fadeInUp col-12">
            <div class="widget-content-inner upload active">
                <!-- novalidate="novalidate" -->
                <form id="commentform" class="comment-form" action="/admin/item/store" method="POST" enctype="multipart/form-data" novalidate="novalidate">
                    @csrf
                    <div class="wrap-upload w-full">
                        <fieldset class="name">
                            <label>Lini Produk *</label>
                            <select id="brand_id" name="divisi_id" required>
                                <option value="">Pilih divisi: </option>
                                @foreach($divisi as $data)
                                <option value="{{$data->id}}">{{$data->nama}}</option>
                                @endforeach
                            </select>
                        </fieldset>

                        <fieldset class="name">
                            <label>Brand *</label>
                            <select id="brand_id" name="brand_id" required>
                                <option value="">Pilih brand: </option>
                                @foreach($brands as $brand)
                                <option value="{{$brand->id}}">{{$brand->nama}}</option>
                                @endforeach
                            </select>
                        </fieldset>

                        <fieldset class="name">
                            <label>Category *</label>
                            <select id="cagory_id" name="category_id" required>
                                <option value="">Pilih category: </option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->nama}}</option>
                                @endforeach
                            </select>
                        </fieldset>

                        <fieldset class="name">
                            <label>Subcategory *</label>
                            <select id="subcategory_id" name="subcategory_id" required>
                                <option value="">Pilih subcategory: </option>
                                @foreach($subcategories as $subcategory)
                                <option value="{{$subcategory->id}}">{{$subcategory->nama}}</option>
                                @endforeach
                            </select>
                        </fieldset>

                        <fieldset class="name">
                            <label>Nama Produk</label>
                            <input value="{{old('nama_produk')}}" type="text" id="nama_produk" placeholder="Nama Produk" name="nama_produk" tabindex="2" value="" aria-required="true" required="">
                        </fieldset>

                        <fieldset class="name">
                            <label>Masa Berlaku Produk</label>
                            <input value="{{old('masa_berlaku_produk')}}" type="text" id="masa_berlaku_produk" placeholder="Mana Berlaku Produk" name="masa_berlaku_produk" tabindex="2" value="" aria-required="true" required>
                        </fieldset>

                        <fieldset class="name">
                            <label>Satuan</label>
                            <select id="satuan" name="satuan" required>
                                <option value="">Pilih satuan: </option>
                                <option value="unit">Unit</option>
                                <option value="set">Set</option>
                                <option value="pcs">Pcs</option>
                                <option value="ls">Ls</option>
                            </select>
                        </fieldset>

                        <fieldset class="name">
                            <label>Jenis Produk</label>
                            <select id="jenis_produk" name="jenis_produk" required>
                                <option value="">Pilih jenis produk: </option>
                                <option value="import">Impor</option>
                                <option value="pdn">PDN</option>
                            </select>
                        </fieldset>

                        <div class="flex gap30">
                            <fieldset class="price">
                                <label>Nilai TKDN</label>
                                <input value="{{old('nilai_tkdn')}}" type="text" id="nilai_tkdn" placeholder="Nilai TKDN" name="nilai_tkdn" tabindex="2" value="" aria-required="true" required>
                            </fieldset>
                            <fieldset class="price">
                                <label>Nilai BMP</label>
                                <input value="{{old('nilai_bmp')}}" type="text" id="nilai_bmp" placeholder="Nilai BMP" name="nilai_bmp" tabindex="2" value="" aria-required="true" required>
                            </fieldset>
                        </div>

                        <fieldset class="price">
                            <label>Harga</label>
                            <input value="{{old('harga')}}" type="text" id="harga" placeholder="Harga" name="harga" tabindex="2" value="" aria-required="true" required>
                        </fieldset>

                        <fieldset>
                            <label>Deskripsi</label>
                            <textarea value="{{old('deskripsi')}}" name="deskripsi" rows="4" placeholder="Spesifikasi Teknis" tabindex="4"></textarea>
                        </fieldset>

                        <fieldset class="name">
                            <label>Negara Asal Produk</label>
                            <input value="{{old('negara_asal_produk')}}" type="text" id="negara_asal_produk" placeholder="Negara asal produk" name="negara_asal_produk" tabindex="2" value="" aria-required="true" required>
                        </fieldset>

                        <!-- Field Laptop / PC / AiO / Server -->
                        <div id="form-full-data" hidden>
                            <fieldset class="name">
                                <label>Tipe</label>
                                <input value="{{old('type')}}" type="text" id="type" placeholder="Type" name="type" tabindex="2" value="" aria-required="true">
                            </fieldset>

                            <fieldset class="name">
                                <label>Prosesor</label>
                                <input value="{{old('prosesor')}}" type="text" id="prosesor" placeholder="Prosesor" name="prosesor" tabindex="2" value="" aria-required="true">
                            </fieldset>

                            <fieldset class="name">
                                <label>RAM</label>
                                <input value="{{old('ram')}}" type="text" id="ram" placeholder="RAM" name="ram" tabindex="2" value="" aria-required="true">
                            </fieldset>

                            <fieldset class="name">
                                <label>Storage</label>
                                <input value="{{old('storage')}}" type="text" id="storage" placeholder="Storage" name="storage" tabindex="2" value="" aria-required="true">
                            </fieldset>

                            <fieldset class="name">
                                <label>VGA</label>
                                <input value="{{old('vga')}}" type="text" id="vga" placeholder="VGA" name="vga" tabindex="2" aria-required="true">
                            </fieldset>

                            <fieldset class="name">
                                <label>Sistem Operasi</label>
                                <input value="{{old('sistem_operasi')}}" type="text" id="sistem_operasi" placeholder="Sistem Operasi" name="sistem_operasi" tabindex="2" value="" aria-required="true">
                            </fieldset>
                        </div>
                        <!-- Field Laptop / PC / AiO / Server -->

                        <fieldset class="name">
                            <label>Garansi</label>
                            <input value="{{old('garansi')}}" type="text" id="garansi" placeholder="Garansi" name="garansi" tabindex="2" value="" aria-required="true">
                        </fieldset>

                        <fieldset>
                            <label>Keterangan</label>
                            <textarea value="{{old('keterangan')}}" name="keterangan" rows="4" placeholder="Keterangan" tabindex="4"></textarea>
                        </fieldset>

                        <fieldset class="name">
                            <label>Web Marketplace</label>
                            <input value="{{old('web_marketplace')}}" type="text" id="web_marketplace" placeholder="Wireless Network Protocol" name="web_marketplace" tabindex="2" value="" aria-required="true">
                        </fieldset>

                        <div class="wrap-upload">
                            <label class="uploadfile h-full">
                                <div class="text-center">
                                    <h5>Upload file</h5>
                                    <p class="text">Choose your file to upload</p>
                                    <div class="text filename"></div>
                                    <input type="file" class="" name="image" accept="image/png, image/jpeg" multiple>
                                </div>
                            </label>
                        </div>

                        <div class="btn-submit flex justify-between">
                            <div></div>
                            <div class="flex gap30 soft-right">
                                <a href="{{ route('admin-item-index') }}" style="color: black">
                                    <div class="tf-button style-1 h50 active" formaction="{{ route('admin-item-index') }}">
                                        Cancel
                                    </div>
                                </a>
                                <button class="tf-button style-1 h50" type="submit">Submit item</button>
                            </div>
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
<script>
    $("#nilai_tkdn").on("keyup", function(event) {
        var selection = window.getSelection().toString();
        if (selection !== '') {
            return;
        }
        // When the arrow keys are pressed, abort.
        if ($.inArray(event.keyCode, [38, 40, 37, 39]) !== -1) {
            return;
        }
        var $this = $(this);
        // Get the value.
        var input = $this.val();
        input = input.replace(/[\D\s\._\-]+/g, "");
        input = input ? parseInt(input, 10) : 0;
        $this.val(function() {
            return (input === 0) ? "" : input.toLocaleString("en-US");
        });
    })
    $("#nilai_bmp").on("keyup", function(event) {
        var selection = window.getSelection().toString();
        if (selection !== '') {
            return;
        }
        // When the arrow keys are pressed, abort.
        if ($.inArray(event.keyCode, [38, 40, 37, 39]) !== -1) {
            return;
        }
        var $this = $(this);
        // Get the value.
        var input = $this.val();
        input = input.replace(/[\D\s\._\-]+/g, "");
        input = input ? parseInt(input, 10) : 0;
        $this.val(function() {
            return (input === 0) ? "" : input.toLocaleString("en-US");
        });
    })
    $("#harga").on("keyup", function(event) {
        var selection = window.getSelection().toString();
        if (selection !== '') {
            return;
        }
        // When the arrow keys are pressed, abort.
        if ($.inArray(event.keyCode, [38, 40, 37, 39]) !== -1) {
            return;
        }
        var $this = $(this);
        // Get the value.
        var input = $this.val();
        input = input.replace(/[\D\s\._\-]+/g, "");
        input = input ? parseInt(input, 10) : 0;
        $this.val(function() {
            return (input === 0) ? "" : input.toLocaleString("en-US");
        });
    })
    $(document).on("input", ".category-check", function() {
        let value = $(this).val();

        let index = category_id.indexOf(value);

        if (index == -1) {
            category_id.push(value)
        } else {
            category_id.splice(index, 1);
        }
        filterSubCategory()
    });

    $(document).on("change", "#subcategory_id", function() {
        let value = $(this).val();

        let is_show = value == 1 || value == 14 || value == 4;

        $("#form-full-data").attr("hidden", !is_show);
    });
</script>
@stop