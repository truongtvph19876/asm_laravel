<footer>
    <div class="middle-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 fborder footer-top">
                            <a href="#"><img src="image/catalog/logo.png" title="" alt="" class="img-responsive" /></a>                <div>  <div class="storeinfo">  <h5 class="contact"><span>Contact us</span>
                                        <button type="button" class="btn toggle collapsed" data-toggle="collapse" data-target="#contact"></button>
                                    </h5>
                                    <div id="contact" class="collapse footer-collapse footcontact">
                                        <ul class="list-unstyled f-left">
                                            <li><svg><use xlink:href="#Location_Icon"></use></svg><span>1A, Ha Trung, Ha Trung</span></li>
                                            <li><svg><use xlink:href="#Phone_Icon"></use></svg><span>0983425743</span></li>
                                            <li><svg><use xlink:href="#Email_Icon"></use></svg><span>truongtv67891@gmail.com</span></li>
                                        </ul>
                                    </div>
                                </div></div>



                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 fborder">
                            <h5>Information
                                <button type="button" class="btn toggle collapsed" data-toggle="collapse" data-target="#info"></button>
                            </h5>
                            <div id="info" class="collapse footer-collapse">
                                <ul class="list-unstyled">
                                    <li><a href="#!/about">About Us</a></li>
                                    <li><a href="{{ route('frontend.list.product') }}">Products</a></li>
                                    <li><a href="#!/contact">Contact Us</a></li>
                                    <li><a href="#!/post">Post</a></li>
                                    <li><a href="#!/news">News</a></li>


                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 fborder">
                            <h5>My Account
                                <button type="button" class="btn toggle collapsed" data-toggle="collapse" data-target="#account"></button>
                            </h5>
                            <div id="account" class="collapse footer-collapse">
                                <ul class="list-unstyled lastb">
                                    @if(auth()->check() && auth()->user()->id)
                                        <li><a href="{{ route('frontend.users.profile', encode_id(auth()->user()->id)) }}">My Account</a></li>
                                    @endif
                                    <li><a href="#!/wishlist">Wish List</a></li>
                                    <li><a href="#!/newsletter">Newsletter</a></li>
                                    <li><a href="#!/special">Specials</a></li>
                                    <li><a href="#!/sitemap">Site Map</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <aside id="column-left1">



                        <div class="newsl webi-newsletter " id="newsletter_6422832f7ff6d" data-mode="default">
                            <form id="formNewLestter" method="post" action="https://opencart.dostguru.com/KS02/birthblessing_03/index.php?route=extension/module/webinewsletter/subscribe" class="formNewLestter" >
                                <div class="inner">
                                    <div id="newsletter" class="newsletter">
                                        <div class="row social">

                                            <div id="new" class="footer-collapse col-md-12 col-lg-12 col-xs-12 fborder">
                                                <h5>Newsletter</h5>
                                                <p>Subscribe to our newsletters now and stay up to date with new collection and exclusive offers.</p>
                                                <div class="sing-up">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control input-md inputNew"  onblur="javascript:if(this.value=='')this.value='Your email address';" onfocus="javascript:if(this.value=='Your email address')this.value='';" value="Your email address" size="18" name="email" placeholder="Enter Your email">
                                                        <div class="input-group-btn"><button type="submit" name="submitNewsletter" class="newsbtn btn btn-primary">sign up</button></div>
                                                    </div>
                                                    <input type="hidden" value="1" name="action">
                                                    <div class="valid"></div>
                                                </div>
                                                <ul class="list-unstyled fsocial list-inline text-left social-media">
                                                    <li class="facebook"><a href="https://www.facebook.com/truongtv26"><i class="fa fa-facebook icon"></i></a></li>
                                                    <li class="twitter"><a href="#"><i class="fa fa-twitter icon"></i></a></li>
                                                    <li class="pinterest"><a href="#"><i class="fa fa-pinterest icon"></i></a></li>
                                                    <li class="instagram"><a href="#"><i class="fa fa-instagram icon"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <script type="text/javascript"><!--
                            $("#newsletter_6422832f7ff6d").webiNewsletter().work(  'Email is not valid!' );
                            --></script>
                    </aside>

                </div>



            </div>
        </div>
    </div>
    {{--tag--}}
{{--    <div class="container hidden-xs">--}}
{{--        <div class="row footblink text-center">--}}
{{--            <div>  <div class="tag-d text-left">--}}
{{--                    <ul class="list-unstyled list-inline">--}}
{{--                        <li><a href="#">Toys</a></li>--}}
{{--                        <li><a href="#">Mattress</a></li>--}}
{{--                        <li><a href="#">Wadrobe</a></li>--}}
{{--                        <li><a href="#">Stationary Items</a></li>--}}
{{--                        <li><a href="#">Bedside Table</a></li>--}}
{{--                        <li><a href="#">Sofas</a></li>--}}
{{--                        <li><a href="#">Bedside Lamp</a></li>--}}
{{--                        <li><a href="#">Chair</a></li>--}}
{{--                        <li><a href="#">Sectionals</a></li>--}}
{{--                        <li><a href="#">Sleeper Sofas</a></li>--}}
{{--                        <li><a href="#">Accent Chairs</a></li>--}}
{{--                        <li><a href="#">Loveseats</a></li>--}}
{{--                        <li><a href="#">Chairs</a></li>--}}
{{--                        <li><a href="#">Recliners</a></li>--}}
{{--                        <li><a href="#">Doll</a></li>--}}
{{--                        <li><a href="#">Teddy Bear</a></li>--}}
{{--                        <li><a href="#">Soft Toys</a></li>--}}
{{--                        <li><a href="#">Bed</a></li>--}}
{{--                        <li><a href="#">Couch</a></li>--}}
{{--                    </ul>--}}
{{--                </div></div>--}}



{{--        </div>--}}
{{--    </div>--}}

    <div class="copy text-center">
        <div class="container">
            <div class="row">
                <div class="fpow col-md-6 col-sm-6 text-left">Powered By <a href="https://www.facebook.com/truongtv26">Truongtv26</a> Birth Blessing &copy; 2023</div>
                <div class="col-md-6 col-sm-6 col-xs-12 text-right">
                    <ul class="list-inline list-unstyled fpayment">
                        <li><svg width="35px" height="35px"><use xlink:href="#ae"></use></svg></li>
                        <li><svg width="35px" height="35px"><use xlink:href="#mc"></use></svg></li>
                        <li><svg width="35px" height="35px"><use xlink:href="#dis"></use></svg></li>
                        <li><svg width="35px" height="35px"><use xlink:href="#visa"></use></svg></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

{{--scroll to top--}}
<a href="#" id="scroll" title="Scroll to Top" style="display: none;">
    <i class="fa fa-angle-double-up"></i>
</a>
