@extends('layouts.admin')

@section('content')
<div class="tf-section-2 product-detail">
    <div class="themesflat-container">
        <div class="row">
            <div data-wow-delay="0s" class="wow fadeInUp col-12">
                <div class="widget-content-inner description">
                    <!-- novalidate="novalidate" -->
                    <form id="commentform" class="comment-form" <?php echo ("action=/admin/item/update/" . $item->id) ?> method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="wrap-content w-full">
                            <fieldset class="name">
                                <label>Lini Produk *</label>
                                <select id="brand_id" name="divisi_id" required>
                                    <option value="">Pilih divisi: </option>
                                    @foreach($divisi as $data)
                                    <option value="{{$data->id}}" {{ ($item->divisi_id == $data->id) ? 'selected' : '' }}>{{$data->nama}}</option>
                                    @endforeach
                                </select>
                            </fieldset>

                            <fieldset class="name">
                                <label>Brand *</label>
                                <select id="brand_id" name="brand_id" required>
                                    @foreach($brands as $brand)
                                    <option value="{{$brand->id}}" {{ ($item->brand_id == $brand->id) ? 'selected' : '' }}>{{$brand->nama}}</option>
                                    @endforeach
                                </select>
                            </fieldset>

                            <fieldset class="name">
                                <label>Category *</label>
                                <select id="cagory_id" name="category_id" required>
                                    <option value="">Pilih category: </option>
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}" {{ ($item->category_id == $category->id) ? 'selected' : '' }}>{{$category->nama}}</option>
                                    @endforeach
                                </select>
                            </fieldset>

                            <fieldset class="name">
                                <label>Subcategory *</label>
                                <select id="subcategory_id" name="subcategory_id" required>
                                    <option value="">Pilih subcategory: </option>
                                    @foreach($subcategories as $subcategory)
                                    <option value="{{$subcategory->id}}" {{ ($item->subcategory_id == $subcategory->id) ? 'selected' : '' }}>{{$subcategory->nama}}</option>
                                    @endforeach
                                </select>
                            </fieldset>

                            <fieldset class="name">
                                <label>Nama Produk</label>
                                <input value="{{old('nama_produk', $item->nama_produk)}}" type="text" id="nama_produk" placeholder="Nama Produk" name="nama_produk" tabindex="2" value="" aria-required="true" required="">
                            </fieldset>

                            <fieldset class="name">
                                <label>Masa Berlaku Produk</label>
                                <input value="{{old('masa_berlaku_produk', $item->masa_berlaku_produk)}}" type="text" id="masa_berlaku_produk" placeholder="Mana Berlaku Produk" name="masa_berlaku_produk" tabindex="2" value="" aria-required="true" required>
                            </fieldset>

                            <fieldset class="name">
                                <label>Satuan</label>
                                <select id="satuan" name="satuan" required>
                                    <option value="">Pilih satuan: </option>
                                    <option value="unit" {{ ($item->satuan == "unit") ? 'selected' : '' }}>Unit</option>
                                    <option value="set" {{ ($item->satuan == "set") ? 'selected' : '' }}>Set</option>
                                    <option value="pcs" {{ ($item->satuan == "pcs") ? 'selected' : '' }}>Pcs</option>
                                    <option value="ls" {{ ($item->satuan == "ls") ? 'selected' : '' }}>Ls</option>
                                </select>
                            </fieldset>

                            <fieldset class="name">
                                <label>Jenis Produk</label>
                                <select id="jenis_produk" name="jenis_produk" required>
                                    <option value="">Pilih jenis produk: </option>
                                    <option value="impor" {{ ($item->jenis_produk == "import") ? 'selected' : '' }}>Impor</option>
                                    <option value="pdn" {{ ($item->jenis_produk == "pdn") ? 'selected' : '' }}>PDN</option>
                                </select>
                            </fieldset>

                            <div class="flex gap30">
                                <fieldset class="price">
                                    <label>Nilai TKDN</label>
                                    <input value="{{old('nilai_tkdn', $item->nilai_tkdn)}}" type="text" id="nilai_tkdn" placeholder="Nilai TKDN" name="nilai_tkdn" tabindex="2" value="" aria-required="true">
                                </fieldset>
                                <fieldset class="price">
                                    <label>Nilai BMP</label>
                                    <input value="{{old('nilai_bmp', $item->nilai_bmp)}}" type="text" id="nilai_bmp" placeholder="Nilai BMP" name="nilai_bmp" tabindex="2" value="" aria-required="true">
                                </fieldset>
                            </div>

                            <fieldset class="price">
                                <label>Harga</label>
                                <input value="{{old('harga' , $item->harga)}}" type="text" id="harga" placeholder="Harga" name="harga" tabindex="2" value="" aria-required="true" required>
                            </fieldset>

                            <fieldset>
                                <label>Deskripsi</label>
                                <textarea value="{{old('deskripsi')}}" name="deskripsi" rows="4" placeholder="Spesifikasi Teknis" tabindex="4">{{$item->deskripsi}}</textarea>
                            </fieldset>

                            <fieldset class="name">
                                <label>Negara Asal Produk</label>
                                <input value="{{old('negara_asal_produk', $item->negara_asal_produk)}}" type="text" id="negara_asal_produk" placeholder="Negara asal produk" name="negara_asal_produk" tabindex="2" value="" aria-required="true" required>
                            </fieldset>

                            <!-- Field Laptop / PC / AiO / Server -->
                            <div id="form-full-data" {{$item->subcategory_id == 1 || $item->subcategory_id == 4 || $item->subcategory_id == 14 ? '' : 'hidden' }}>
                                <fieldset class="name">
                                    <label>Tipe</label>
                                    <input value="{{old('type', $item->type)}}" type="text" id="type" placeholder="Type" name="type" tabindex="2" value="" aria-required="true">
                                </fieldset>

                                <fieldset class="name">
                                    <label>Prosesor</label>
                                    <input value="{{old('prosesor', $item->prosesor)}}" type="text" id="prosesor" placeholder="Prosesor" name="prosesor" tabindex="2" value="" aria-required="true">
                                </fieldset>

                                <fieldset class="name">
                                    <label>RAM</label>
                                    <input value="{{old('ram', $item->ram)}}" type="text" id="ram" placeholder="RAM" name="ram" tabindex="2" value="" aria-required="true">
                                </fieldset>

                                <fieldset class="name">
                                    <label>Storage</label>
                                    <input value="{{old('storage', $item->storage)}}" type="text" id="storage" placeholder="Storage" name="storage" tabindex="2" value="" aria-required="true">
                                </fieldset>

                                <fieldset class="name">
                                    <label>VGA</label>
                                    <input value="{{old('vga', $item->vga)}}" type="text" id="vga" placeholder="VGA" name="vga" tabindex="2" aria-required="true">
                                </fieldset>

                                <fieldset class="name">
                                    <label>Sistem Operasi</label>
                                    <input value="{{old('sistem_operasi', $item->sistem_operasi)}}" type="text" id="sistem_operasi" placeholder="Sistem Operasi" name="sistem_operasi" tabindex="2" value="" aria-required="true">
                                </fieldset>
                            </div>
                            <!-- Field Laptop / PC / AiO / Server -->

                            <fieldset class="name">
                                <label>Garansi</label>
                                <input value="{{old('garansi', $item->garansi)}}" type="text" id="garansi" placeholder="Garansi" name="garansi" tabindex="2" value="" aria-required="true">
                            </fieldset>

                            <fieldset>
                                <label>Keterangan</label>
                                <textarea value="{{old('keterangan')}}" name="keterangan" rows="4" placeholder="Keterangan" tabindex="4">{{$item->keterangan}}</textarea>
                            </fieldset>

                            <fieldset class="name">
                                <label>Web Marketplace</label>
                                <input value="{{old('web_marketplace', $item->web_marketplace)}}" type="text" id="web_marketplace" placeholder="Web Link" name="web_marketplace" tabindex="2" value="" aria-required="true">
                            </fieldset>

                            <fieldset class="name">
                                <label>Quantity</label>
                                <input value="{{old('quantity', $item->quantity)}}" type="number" id="quantity" name="quantity" tabindex="2">
                            </fieldset>

                            <div class="wrap-upload">
                                <label class="uploadfile h-full">
                                    <div class="text-center">
                                        <h5>Upload file</h5>
                                        <p class="text">Choose your file to upload</p>
                                        <div class="text filename"></div>
                                        <input type="file" class="" name="image" accept="image/png, image/jpeg">
                                    </div>
                                </label>
                            </div>

                            <div class="btn-submit flex justify-between">
                                <div></div>
                                <div class="flex gap30 soft-right">
                                    <a href="{{ route('admin-item-index') }}" style="color: black">
                                        <button class="tf-button style-1 h50 active">
                                            Cancel
                                        </button>
                                    </a>
                                    <button class="tf-button style-1 h50" type="submit">Update item</button>
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
</script>
@stop