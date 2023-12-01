@extends('frontend.layouts.app')

@section('title') {{$$module_name_singular->name}} - {{ __($module_title) }} @endsection

@section('content')
    <div class="container">
        <div class="row">
            <ul class="breadcrumb">
                <li><a href="/"><i class="fa fa-home"></i></a></li>
                <li><a href="{{ route('frontend.orders.index') }}">Đơn hàng</a></li>
                <li><a href="{{ route('frontend.orders.show', $$module_name_singular) }}">{{ $$module_name_singular->product_name }}</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <h2 class="text-center">Chi tiết đơn hàng</h2>

        <form action="{{ route('frontend.orders.destroy', $$module_name_singular) }}" method="POST">
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-center">Thông tin giao hàng</h2>
                <hr>
                <div class="row">
                    <div class="col-md-6 form-group">
                        @php
                            $label_value = "Họ tên";
                            $input_name = 'recipient_name';
                            $input_value = $$module_name_singular->recipient_name;
                            $placeholder = "Họ và tên";
                            $required = 'required';
                            $disable = true;
                        @endphp
                        {{ html()->label($label_value)->for($input_name) }} {!!  $required ? "<span style='color: red'>*</span>" : ''  !!}
                        {{ html()->input('text', $input_name)->value($input_value)->id($input_name)->class('form-control')->placeholder($placeholder)->disabled($disable) }}
                        @if ($errors->has($input_name)) {{ html()->span($errors->first($input_name))->class('text-danger') }} @endif
                    </div>
                    <div class="col-md-6 form-group">
                        @php
                            $label_value = "Số điện thoại";
                            $input_name = 'recipient_phone';
                            $placeholder = "Số điện thoại";
                            $required = 'required';
                            $input_value = $$module_name_singular->recipient_phone;
                            $disable = true;
                        @endphp
                        {{ html()->label($label_value)->for($input_name) }} {!!  $required ? "<span style='color: red'>*</span>" : ''  !!}
                        {{ html()->input('text', $input_name)->value($input_value)->id($input_name)->class('form-control')->placeholder($placeholder)->disabled($disable) }}
                        @if ($errors->has($input_name)) {{ html()->span($errors->first($input_name))->class('text-danger') }} @endif
                    </div>
                </div>
                <div class="row">
                    <div>
                        <div class="form-group col-md-4">
                            @php
                                $label_value = "Tỉnh/Thành Phố";
                                $input_name = 'city';
                                $placeholder = "Tỉnh/Thành phố";
                                $required = 'required';
                                $input_value = $$module_name_singular->recipient_city;
                                $disable = true;
                            @endphp
                            {{ html()->label($label_value)->for($input_name) }} {!!  $required ? "<span style='color: red'>*</span>" : ''  !!}
                            {{ html()->input($input_name)->value($input_value)->id($input_name)->class('form-select-lg form-control')->placeholder($placeholder)->disabled($disable) }}
                            @if ($errors->has($input_name)) {{ html()->span($errors->first($input_name))->class('text-danger') }} @endif
                        </div>
                        <div class="form-group col-md-4">
                            @php
                                $label_value = "Quận/Huyện";
                                $input_name = 'district';
                                $placeholder = "Quận/Huyện";
                                $required = 'required';
                                $input_value = $$module_name_singular->recipient_district;
                                $disable = true;
                            @endphp
                            {{ html()->label($label_value)->for($input_name) }} {!!  $required ? "<span style='color: red'>*</span>" : ''  !!}
                            {{ html()->input($input_name)->value($input_value)->id($input_name)->class('form-select-lg form-control')->placeholder($placeholder)->disabled($disable) }}
                            @if ($errors->has($input_name)) {{ html()->span($errors->first($input_name))->class('text-danger') }} @endif
                        </div>
                        <div class="form-group col-md-4">
                            @php
                                $label_value = "Xã/Phường";
                                $input_name = 'ward';
                                $placeholder = "Xã/Phường";
                                $required = 'required';
                                $input_value = $$module_name_singular->recipient_ward;
                                $disable = true;
                            @endphp
                            {{ html()->label($label_value)->for($input_name) }} {!!  $required ? "<span style='color: red'>*</span>" : ''  !!}
                            {{ html()->input($input_name)->value($input_value)->id($input_name)->class('form-select-lg form-control')->placeholder($placeholder)->disabled($disable) }}
                            @if ($errors->has($input_name)) {{ html()->span($errors->first($input_name))->class('text-danger') }} @endif
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 form-group">
                        @php
                            $label_value = "Địa chỉ nhà";
                            $input_name = 'detail_address';
                            $placeholder = "Địa chỉ nhà";
                            $required = 'required';
                            $input_value = $$module_name_singular->recipient_detail_address;
                            $disable = true;
                        @endphp
                        {{ html()->label($label_value)->for($input_name) }} {!!  $required ? "<span style='color: red'>*</span>" : ''  !!}
                        {{ html()->input($input_name)->value($input_value)->id($input_name)->class('form-select-lg form-control')->placeholder($placeholder)->disabled($disable) }}
                        @if ($errors->has($input_name)) {{ html()->span($errors->first($input_name))->class('text-danger') }} @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            @php
                                $label_value = "Ghi chú";
                                $input_name = 'note';
                                $placeholder = "Ghi chú";
                                $required = '';
                                $input_value = $$module_name_singular->note;
                                $disable = true;
                            @endphp
                            {{ html()->label($label_value)->for($input_name) }} {!!  $required ? "<span style='color: red'>*</span>" : ''  !!}
                            {{ html()->input($input_name)->value($input_value)->id($input_name)->class('form-select-lg form-control')->placeholder($placeholder)->disabled($disable) }}
                            @if ($errors->has($input_name)) {{ html()->span($errors->first($input_name))->class('text-danger') }} @endif
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                @php
                                    $label_value = "Phương thức thanh toán";
                                    $input_name = 'payment_method';
                                    $placeholder = "Phương thức thanh toán";
                                    $required = '';
                                    $input_value = $$module_name_singular->payment->payment_name;
                                    $disable = true;
                                @endphp
                                {{ html()->label($label_value)->for($input_name) }} {!!  $required ? "<span style='color: red'>*</span>" : ''  !!}
                                {{ html()->input($input_name)->value($input_value)->id($input_name)->class('form-select-lg form-control')->placeholder($placeholder)->disabled($disable) }}
                                @if ($errors->has($input_name)) {{ html()->span($errors->first($input_name))->class('text-danger') }} @endif
                            </div>
                            <div class="col-md-6">
                                @php
                                    $label_value = "Trạng thái đơn hàng";
                                    $input_name = '';
                                    $placeholder = "Trạng thái đơn hàng";
                                    $required = '';
                                    $input_value = $$module_name_singular->status->status;
                                    $disable = true;
                                    $red_status = [1, 6, 7];
                                    $class = 'form-select-lg form-control';
                                    if (in_array($$module_name_singular->status_id, $red_status)){
                                        $class .= ' color-red';
                                    } else {
                                         $class .= ' color-green';
                                    }
                                @endphp
                                {{ html()->label($label_value)->for($input_name) }} {!!  $required ? "<span style='color: red'>*</span>" : ''  !!}
                                {{ html()->input($input_name)->value($input_value)->id($input_name)->class($class)->placeholder($placeholder)->disabled($disable) }}
                                @if ($errors->has($input_name)) {{ html()->span($errors->first($input_name))->class('text-danger') }} @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="text-center">Thông tin đơn hàng</h2>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-4">
                            <img src="{{ Storage::url( $$module_name_singular->product->product_image) }}" alt="" style="width: 100%">
                        </div>
                        <div class="col-md-6">
                            <div class="row overflow-hidden">
                                <div class="row">
                                    <div class="col-md-12">
                                        Sản phẩm: <span style="font-weight: bold;">{{  $$module_name_singular->product_name }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        Giá: <span style="font-weight: bold; color: red">{{ number_format( $$module_name_singular->unit_price, 0, '', '.') }} đ</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">Số lượng: <span>{{ $$module_name_singular->quantity }}</span></div>
                                </div>
                                <div class="row">
                                    <hr>
                                    <span class="col-md-4 text-nowrap">Tổng tiền: </span>
                                    <div class="col-md-8" style="font-weight: bold"><span id="total-price">{{ number_format($$module_name_singular->unit_price * $$module_name_singular->quantity, 0, '', '.') }} đ</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        @if($$module_name_singular->status_id == 2)
            @csrf
            @method('DELETE')
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group"style="display: flex; justify-content: center; margin-top: 14px;">
                        <button type="submit" class="btn btn-danger">Hủy đơn hàng</button>
                    </div>
                </div>
            </div>
        @endif
    </div>
    </form>
@endsection
