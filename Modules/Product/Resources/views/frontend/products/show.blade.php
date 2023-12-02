@extends('frontend.layouts.app')

@section('title') {{$$module_name_singular->name}} - {{ __($module_title) }} @endsection

@section('content')
    <div class="container">
        <div class="row">
            <ul class="breadcrumb">
                <li><a href="/"><i class="fa fa-home"></i></a></li>
                <li><a href="{{ $$module_name_singular->product_slug }}">{{ $$module_name_singular->product_name }}</a></li>
            </ul>
        </div>
    </div>
    <div id="product-product" class="container">

        <div class="row">

            <div id="content" class="col-xs-12">
                <div class="productbg">
                    <div class="row">
                        <div class="col-sm-6 col-lg-6 col-md-6 col-xs-12 proimg sticky">
                            <ul class="thumbnails row">
                                <li class="col-sm-12 col-xs-12 big-img"><a class="thumbnail" href="{{ Storage::url($$module_name_singular->product_image) }}" title="{{ $$module_name_singular->product_name }}">
                                        <img data-zoom-image="{{ Storage::url($$module_name_singular->product_image) }}" src="{{ Storage::url($$module_name_singular->product_image) }}" id="zoom_03" class="img-responsive center-block" alt="image">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-5 col-md-6 col-xs-12 col-sm-6 pro-content">
                            <h1>{{ $$module_name_singular->product_name }}</h1><hr class="producthr">
                            <div class="rating">
                                <li>
                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                </li>
                                <li class="proreview">
                                    <a id="ratecount" href="#" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">1 reviews</a>
                                </li>
                                <li>
                                    <a id="ratep" href="#rt" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">Write a review</a>
                                </li>
                            </div>
                            <hr class="producthr">
                            <div class="pro_count">
                                <div class="row rless">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 cless product-price">
                                        <ul class="list-unstyled">

                                            <li>
                                                <h2 data-update='price-48' class="price" >Giá: {{ number_format($$module_name_singular->product_price, 0, '', '.') }} đ</h2>
                                            </li>
                                            <div class="protax">
                                                <li>Giá cũ: </li>
                                                <li data-update='price-tax-48' class="price-old">{{ number_format($$module_name_singular->product_price + 50000, 0, '', '.') }} đ</li>
                                            </div>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 cless product-timer text-right">

                                    </div>
                                </div>
                            </div>
                            <hr class="producthr">
                            <ul class="list-unstyled">
                                <div class="row rless">
                                    <div class="col-md-8 col-sm-8 col-xs-12 cless prod-detail">
                                        <li><span class="text-decor">Brand:</span><a href="#!" class="textdeb">{{ $$module_name_singular->brand->brand_name }}</a></li>
                                        <li><span class="text-decor">Product ID:</span> {{ $$module_name_singular->id }}</li>
                                        <li class="stock_bg"><span class="text-decor">Availability:</span>
                                        @if($$module_name_singular->product_quantity > 0)
                                                <span class="bg-success">Còn hàng ({{$$module_name_singular->product_quantity}})</span>
                                        @else
                                                <span class="bg-warning">Hết hàng ({{$$module_name_singular->product_quantity}})</span>
                                        @endif
                                        <li><span class="text-decor"></span> </li>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12 cless prod-image text-right hidden-xs">
                                        <a href="#!"><img src="{{ \Illuminate\Support\Facades\Storage::url($$module_name_singular->brand->brand_logo) }}" alt="{{ $$module_name_singular->brand->brand_name }}" title="{{ $$module_name_singular->brand->brand_name }}"></a>
                                    </div>
                                </div>
                            </ul>

                            <div id="product">
                                <div class="webi-main">
                                    <h3>Available Options</h3>
                                    <div class="form-group pro-qty">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 op-box qty-plus-minus">
                                                <button type="button" class="form-control pull-left btn-number btnminus" disabled="disabled" data-type="minus" data-field="quantity">
                                                    <span class="glyphicon glyphicon-minus"></span>
                                                </button>
                                                <input id="input-quantity" type="text" name="quantity" value="1" size="2" min="1" max="{{ $$module_name_singular->product_quantity }}" class="form-control input-number-1 pull-left" />
                                                <input type="hidden" name="product_id" value="{{ $$module_name_singular->id }}" />
                                                <button type="button" class="form-control pull-left btn-number btnplus" data-type="plus" data-field="quantity">
                                                    <span class="glyphicon glyphicon-plus"></span>
                                                </button>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 product-btn">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                <button type="button" id="button-cart" data-loading-text="Loading..." class="btn pcrt add-to-cart btn-primary webi-cart">add to cart</button>
                                                <button type="button" class="btn pcrt btn-primary" onclick="wishlist.add('48');"><svg width="18px" height="17px"><use xlink:href="#heart" /></svg></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-tab">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab-description" data-toggle="tab">Description</a></li>
                        <li><a href="#tab-review" data-toggle="tab">Reviews (1)</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab-description"><div class="cpt_product_description ">
                                <div>
                                    {!!  htmlspecialchars_decode($$module_name_singular->description, ) !!}
                                </div>
                            </div>
                            <!-- cpt_container_end --></div>
                        <div class="tab-pane" id="tab-review">
                            <form class="" id="form-review">
                                <div id="review"></div>
                                <h2 class="co-heading">Write a review</h2>
                                <div class="form-group required row">
                                    <div class="col-sm-12">
                                        <label class="control-label" for="input-name">Your Name</label>
                                        <input type="text" name="name" value="" id="input-name" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group required row">
                                    <div class="col-sm-12">
                                        <label class="control-label" for="input-review">Your Review</label>
                                        <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                                        <!-- <div class="help-block"><span class="text-danger">Note:</span> HTML is not translated!</div> -->
                                    </div>
                                </div>
                                <div class="form-group required">

                                    <div class="radi">
                                        <label class="control-label" for="input-review">Rating</label>
                                        <div class="form-rating">

                                            <div class="form-rating-container pull-left">
                                                <input id="rating-5" type="radio" name="rating" value="5" />
                                                <label class="fa fa-stack pull-right" for="rating-5">
                                                    <i class="fa fa-star fa-stack-1x"></i>
                                                    <i class="fa fa-star-o fa-stack-1x"></i>
                                                </label>
                                                <input id="rating-4" type="radio" name="rating" value="4" />
                                                <label class="fa fa-stack pull-right" for="rating-4">
                                                    <i class="fa fa-star fa-stack-1x"></i>
                                                    <i class="fa fa-star-o fa-stack-1x"></i>
                                                </label>
                                                <input id="rating-3" type="radio" name="rating" value="3" />
                                                <label class="fa fa-stack pull-right" for="rating-3">
                                                    <i class="fa fa-star fa-stack-1x"></i>
                                                    <i class="fa fa-star-o fa-stack-1x"></i>
                                                </label>
                                                <input id="rating-2" type="radio" name="rating" value="2" />
                                                <label class="fa fa-stack pull-right" for="rating-2">
                                                    <i class="fa fa-star fa-stack-1x"></i>
                                                    <i class="fa fa-star-o fa-stack-1x"></i>
                                                </label>
                                                <input id="rating-1" type="radio" name="rating" value="1" />
                                                <label class="fa fa-stack pull-right" for="rating-1">
                                                    <i class="fa fa-star fa-stack-1x"></i>
                                                    <i class="fa fa-star-o fa-stack-1x"></i>
                                                </label>
                                            </div>
                                        </div></div>
                                </div>


                                <div class="buttons clearfix">
                                    <div class="pull-right">
                                        <button type="button" id="button-review" data-loading-text="Loading..." class="btn btn-primary">Continue</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- relatedproduct -->

            </div></div>
    </div>
    </div>
    <!--for product quantity plus minus-->
    <script type="text/javascript">
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
                        var minValue = parseInt(input.attr('min'));
                        if (!minValue) minValue = 1;
                        if (currentVal > minValue) {
                            input.val(currentVal - 1).change();
                        }
                        if (parseInt(input.val()) == minValue) {
                            $(this).attr('disabled', true);
                        }

                    } else if (type == 'plus') {
                        var maxValue = parseInt(input.attr('max'));
                        if (!maxValue) maxValue = 999;
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
            });
            $('.input-number-1').focusin(function(){
                $(this).data('oldValue', $(this).val());
            });
            $('.input-number-1').change(function() {

                var minValue = parseInt($(this).attr('min'));
                var maxValue = parseInt($(this).attr('max'));
                if (!minValue) minValue = 1;
                if (!maxValue) maxValue = 999;
                var valueCurrent = parseInt($(this).val());
                var name = $(this).attr('name');
                if (valueCurrent >= minValue) {
                    $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
                } else {
                    alert('Số lượng không hợp lệ');
                    $(this).val($(this).data('oldValue'));
                }
                if (valueCurrent <= maxValue) {
                    $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
                } else {
                    alert('Không được vượt quá số lượng có sẵn');
                    $(this).val($(this).data('oldValue'));
                }
            });
            $(".input-number-1").keydown(function (e) {
                // Allow: backspace, delete, tab, escape, enter and .
                if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== - 1 ||
                    // Allow: Ctrl+A
                    (e.keyCode == 65 && e.ctrlKey === true) ||
                    // Allow: home, end, left, right
                    (e.keyCode >= 35 && e.keyCode <= 39)) {
                    // let it happen, don't do anything
                    return;
                }
                // Ensure that it is a number and stop the keypress
                if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                    e.preventDefault();
                }
            });
        });
    </script>

    <script type="text/javascript">
        $('#review').delegate('.pagination a', 'click', function(e) {
            e.preventDefault();

            $('#review').fadeOut('slow');

            $('#review').load(this.href);

            $('#review').fadeIn('slow');
        });

        $('#review').load('indexa56d.html?route=product/product/review&amp;product_id=48');

        $('#button-review').on('click', function() {
            $.ajax({
                url: 'index.php?route=product/product/write&product_id=48',
                type: 'post',
                dataType: 'json',
                data: $("#form-review").serialize(),
                beforeSend: function() {
                    $('#button-review').button('loading');
                },
                complete: function() {
                    $('#button-review').button('reset');
                },
                success: function(json) {
                    $('.alert-dismissible').remove();

                    if (json['error']) {
                        $('#review').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');
                    }

                    if (json['success']) {
                        $('#review').after('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');

                        $('input[name=\'name\']').val('');
                        $('textarea[name=\'text\']').val('');
                        $('input[name=\'rating\']:checked').prop('checked', false);
                    }
                }
            });
        });

        $(document).ready(function() {
            $('.thumbnails').magnificPopup({
                type:'image',
                delegate: 'a',
                gallery: {
                    enabled: true
                }
            });
        });
        //--></script>
    <!-- related -->

    <!-- related over -->
    <!-- zoom product start -->
    <!-- zoom product start -->
    <script>
        if (jQuery(window).width() >= 1200){
            //initiate the plugin and pass the id of the div containing gallery images
            $("#zoom_03").elevateZoom({gallery:'gallery_01', cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true, loadingIcon: ''});
            //pass the images to Fancybox
            $("#zoom_03").bind("click", function (e) {
                var ez = $('#zoom_03').data('elevateZoom');
                $.fancybox(ez.getGalleryList());
                return false;
            });
        }
    </script>
    <!--ZOOM END-->
    <script type="text/javascript">
@endsection
