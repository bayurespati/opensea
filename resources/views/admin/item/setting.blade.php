@extends('layouts.admin')

@section('content')
<div class="tf-section-2 product-detail">
    <div class="themesflat-container">
        <div class="row">
            <div data-wow-delay="0s" class="wow fadeInUp col-12">
                <div class="widget-content-inner description">
                    <!-- novalidate="novalidate" -->
                    <form id="commentform" class="comment-form" <?php echo ("action=/admin/item/update-setting/" . $item->id) ?> method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="wrap-content w-full">

                            <fieldset class="name">
                                <label>Show Status</label>
                                <select id="satuan" name="is_featured">
                                    <option value="">Pilih show status: </option>
                                    <option value="1" {{ ($item->is_featured == 1) ? 'selected' : '' }}>Ya</option>
                                    <option value="0" {{ ($item->is_featured == 0) ? 'selected' : '' }}>Tidak</option>
                                </select>
                            </fieldset>

                            <fieldset class="name">
                                <label>Diskon </label>
                                <select id="diskon_id" name="diskon_id">
                                    @if($item->diskon_id == null)
                                    <option value="">Pilih diskon: </option>
                                    @endif
                                    <option value="">Tidak</option>
                                    @foreach($diskons as $diskon)
                                    <option value="{{$diskon->id}}" {{ ($item->diskon_id == $diskon->id) ? 'selected' : '' }}>{{ $diskon->nama }} - {{$diskon->nilai}}</option>
                                    @endforeach
                                </select>
                            </fieldset>

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