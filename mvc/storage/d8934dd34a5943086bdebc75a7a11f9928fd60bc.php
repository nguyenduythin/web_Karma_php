



<?php $__env->startSection('title' , 'Thêm Bài Viết'); ?>
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
                                                            <h5>Tiêu đề :</h5>
                                                            <input name="title_blog" type="text" class="form-control" placeholder="Title Blog">
                                                        </div>
                                                        <div class="form-group">
                                                            <h5>Kiểu :</h5>
                                                        <select name="type_blog" class="form-control" id="">
                                                      
                                                           <option value="1" >Tin Tức</option>
                                                           <option value="2" >Thời Trang</option>
                                                           <option value="3" >Gỉai Trí</option>
                                                           <option value="4" >Style</option>
                                                      
                                                        </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <h5>Nội Dung :</h5>
                                                         <textarea name="content_blog" id="content_editor" class=""></textarea>
                                                        </div>
                                                   
                                                     
                                           



                                                    
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <h3>Người Viết : <input style="border: none; background-color: white;" type="text" value="<?php echo e($_SESSION[AUTH]['id']); ?>" name="id_user" ></h3>
                                                        
                                                        <div class="form-group alert-up-pd">
                                                            <div class="file-upload">
                                                            <button class="file-upload-btn"  type="button" onclick="$('.file-upload-input').trigger( 'click' )">Thêm Mới</button>
                                                                
                                                            <div class="image-upload-wrap">
                                                              <input class="file-upload-input"  name="avatar_blog"  type="file" onchange="readURL(this);"  />
                                                              
                                                              <div class="drag-text">
                                                                <h3><i class="fas fa-download fa-2x" ></i> <br> Drag and drop a file or select add Image</h3>
                                                              </div>
                                                            </div>
                                                            <div class="file-upload-content">
                                                              <img class="file-upload-image"   type="file" src="" alt="your image" />
                                                              <div class="image-title-wrap">
                                                                <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                                                              </div>
                                                            </div>
                                                          </div>
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
<?php echo $__env->make('admin\layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2\asm_final\mvc\app\views/admin\blog/blog-add.blade.php ENDPATH**/ ?>