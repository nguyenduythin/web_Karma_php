



<?php $__env->startSection('title' , 'Sửa Đơn Hàng'); ?>
<?php $__env->startSection('content'); ?>
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-payment-inner-st">
                    
                    <div id="myTabContent" class="tab-content custom-product-edit">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div id="dropzone1" class="pro-ad addcoursepro">
                                            <form action="" enctype="multipart/form-data" class="dropzone dropzone-custom needsclick addlibrary" id="demo1-upload" method="POST">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <span>Tên :</span>
                                                            <input name="customer_name" type="text" class="form-control" placeholder="invoice name" value="<?php echo e($invoice->customer_name); ?>" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <span>Số Điện Thoại :</span>
                                                            <input name="customer_phone_number" type="number" class="form-control" placeholder="invoice phone" value="<?php echo e($invoice->customer_phone_number); ?>" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <span>Email :</span>
                                                            <input name="customer_email" type="email" class="form-control" placeholder="invoice email" value="<?php echo e($invoice->customer_email); ?>" required>
                                                        </div>
                                     
                                                        <div class="form-group">
                                                            <span>Địa Chỉ :</span>
                                                            <input name="customer_address" type="text" class="form-control" placeholder="invoice address" value="<?php echo e($invoice->customer_address); ?>" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <span>Trạng Thái :</span>
                                                           <select name="confirm"  class="form-control" id="">
                                                            <option value="1"  <?php echo e($invoice->confirm == 1 ? 'selected' : ""); ?>>Chưa Xác Nhận</option>
                                                            <option value="2"  <?php echo e($invoice->confirm == 2 ? 'selected' : ""); ?>>Xác Nhận</option>

                                                           </select>
                                                        </div>
                                                       
                                           



                                                    
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    
                                                        <div class="form-group">
                                                            <span>Giá :</span>
                                                            <input name="total_price" type="number" class="form-control" placeholder="invoice Total price" value="<?php echo e($invoice->total_price); ?>" required>
                                                        </div>
                                                         <div class="form-group">
                                                             <span>Kiểu Thanh Toán : </span>
                                                          <select name="payment_method"  class="form-control" id="">
                                                          
                                                              <option value="1" <?php echo e($invoice->payment_method == 1 ? 'selected' : ""); ?>>visit Card</option>
                                                              <option value="2" <?php echo e($invoice->payment_method == 2 ? 'selected' : ""); ?>>Cash</option>
                                                        
                                                        
                                                        </select>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <h5>Chi Tiết Sản Phẩm</h5>
                                                            <textarea name="note" id="content_editor" ><?php echo e($invoice->note); ?></textarea>
                                                    </div>
                                                     
                                                      
                                                    </div>
                                                </div>
                                             
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="payment-adress">
                                                            <button type="submit"  style="width: 200px; height: 50px; margin-top: 10px;" class="btn btn-primary waves-effect waves-light">Lưu</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin\layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2\asm_final\mvc\app\views/admin\invoice/invoice-edit.blade.php ENDPATH**/ ?>