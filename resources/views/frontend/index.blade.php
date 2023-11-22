@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')

    <div id="common-home" class="container-fluid">
        <div class="row">
            <div id="content" class="col-xs-12">

                @include('frontend.partials.banner');

                @include('frontend.partials.category');

                @include('frontend.partials.feature');

                @include('frontend.partials.product');

                @include('frontend.partials.sub_banner');

                @include('frontend.partials.brand');

                @include('frontend.partials.product_trending');

                @include('frontend.partials.blog');

                <div class="webi-newsletter  webi-newsletterp hide" id="newsletter_6422832f7ca76" data-mode="popup">
                    <form id="formNewLestter" method="post"
                          action="https://opencart.dostguru.com/KS02/birthblessing_03/index.php?route=extension/module/webinewsletter/subscribe"
                          class="formNewLestter  white-popup newsletter-bg news-popup">
                        <div class="inner">
                            <div class="description-top">
                                <h1>sign up our newsletter</h1>
                                <p>Subscribe our newsletters now and stay up-to-date with new collections</p>


                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-md inputNew"
                                       onblur="javascript:if(this.value=='')this.value='Your email address';"
                                       onfocus="javascript:if(this.value=='Your email address')this.value='';"
                                       value="Your email address"
                                       size="18" name="email">
                            </div>
                            <div class="valid"></div>
                            <div class="button-submit">
                                <button type="submit" name="submitNewsletter" class="btn btn-primary">sign up</button>
                            </div>
                            <input type="hidden" value="1" name="action">

                            <div class="description-bottom">


                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label><input type="checkbox" checked="false"> Close & Don't show this again!!! </label>
                            </div>
                        </div>
                    </form>
                </div>

                <script type="text/javascript">
                    $("#newsletter_6422832f7ca76").webiNewsletter().work('Email is not valid!');
                </script>
            </div>
        </div>
    </div>

@endsection
