



<?php $__env->startSection('title' , 'Sửa Sản Phẩm'); ?>
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
                                                            <input name="name" type="text" class="form-control" value="<?php echo e($product->name); ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="price" type="number" class="form-control" value="<?php echo e($product->price); ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="short_desc" type="text" class="form-control" value="<?php echo e($product->short_desc); ?>">
                                                        </div>

                                                        <div class="form-group alert-up-pd">
                                                       
                                                            <div class="file-upload">
                                                            <button class="file-upload-btn"  type="button" onclick="$('.file-upload-input').trigger( 'click' )">Thêm Ảnh</button>
                                                                <div style="width: 100%;">
                                                                    <div class="img-av">
                                                                        <img    src="<?php echo e(PUBLIC_URL.$product->image); ?>" alt="">
                                                                    </div>

                                                        <div class="image-upload-wrap" style="float: right;width: 50%;">

                                                              <input class="file-upload-input"   name="image"  type="file" onchange="readURL(this);" accept="image/*" />
                                                              
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
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                     <strong><span>Loại : </span></strong>
                                                             <select name="cate_id" class="form-control" id="">
                                                              <?php $__currentLoopData = $cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                  <option value="<?php echo e($item->id); ?>" <?php echo e($item->id == $product->cate_id ?  'selected' : ""); ?>  > <?php echo e($item->cate_name); ?> </option>
                                                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            
                                                        
                                                        </select>
                                                        </div>
                                                    
                                                     
                                                        <div class="form-group">
                                                            <h5>Chi Tiết Sản Phẩm :</h5>
                                                            <textarea name="detail" id="content_editor"   ><?php echo e($product->detail); ?></textarea>
                                                    </div>
                                                      
                                                    </div>
                                                </div>
                                             
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="payment-adress">
                                                            <button type="submit"  style="width: 200px; height: 50px; margin-top: 10px;" class="btn btn-primary waves-effect waves-light">Submit</button>
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
<?php echo $__env->make('admin\layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2\asm_final\mvc\app\views/admin\product/product-edit.blade.php ENDPATH**/ ?>