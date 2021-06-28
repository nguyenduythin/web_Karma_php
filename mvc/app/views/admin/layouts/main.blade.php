@include('admin\layouts.header')

    <!-- Start Left menu area -->
@include('admin\layouts.sidebar')
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="{{BASE_URL}}"><img class="main-logo" src="{{THEME_ASSET_URL}}img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        @include('admin\layouts.headerAdvance')
 
        <div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            
                            
                            <h4>@yield('title')</h4>
                          


                            <div class="asset-inner">

                        @yield('content')


                            </div>
                     @yield('pagination')
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2021. All rights reserved. FontAdmin by <a href="https://colorlib.com/wp/templates/">Karma</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin\layouts.footer')