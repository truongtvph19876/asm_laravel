@extends('frontend.layouts.app')

@section('content')
    <div class="breadbg">
        <div class="container">
            <div class="row">
                <ul class="breadcrumb">
                    <li><a href="{{ route('frontend.list.product') }}"><i class="fa fa-home"></i></a></li>
                    <li><a href="{{ route('frontend.list.product') }}">Shop</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div id="product-category" class="container cleft">
        <div class="row"><aside id="column-left" class="col-sm-4 col-md-3 col-xs-12 hidden-xs">
                <div class="list-group catlistpage hidden-xs">
                    <div class="panel-heading cathed">Brands</div>
                    <a href="{{ route('frontend.list.product') }}" class="list-group-item active">All Brand</a>
                    @foreach($brands as $brand)
                    <a href="{{ route('frontend.list.product') }}?brand={{$brand->brand_name}}" class="list-group-item active">
                        {{$brand->brand_name}} ({{ $brand->countProductInBrand() }})
                    </a>
                    @endforeach
                </div>
            </aside>

            <div id="content" class="col-sm-8 col-md-9  col-xs-12 colright">
                <div class="appres"></div>
                <div class="row cate-border">
                    <div class="col-md-2 col-sm-3 col-xs-4 lgrid">
                        <div class="btn-group-sm">
                            <button type="button" id="list-view" class="btn listgridbtn" data-toggle="tooltip" title="List">
                                <svg width="20px" height="20px"><use xlink:href="#clist"></use> </svg>
                            </button>
                            <button type="button" id="grid-view" class="btn listgridbtn" data-toggle="tooltip" title="Grid">
                                <svg width="18px" height="18px"><use xlink:href="#cgrid"></use> </svg>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-6 col-xs-8 hidden-md hidden-sm ct">
                        <a href="" id="compare-total" class="btn btn-link">Product Compare (0)</a>
                    </div>
                    <div class="col-lg-3 col-md-5 col-xs-4 col-sm-5 catesort">
                        <div class="input-group input-group-sm select-input">
                            <label class="input-group-addon" for="input-sort">Sort By:</label>

                            <select id="input-sort" class="form-control" onchange="location = this.value;">
                                <option value="" selected="selected">Default</option>
                                <option value="">Name (A - Z)</option>
                                <option value="">Name (Z - A)</option>
                                <option value="">Price (Low &gt; High)</option>
                                <option value="">Price (High &gt; Low)</option>
                                <option value="">Rating (Highest)</option>
                                <option value="">Rating (Lowest)</option>
                                <option value="">Model (A - Z)</option>
                                <option value="">Model (Z - A)</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5 col-xs-4 col-sm-4 catesort">
                        <div class="input-group input-group-sm select-input">
                            <label class="input-group-addon" for="input-limit">Show:</label>
                            <select id="input-limit" class="form-control" onchange="location = this.value;">
                                <option value="" selected="selected">15</option>
                                <option value="">25</option>
                                <option value="">50</option>
                                <option value="">75</option>
                                <option value="">100</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row cpagerow">
                    @forelse($products as $product)
                        <div class="product-layout product-list col-xs-12">
                            <div class="product-thumb transition">
                                <div class="image">
                                    <a href="{{ $product->product_slug }}">
                                        <img src="{{ Storage::url($product->product_image) }}" alt="Baby Moo Chiry Hanging Musical Toy Soft Rattle" title="Baby Moo Chiry Hanging Musical Toy Soft Rattle" class="img-responsive center-block" />
                                    </a>
                                    <a href="{{ $product->product_slug }}   ">
                                        <img src="{{ Storage::url($product->product_image) }}" class="img-responsive second-img" alt="hover image"/>
                                    </a>
                                </div>
                                <div class="caption text-left">
                                    <h4 class="protitle"><a href="{{ $product->product_slug }}">{{ $product->product_name }}</a></h4>
                                    <p class="catlist-des">{{ $product->detail }}</p>
                                    <div class="opbtn">
                                        <p class="price">
                                            <span data-update='price-43' class="price">{{ number_format($product->product_price, 0, '', '.') }} đ</span>
                                        </p>
                                        <div class="rating">
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        </div>
                                    </div>

                                    <div class="product-btn">
                                        <div class="button-group">
                                            <button type="button" onclick="wishlist.add('43');">
                                                <svg><use xlink:href="#heart"></use></svg></button>
                                            </button>
                                        </div>
                                        <div class="cart-btn">
                                            <input type="hidden" name="product_id" value="43"/>
                                            <button type="button" class="webi-cart" ><svg><use xlink:href="#pcart"></use></svg>
                                                <span class="hidden-xs hidden-sm">add to cart</span></button>
                                            <input type="hidden" name="hid-qty-msg" value="Quantity At Least One or More">
                                        </div>
                                    </div>

                                </div>



                            </div>
                        </div>
                    @empty
                        <div class="product-layout product-list col-xs-12">
                            Không có sản phẩm nào
                        </div>
                    @endforelse

                </div>
                <div class="row pagi">
                    <div class="col-sm-6 col-xs-6 text-left"></div>
                    <div class="col-sm-6 col-xs-6 text-right tot">Showing 1 to 7 of 7 (1 Pages)</div>
                </div>
            </div>
        </div>
    </div>
@endsection
