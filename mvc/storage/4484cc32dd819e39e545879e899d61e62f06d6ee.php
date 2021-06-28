<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <!-- Start Banner Area -->
 <section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Thủ tục thanh toán
                </h1>
                <nav class="d-flex align-items-center">
                    <a href="<?php echo e(BASE_URL); ?>">Trang Chủ<span class="lnr lnr-arrow-right"></span></a>
                    <a href="">Thủ tục thanh toán
                    </a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Checkout Area =================-->
<section class="checkout_area section_gap">
    <div class="container">
  
        <div class="cupon_area">
            <div class="check_title">
                <h2>Có phiếu giảm giá? <a href="#">Bấm vào đây để nhập mã của bạn</a></h2>
            </div>
            <input type="text" placeholder="Enter coupon code">
            <a class="tp_btn" href="#">
                Áp dụng phiếu giảm giá</a>
        </div>
        <div class="billing_details">
<form class="row contact_form" action=""  method="POST" >
            <div class="row">
                <div class="col-lg-8">
                    <h3>Chi tiết thanh toán
                    </h3>
                    <?php if(isset($error)): ?>
                        <?php
                            $error = $error ;
                        ?>
               
                        
                    <?php else: ?>
                    <?php
                    $error = " " ;
                    ?>
                        
                    <?php endif; ?>
                    
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="first" value="<?php echo e(isset($_POST['customer_name']) ? $_POST['customer_name'] :''); ?>" name="customer_name" placeholder="Tên Của Bạn " >
                           <span style="color: red;"><?php echo e(isset($error['Name_required']) ?$error['Name_required'] :''); ?></span>
                        </div>
                       
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control"  value="<?php echo e(isset($_POST['customer_phone_number']) ? $_POST['customer_phone_number'] :''); ?>" id="number" name="customer_phone_number"  placeholder="Số điện thoại của bạn " >
                            <span style="color: red;"><?php echo e(isset($error['phone_required']) ?$error['phone_required'] :''); ?></span>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control"  value="<?php echo e(isset($_POST['customer_email']) ? $_POST['customer_email'] :''); ?>" id="email" name="customer_email"  placeholder="Email Của bạn" >
                            <?php if(isset($error['email_required'])): ?>
                                 <span style="color: red;"><?php echo e(isset($error['email_required']) ?$error['email_required'] :''); ?></span>
                            <?php else: ?>
                            <span style="color: red;"><?php echo e(isset($error['email_dd_required']) ?$error['email_dd_required'] :''); ?></span>
                            <?php endif; ?>
                            
                           
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control"  value="<?php echo e(isset($_POST['customer_address']) ? $_POST['customer_address'] :''); ?>" id="add1" name="customer_address"  placeholder="Địa chỉ của bạn " >
                            <span style="color: red;"><?php echo e(isset($error['address_required']) ?$error['address_required'] :''); ?></span>
                        </div>
                        
                        <div class="col-md-12 form-group">
                            <div class="creat_account">
                                <h3>Chi Tiết Giao Hàng</h3>
                                <input type="checkbox" id="f-option3" name="selector">
                                <label for="f-option3">Gửi đến một địa chỉ khác?</label>
                            </div>
                            <textarea class="form-control"  id="message" rows="1" placeholder="Ghi Chú giao hàng" name="note"><?php echo e(isset($_POST['note']) ?$_POST['note'] :''); ?></textarea>
                        </div>
                        
               
                </div>
                <div class="col-lg-4">
                    <div class="order_box">
                        <h2>Đơn hàng của bạn</h2>
                        <ul class="list">
                            <li><a href="#">Sản phẩm <span>Giá</span></a></li>
                            <?php
                                $totalPrice = 0
                            ?>
                            <?php $__currentLoopData = $sessionCart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                             $totalPrice += $item['price']*$item['quantity'];
                            ?>
                            <li><a href="#"><?php echo e($item['name']); ?> 
                                <span class="middle"> x <?php echo e($item['quantity']); ?></span> <span class="last">$<?php echo e(number_format($item['price'])); ?></span>
                                <input type="hidden" name="quantity" value="<?php echo e($item['quantity']); ?>">

                            </a></li>
                            
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                           
                        </ul>
                        <ul class="list list_2">

                            <li><a href="#">Tổng phụ <span>$<?php echo e(number_format( $totalPrice )); ?></span></a></li>
                            <li><a href="#">Giao hàng <span>Flat rate: $35.000</span></a></li>
                           
                            <li><a href="#">Tổng  <span>$<?php echo e(number_format( $totalPrice + 35000 )); ?></span></a></li>
                            <input type="hidden" name="total_price" value="<?php echo e($totalPrice + 35000); ?>">
                            <input type="hidden" name="unit_price" value="<?php echo e($totalPrice + 35000); ?>">
                        </ul>
                        <div class="payment_item">
                            <div class="radion_btn">
                                <input type="radio" id="f-option5" checked name="payment_method" value="1" >
                                <label for="f-option5">Tiền Mặt</label>
                                <div class="check"></div>
                            </div>
                      
                        </div>
                        <div class="payment_item active">
                            <div class="radion_btn">
                                <input type="radio" id="f-option6" name="payment_method" value="2" >
                                <label for="f-option6">Thẻ Atm </label>
                                <img src="<?php echo e(TEMPLATE_ASSET_URL); ?>img/product/card.jpg" alt="">
                                <div class="check"></div>
                            </div>
                        </div>
                        <div class="creat_account">
                            <input type="checkbox" id="f-option4" name="selector">
                            <label for="f-option4">Bạn đã đọc và chấp nhận !</label>
                            <a href="#">Điều khoản & dịch vụ*</a>
                        </div>
                    <center>
                        <button type="submit" class="primary-btn" style="border: none;">Xác nhận</button>
                    </center> 
                    </div>
                </div>
            </div>
</form>
        </div>
    </div>
</section>
<!--================Blog Area =================-->
<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2\asm_final\mvc\app\views/checkout.blade.php ENDPATH**/ ?>