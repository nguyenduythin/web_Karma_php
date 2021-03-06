

@extends('admin\layouts.main')

@section('title' , 'Add Invoice')
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
                                            <form action="" enctype="multipart/form-data" class="dropzone dropzone-custom needsclick addlibrary" id="demo1-upload" method="POST">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <input name="customer_name" type="text" class="form-control" placeholder="invoice name" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="customer_phone_number" type="number" class="form-control" placeholder="invoice phone" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="customer_email" type="email" class="form-control" placeholder="invoice email" required>
                                                        </div>
                                     
                                                        <div class="form-group">
                                                            <input name="customer_address" type="text" class="form-control" placeholder="invoice address" required>
                                                        </div>
                                                       
                                           



                                                    
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    
                                                        <div class="form-group">
                                                            <input name="total_price" type="number" class="form-control" placeholder="invoice Total price" required>
                                                        </div>
                                                         <div class="form-group">
                                                             <span>Payment Method : </span>
                                                          <select name="payment_method" id="">
                                                          
                                                              <option value="1">visit Card</option>
                                                              <option value="2">Cash</option>
                                                        
                                                        
                                                        </select>
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
@endsection