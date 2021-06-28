<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<!-- End Header Area -->

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb" style="margin-bottom: 100px">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Cửa Hàng</h1>
					<nav class="d-flex align-items-center">
						<a href="<?php echo e(BASE_URL); ?>">Trang Chủ<span class="lnr lnr-arrow-right"></span></a>
						<a href="<?php echo e(BASE_URL.'category'); ?>">Cửa Hàng</a>
					
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
					<a href="<?php echo e(BASE_URL.'category'); ?>"><div class="head">Duyệt qua danh mục</div></a>
					<ul class="main-categories">	
					
						<?php $__currentLoopData = $cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li class="main-nav-list child"><a href="?cate=<?php echo e($item->id); ?>"><?php echo e($item->cate_name); ?><span class="number">(<?php echo e(count($item->products)); ?>)</span></a></li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					

				
					</ul>
				</div>
				<div class="sidebar-filter mt-50">
					<div class="top-filter-head">Lọc Sản phẩm</div>
					<div class="common-filter">
						<div class="head">Nhãn Hiệu</div>
						
					</div>
					<div class="common-filter">
						<div class="head">Màu</div>
						
					</div>
					<div class="common-filter">
						<div class="head">Giá</div>
						
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
				
					<?php if(isset($_GET['keyword'])): ?>
					
							<div style="color: white; margin-right: 120px; margin-top:5px ;">
						
							Tìm được <strong>( <?php echo e(count($product)); ?> )</strong> sản phẩm
					</div>
					<?php endif; ?>
				
					<div class="pagination">
						<a href="#" class="prev-arrow"><i class="fas fa-long-arrow-alt-left"></i></a>
						<?php for($i = 1; $i <= $totalPage; $i++): ?>
						<a href="?page=<?php echo e($i); ?>"><?php echo e($i); ?></a>

						
						
						<?php endfor; ?>
						<a href="#" class="next-arrow"><i class="fas fa-long-arrow-alt-right"></i></a>
					</div>
				</div>
				<!-- End Filter Bar -->
				<!-- Start Best Seller -->
				<section class="lattest-product-area pb-40 category-list">
					<div class="row">
						<?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col-lg-4 col-md-6">
							<div class="single-product">
							<a href="<?php echo e(BASE_URL); ?>detail-product/<?php echo e($item->id); ?>">	<img class="img-fluid" style="height: 272px !important;" src="<?php echo e(PUBLIC_URL.$item->image); ?>" alt="">
								<div class="product-details">
									<h6><?php echo e($item->name); ?></h6>
									<div class="price">
										<h6>$<?php echo e(number_format($item->price, 0, '.', '.')); ?></h6>
										<h6 class="l-through">$210.00</h6>
									</div></a>
									<div class="prd-bottom">
										<a href="<?php echo e(BASE_URL .'add-to-cart/'.$item->id); ?>" class="social-info">
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
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
						<?php for($i = 1; $i <= $totalPage; $i++): ?>
						<a href="?page=<?php echo e($i); ?>"><?php echo e($i); ?></a>
						
						<?php endfor; ?>
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
								<a href="#"><img src="<?php echo e(TEMPLATE_ASSET_URL); ?>img/r1.jpg" alt=""></a>
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
								<a href="#"><img src="<?php echo e(TEMPLATE_ASSET_URL); ?>img/r2.jpg" alt=""></a>
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
								<a href="#"><img src="<?php echo e(TEMPLATE_ASSET_URL); ?>img/r3.jpg" alt=""></a>
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
								<a href="#"><img src="<?php echo e(TEMPLATE_ASSET_URL); ?>img/r5.jpg" alt=""></a>
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
								<a href="#"><img src="<?php echo e(TEMPLATE_ASSET_URL); ?>img/r7.jpg" alt=""></a>
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
								<a href="#"><img src="<?php echo e(TEMPLATE_ASSET_URL); ?>img/r9.jpg" alt=""></a>
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
								<a href="#"><img src="<?php echo e(TEMPLATE_ASSET_URL); ?>img/r11.jpg" alt=""></a>
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
							<img class="img-fluid d-block mx-auto" src="<?php echo e(TEMPLATE_ASSET_URL); ?>img/category/c5.jpg" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End related-product Area -->

	<!-- start footer Area -->
<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\php2\asm_final\mvc\app\views/category.blade.php ENDPATH**/ ?>