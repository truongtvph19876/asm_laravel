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
                                            <span class="bg-success">{{ $$module_name_singular->status == 1 ? 'Còn hàng' : 'Hết hàng' }}</span>
                                        </li>
                                        <li><span class="text-decor"></span> </li>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12 cless prod-image text-right hidden-xs">
                                        <a href="#!"><img src="{{ \Illuminate\Support\Facades\Storage::url($$module_name_singular->brand->brand_logo) }}" alt="{{ $$module_name_singular->brand->brand_name }}" title="{{ $$module_name_singular->brand->brand_name }}"></a>
                                    </div>
                                </div>
                            </ul>

                            <div id="product"><div class="webi-main">
                                    <h3>Available Options</h3>

                                    <div class="form-group pro-qty">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 op-box qty-plus-minus">
                                                <button type="button" class="form-control pull-left btn-number btnminus" disabled="disabled" data-type="minus" data-field="quantity">
                                                    <span class="glyphicon glyphicon-minus"></span>
                                                </button>
                                                <input id="input-quantity" type="text" name="quantity" value="1" size="2" id="input-quantity" class="form-control input-number pull-left" />
                                                <input type="hidden" name="product_id" value="48" />
                                                <button type="button" class="form-control pull-left btn-number btnplus" data-type="plus" data-field="quantity">
                                                    <span class="glyphicon glyphicon-plus"></span>
                                                </button>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 product-btn">
                                                <button type="button" id="button-cart" data-loading-text="Loading..." class="btn pcrt add-to-cart btn-primary">add to cart</button>
                                                <button type="button" class="btn pcrt btn-primary" onclick="wishlist.add('48');"><svg width="18px" height="17px"><use xlink:href="#heart" /></svg></button>
                                                <button type="button" class="btn pcrt  btn-primary" onclick="compare.add('48');" ><svg width="18px" height="17px"><use xlink:href="#compare"/></svg></button>
                                            </div>
                                        </div>
                                    </div>
                                </div></div>
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
                <div class="relpro">
                    <h1 class="heading text-center"><span>Related Products</span></h1>
                    <div class="row xspspace rless">
                        <div id="related">
                            <div class="col-xs-12 col-sm-12 product-layout col-xs-12 cless">
                                <div class="product-thumb transition">
                                    <div class="image"><a href="index6320.html?route=product/product&amp;product_id=28"><img src="image/cache/catalog/product/19-700x700.jpg" alt="Fiddly Rocker box With Music And Vibration" title="Fiddly Rocker box With Music And Vibration" class="img-responsive center-block" /></a>


                                        <span class="sale">-20%</span>

                                    </div>
                                    <div class="caption text-left">


                                        <h4 class="protitle"><a href="index6320.html?route=product/product&amp;product_id=28">Fiddly Rocker box With Music And Vibration</a></h4>
                                        <div class="opbtn">
                                            <p class="price">
                                                <span data-update='price-new-28' class="price-new">$146.00</span> <span data-update='price-28' class="price-old">$122.00</span>

                                            </p>
                                            <div class="rating">          <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <div class="webi-main">
                                                <input type="hidden" name="product_id" value="28"/>
                                                <div class="form-group required ">
                                                    <label class="control-label">Color</label>
                                                    <div id="input-option230" class="custom-radio">                 <div class="radio">
                                                            <label class="color-option">
                                                                <input class="webi-option-click" type="radio" name="option[230]" value="26" />
                                                                <img src="{{ asset('') }}images/cache/catalog/color/red-50x50.png" alt="red  + $540.00 " class="img-thumbnail" />
                                                                <span>red<span>
                                        (+$540.00)
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label class="color-option">
                                                                <input class="webi-option-click" type="radio" name="option[230]" value="25" />
                                                                <img src="{{ asset('') }}images/cache/catalog/color/yellow-50x50.png" alt="yellow  + $309.60 " class="img-thumbnail" />
                                                                <span>yellow<span>
                                        (+$309.60)
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label class="color-option">
                                                                <input class="webi-option-click" type="radio" name="option[230]" value="27" />
                                                                <img src="{{ asset('') }}images/cache/catalog/color/blue-50x50.png" alt="blue  + $654.00 " class="img-thumbnail" />
                                                                <span>blue<span>
                                        (+$654.00)
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="product-btn">
                                            <div class="button-group">
                                                <button type="button" onclick="wishlist.add('28');">
                                                    <svg><use xlink:href="#heart"></use></svg></button>

                                                <button type="button" class="compare" onclick="compare.add('28');"><svg><use xlink:href="#compare"/></svg>
                                                </button>
                                            </div>
                                            <div class="cart-btn">
                                                <input type="hidden" name="product_id" value="28"/>
                                                <button type="button" class="webi-cart" ><svg><use xlink:href="#pcart"></use></svg>
                                                    <span class="hidden-xs hidden-sm">add to cart</span></button>
                                                <input type="hidden" name="hid-qty-msg" value="Quantity At Least One or More">
                                            </div>
                                            <div class="quickview">
                                                <div  class="bquickv"></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!--  -->
                            <div class="col-xs-12 col-sm-12 product-layout col-xs-12 cless">
                                <div class="product-thumb transition">
                                    <div class="image">
                                        <a href="indexf073.html?route=product/product&amp;product_id=30">
                                            <img src="{{ asset('') }}images/cache/catalog/product/13-700x700.jpg" alt="Brand New Milk Bottle" title="Brand New Milk Bottle" class="img-responsive center-block" />
                                        </a>

                                    </div>
                                    <div class="caption text-left">


                                        <h4 class="protitle"><a href="indexf073.html?route=product/product&amp;product_id=30">Brand New Milk Bottle</a></h4>
                                        <div class="opbtn">
                                            <p class="price">
                                                <span data-update='price-30' class="price">$122.00</span>

                                            </p>
                                            <div class="rating">          <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <div class="webi-main">
                                                <input type="hidden" name="product_id" value="30"/>
                                                <div class="form-group required ">
                                                    <label class="control-label">Color</label>
                                                    <div id="input-option239" class="custom-radio">                 <div class="radio">
                                                            <label class="color-option">
                                                                <input class="webi-option-click" type="radio" name="option[239]" value="50" />
                                                                <img src="{{ asset('') }}images/cache/catalog/color/red-50x50.png" alt="red  + $541.20 " class="img-thumbnail" />
                                                                <span>red<span>
                                        (+$541.20)
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label class="color-option">
                                                                <input class="webi-option-click" type="radio" name="option[239]" value="51" />
                                                                <img src="{{ asset('') }}images/cache/catalog/color/blue-50x50.png" alt="blue  + $649.20 " class="img-thumbnail" />
                                                                <span>blue<span>
                                        (+$649.20)
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="product-btn">
                                            <div class="button-group">
                                                <button type="button" onclick="wishlist.add('30');">
                                                    <svg><use xlink:href="#heart"></use></svg></button>

                                                <button type="button" class="compare" onclick="compare.add('30');"><svg><use xlink:href="#compare"/></svg>
                                                </button>
                                            </div>
                                            <div class="cart-btn">
                                                <input type="hidden" name="product_id" value="30"/>
                                                <button type="button" class="webi-cart" ><svg><use xlink:href="#pcart"></use></svg>
                                                    <span class="hidden-xs hidden-sm">add to cart</span></button>
                                                <input type="hidden" name="hid-qty-msg" value="Quantity At Least One or More">
                                            </div>
                                            <div class="quickview">
                                                <div  class="bquickv"></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!--  -->
                            <div class="col-xs-12 col-sm-12 product-layout col-xs-12 cless">
                                <div class="product-thumb transition">
                                    <div class="image"><a href="index6a4d.html?route=product/product&amp;product_id=33"><img src="{{ asset('') }}images/cache/catalog/product/19-700x700.jpg" alt="Safaa Luxury Strong And Soft Printed Thick Fabric Kids" title="Safaa Luxury Strong And Soft Printed Thick Fabric Kids" class="img-responsive center-block" /></a>


                                        <span class="sale">25%</span>

                                    </div>
                                    <div class="caption text-left">


                                        <h4 class="protitle"><a href="index6a4d.html?route=product/product&amp;product_id=33">Safaa Luxury Strong And Soft Printed Thick Fabric Kids</a></h4>
                                        <div class="opbtn">
                                            <p class="price">
                                                <span data-update='price-new-33' class="price-new">$182.00</span> <span data-update='price-33' class="price-old">$242.00</span>

                                            </p>
                                            <div class="rating">          <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <div class="webi-main">
                                                <input type="hidden" name="product_id" value="33"/>
                                                <div class="form-group required ">
                                                    <label class="control-label">Color</label>
                                                    <div id="input-option235" class="custom-radio">                 <div class="radio">
                                                            <label class="color-option">
                                                                <input class="webi-option-click" type="radio" name="option[235]" value="41" />
                                                                <img src="{{ asset('') }}images/cache/catalog/color/red-50x50.png" alt="red  + $480.00 " class="img-thumbnail" />
                                                                <span>red<span>
                                        (+$480.00)
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label class="color-option">
                                                                <input class="webi-option-click" type="radio" name="option[235]" value="40" />
                                                                <img src="{{ asset('') }}images/cache/catalog/color/pink-50x50.png" alt="pink  + $420.00 " class="img-thumbnail" />
                                                                <span>pink<span>
                                        (+$420.00)
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label class="color-option">
                                                                <input class="webi-option-click" type="radio" name="option[235]" value="42" />
                                                                <img src="{{ asset('') }}images/cache/catalog/color/yellow-50x50.png" alt="yellow  + $540.00 " class="img-thumbnail" />
                                                                <span>yellow<span>
                                        (+$540.00)
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label class="color-option">
                                                                <input class="webi-option-click" type="radio" name="option[235]" value="39" />
                                                                <img src="{{ asset('') }}images/cache/catalog/color/blue-50x50.png" alt="blue  + $360.00 " class="img-thumbnail" />
                                                                <span>blue<span>
                                        (+$360.00)
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="product-btn">
                                            <div class="button-group">
                                                <button type="button" onclick="wishlist.add('33');">
                                                    <svg><use xlink:href="#heart"></use></svg></button>

                                                <button type="button" class="compare" onclick="compare.add('33');"><svg><use xlink:href="#compare"/></svg>
                                                </button>
                                            </div>
                                            <div class="cart-btn">
                                                <input type="hidden" name="product_id" value="33"/>
                                                <button type="button" class="webi-cart" ><svg><use xlink:href="#pcart"></use></svg>
                                                    <span class="hidden-xs hidden-sm">add to cart</span></button>
                                                <input type="hidden" name="hid-qty-msg" value="Quantity At Least One or More">
                                            </div>
                                            <div class="quickview">
                                                <div  class="bquickv"></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!--  -->
                            <div class="col-xs-12 col-sm-12 product-layout col-xs-12 cless">
                                <div class="product-thumb transition">
                                    <div class="image"><a href="indexbb02.html?route=product/product&amp;product_id=42"><img src="{{ asset('') }}images/cache/catalog/product/13-700x700.jpg" alt="Role Play Play Tent Squirell" title="Role Play Play Tent Squirell" class="img-responsive center-block" /></a>


                                        <span class="sale">40%</span>

                                    </div>
                                    <div class="caption text-left">


                                        <h4 class="protitle"><a href="indexbb02.html?route=product/product&amp;product_id=42">Role Play Play Tent Squirell</a></h4>
                                        <div class="opbtn">
                                            <p class="price">
                                                <span data-update='price-new-42' class="price-new">$74.00</span> <span data-update='price-42' class="price-old">$122.00</span>

                                            </p>
                                            <div class="rating">          <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <div class="webi-main">
                                                <input type="hidden" name="product_id" value="42"/>
                                                <div class="form-group required ">
                                                    <label class="control-label">Color</label>
                                                    <div id="input-option227" class="custom-radio">                 <div class="radio">
                                                            <label class="color-option">
                                                                <input class="webi-option-click" type="radio" name="option[227]" value="17" />
                                                                <img src="{{ asset('') }}images/cache/catalog/color/red-50x50.png" alt="red  + $542.40 " class="img-thumbnail" />
                                                                <span>red<span>
                                        (+$542.40)
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label class="color-option">
                                                                <input class="webi-option-click" type="radio" name="option[227]" value="18" />
                                                                <img src="{{ asset('') }}images/cache/catalog/color/yellow-50x50.png" alt="yellow  + $144.00 " class="img-thumbnail" />
                                                                <span>yellow<span>
                                        (+$144.00)
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="product-btn">
                                            <div class="button-group">
                                                <button type="button" onclick="wishlist.add('42');">
                                                    <svg><use xlink:href="#heart"></use></svg></button>

                                                <button type="button" class="compare" onclick="compare.add('42');"><svg><use xlink:href="#compare"/></svg>
                                                </button>
                                            </div>
                                            <div class="cart-btn">
                                                <input type="hidden" name="product_id" value="42"/>
                                                <button type="button" class="webi-cart" ><svg><use xlink:href="#pcart"></use></svg>
                                                    <span class="hidden-xs hidden-sm">add to cart</span></button>
                                                <input type="hidden" name="hid-qty-msg" value="Quantity At Least One or More">
                                            </div>
                                            <div class="quickview">
                                                <div  class="bquickv"></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!--         <div class="clearfix visible-md"></div>
                             -->
                            <div class="col-xs-12 col-sm-12 product-layout col-xs-12 cless">
                                <div class="product-thumb transition">
                                    <div class="image"><a href="indexb8ca.html?route=product/product&amp;product_id=43"><img src="{{ asset('') }}images/cache/catalog/product/1-700x700.jpg" alt="Baby Moo Chiry Hanging Musical Toy Soft Rattle" title="Baby Moo Chiry Hanging Musical Toy Soft Rattle" class="img-responsive center-block" /></a>



                                    </div>
                                    <div class="caption text-left">


                                        <h4 class="protitle"><a href="indexb8ca.html?route=product/product&amp;product_id=43">Baby Moo Chiry Hanging Musical Toy Soft Rattle</a></h4>
                                        <div class="opbtn">
                                            <p class="price">
                                                <span data-update='price-43' class="price">$602.00</span>

                                            </p>
                                            <div class="rating">          <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <div class="webi-main">
                                                <input type="hidden" name="product_id" value="43"/>
                                                <div class="form-group required ">
                                                    <label class="control-label">Color</label>
                                                    <div id="input-option236" class="custom-radio">                 <div class="radio">
                                                            <label class="color-option">
                                                                <input class="webi-option-click" type="radio" name="option[236]" value="44" />
                                                                <img src="{{ asset('') }}images/cache/catalog/color/pink-50x50.png" alt="pink  + $240.00 " class="img-thumbnail" />
                                                                <span>pink<span>
                                        (+$240.00)
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label class="color-option">
                                                                <input class="webi-option-click" type="radio" name="option[236]" value="45" />
                                                                <img src="{{ asset('') }}images/cache/catalog/color/yellow-50x50.png" alt="yellow  + $480.00 " class="img-thumbnail" />
                                                                <span>yellow<span>
                                        (+$480.00)
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label class="color-option">
                                                                <input class="webi-option-click" type="radio" name="option[236]" value="43" />
                                                                <img src="{{ asset('') }}images/cache/catalog/color/blue-50x50.png" alt="blue  + $120.00 " class="img-thumbnail" />
                                                                <span>blue<span>
                                        (+$120.00)
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="product-btn">
                                            <div class="button-group">
                                                <button type="button" onclick="wishlist.add('43');">
                                                    <svg><use xlink:href="#heart"></use></svg></button>

                                                <button type="button" class="compare" onclick="compare.add('43');"><svg><use xlink:href="#compare"/></svg>
                                                </button>
                                            </div>
                                            <div class="cart-btn">
                                                <input type="hidden" name="product_id" value="43"/>
                                                <button type="button" class="webi-cart" ><svg><use xlink:href="#pcart"></use></svg>
                                                    <span class="hidden-xs hidden-sm">add to cart</span></button>
                                                <input type="hidden" name="hid-qty-msg" value="Quantity At Least One or More">
                                            </div>
                                            <div class="quickview">
                                                <div  class="bquickv"></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!--  -->
                            <div class="col-xs-12 col-sm-12 product-layout col-xs-12 cless">
                                <div class="product-thumb transition">
                                    <div class="image"><a href="index531d.html?route=product/product&amp;product_id=45"><img src="{{ asset('') }}images/cache/catalog/product/7-700x700.jpg" alt="Kidoz Multipurpose Foldable Wooden Study Table" title="Kidoz Multipurpose Foldable Wooden Study Table" class="img-responsive center-block" /></a>


                                        <span class="sale">90%</span>

                                    </div>
                                    <div class="caption text-left">


                                        <h4 class="protitle"><a href="index531d.html?route=product/product&amp;product_id=45">Kidoz Multipurpose Foldable Wooden Study Table</a></h4>
                                        <div class="opbtn">
                                            <p class="price">
                                                <span data-update='price-new-45' class="price-new">$200.00</span> <span data-update='price-45' class="price-old">$2,000.00</span>

                                            </p>
                                            <div class="rating">          <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <div class="webi-main">
                                                <input type="hidden" name="product_id" value="45"/>
                                                <div class="form-group required ">
                                                    <label class="control-label">Color</label>
                                                    <div id="input-option237" class="custom-radio">                 <div class="radio">
                                                            <label class="color-option">
                                                                <input class="webi-option-click" type="radio" name="option[237]" value="47" />
                                                                <img src="{{ asset('') }}images/cache/catalog/color/red-50x50.png" alt="red  + $275.00 " class="img-thumbnail" />
                                                                <span>red<span>
                                        (+$275.00)
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label class="color-option">
                                                                <input class="webi-option-click" type="radio" name="option[237]" value="46" />
                                                                <img src="{{ asset('') }}images/cache/catalog/color/pink-50x50.png" alt="pink  + $175.00 " class="img-thumbnail" />
                                                                <span>pink<span>
                                        (+$175.00)
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="product-btn">
                                            <div class="button-group">
                                                <button type="button" onclick="wishlist.add('45');">
                                                    <svg><use xlink:href="#heart"></use></svg></button>

                                                <button type="button" class="compare" onclick="compare.add('45');"><svg><use xlink:href="#compare"/></svg>
                                                </button>
                                            </div>
                                            <div class="cart-btn">
                                                <input type="hidden" name="product_id" value="45"/>
                                                <button type="button" class="webi-cart" ><svg><use xlink:href="#pcart"></use></svg>
                                                    <span class="hidden-xs hidden-sm">add to cart</span></button>
                                                <input type="hidden" name="hid-qty-msg" value="Quantity At Least One or More">
                                            </div>
                                            <div class="quickview">
                                                <div  class="bquickv"></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!--  -->
                            <div class="col-xs-12 col-sm-12 product-layout col-xs-12 cless">
                                <div class="product-thumb transition">
                                    <div class="image"><a href="indexd21c.html?route=product/product&amp;product_id=47"><img src="{{ asset('') }}images/cache/catalog/product/18-700x700.jpg" alt="Kiddery Montessori Wooden Kid's Chair - White" title="Kiddery Montessori Wooden Kid's Chair - White" class="img-responsive center-block" /></a>


                                        <span class="sale">25%</span>

                                    </div>
                                    <div class="caption text-left">


                                        <h4 class="protitle"><a href="indexd21c.html?route=product/product&amp;product_id=47">Kiddery Montessori Wooden Kid's Chair - White</a></h4>
                                        <div class="opbtn">
                                            <p class="price">
                                                <span data-update='price-new-47' class="price-new">$92.00</span> <span data-update='price-47' class="price-old">$122.00</span>

                                            </p>
                                            <div class="rating">          <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                            <div class="webi-main">
                                                <input type="hidden" name="product_id" value="47"/>
                                                <div class="form-group required ">
                                                    <label class="control-label">Color</label>
                                                    <div id="input-option228" class="custom-radio">                 <div class="radio">
                                                            <label class="color-option">
                                                                <input class="webi-option-click" type="radio" name="option[228]" value="20" />
                                                                <img src="{{ asset('') }}images/cache/catalog/color/red-50x50.png" alt="red  + $156.00 " class="img-thumbnail" />
                                                                <span>red<span>
                                        (+$156.00)
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label class="color-option">
                                                                <input class="webi-option-click" type="radio" name="option[228]" value="19" />
                                                                <img src="{{ asset('') }}images/cache/catalog/color/yellow-50x50.png" alt="yellow  + $578.40 " class="img-thumbnail" />
                                                                <span>yellow<span>
                                        (+$578.40)
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label class="color-option">
                                                                <input class="webi-option-click" type="radio" name="option[228]" value="21" />
                                                                <img src="{{ asset('') }}images/cache/catalog/color/blue-50x50.png" alt="blue  + $300.00 " class="img-thumbnail" />
                                                                <span>blue<span>
                                        (+$300.00)
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="product-btn">
                                            <div class="button-group">
                                                <button type="button" onclick="wishlist.add('47');">
                                                    <svg><use xlink:href="#heart"></use></svg></button>

                                                <button type="button" class="compare" onclick="compare.add('47');"><svg><use xlink:href="#compare"/></svg>
                                                </button>
                                            </div>
                                            <div class="cart-btn">
                                                <input type="hidden" name="product_id" value="47"/>
                                                <button type="button" class="webi-cart" ><svg><use xlink:href="#pcart"></use></svg>
                                                    <span class="hidden-xs hidden-sm">add to cart</span></button>
                                                <input type="hidden" name="hid-qty-msg" value="Quantity At Least One or More">
                                            </div>
                                            <div class="quickview">
                                                <div  class="bquickv"></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!--  -->
                            <div class="col-xs-12 col-sm-12 product-layout col-xs-12 cless">
                                <div class="product-thumb transition">
                                    <div class="image"><a href="indexb77e.html?route=product/product&amp;product_id=48"><img src="{{ asset('') }}images/cache/catalog/product/25-700x700.jpg" alt="Kiddery CoBed Sleeping Crib - Brown" title="Kiddery CoBed Sleeping Crib - Brown" class="img-responsive center-block" /></a>



                                    </div>
                                    <div class="caption text-left">


                                        <h4 class="protitle"><a href="indexb77e.html?route=product/product&amp;product_id=48">Kiddery CoBed Sleeping Crib - Brown</a></h4>
                                        <div class="opbtn">
                                            <p class="price">
                                                <span data-update='price-48' class="price">$122.00</span>

                                            </p>
                                            <div class="rating">
                                    <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                                <span class="fa fa-stack">
              <i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i>
            </span>
                                            </div>          <div class="webi-main">
                                                <input type="hidden" name="product_id" value="48"/>
                                                <div class="form-group required ">
                                                    <label class="control-label">Color</label>
                                                    <div id="input-option233" class="custom-radio">                 <div class="radio">
                                                            <label class="color-option">
                                                                <input class="webi-option-click" type="radio" name="option[233]" value="36" />
                                                                <img src="{{ asset('') }}images/cache/catalog/color/pink-50x50.png" alt="pink  + $549.60 " class="img-thumbnail" />
                                                                <span>pink<span>
                                        (+$549.60)
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label class="color-option">
                                                                <input class="webi-option-click" type="radio" name="option[233]" value="37" />
                                                                <img src="{{ asset('') }}images/cache/catalog/color/yellow-50x50.png" alt="yellow  + $492.00 " class="img-thumbnail" />
                                                                <span>yellow<span>
                                        (+$492.00)
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label class="color-option">
                                                                <input class="webi-option-click" type="radio" name="option[233]" value="35" />
                                                                <img src="{{ asset('') }}images/cache/catalog/color/blue-50x50.png" alt="blue  + $182.40 " class="img-thumbnail" />
                                                                <span>blue<span>
                                        (+$182.40)
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="product-btn">
                                            <div class="button-group">
                                                <button type="button" onclick="wishlist.add('48');">
                                                    <svg><use xlink:href="#heart"></use></svg></button>

                                                <button type="button" class="compare" onclick="compare.add('48');"><svg><use xlink:href="#compare"/></svg>
                                                </button>
                                            </div>
                                            <div class="cart-btn">
                                                <input type="hidden" name="product_id" value="48"/>
                                                <button type="button" class="webi-cart" ><svg><use xlink:href="#pcart"></use></svg>
                                                    <span class="hidden-xs hidden-sm">add to cart</span></button>
                                                <input type="hidden" name="hid-qty-msg" value="Quantity At Least One or More">
                                            </div>
                                            <div class="quickview">
                                                <div  class="bquickv"></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!--         <div class="clearfix visible-md"></div>
                             -->
                        </div>
                    </div>
                </div>

            </div></div>
    </div>
    </div>
    <script type="text/javascript"><!--
        $('select[name=\'recurring_id\'], input[name="quantity"]').change(function(){
            $.ajax({
                url: 'index.php?route=product/product/getRecurringDescription',
                type: 'post',
                data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),
                dataType: 'json',
                beforeSend: function() {
                    $('#recurring-description').html('');
                },
                success: function(json) {
                    $('.alert-dismissible, .text-danger').remove();

                    if (json['success']) {
                        $('#recurring-description').html(json['success']);
                    }
                }
            });
        });
        //--></script>
    <script type="text/javascript"><!--
        $('#button-cart').on('click', function() {
            $.ajax({
                url: 'index.php?route=checkout/cart/add',
                type: 'post',
                data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),
                dataType: 'json',
                beforeSend: function() {
                    $('#button-cart').button('loading');
                },
                complete: function() {
                    $('#button-cart').button('reset');
                },
                success: function(json) {
                    $('.alert-dismissible, .text-danger').remove();
                    $('.form-group').removeClass('has-error');

                    if (json['error']) {
                        if (json['error']['option']) {
                            for (i in json['error']['option']) {
                                var element = $('#input-option' + i.replace('_', '-'));

                                if (element.parent().hasClass('input-group')) {
                                    element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
                                } else {
                                    element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
                                }
                            }
                        }

                        if (json['error']['recurring']) {
                            $('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');
                        }

                        // Highlight any found errors
                        $('.text-danger').parent().addClass('has-error');
                    }

                    if (json['success']) {
                        $('#content').parent().before('<div class="a-one"><div class="alert alert-success alert-dismissible alertsuc"><svg width="20px" height="20px"> <use xlink:href="#successi"></use> </svg> ' + json.success + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div></div>');
                        setTimeout(function() {
                            $('#cart > button').html('<div class="svg-bg"><svg><use xlink:href="#hcart"></use></svg><span id="cart-total"> ' + json['total'] + '</span></div>');
                        }, 100);
                        $('.a-one').delay(5000).fadeOut();
                        $('#cart > ul').load('index1e1c.html?route=common/cart/info%20ul%20li')
                        $("button.close").click(function() {
                            $(".a-one").remove();
                        })
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                }
            });
        });
        //--></script>
    <script type="text/javascript"><!--
        $('.date').datetimepicker({
            language: 'en-gb',
            pickTime: false
        });

        $('.datetime').datetimepicker({
            language: 'en-gb',
            pickDate: true,
            pickTime: true
        });

        $('.time').datetimepicker({
            language: 'en-gb',
            pickDate: false
        });

        $('button[id^=\'button-upload\']').on('click', function() {
            var node = this;

            $('#form-upload').remove();

            $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');

            $('#form-upload input[name=\'file\']').trigger('click');

            if (typeof timer != 'undefined') {
                clearInterval(timer);
            }

            timer = setInterval(function() {
                if ($('#form-upload input[name=\'file\']').val() != '') {
                    clearInterval(timer);

                    $.ajax({
                        url: 'index.php?route=tool/upload',
                        type: 'post',
                        dataType: 'json',
                        data: new FormData($('#form-upload')[0]),
                        cache: false,
                        contentType: false,
                        processData: false,
                        beforeSend: function() {
                            $(node).button('loading');
                        },
                        complete: function() {
                            $(node).button('reset');
                        },
                        success: function(json) {
                            $('.text-danger').remove();

                            if (json['error']) {
                                $(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');
                            }

                            if (json['success']) {
                                alert(json['success']);

                                $(node).parent().find('input').val(json['code']);
                            }
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                        }
                    });
                }
            }, 500);
        });
        //--></script>
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
            $('.input-number').focusin(function(){
                $(this).data('oldValue', $(this).val());
            });
            $('.input-number').change(function() {

                var minValue = parseInt($(this).attr('min'));
                var maxValue = parseInt($(this).attr('max'));
                if (!minValue) minValue = 1;
                if (!maxValue) maxValue = 999;
                var valueCurrent = parseInt($(this).val());
                var name = $(this).attr('name');
                if (valueCurrent >= minValue) {
                    $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
                } else {
                    alert('Sorry, the minimum value was reached');
                    $(this).val($(this).data('oldValue'));
                }
                if (valueCurrent <= maxValue) {
                    $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
                } else {
                    alert('Sorry, the maximum value was reached');
                    $(this).val($(this).data('oldValue'));
                }
            });
            $(".input-number").keydown(function (e) {
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

    <script type="text/javascript"><!--
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
    <script type="text/javascript"><!--
@endsection
