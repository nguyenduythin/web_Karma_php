



<?php $__env->startSection('title' , 'Sửa Tài Khoản'); ?>
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
                                            <form action="" class="dropzone dropzone-custom needsclick addlibrary" id="demo1-upload" method="POST" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <input name="name" type="text" class="form-control" placeholder="Your name" value="<?php echo e($user->name); ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="email" type="text" class="form-control" placeholder="Your email" value="<?php echo e($user->email); ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="password" type="text" class="form-control" placeholder="Your password" value="<?php echo e($user->password); ?>">
                                                        </div>

                                                       
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                    <div class="form-group alert-up-pd">
                                                       
                                                            <div class="file-upload">
                                                            <button class="file-upload-btn"  type="button" onclick="$('.file-upload-input').trigger( 'click' )">Thêm Ảnh Đại Diện</button>
                                                                <div style="width: 100%;">
                                                                    <div class="img-av">
                                                                        <img    src="<?php echo e(PUBLIC_URL.$user->avatar); ?>" alt="">
                                                                    </div>

                                                                <div class="image-upload-wrap" style="float: right;width: 50%;">

                                                              <input class="file-upload-input"   name="avatar"  type="file" onchange="readURL(this);" accept="image/*" />
                                                              
                                                              <div class="drag-text">
                                                                <h3><i class="fas fa-download fa-2x" ></i> <br> Drag and drop a file or select add Image</h3>
                                                              </div>

                                                              
                                                                </div>
                                                        
                                                      
                                                            <div class="file-upload-content" >
                                                              <img class="file-upload-image"  src="#"  alt="your image" />
                                                              <div class="image-title-wrap">
                                                                <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                                                              </div>
                                                            </div> 
                                                         </div>

                                                          </div>
                                                        </div>
                                                    
                                                     
                                                  
                                                        
                                                      
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="payment-adress">
                                                            <button type="submit" style="width: 200px; height: 50px; margin-top: 10px;" class="btn btn-primary waves-effect waves-light">Lưu</button>
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
<?php echo $__env->make('admin\layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2\asm_final\mvc\app\views/admin\user/user-edit.blade.php ENDPATH**/ ?>