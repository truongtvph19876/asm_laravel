<header>
    <div class="topbsp hidden-xs hidden-sm text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-7 text-left offer_title"><p>Check Out Exclusive Black Friday Offer Up To 30% Off -</p> <span>SHOP NOW</span></div>
                <div class="col-md-5 text-right">
                    <a href="#!/contact">
                        <div class="caller">
                            <svg width="23px" height="23px"><use xlink:href="#caller"></use></svg>
                            <p>Customer Help</p>
                            <span>: 9669 654 321</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="hsticky">
        <div class="container">
            <div class="row hbottom">
                <div id="logo" class="col-lg-3 col-md-3 col-sm-4 col-xs-3 text-left">
                    <a href="/"><img src="{{ asset('') }}images/catalog/logo.png" title="Birth Blessing" alt="Birth Blessing" class="img-responsive" /></a>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 menu-bar"><div class="container_wb_megamenu">
                        <div id="stamenu">
                            <nav id="menu" class="navbar">
                                <div class="navbar-header">
                                    <button type="button" class="btn-navbar navbar-toggle" onclick="openNav()" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                        <i class="fa fa-bars"></i>
                                    </button>
                                </div>
                                <div id="mySidenav" class="sidenav menu-vertical">
                                    <div class="close-nav hidden-md hidden-lg hidden-xl">
                                        <span class="categories">Categories</span>
                                        <a href="javascript:void(0)" class="closebtn pull-right" onclick="closeNav()">
                                            <i class="fa fa-close"></i>
                                        </a>
                                    </div>
                                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                                        <ul class="nav navbar-nav">
                                            <li class="m-menu">
                                                <a href="{{ route('frontend.list.product') }}">Shop</a>
                                            </li>
                                            <li class="dropdown m-menu">
                                                <a href="{{ route('frontend.list.product') }}" class="dropdown-toggle header-menu" data-toggle="dropdown">
                                                    Brands
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <div class="dropdown-inner">
                                                        <ul class="list-unstyled">
                                                            <!--3rd level-->
                                                            <li class="dropdown-submenu"> <a href="{{ route('frontend.list.product') }}" class="submenu-title"> All Brand</a>
                                                                <ul class="list-unstyled grand-child">
                                                                    @foreach($brands = \Modules\Brand\Models\Brand::query()->whereNotIn('id', [1])->get() as $brand)
                                                                        <li>
                                                                            <a href="{{ route('frontend.list.product') }}?brand={{$brand->brand_name}}">{{$brand->brand_name}}</a>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            </li>
                                                            <!--3rd level over-->
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="m-menu">
                                                <a href="#">News</a>
                                            </li>
                                            <li class="m-menu">
                                                <a href="#">Contact</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <div class="w3-overlay w3-animate-opacity"  onclick="closeNav()" style="cursor:pointer" id="myOverlay"></div>
                        </div>
                    </div>


                    <script type="text/javascript">
                        function headermenu() {
                            if (jQuery(window).width() < 992)
                            {
                                jQuery('ul.nav li.dropdown a.header-menu').attr("data-toggle","dropdown");
                            }
                            else
                            {
                                jQuery('ul.nav li.dropdown a.header-menu').attr("data-toggle","");
                            }
                        }
                        $(document).ready(function(){headermenu();});
                        jQuery(window).resize(function() {headermenu();});
                        jQuery(window).scroll(function() {headermenu();});
                    </script></div>
                <div id="top-links" class="col-lg-4 col-md-4 col-sm-8 col-xs-5 text-right">
                    <ul class="list-inline">

                        <li class="search">
                        <li id="search" class="desktop-search d-inline-block">
                            <div class="d-search">
                                <button id="search_toggle" class="search-toggle" data-toggle="collapse" onclick="openSearch()">
                                    <svg><use xlink:href="#hsearch"></svg>
                                </button>
                            </div>
                            <div id="search" class="wbSearch">
                                <div id="search_block_top">
                                    <select id="madebyhand-search-category">
                                        <option value="0">Categories</option>
                                    </select>
                                    <form action="{{ route('frontend.list.product') }}">
                                        <div class="input-group">
                                            <input type="text" name="search" value="" placeholder="Search" class="search_query form-control input-lg madebyhand-search" style="width: 100%!important;"/>
                                            <div class="input-group-btn">
                                                <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-search  hidden-sm hidden-md hidden-lg"></i><span>Search</span></button>
                                                <a href="javascript:void(0)" class="closebtn close-nav" onclick="closeSearch()"><i class="fa fa-close"></i></a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                        </li>
                        <li class="dropdown inuser">
                            <a href="indexe223.html?route=account/ " title="My Account" class="dropdown-toggle" data-toggle="dropdown">
                                <div class="svg-bg">
                                    <svg><use xlink:href="#huser"></use></svg>
                                </div>
                                <span class="hidden-lg hidden-md hidden-sm">                  <span class="hidden-xs"><span id="cartme">Login</span> <span id="cartme">/ register</span></span> </span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right user-down haccount  hlogout ">
                                <h5 class="text-left">Your Account</h5>
                                <h6 class="text-left">Access account and manage orders</h6>
                                @auth
                                    <li class="xscu d-inline-block text-left">
                                            <div class="btn-group">
                                                <button class="btn-link dropdown-toggle test" data-toggle="dropdown">

                                                    <span>{{ Auth::user()->name }}</span>
                                                    &nbsp;<i class="fa fa-angle-down"></i></button>
                                                <ul class="dropdown-menu dropdown-menu-right langcdrop">
                                                    @can('view_backend')
                                                        <li>
                                                            <button class="btn btn-link language-select" type="button" name="en-gb">
                                                                <a href="/admin">Dashboard</a>
                                                            </button>
                                                        </li>
                                                    @endcanany
                                                    <li>
                                                        <button class="btn btn-link language-select" type="button" name="en-gb">
                                                            <a href="profile/{{encode_id(Auth::user()->id)}}">Profile</a>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <form action="{{ route('logout') }}" method="POST">
                                                            @csrf
                                                            <button class="btn btn-link language-select" type="submit" name="en-gb">
                                                                Logout
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                    </li>
                                    <li class="xsla  d-inline-block text-left">
                                        <a href="{{ route('frontend.orders.index') }}" class="btn-link dropdown-toggle test">
                                            <span>Đơn hàng</span>
                                        </a>
                                    </li>
                                    @endauth
                                @guest
                                    <li class="acd">
                                        <a href="{{ route('login') }}">
                                            <i class="fa fa-lock"></i>
                                            Login
                                        </a>
                                    </li>
                                    <li class="acd"><a href="{{ route('register') }}"><i class="fa fa-user-plus"></i> Register</a></li>
                                    <li class=" wishcom"><a href="index6431.html?route=product/compare"><i class="fa fa-compress"></i>compare</a></li>
                                @endguest
                            </ul>
                        </li>
                        <li class="wishcom text-center">
                            <a href="indexe223.html?route=account/wishlist" id="wishlist-total" title="Wishlist">
                                <div class="svg-bg">
                                    <svg width="15px" height="14px"><use xlink:href="#hwish"></use></svg>
                                </div>

                            </a>
                        </li>
                        <li><div id="cart" class="btn-group btn-block">
                                <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="dropdown-toggle">
                                    <div class="svg-bg">
                                        <svg><use xlink:href="#hcart"></use></svg><span id="cart-total"> <span class="cartt">{{ count(Session::get('cart', [])) }}</span><span class="hidden-xs  hidden-xs  caritem"> <strong>$0.00</strong> </span></span>
                                    </div>
                                </button>
                                <ul id="cart-item" class="dropdown-menu pull-right" style="min-width: 400px; max-width: 500px; max-height: 400px; overflow: hidden; overflow-y: scroll">

                                    @forelse(Session::get('cart', []) as $index => $cart)
                                        <li class="row d-flex">
                                            <div class="col-md-4">
                                                <img src="{{ Storage::url($cart->product_image) }}" alt="" style="width: 100%">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row overflow-hidden">
                                                    <div class="col-md-12">{{ $cart->product_name }}</div>
                                                    <div class="col-md-12">{{ number_format($cart->product_price, 0, '', '.') }}đ</div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <a href="{{ route('frontend.order', $cart) }}" class="w-100 btn btn-success text-center" style="width: 100%">Mua</a>
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                <button onclick="deleteCartItem({{$index}})" class="w-100 btn  text-center" style="width: 100%">Xoa</button>
                                            </div>
                                        </li>
                                        <hr>
                                    @empty
                                        <li>
                                            <p class="text-center">Giỏ hàng trống!</p>
                                        </li>
                                    @endforelse
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</header>

<script>

</script>
