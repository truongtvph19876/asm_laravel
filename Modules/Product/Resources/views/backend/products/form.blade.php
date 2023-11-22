<div class="row">
    <div class="row">
        <div class="col-6 col-sm-4 mb-3">
            <div class="form-group">
                <?php
                $field_name = 'product_type';
                $field_lable = label_case($field_name);
                $field_placeholder = "-- Chọn loại sản phẩm --";
                $required = "required";
                $select_options = [
                    '0' => 'Sản phẩm thông thường',
                    '1' => 'Sản phẩm có biến thể'
                ];
                $default_option = '0';
                ?>
                {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
                {{ html()->select($field_name, $select_options, $default_option)->placeholder($field_placeholder)
                        ->class('form-control select2')->id('product_type')
                        ->attributes(["$required"]) }}
            </div>
        </div>
        <div id="product-option-container" class="col-6 col-sm-4 mb-3"></div>
    </div>
    <div id="attribute-container" class="row">
    </div>
</div>
<div class="row">
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'name';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->id('name')->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'slug';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->id('slug')->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'status';
            $field_lable = label_case($field_name);
            $field_placeholder = "-- Select an option --";
            $required = "";
            $select_options = [
                '1'=>'Published',
                '0'=>'Unpublished',
                '2'=>'Draft'
            ];
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"]) }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'description';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
</div>

<x-library.select2 />


