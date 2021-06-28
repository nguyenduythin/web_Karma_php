<!DOCTYPE html>
<html lang="zxx" class="no-js">

	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="CodePixar">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Karma Shop</title>
		<!--
			CSS
			============================================= -->
		<link rel="stylesheet" href="<?php echo e(TEMPLATE_ASSET_URL); ?>css/linearicons.css">
		<link rel="stylesheet" href="<?php echo e(TEMPLATE_ASSET_URL); ?>css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo e(THEME_ASSET_URL); ?>css/fontawesome-free-5.15.2-web/css/all.min.css">
		<link rel="stylesheet" href="<?php echo e(TEMPLATE_ASSET_URL); ?>css/themify-icons.css">
		<link rel="stylesheet" href="<?php echo e(TEMPLATE_ASSET_URL); ?>css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo e(TEMPLATE_ASSET_URL); ?>css/owl.carousel.css">
		<link rel="stylesheet" href="<?php echo e(TEMPLATE_ASSET_URL); ?>css/nice-select.css">
		<link rel="stylesheet" href="<?php echo e(TEMPLATE_ASSET_URL); ?>css/nouislider.min.css">
		<link rel="stylesheet" href="<?php echo e(TEMPLATE_ASSET_URL); ?>css/ion.rangeSlider.css" />
		<link rel="stylesheet" href="<?php echo e(TEMPLATE_ASSET_URL); ?>css/ion.rangeSlider.skinFlat.css" />
		<link rel="stylesheet" href="<?php echo e(TEMPLATE_ASSET_URL); ?>css/magnific-popup.css">
		<link rel="stylesheet" href="<?php echo e(TEMPLATE_ASSET_URL); ?>css/main.css">
		 <link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.min.css">
		<link rel="stylesheet" href="<?php echo e(TEMPLATE_ASSET_URL); ?>mycss.css">


	</head>

<body >

	<!-- Start Header Area -->


	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="./"><img src="<?php echo e(TEMPLATE_ASSET_URL); ?>img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item "><a class="nav-link" href="<?php echo e(BASE_URL); ?>">Trang Chủ</a></li>
							<li class="nav-item submenu dropdown">
								<a href="<?php echo e(BASE_URL.'category'); ?>" class="nav-link " >Cửa Hàng</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="<?php echo e(BASE_URL.'category'); ?>">Danh mục cửa hàng</a></li>
									<li class="nav-item"><a class="nav-link" href="<?php echo e(BASE_URL.'detail-product'); ?>">Chi tiết sản phẩm</a></li>
									<li class="nav-item"><a class="nav-link" href="<?php echo e(BASE_URL.'cart'); ?>">Giỏ Hàng</a></li>
								</ul>
							</li>
						
								<li class="nav-item"><a class="nav-link" href="<?php echo e(BASE_URL.'blog'); ?>">Bài Viết</a></li>
						
							
							<li class="nav-item"><a class="nav-link" href="<?php echo e(BASE_URL.'contact'); ?>">Liên Hệ</a></li>
						<?php if(isset($_SESSION[AUTH])): ?>
								<li class="nav-item submenu dropdown"><a class="nav-link" href="">
								
									<?php if($_SESSION[AUTH]['role']== ADMIN_ROLE): ?>
									<i class="fas fa-user-shield"></i>
									<?php else: ?>
									<i class="fas fa-user"></i>
									<?php endif; ?>
									<?php echo e($_SESSION[AUTH]['name']); ?></a> <ul class="dropdown-menu">
							<?php if($_SESSION[AUTH]['role']== ADMIN_ROLE): ?>
								<li class="nav-item"><a class="nav-link" href="<?php echo e(BASE_URL.'admin'); ?>">Trang Quản Trị</a></li>
							<?php endif; ?>	
								<li class="nav-item"><a class="nav-link" href="confirmation.html">
									Hồ sơ của bạn</a></li>
								<li class="nav-item"><a class="nav-link" href="<?php echo e(BASE_URL.'cart'); ?>">Giỏ Hàng</a></li>
								<li class="nav-item"><a class="nav-link" href="confirmation.html">Đơn Hàng</a></li>
								<li class="nav-item"><a class="nav-link" href="<?php echo e(BASE_URL.'logout'); ?>">Đăng Xuất</a></li>
							</ul>
						</li>
						<?php else: ?>
							
							<li class="nav-item submenu dropdown"><a class="nav-link" href="<?php echo e(BASE_URL.'login'); ?>">Đăng Nhập</a>
							</li>
						<?php endif; ?>
						

							

						</ul>
						<ul class="nav navbar-nav navbar-right">
						<?php
						$count =0;
							if (isset($_SESSION[CART])) {
							$count = count($_SESSION[CART]);
							}

						$i=0;	
				
						?>
				
							<li class="nav-item"><a href="<?php echo e(BASE_URL.'cart'); ?>" class="cart"><span class="ti-bag"><sub style="color: black; font-size: 13px;">(<?php echo e($count); ?>)</sub></span></a></li>
							<li class="nav-item">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between" method="GET">
					<input type="text" class="form-control"  
					<?php if(isset($_GET['keyword'])): ?>
					value="<?php echo e($_GET['keyword']); ?>"
					<?php endif; ?> id="search_input" name="keyword" placeholder="Tìm kiếm ...">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header><?php /**PATH C:\xampp\htdocs\php2\asm_final\mvc\app\views/layouts/header.blade.php ENDPATH**/ ?>