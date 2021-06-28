<?php echo $__env->make('admin\layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Start Left menu area -->
<?php echo $__env->make('admin\layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="<?php echo e(BASE_URL); ?>"><img class="main-logo" src="<?php echo e(THEME_ASSET_URL); ?>img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $__env->make('admin\layouts.headerAdvance', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 
        <div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            
                            
                            <h4><?php echo $__env->yieldContent('title'); ?></h4>
                          


                            <div class="asset-inner">

                        <?php echo $__env->yieldContent('content'); ?>


                            </div>
                     <?php echo $__env->yieldContent('pagination'); ?>
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
    <?php echo $__env->make('admin\layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2\asm_final\mvc\app\views/admin\layouts/main.blade.php ENDPATH**/ ?>