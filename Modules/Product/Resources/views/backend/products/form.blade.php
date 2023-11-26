{{--<div class="row">--}}
{{--    <div class="row">--}}
{{--        <div class="col-6 col-sm-4 mb-3">--}}
{{--            <div class="form-group">--}}
{{--                <?php--}}
{{--                $field_name = 'product_type';--}}
{{--                $field_lable = label_case($field_name);--}}
{{--                $field_placeholder = "-- Chọn loại sản phẩm --";--}}
{{--                $required = "required";--}}
{{--                $select_options = [--}}
{{--                    '0' => 'Sản phẩm thông thường',--}}
{{--                    '1' => 'Sản phẩm có biến thể'--}}
{{--                ];--}}
{{--                $default_option = '0';--}}
{{--                ?>--}}
{{--                {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}--}}
{{--                {{ html()->select($field_name, $select_options, $default_option)->placeholder($field_placeholder)--}}
{{--                        ->class('form-control select2')->id('product_type')--}}
{{--                        ->attributes(["$required"]) }}--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div id="product-option-container" class="col-6 col-sm-4 mb-3"></div>--}}
{{--    </div>--}}
{{--    <div id="attribute-container" class="row">--}}
{{--    </div>--}}
{{--</div>--}}
<div class="row">
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'product_name';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->id('name')->attributes(["$required"]) }}
            @if($errors->has('product_name')) {{ html()->span($errors->first('product_name'))->class('text-danger') }} @endif
        </div>
    </div>
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'product_slug';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->id('slug')->attributes(["$required"]) }}
            @if($errors->has('product_slug')) {{ html()->span($errors->first('product_slug'))->class('text-danger') }} @endif
        </div>
    </div>
    <div class="col-12 col-sm-2 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'brand';
            $field_lable = label_case($field_name);
            $field_placeholder = "-- Brand --";
            $required = "";
            $select_options = \Modules\Brand\Models\Brand::query()->get()->pluck('brand_name', 'id')->toArray();
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name."_id", $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"]) }}
            @if($errors->has('brand')) {{ html()->span($errors->first('brand'))->class('text-danger') }} @endif
        </div>
    </div>
    <div class="col-12 col-sm-2 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'status';
            $field_lable = label_case($field_name);
            $field_placeholder = "-- Status --";
            $required = "";
            $default_option = $data->status ?? '';
            $select_options = [
                '1'=>'Công khai',
                '0'=>'Không công khai',
                '2'=>'Bản Nháp'
            ];
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"])->value($default_option) }}
            @if($errors->has('status')) {{ html()->span($errors->first('status'))->class('text-danger') }} @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'product_price';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->placeholder($field_placeholder)->class('form-control')->id('slug')->attributes(["$required"]) }}
            @if($errors->has('product_price')) {{ html()->span($errors->first('product_price'))->class('text-danger') }} @endif
        </div>
    </div>
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'product_quantity';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->number($field_name)->placeholder($field_placeholder)->class('form-control')->id('slug')->attributes(["$required"]) }}
            @if($errors->has('product_quantity')) {{ html()->span($errors->first('product_quantity'))->class('text-danger') }} @endif
        </div>
    </div>
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'product_image';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->class('form-control')->id('slug')->attributes(["$required"]) }}
            @if($errors->has('product_image')) {{ html()->span($errors->first('product_image'))->class('text-danger') }} @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'detail';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
            @if($errors->has('detail')) {{ html()->span($errors->first('detail'))->class('text-danger') }} @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'description';
            $field_lable = __('Description');
            $field_placeholder = '';
            $required = '';
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->placeholder($field_placeholder)->id('description')->class('form-control')->attributes(["$required"]) }}
            @if($errors->has('description')) {{ html()->span($errors->first('description'))->class('text-danger') }} @endif
        </div>
    </div>
</div>

<x-library.select2 />

@push('after-styles')
    <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet">
    <style>
        .note-editor.note-frame :after {
            display: none;
        }

        .note-editor .note-toolbar .note-dropdown-menu,
        .note-popover .popover-content .note-dropdown-menu {
            min-width: 180px;
        }
    </style>
@endpush

@push('after-scripts')
    <script type="module" src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"></script>
    <script type="module">
        var lfm = function(options, cb) {
            var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
            window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
            window.SetUrl = cb;
        };

        var LFMButton = function(context) {
            var ui = $.summernote.ui;
            var button = ui.button({
                contents: '<i class="note-icon-picture"></i> ',
                tooltip: 'Insert image with filemanager',
                click: function() {

                    lfm({
                        type: 'image',
                        prefix: '/laravel-filemanager'
                    }, function(lfmItems, path) {
                        lfmItems.forEach(function(lfmItem) {
                            context.invoke('insertImage', lfmItem.url);
                        });
                    });

                }
            });
            return button.render();
        };

        $('#description').summernote({
            height: 300,
            toolbar: [
                ['style', ['style']],
                ['font', ['fontname', 'fontsize', 'bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'lfm', 'video']],
                ['view', ['codeview', 'undo', 'redo', 'help']],
            ],
            buttons: {
                lfm: LFMButton
            }
        });
    </script>
@endpush
