<div class="pro-img">
    <div class="container protabcont">
        <div class="tab-head">
            <h4 class="head text-center"><span class="sub-title">Fashion</span></h4>
            <h1 class="heading  text-center"><span>trending product</span></h1>
            <ul class="nav nav-tabs pro-tab text-center">
                <li class="active"><a href="#featurep" data-toggle="tab">featured</a></li>
                <li><a href="#bestseller" data-toggle="tab">bestseller</a></li>
                <li><a href="#latestp" data-toggle="tab">latest</a></li>
            </ul>
        </div>

        <div class="tab-content">
            <div class="tab-pane active" id="featurep">
                <div class="row rless">
                    <div id="feature">

                        @foreach($product_feature as $product)
                            <div class="product-layout col-xs-12 cless">
                                <div class="product-thumb transition">
                                    <div class="image"><a
                                            href="{{ $product->product_slug }}"><img
                                                src="{{ \Illuminate\Support\Facades\Storage::url($product->product_image) }}"
                                                alt="Role Play Play Tent Squirell"
                                                title="Role Play Play Tent Squirell"
                                                class="img-responsive center-block"/></a>
                                        <!-- Images Start -->
                                        <a href="{{ $product->product_slug }}"><img
                                                src="{{ Storage::url($product->product_image)  }}"
                                                class="img-responsive second-img"
                                                alt="hover image"/></a>
                                    </div>

                                    <div class="caption text-left">


                                        <h4 class="protitle"><a
                                                href="{{ $product->product_slug}}">{{ $product->product_name }}</a></h4>
                                        <div class="opbtn">
                                            <p class="price">
                                                <span data-update='price-new-42' class="price-new">{{ number_format($product->product_price, 0, '', '.') }} đ</span>
                                                <span data-update='price-42' class="price-old">{{ number_format($product->product_price + 50000, 0, '', '.') }} đ</span>
                                            </p>
                                            <div class="rating"> <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                        </div>

                                        <div class="product-btn">
                                            <div class="cart-btn">
                                                <input type="hidden" name="product_id" value="{{ $product->id }}"/>
                                                @csrf
                                                <button type="button" class="webi-cart">
                                                    <svg>
                                                        <use xlink:href="#pcart"></use>
                                                    </svg>
                                                    <span class="hidden-xs hidden-sm">add to cart</span>
                                                </button>
                                                <input type="hidden" name="hid-qty-msg"
                                                       value="Quantity At Least One or More">
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

            @if($product_bestseller)
                <div class="tab-pane" id="bestseller">
                    <div class="row rless">
                        <div id="best">
                            @forelse($product_bestseller as $product)
                                <div class="product-layout col-xs-12 cless">
                                    <div class="product-thumb transition">
                                        <div class="image"><a
                                                href="{{ $product->product_slug }}"><img
                                                    src="{{ \Illuminate\Support\Facades\Storage::url($product->product_image) }}"
                                                    alt="Role Play Play Tent Squirell"
                                                    title="Role Play Play Tent Squirell"
                                                    class="img-responsive center-block"/></a>
                                            <!-- Images Start -->
                                            <a href="{{ $product->product_slug }}"><img
                                                    src="{{ Storage::url($product->product_image)  }}"
                                                    class="img-responsive second-img"
                                                    alt="hover image"/></a>
                                        </div>

                                        <div class="caption text-left">


                                            <h4 class="protitle"><a
                                                    href="{{ $product->product_slug}}">{{ $product->product_name }}</a></h4>
                                            <div class="opbtn">
                                                <p class="price">
                                                    <span data-update='price-new-42' class="price-new">{{ number_format($product->product_price, 0, '', '.') }} đ</span>
                                                    <span data-update='price-42' class="price-old">{{ number_format($product->product_price + 50000, 0, '', '.') }} đ</span>
                                                </p>
                                                <div class="rating"> <span class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                </div>
                                            </div>

                                            <div class="product-btn">
                                                <div class="cart-btn">
                                                    <input type="hidden" name="product_id" value="{{ $product->id }}"/>
                                                    @csrf
                                                    <button type="button" class="webi-cart">
                                                        <svg>
                                                            <use xlink:href="#pcart"></use>
                                                        </svg>
                                                        <span class="hidden-xs hidden-sm">add to cart</span>
                                                    </button>
                                                    <input type="hidden" name="hid-qty-msg"
                                                           value="Quantity At Least One or More">
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            @empty

                            @endforelse
                        </div>
                    </div>
                </div>
            @endif


            <div class="tab-pane" id="latestp">

                <div class="row rless">
                    <div id="latest">
                        @forelse($product_latest as $product)
                            <div class="product-layout col-xs-12 cless">
                                <div class="product-thumb transition">
                                    <div class="image"><a
                                            href="{{ $product->product_slug }}"><img
                                                src="{{ \Illuminate\Support\Facades\Storage::url($product->product_image) }}"
                                                alt="Role Play Play Tent Squirell"
                                                title="Role Play Play Tent Squirell"
                                                class="img-responsive center-block"/></a>
                                        <!-- Images Start -->
                                        <a href="{{ $product->product_slug }}"><img
                                                src="{{ Storage::url($product->product_image)  }}"
                                                class="img-responsive second-img"
                                                alt="hover image"/></a>
                                    </div>

                                    <div class="caption text-left">


                                        <h4 class="protitle"><a
                                                href="{{ $product->product_slug}}">{{ $product->product_name }}</a></h4>
                                        <div class="opbtn">
                                            <p class="price">
                                                <span data-update='price-new-42' class="price-new">{{ number_format($product->product_price, 0, '', '.') }} đ</span>
                                                <span data-update='price-42' class="price-old">{{ number_format($product->product_price + 50000, 0, '', '.') }} đ</span>
                                            </p>
                                            <div class="rating"> <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                        </div>

                                        <div class="product-btn">
                                            <div class="cart-btn">
                                                <input type="hidden" name="product_id" value="{{ $product->id }}"/>
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                @csrf
                                                <button type="button" class="webi-cart">
                                                    <svg>
                                                        <use xlink:href="#pcart"></use>
                                                    </svg>
                                                    <span class="hidden-xs hidden-sm">add to cart</span>
                                                </button>
                                                <input type="hidden" name="hid-qty-msg"
                                                       value="Quantity At Least One or More">
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        @empty

                        @endforelse
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
