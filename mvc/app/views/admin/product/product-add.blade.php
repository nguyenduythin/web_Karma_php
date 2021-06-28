

@extends('admin\layouts.main')

@section('title' , 'Thêm Sản Phẩm')
@section('content')
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
                                            @if (isset($error))
                                            <div class="alert alert-danger" role="alert">
                                                
                                            @foreach ($error as $item)

                                            {{$item }}<br>
                                                  
                                            @endforeach
                                            </div> 
                                             
                                              @endif
                                            <form action="" enctype="multipart/form-data" class="dropzone dropzone-custom needsclick addlibrary" id="demo1-upload" method="POST">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <input name="name" type="text" class="form-control" placeholder="Tên sản phẩm"  value="{{isset($_POST['name']) ?$_POST['name'] : ""}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="price" type="number" class="form-control"  placeholder="Gía sản phẩm" value="{{isset($_POST['price']) ?$_POST['price'] : ""}}" >
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="short_desc" type="text" class="form-control" placeholder="Mô tả ngắn"  value="{{isset($_POST['short_desc']) ?$_POST['short_desc'] : ""}}">
                                                        </div>

                                                        <div class="form-group alert-up-pd">
                                                            <div class="file-upload">
                                                            <button class="file-upload-btn"  type="button" onclick="$('.file-upload-input').trigger( 'click' )">Thêm Ảnh</button>
                                                                
                                                            <div class="image-upload-wrap">
                                                              <input class="file-upload-input"  name="image"  type="file" onchange="readURL(this);"  />
                                                              
                                                              <div class="drag-text">
                                                                <h3><i class="fas fa-download fa-2x" ></i> <br> Drag and drop a file or select add Image</h3>
                                                              </div>
                                                            </div>
                                                            <div class="file-upload-content">
                                                              <img class="file-upload-image" name="image"   type="file" src="" alt="your image" />
                                                              <div class="image-title-wrap">
                                                                <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>


                                                    
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                     <strong><span>Loại : </span></strong>
                                                             <select name="cate_id" class="form-control" id="">
                                                                 <option value="{{isset($_POST['cate_id']) ?$_POST['cate_id'] : ""}}" selected> chọn loại</option>
                                                              @foreach ($cate as $item)
                                                                  <option value="{{$item->id}}" >{{$item->cate_name}}</option>
                                                              @endforeach
                                                            
                                                        
                                                        </select>
                                                        </div>
                                                    
                                                     
                                                        <div class="form-group">
                                                            <h5>Chi Tiết </h5>
                                                            <textarea name="detail" id="content_editor" >{{isset($_POST['detail']) ?$_POST['detail'] : ""}}</textarea>
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
@endsection