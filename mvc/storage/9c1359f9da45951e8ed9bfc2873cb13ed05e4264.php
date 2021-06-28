




<?php $__env->startSection('title' , 'Trang Chính'); ?>
<?php $__env->startSection('content'); ?>
<div class="wiTDet-program-bg">
    <div class="container-fluid">
        <div class="row row-admin" >
            <a href="<?php echo e(BASE_URL.'admin/user'); ?>">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="hpanel shadow-inner hbggreen bg-1 responsive-mg-b-30">
                    <div class="panel-body">
                        <div class="text-center content-bg-pro">
                            <h3>Tài Khoản</h3>
                            <p class="text-big font-light">
                                <?php echo e($user); ?>

                            </p>
                            <small>
                                Chi tiết tất cả dữ liệu bảng và quyền xử lý của các chức năng (Thêm, Sửa, Xóa) do TD thiết kế.  
                                    </small>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="<?php echo e(BASE_URL.'admin/product'); ?>">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="hpanel shadow-inner hbgblue bg-2 responsive-mg-b-30">
                    <div class="panel-body">
                        <div class="text-center content-bg-pro">
                            <h3>Sản Phẩm</h3>
                            <p class="text-big font-light">
                                <?php echo e($product); ?>

                            </p>
                            <small>
                                Chi tiết tất cả dữ liệu bảng và quyền xử lý của các chức năng (Thêm, Sửa, Xóa) do TD thiết kế.  
                                    </small>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="<?php echo e(BASE_URL.'admin/cate'); ?>">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="hpanel shadow-inner hbgyellow bg-3 responsive-mg-b-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                    <div class="panel-body">
                        <div class="text-center content-bg-pro">
                            <h3>Loại Sản phẩm</h3>
                            <p class="text-big font-light">
                                <?php echo e($cate); ?>

                            </p>
                            <small>
                                Chi tiết tất cả dữ liệu bảng và quyền xử lý của các chức năng (Thêm, Sửa, Xóa) do TD thiết kế. 
                                    </small>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="<?php echo e(BASE_URL.'admin/comment'); ?>">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="hpanel shadow-inner hbgred bg-4 res-tablet-mg-t-30 dk-res-t-pro-30">
                    <div class="panel-body">
                        <div class="text-center content-bg-pro">
                            <h3>Bình Luận</h3>
                            <p class="text-big font-light">
                                <?php echo e($comment); ?>

                            </p>
                            <small>
                                Chi tiết tất cả dữ liệu bảng và quyền xử lý của các chức năng (Thêm, Sửa, Xóa) do TD thiết kế.                                    </small>
                        </div>
                    </div>
                </div>
            </div>
        </a>
            
            
        </div>
        
        <div style="margin-top: 30px;" class="row">
            <a href="<?php echo e(BASE_URL.'admin/blog'); ?>">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div style="background-color: rgb(63, 25, 16)" class="hpanel shadow-inner hbgyellow bg-1 responsive-mg-b-30">
                    <div class="panel-body">
                        <div class="text-center content-bg-pro">
                            <h3>Bài Viết</h3>
                            <p class="text-big font-light">
                                <?php echo e($blog); ?>

                            </p>
                            <small>
                                Chi tiết tất cả dữ liệu bảng và quyền xử lý của các chức năng (Thêm, Sửa, Xóa) do TD thiết kế. 
                                    </small>
                        </div>
                    </div>
                </div>
            </div>
            </a>
            <a href="<?php echo e(BASE_URL.'admin/invoice'); ?>">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                <div style="background-color: rgb(134, 15, 15) !important;" class="hpanel shadow-inner hbgblue bg-2 responsive-mg-b-30">
                    <div class="panel-body">
                        <div class="text-center content-bg-pro">
                            <h3>Đơn hàng (<?php echo e($invoice); ?>)</h3>
                            <p class="text-big font-light">
                                Tổng giá : <?php echo e(number_format($totalPrice)); ?> đ
                            </p>
                            <small>
                                Chi tiết tất cả dữ liệu bảng và quyền xử lý của các chức năng (Thêm, Sửa, Xóa) do TD thiết kế.
                                    </small>
                        </div>
                    </div>
                </div>
            </div>
            </a>
         
          
            
            
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin\layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2\asm_final\mvc\app\views/admin/home.blade.php ENDPATH**/ ?>