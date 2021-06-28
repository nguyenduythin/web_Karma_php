@include('layouts.header')
	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Xác nhận</h1>
					<nav class="d-flex align-items-center">
						<a href="{{BASE_URL}}">Trang Chủ<span class="lnr lnr-arrow-right"></span></a>
						<a href="">Xác nhận</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
 <!-- Start Banner Area -->
 <section class="order_details section_gap">
    <div class="container">
        <h3 class="title_confirmation">Cảm ơn bạn. Đơn đặt hàng của bạn đã được Đặt. 
            <div style="margin-top: 10px;"  class="checkout_btn_inner ">
                <a class="gray_btn" href="{{BASE_URL.'clearcart'}}">Continue Shopping</a>
            </div>
    </h3>
    
        <div class="row order_d_inner">
          
            <div class="col-lg-4">
                <div class="details_item">
                    <h4>Thông Tin Đặt Hàng</h4>
                    <ul class="list">
                        <li><a href="#"><span>Số Điện Thoại</span> :  {{$invoice->customer_phone_number}}</a></li>
                        <li><a href="#"><span>Thời Gian</span> :  {{$invoice->created_at}}</a></li>
                        <li><a href="#"><span>Tổng</span> : ${{number_format($invoice->total_price)}}</a></li>
                        <li><a href="#"><span>Kiểu Thanh Toán</span> :  {{$invoice->payment_method == 1 ? 'Cash' : "Visit Card"}}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="details_item">
                    <h4>
                        Địa chỉ thanh toán</h4>
                    <ul class="list">
                        <li><a href="#"><span>Người Tạo</span> :  {{$invoice->customer_name}}</a></li>
                        <li><a href="#"><span>Địa Chỉ Emaill</span> :  {{$invoice->customer_email}}</a></li>
                        <li><a href="#"><span>Địa Chỉ</span> :  {{$invoice->customer_address}}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="details_item">
                    <h4>Địa Chỉ Giao Hàng</h4>
                    <ul class="list">
                        <li><a href="#"><span>Địa Chỉ</span> : {{$invoice->customer_address}}</a></li>
                        <li><a href="#"><span>Ghi Chú</span> : {{$invoice->note}}</a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="order_details_table">
            <h2>Chi Tiết Đặt Hàng</h2>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Sản Phẩm</th>
                            <th scope="col">Số Lượng</th>
                            <th scope="col">Tổng </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sessionCart as $item)
                               <tr>
                            <td>
                                <p>{{$item['name']}}</p>
                            </td>
                            <td>
                                <h5>x {{$item['quantity']}}</h5>
                            </td>
                            <td>
                                <p>${{number_format($item['price'])}}</p>
                            </td>
                        </tr>
                        @endforeach
                     
                      
                        <tr>
                            <td>
                                <h4>Giao Hàng</h4>
                            </td>
                            <td>
                                <h5></h5>
                            </td>
                            <td>
                                <p>Phí Ship: $35.000</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Tổng </h4>
                            </td>
                            <td>
                                <h5></h5>
                            </td>
                            <td>
                                <p>${{number_format($invoice->total_price)}}</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
       
    </div>
</section>
<!--================Blog Area =================-->
@include('layouts.footer')