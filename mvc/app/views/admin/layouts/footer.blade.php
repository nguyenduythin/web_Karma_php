
    <!-- jquery
        
		============================================ -->
        <script src="{{THEME_ASSET_URL}}js/vendor/jquery-1.12.4.min.js"></script>
        <!-- bootstrap JS
            ============================================ -->
        <script src="{{THEME_ASSET_URL}}js/bootstrap.min.js"></script>
        <!-- wow JS
            ============================================ -->
        <script src="{{THEME_ASSET_URL}}js/wow.min.js"></script>
        <!-- price-slider JS
            ============================================ -->
        <script src="{{THEME_ASSET_URL}}js/jquery-price-slider.js"></script>
        <!-- meanmenu JS
            ============================================ -->
        <script src="{{THEME_ASSET_URL}}js/jquery.meanmenu.js"></script>
        <!-- owl.carousel JS
            ============================================ -->
        <script src="{{THEME_ASSET_URL}}js/owl.carousel.min.js"></script>
        <!-- sticky JS
            ============================================ -->
        <script src="{{THEME_ASSET_URL}}js/jquery.sticky.js"></script>
        <!-- scrollUp JS
            ============================================ -->
        <script src="{{THEME_ASSET_URL}}js/jquery.scrollUp.min.js"></script>
        <!-- counterup JS
            ============================================ -->
        <script src="{{THEME_ASSET_URL}}js/counterup/jquery.counterup.min.js"></script>
        <script src="{{THEME_ASSET_URL}}js/counterup/waypoints.min.js"></script>
        <script src="{{THEME_ASSET_URL}}js/counterup/counterup-active.js"></script>
        <!-- mCustomScrollbar JS
            ============================================ -->
        <script src="{{THEME_ASSET_URL}}js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="{{THEME_ASSET_URL}}js/scrollbar/mCustomScrollbar-active.js"></script>
        <!-- metisMenu JS
            ============================================ -->
        <script src="{{THEME_ASSET_URL}}js/metisMenu/metisMenu.min.js"></script>
        <script src="{{THEME_ASSET_URL}}js/metisMenu/metisMenu-active.js"></script>
        <!-- morrisjs JS
            ============================================ -->
        <script src="{{THEME_ASSET_URL}}js/morrisjs/raphael-min.js"></script>
        <script src="{{THEME_ASSET_URL}}js/morrisjs/morris.js"></script>
        <script src="{{THEME_ASSET_URL}}js/morrisjs/morris-active.js"></script>
        <!-- morrisjs JS
            ============================================ -->
        <script src="{{THEME_ASSET_URL}}js/sparkline/jquery.sparkline.min.js"></script>
        <script src="{{THEME_ASSET_URL}}js/sparkline/jquery.charts-sparkline.js"></script>
        <script src="{{THEME_ASSET_URL}}js/sparkline/sparkline-active.js"></script>
        <!-- calendar JS
            ============================================ -->
        <script src="{{THEME_ASSET_URL}}js/calendar/moment.min.js"></script>
        <script src="{{THEME_ASSET_URL}}js/calendar/fullcalendar.min.js"></script>
        <script src="{{THEME_ASSET_URL}}js/calendar/fullcalendar-active.js"></script>
        <!-- plugins JS
            ============================================ -->
        <script src="{{THEME_ASSET_URL}}js/plugins.js"></script>
        <!-- main JS
            ============================================ -->
            <script src="{{PUBLIC_URL}}ckeditor/ckeditor.js"></script>
          
        <script src="{{THEME_ASSET_URL}}js/main.js"></script>
        <script src="{{THEME_ASSET_URL}}myjs.js"></script>

       
        <script src="{{BASE_URL}}node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
        <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

            <script>
                CKEDITOR.replace('content_editor');
            </script>

           @if (isset($_SESSION['status']) )
           
                   <Script>
                          Swal.fire({
                            position: 'top-end',
                            icon: '{{$_SESSION['status_code']}}',
                            title: '{{$_SESSION['status']}}',
                            showConfirmButton: false,
                            timer: 1500
                            });

                                    
                   </Script>

                   @php
                
                     unset($_SESSION['status_code']);
                  
                    
                   @endphp
           @endif




    </body>
    
    </html>