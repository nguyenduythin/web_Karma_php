@include('layouts.header')
	<!-- End Header Area -->

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb" style="margin-bottom: 100px">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Cửa Hàng</h1>
					<nav class="d-flex align-items-center">
						<a href="{{BASE_URL}}">Trang Chủ<span class="lnr lnr-arrow-right"></span></a>
						<a href="{{BASE_URL.'category'}}">Cửa Hàng</a>
					
					</nav>
				</div>
			</div>
		</div>
	</section >
	<!-- End Banner Area -->
	<div class="container">
		<div class="row">
			<div class="col-xl-3 col-lg-4 col-md-5">
				<div class="sidebar-categories">
					<a href="{{BASE_URL.'category'}}"><div class="head">Duyệt qua danh mục</div></a>
					<ul class="main-categories">	
					
						@foreach ($cate as $item)
							<li class="main-nav-list child"><a href="?cate={{$item->id}}">{{$item->cate_name}}<span class="number">({{count($item->products)}})</span></a></li>
							@endforeach
					

				
					</ul>
				</div>
				<div class="sidebar-filter mt-50">
					<div class="top-filter-head">Lọc Sản phẩm</div>
					<div class="common-filter">
						<div class="head">Nhãn Hiệu</div>
						{{-- <form action="#">
							<ul>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="apple" name="brand"><label for="apple">Apple<span>(29)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="asus" name="brand"><label for="asus">Asus<span>(29)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="gionee" name="brand"><label for="gionee">Gionee<span>(19)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="micromax" name="brand"><label for="micromax">Micromax<span>(19)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="samsung" name="brand"><label for="samsung">Samsung<span>(19)</span></label></li>
							</ul>
						</form> --}}
					</div>
					<div class="common-filter">
						<div class="head">Màu</div>
						{{-- <form action="#">
							<ul>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="black" name="color"><label for="black">Black<span>(29)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="balckleather" name="color"><label for="balckleather">Black
										Leather<span>(29)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="blackred" name="color"><label for="blackred">Black
										with red<span>(19)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="gold" name="color"><label for="gold">Gold<span>(19)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="spacegrey" name="color"><label for="spacegrey">Spacegrey<span>(19)</span></label></li>
							</ul>
						</form> --}}
					</div>
					<div class="common-filter">
						<div class="head">Giá</div>
						{{-- <div class="price-range-area">
							<div id="price-range"></div>
							<div class="value-wrapper d-flex">
								<div class="price">Price:</div>
								<span>$</span>
								<div id="lower-value"></div>
								<div class="to">to</div>
								<span>$</span>
								<div id="upper-value"></div>
							</div>
						</div> --}}
					</div>
				</div>
			</div>
			<div class="col-xl-9 col-lg-8 col-md-7">
				<!-- Start Filter Bar -->
				<div class="filter-bar d-flex flex-wrap align-items-center">
					<div class="sorting">
						<select>
							<option value="1">Sắp Xếp 
							</option>
							<option value="1"> Tăng Dần 
							</option>
							<option value="1">Tiảm dần
							</option>
						</select>
					</div>
					<div class="sorting mr-auto">
						<select>
						<option value="1"><a href="?show=6">Hiển Thị 6 </a>	</option>
							<option value="1">Hiển Thị 9</option>
							<option value="1">Hiển Thị 11</option>
						</select>
						
					</div>
				
					@if (isset($_GET['keyword']))
					
							<div style="color: white; margin-right: 120px; margin-top:5px ;">
						
							Tìm được <strong>( {{count($product)}} )</strong> sản phẩm
					</div>
					@endif
				
					<div class="pagination">
						<a href="#" class="prev-arrow"><i class="fas fa-long-arrow-alt-left"></i></a>
						@for ($i = 1; $i <= $totalPage; $i++)
						<a href="?page={{$i}}">{{$i}}</a>

						{{-- @if ($i>3)
						<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
						@endif --}}
						
						@endfor
						<a href="#" class="next-arrow"><i class="fas fa-long-arrow-alt-right"></i></a>
					</div>
				</div>
				<!-- End Filter Bar -->
				<!-- Start Best Seller -->
				<section class="lattest-product-area pb-40 category-list">
					<div class="row">
						@foreach ($product as $item)
							<div class="col-lg-4 col-md-6">
							<div class="single-product">
							<a href="{{BASE_URL}}detail-product/{{$item->id}}">	<img class="img-fluid" style="height: 272px !important;" src="{{PUBLIC_URL.$item->image}}" alt="">
								<div class="product-details">
									<h6>{{$item->name}}</h6>
									<div class="price">
										<h6>${{number_format($item->price, 0, '.', '.')}}</h6>
										<h6 class="l-through">$210.00</h6>
									</div></a>
									<div class="prd-bottom">
										<a href="{{BASE_URL .'add-to-cart/'.$item->id}}" class="social-info">
											<span class="ti-bag"></span>
											<p class="hover-text">Thêm Giỏ</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-heart"></span>
											<p class="hover-text">Yêu Thích</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-sync"></span>
											<p class="hover-text">Đối chiếu</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">Xem Thêm</p>
										</a>
									</div>
								</div>
							</div>
						</div>
						@endforeach
						<!-- single product -->
						
					
					</div>
				</section>
				<!-- End Best Seller -->
				<!-- Start Filter Bar -->
				<div class="filter-bar d-flex flex-wrap align-items-center">
					<div class="sorting mr-auto">
						<select>
							<option value="1">Hiển Thị 12</option>
							<option value="1">Hiển Thị 12</option>
							<option value="1">Hiển Thị 12</option>
						</select>
					</div>
					<div class="pagination">
						<a href="#" class="prev-arrow"><i class="fas fa-long-arrow-alt-left"></i></a>
						@for ($i = 1; $i <= $totalPage; $i++)
						<a href="?page={{$i}}">{{$i}}</a>
						{{-- @if ($i>3)
						<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
						@endif --}}
						@endfor
						<a href="#" class="next-arrow"><i class="fas fa-long-arrow-alt-right"></i></a>
					</div>
				</div>
				<!-- End Filter Bar -->
		
		
		
			</div>
		</div>
	</div>

	<!-- Start related-product Area -->
	<section class="related-product-area section_gap">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<div class="section-title">
						<h1>Ưu đãi trong tuần</h1>
						<p>Các Sản phẩm mới của chúng tôi hiện tại đang được ưu đãi cực sốc tại các cửa hàng trên toàn quốc.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-9">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{TEMPLATE_ASSET_URL}}img/r1.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{TEMPLATE_ASSET_URL}}img/r2.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{TEMPLATE_ASSET_URL}}img/r3.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{TEMPLATE_ASSET_URL}}img/r5.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="img/r6.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{TEMPLATE_ASSET_URL}}img/r7.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{TEMPLATE_ASSET_URL}}img/r9.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-related-product d-flex">
								<a href="#"><img src="img/r10.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{TEMPLATE_ASSET_URL}}img/r11.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="ctg-right">
						<a href="#" target="_blank">
							<img class="img-fluid d-block mx-auto" src="{{TEMPLATE_ASSET_URL}}img/category/c5.jpg" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End related-product Area -->

	<!-- start footer Area -->
@include('layouts.footer')