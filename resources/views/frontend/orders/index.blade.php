@extends('frontend.layouts.app')

@section('title') {{app_name()}} - Order @endsection

@section('content')
    <div class="container">
        @if(session()->has('error')) <h3 class="text-center">{!! session()->get('error') !!}</h3> @endif
        <form action="{{ route('frontend.order.checkout', $product) }}" method="POST">
            @csrf
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="display: flex; justify-content: space-between">
                            <h3 class="modal-title" id="exampleModalLabel">Xác nhận đơn hàng</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            <button type="submit" class="btn btn-primary">Xác nhận</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-center">Thông tin giao hàng</h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            @php
                                $label_value = "Họ tên";
                                $input_name = 'recipient_name';
                                $placeholder = "Họ và tên";
                                $required = 'required';
                            @endphp
                            {{ html()->label($label_value)->for($input_name) }} {!!  $required ? "<span style='color: red'>*</span>" : ''  !!}
                            {{ html()->input('text', $input_name)->id($input_name)->class('form-control')->placeholder($placeholder) }}
                            @if ($errors->has($input_name)) {{ html()->span($errors->first($input_name))->class('text-danger') }} @endif
                        </div>
                        <div class="col-md-6 form-group">
                            @php
                                $label_value = "Số điện thoại";
                                $input_name = 'recipient_phone';
                                $placeholder = "Số điện thoại";
                                $required = 'required';
                            @endphp
                            {{ html()->label($label_value)->for($input_name) }} {!!  $required ? "<span style='color: red'>*</span>" : ''  !!}
                            {{ html()->input('text', $input_name)->id($input_name)->class('form-control')->placeholder($placeholder) }}
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
                                @endphp
                                {{ html()->label($label_value)->for($input_name) }} {!!  $required ? "<span style='color: red'>*</span>" : ''  !!}
                                {{ html()->select($input_name)->id($input_name)->class('form-select-lg form-control')->placeholder($placeholder) }}
                                @if ($errors->has($input_name)) {{ html()->span($errors->first($input_name))->class('text-danger') }} @endif
                            </div>
                            <div class="form-group col-md-4">
                                @php
                                    $label_value = "Quận/Huyện";
                                    $input_name = 'district';
                                    $placeholder = "Quận/Huyện";
                                    $required = 'required';
                                @endphp
                                {{ html()->label($label_value)->for($input_name) }} {!!  $required ? "<span style='color: red'>*</span>" : ''  !!}
                                {{ html()->select($input_name)->id($input_name)->class('form-select-lg form-control')->placeholder($placeholder) }}
                                @if ($errors->has($input_name)) {{ html()->span($errors->first($input_name))->class('text-danger') }} @endif
                            </div>
                            <div class="form-group col-md-4">
                                @php
                                    $label_value = "Xã/Phường";
                                    $input_name = 'ward';
                                    $placeholder = "Xã/Phường";
                                    $required = 'required';
                                @endphp
                                {{ html()->label($label_value)->for($input_name) }} {!!  $required ? "<span style='color: red'>*</span>" : ''  !!}
                                {{ html()->select($input_name)->id($input_name)->class('form-select-lg form-control')->placeholder($placeholder) }}
                                @if ($errors->has($input_name)) {{ html()->span($errors->first($input_name))->class('text-danger') }} @endif
                            </div>
                        </div>

                        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
                        <script>
                            var citis = document.getElementById("city");
                            var districts = document.getElementById("district");
                            var wards = document.getElementById("ward");
                            var Parameter = {
                                url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
                                method: "GET",
                                responseType: "application/json",
                            };
                            var promise = axios(Parameter);
                            promise.then(function (result) {
                                renderCity(result.data);
                            });

                            function renderCity(data) {
                                for (const x of data) {
                                    citis.options[citis.options.length] = new Option(x.Name, x.Name);
                                }
                                citis.onchange = function () {
                                    district.length = 1;
                                    ward.length = 1;
                                    if(this.value != ""){
                                        const result = data.filter(n => n.Name === this.value);

                                        for (const k of result[0].Districts) {
                                            district.options[district.options.length] = new Option(k.Name, k.Name);
                                        }
                                    }
                                };
                                district.onchange = function () {
                                    ward.length = 1;
                                    const dataCity = data.filter((n) => n.Name === citis.value);
                                    if (this.value != "") {
                                        const dataWards = dataCity[0].Districts.filter(n => n.Name === this.value)[0].Wards;

                                        for (const w of dataWards) {
                                            wards.options[wards.options.length] = new Option(w.Name, w.Name);
                                        }
                                    }
                                };
                            }
                        </script>
                    </div>

                    <div class="row">
                        <div class="col-md-12 form-group">
                            @php
                                $label_value = "Địa chỉ nhà";
                                $input_name = 'detail_address';
                                $placeholder = "Địa chỉ nhà";
                                $required = 'required';
                            @endphp
                            {{ html()->label($label_value)->for($input_name) }} {!!  $required ? "<span style='color: red'>*</span>" : ''  !!}
                            {{ html()->textarea($input_name)->id($input_name)->class('form-control')->placeholder($placeholder) }}
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
                                @endphp
                                {{ html()->label($label_value)->for($input_name) }} {!!  $required ? "<span style='color: red'>*</span>" : ''  !!}
                                {{ html()->input($input_name)->id($input_name)->class('form-control')->placeholder($placeholder) }}
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="payment">Phương thức thanh toán</label><span style='color: red'>*</span>
                                    <select name="payment_method" id="payment" class="form-control">
                                        <option value="1">Thanh toán khi nhận hàng</option>
                                        {{--                                <option value="2">Thanh toán qua VNPay</option>--}}
                                    </select>
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
                                <img src="{{ Storage::url($product->product_image) }}" alt="" style="width: 100%">
                            </div>
                            <div class="col-md-6">
                                <div class="row overflow-hidden">
                                    <div class="row">
                                        <div class="col-md-12">
                                            Sản phẩm: <span style="font-weight: bold;">{{ $product->product_name }}</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            Giá: <span style="font-weight: bold; color: red">{{ number_format($product->product_price, 0, '', '.') }} đ</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <span class="col-md-4">Số lượng</span>
                                        <div class="col-md-8">
                                            <button type="button" class="form-control pull-left btn-number btnminus" style="width: auto" disabled="disabled" data-type="minus" data-field="quantity">
                                                <span class="glyphicon glyphicon-minus"></span>
                                            </button>

                                            <input id="input-quantity" type="number" name="quantity" value="1" size="2" id="input-quantity" style="max-width: 80px" class="form-control input-number pull-left" />
                                            <input type="hidden" name="product_id" value="{{ $product->id }}" />

                                            <button type="button" class="form-control pull-left btn-number btnplus" style="width: auto" data-type="plus" data-field="quantity">
                                                <span class="glyphicon glyphicon-plus"></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <hr>
                                        <span class="col-md-4 text-nowrap">Tổng tiền: </span>
                                        <div class="col-md-8" style="font-weight: bold"><span id="total-price">0</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group"style="display: flex; justify-content: center; margin-top: 14px;">
                        <button type="submit" class="btn btn-success">Đặt hàng</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script type="text/javascript">
        function totalPrice() {
            total = {{ $product->product_price }} * $('#input-quantity').val()
            totalFormat = new Intl.NumberFormat('vnd', {
                style: 'currency',
                currency: 'VND',
            });
            $('#total-price').html(totalFormat.format(total))
        }
        totalPrice()
        //plugin bootstrap minus and plus
        $(document).ready(function() {
            $('.btn-number').click(function(e){
                e.preventDefault();
                var fieldName = $(this).attr('data-field');
                var type = $(this).attr('data-type');
                var input = $("input[name='" + fieldName + "']");
                var currentVal = parseInt(input.val());
                if (!isNaN(currentVal)) {
                    if (type == 'minus') {
                        var minValue = 0;
                        if (!minValue) minValue = 0;
                        if (currentVal > minValue) {
                            input.val(currentVal - 1).change();
                        }
                        if (parseInt(input.val()) == minValue) {
                            $(this).attr('disabled', true);
                        }

                    } else if (type == 'plus') {
                        var maxValue = {{ $product->product_quantity ?? 0 }};
                        if (!maxValue) maxValue = 0;
                        if (currentVal < maxValue) {
                            input.val(currentVal + 1).change();
                        }
                        if (parseInt(input.val()) == maxValue) {
                            $(this).attr('disabled', true);
                        }

                    }
                } else {
                    input.val(0);
                }
                totalPrice();
            });
            $('.input-number').focusin(function(){
                $(this).data('oldValue', $(this).val());
                totalPrice()
            });
            $('.input-number').change(function() {
                var minValue = 1;
                var maxValue = {{ $product->product_quantity ?? 0 }};
                if (!minValue) minValue = 1;
                if (!maxValue) maxValue = 1;
                var valueCurrent = parseInt($(this).val());
                var name = $(this).attr('name');
                if (valueCurrent >= minValue) {
                    $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
                } else {
                    alert('Số lượng sản phẩm phải lớn hơn 0');
                    $(this).val(1);
                    $(this).val($(this).data('oldValue'));
                    return;
                }
                if (valueCurrent <= maxValue) {
                    $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
                } else {
                    alert('Số lượng không được vượt quá số lượng có sẵn');
                    $(this).val($(this).data('oldValue'));
                    return;
                }
                totalPrice()
            });
            // blur quantity input
            $(".input-number").blur((e) => {
                quantity = e.target.value;
                if(Number(quantity) > {{ $product->product_quantity ?? 0 }}) {
                    e.target.value = 0;
                    alert('Không được vượt quá số lượng có sẵn');
                }
                totalPrice()
            });
            $(".input-number"   ).keydown(function (e) {
                // Allow: backspace, delete, tab, escape, enter and .
                if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== - 1 ||
                    // Allow: Ctrl+A
                    (e.keyCode == 65 && e.ctrlKey === true) ||
                    // Allow: home, end, left, right
                    (e.keyCode >= 35 && e.keyCode <= 39)) {
                    // let it happen, don't do anything
                    return 0;
                }
                // Ensure that it is a number and stop the keypress
                if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                    e.preventDefault();
                }
                totalPrice()
            });
        });

    </script>
@endsection
