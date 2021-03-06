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
		<link rel="stylesheet" href="{{TEMPLATE_ASSET_URL}}css/linearicons.css">
		<link rel="stylesheet" href="{{TEMPLATE_ASSET_URL}}css/font-awesome.min.css">
		<link rel="stylesheet" href="{{THEME_ASSET_URL}}css/fontawesome-free-5.15.2-web/css/all.min.css">
		<link rel="stylesheet" href="{{TEMPLATE_ASSET_URL}}css/themify-icons.css">
		<link rel="stylesheet" href="{{TEMPLATE_ASSET_URL}}css/bootstrap.css">
		<link rel="stylesheet" href="{{TEMPLATE_ASSET_URL}}css/owl.carousel.css">
		<link rel="stylesheet" href="{{TEMPLATE_ASSET_URL}}css/nice-select.css">
		<link rel="stylesheet" href="{{TEMPLATE_ASSET_URL}}css/nouislider.min.css">
		<link rel="stylesheet" href="{{TEMPLATE_ASSET_URL}}css/ion.rangeSlider.css" />
		<link rel="stylesheet" href="{{TEMPLATE_ASSET_URL}}css/ion.rangeSlider.skinFlat.css" />
		<link rel="stylesheet" href="{{TEMPLATE_ASSET_URL}}css/magnific-popup.css">
		<link rel="stylesheet" href="{{TEMPLATE_ASSET_URL}}css/main.css">
		 <link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.min.css">
		<link rel="stylesheet" href="{{TEMPLATE_ASSET_URL}}mycss.css">


	</head>

<body >

	<!-- Start Header Area -->


	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="./"><img src="{{TEMPLATE_ASSET_URL}}img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item "><a class="nav-link" href="{{BASE_URL}}">Trang Ch???</a></li>
							<li class="nav-item submenu dropdown">
								<a href="{{BASE_URL.'category'}}" class="nav-link " >C???a H??ng</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="{{BASE_URL.'category'}}">Danh m???c c???a h??ng</a></li>
									<li class="nav-item"><a class="nav-link" href="{{BASE_URL.'detail-product'}}">Chi ti???t s???n ph???m</a></li>
									<li class="nav-item"><a class="nav-link" href="{{BASE_URL.'cart'}}">Gi??? H??ng</a></li>
								</ul>
							</li>
						
								<li class="nav-item"><a class="nav-link" href="{{BASE_URL.'blog'}}">B??i Vi???t</a></li>
						
							
							<li class="nav-item"><a class="nav-link" href="{{BASE_URL.'contact'}}">Li??n H???</a></li>
						@if (isset($_SESSION[AUTH]))
								<li class="nav-item submenu dropdown"><a class="nav-link" href="">
								
									@if ($_SESSION[AUTH]['role']== ADMIN_ROLE)
									<i class="fas fa-user-shield"></i>
									@else
									<i class="fas fa-user"></i>
									@endif
									{{$_SESSION[AUTH]['name']}}</a> <ul class="dropdown-menu">
							@if ($_SESSION[AUTH]['role']== ADMIN_ROLE)
								<li class="nav-item"><a class="nav-link" href="{{BASE_URL.'admin'}}">Trang Qu???n Tr???</a></li>
							@endif	
								<li class="nav-item"><a class="nav-link" href="confirmation.html">
									H??? s?? c???a b???n</a></li>
								<li class="nav-item"><a class="nav-link" href="{{BASE_URL.'cart'}}">Gi??? H??ng</a></li>
								<li class="nav-item"><a class="nav-link" href="confirmation.html">????n H??ng</a></li>
								<li class="nav-item"><a class="nav-link" href="{{BASE_URL.'logout'}}">????ng Xu???t</a></li>
							</ul>
						</li>
						@else
							
							<li class="nav-item submenu dropdown"><a class="nav-link" href="{{BASE_URL.'login'}}">????ng Nh???p</a>
							</li>
						@endif
						

							

						</ul>
						<ul class="nav navbar-nav navbar-right">
						@php
						$count =0;
							if (isset($_SESSION[CART])) {
							$count = count($_SESSION[CART]);
							}

						$i=0;	
				
						@endphp
				
							<li class="nav-item"><a href="{{BASE_URL.'cart'}}" class="cart"><span class="ti-bag"><sub style="color: black; font-size: 13px;">({{$count }})</sub></span></a></li>
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
					@isset($_GET['keyword'])
					value="{{$_GET['keyword']}}"
					@endisset id="search_input" name="keyword" placeholder="T??m ki???m ...">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>