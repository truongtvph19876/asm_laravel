<div class="row">
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            @php
            $field_name = 'brand_name';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            @endphp
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
            @if($errors->has('brand_name')) {{ html()->span($errors->first('brand_name'))->class('text-danger') }} @endif
        </div>
    </div>
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'brand_logo';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->file($field_name)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-12 col-sm-4 mb-3">
        <div class="form-group">
            <?php
            $field_name = 'status';
            $field_lable = label_case($field_name);
            $field_placeholder = "-- Chọn --";
            $required = "";
            $select_options = [
                '1'=>'Công khai',
                '0'=>'Không công khai',
                '2'=>'Lưu Nháp'
            ];
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control select2')->attributes(["$required"]) }}
            @if($errors->has('status')) {{ html()->span($errors->first('status'))->class('text-danger') }} @endif
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
            $error_message = $errors->description ?? '';
            ?>
            {{ html()->label($field_lable, $field_name)->class('form-label') }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
            {{ html()->span()->class('text-danger') }}
        </div>
    </div>
</div>

<x-library.select2 />
