
 <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>   <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Giỏ hàng</h1>
                    <nav class="d-flex align-items-center">
                        <a href="<?php echo e(BASE_URL); ?>">Trang Chủ<span class="lnr lnr-arrow-right"></span></a>
                        <a href="<?php echo e(BASE_URL.'cart'); ?>">Giỏ hàng</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Cart Area =================-->
    <section class="cart_area">
        <div class="container">
            <div class="cart_inner">

                <div class="table-responsive">
                   
                    <table class="table">
                        <?php
                            if (isset($_SESSION[CART])) {
                               $countnew = count($_SESSION[CART]);
                            }else {
                                $countnew = "";
                            }

                        ?>
                        <?php if( $countnew == null): ?>
                                
                        <h1>Bạn chưa có sản phẩm nào trong giỏ hàng. </h1>
                        
                        <a class="gray_btn" href="<?php echo e(BASE_URL.'category'); ?>">Tiếp Tục Mua Hàng</a>


                        <?php else: ?>
                        <thead>
                            <tr>
                                <th scope="col">Sản Phẩm</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Số Lượng</th>
                                <th scope="col">Tổng giá</th>
                                <th scope="col">Hàng Động</th>
                            </tr>
                        </thead>
          
                        <tbody class="tbody-cart">
                           

                            <?php
                            // $totalPrice = 0;
                            ?>
                            <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                            // $totalPrice += $item['price']*$item['quantity'];
                            ?>
                         
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img width="75px;" src="<?php echo e(PUBLIC_URL.$item['image']); ?>" alt="">
                                        </div>
                                        <div class="media-body">
                                            <p><?php echo e($item['name']); ?></p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>$<?php echo e(number_format($item['price'], 0, '.', '.')); ?> <input type="hidden" class="iprice" value="<?php echo e($item['price']); ?>"></h5>
                                </td>
                                <td>
                                <form action="<?php echo e(BASE_URL .'add-to-cart-two?id='.$item['id']); ?>" method="get">
                                    <div class="product_count">
                                        <input type="hidden" name="action" value="update">
                                        <input type="hidden" name="id" value="<?php echo e($item['id']); ?>">
                                        <input type="number"  name="iquantity" id="sst"  value="<?php echo e($item['quantity']); ?>" onchange="subTotal()"  
                                            class="input-text iquantity">
                                        <button class="btn-update" > <i class="fas fa-undo-alt"></i></button>
                                    </div>
                                </form>
                                </td>
                                <td>
                                    <h5 class="itotal" ></h5>
                                </td>
                                <td>
                                
                              <form action="" method="post">
                                   <button name="remove-cart" style="margin-left: 4px ;" class="btn btn-outline-danger"><i class="fas fa-times"></i></button>
                                   <input type="hidden" name='remove-id' value="<?php echo e($item['id']); ?>" >
                                  </form>
                                </td>
                            </tr>


                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
                            <tr class="bottom_button">
                                <td>
                                    
                                </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <h5>Tổng phụ</h5>
                                </td>
                                <td>
                                    <h5 id="gtotal"> </h5>
                                </td>
                                
                            </tr>
                            
                            <tr class="out_button_area">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td style="width: 80px;">
                                    <div  class="checkout_btn_inner d-flex align-items-center">
                                        <a class="gray_btn" href="<?php echo e(BASE_URL.'category'); ?>">Tiếp Tục Mua Hàng</a>
                                        <a class="primary-btn" href="<?php echo e(BASE_URL.'checkout'); ?>">Tiến hành kiểm tra</a>
                                    </div>
                                </td>
                            </tr>
                      
                        </tbody>
                   
                    <?php endif; ?>
                    </table>
                    
                </div>
            </div>
        </div>
    </section>
    <!--================End Cart Area =================-->
<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php /**PATH C:\xampp\htdocs\php2\asm_final\mvc\app\views/cart.blade.php ENDPATH**/ ?>