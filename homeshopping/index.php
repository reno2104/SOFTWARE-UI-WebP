<?php  
	include "/db.php";
	include "../password.php";
?>

<!doctype html>
<html lang="ko">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="misomarket">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,400;0,700;1,700&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/jquery.fancybox.min.css">
	<link rel="stylesheet" href="fonts/icomoon/style.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" href="css/aos.css">
	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" type="text/css" href="http://localhost/style.css?ver=1">
	<script type="text/javascript" src="./style/js/test.js?ver=1"></script>
<body>

	<div class="search-form" id="search-form">
		<form action="">
			<input type="search" class="form-control" placeholder="Enter keyword to search...">
			<button class="button">
				<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
					<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
				</svg>
			</button>
			<button class="button">
				<div class="close-search">
					<span class="icofont-close js-close-search"></span>
				</div>
			</button>

		</form>
	</div>

	<div class="site-mobile-menu">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>



	<nav class="site-nav mb-5">
		<div class="sticky-nav js-sticky-header">
			<div class="container position-relative">

				<div class="site-navigation text-center dark">
							<a href="index.html" class="logo menu-absolute m-0">미소마켓 쇼핑몰<span class="text-primary">.</span></a>

							<div class="searchSection">
								<input type="text" class="textInputKeyward" id="txKeyward" title="검색어입력" placeholder="오늘의 특가" onfocus="this.placeholder=''" onblur="this.placeholder='오늘의 특가'" autocomplete="off">
								<svg style="cursor:pointer" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
									<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
							</svg>
							</div>

							<ul class="js-clone-nav pl-0 d-none d-lg-inline-block site-menu">
									<li class="has-children">
										<a href="shop.html">전체</a>
										<ul class="dropdown">
											<li><a href="#">브랜드&nbsp;|&nbsp;패션</a></li>
											<li><a href="#">의류</a></li>
											<li><a href="#">뷰티&nbsp;|&nbsp;잡화</a></li>
											<li><a href="#">식품&nbsp;|&nbsp;마트&nbsp;|&nbsp;유아</a></li>
											<li><a href="#">가구&nbsp;|&nbsp;생활&nbsp;|&nbsp;건강&nbsp;|&nbsp;렌탈</a></li>
											<li><a href="#">스포츠&nbsp;|&nbsp;레저&nbsp;|&nbsp;자동차</a></li>
											<li><a href="#">여행&nbsp;|&nbsp;도서&nbsp;|&nbsp;쿠폰</a></li>
										</ul>
									</li>	
									<li class="has-children">
										<a href="#">베스트</a>
									</li>
									<li class="has-children">
									<a href="shop.html" >중고</a>
									<ul class="dropdown">
										<li><a href="#">PC&nbsp;|&nbsp;노트북</a></li>
										<li><a href="#">휴대폰&nbsp;|&nbsp;태블릿</a></li>
										<li><a href="#">가전제품</a></li>
										<li><a href="#">생활&nbsp;|&nbsp;사무용품</a></li>
										<li><a href="#">식품</a></li>
										<li><a href="#">뷰티&nbsp;|&nbsp;의류&nbsp;|&nbsp;잡화</a></li>
										<li><a href="#">기타</a></li>
									</ul>
								</li>
								

							<div class="menu-icons rightMenuIcons">
								<ul class="has-children rightMenu">
									<li><a href="javascript:openWin('/login.php','0')"> 로그인</a></li>
									<!-- <li><a href=# onclick="window.open('/login.html','미소마켓 로그인','resizable=no width=711 height=644');return false">로그인</a></li> -->
									<li><a href="/form-join.php">회원가입</a></li>
									<li><a href="#">장바구니</a></li>
									<li><a href="#">마이페이지</a></li>
									<li class="has-children"><a href="#">더보기<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
										<path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z"/>
								</svg>
							</a>
									
										<ul class="dropdown ejqhrl">
											<li class="listAll"><a href="#">서비스전체보기</a></li>
											<li class="listAnother"><a href="#">고객센터</a></li>
											<li class="listAnother"><a href="#">이벤트/쿠폰</a></li>
	
										</ul>
									</li>
								</ul>
						<!-- 

							<a href="#" class="btn-custom-search" id="btn-search">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
								<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
							</svg>
						</a>

						<a href="#" class="user-profile">						<li><a href="shop.html">Men</a></li>
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
							</svg>
						</a>nclick="window.open('open.html','name','resizable=no width=200 height=100');

						<a href="cart.html" class="cart">
							<span class="item-in-cart">2</span>
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
							</svg>
						</a> 
										-->
									</div>
					<a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
						<span></span>
					</a>

				</div>
			</div>
		</div>
	</nav>


	<div class="owl-carousel owl-single home-slider">
		<div class="item">
			<div class="untree_co-hero" style="background-image: url('images/hero-slider-1-min.jpg');">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6">

						</div>
					</div>
				</div>
			</div> 
		</div>


		<div class="item">
			<div class="untree_co-hero" style="background-image: url('images/hero-slider-2-min.jpg');">
				<div class="container imgBannerArea">


					<div class="row align-items-center">
						<div class="col-lg-6">

						</div>
					</div>
				</div>
			</div> 
		</div>
		
	</div>


	<div class="untree_co-section">
		<div class="firstText">
			<div class="txDetail"><span class="detailTx"><h2 style="cursor:default">오늘의 특가</h2></span></div>
		</div>
		<div class="container">

			<div class="row">
				<div class="col-6 col-sm-6 col-md-6 mb-4 col-lg-4">
					<div class="product-item">
						<a href="shop-single.html" class="product-img">

							<div class="label new top-right">
								<div class='content'>New</div>
							</div>

							
							<img src="images/products/jacket-1-min.jpg" alt="Image" class="img-fluid">
						</a>
						<h3 class="title"><a href="#">Dark Jacket</a></h3>
						<div class="price">
							<span>£69.00</span>
						</div>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 mb-4 col-lg-4">
					<div class="product-item">
						<a href="shop-single.html" class="product-img">
							<div class="label new top-right">
								<div class='content'>New</div>
							</div>

							<div class="label sale top-right second">
								<div class='content'>Sale</div>
							</div>
							<img src="images/products/bottoms-1-min.jpg" alt="Image" class="img-fluid">
						</a>
						<h3 class="title"><a href="#">Chino Bottoms</a></h3>
						<div class="price">
							<del>£99.00</del> &mdash; <span>£69.00</span>
						</div>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 mb-4 col-lg-4">
					<div class="product-item">
						<a href="shop-single.html" class="product-img">
							<img src="images/products/shoe-1-min.jpg" alt="Image" class="img-fluid">
						</a>
						<h3 class="title"><a href="#">Brown Shoe</a></h3>
						<div class="price">
							<span>£29.00</span>
						</div>
					</div>
				</div>

				<div class="col-6 col-sm-6 col-md-6 mb-4 col-lg-4">

					<div class="product-item">
						<a href="shop-single.html" class="product-img">
							<img src="images/products/sock-1-min.jpg" alt="Image" class="img-fluid">
						</a>
						<h3 class="title"><a href="#">The Modern Sock</a></h3>
						<div class="price">
							<span>£29.00</span>
						</div>
					</div>

				</div>
				<div class="col-6 col-sm-6 col-md-6 mb-4 col-lg-4">

					<div class="product-item">
						<a href="shop-single.html" class="product-img">
							<div class="label sale top-right">
								<div class='content'>Sale</div>
							</div>
							<img src="images/products/sweater-2-min.jpg" alt="Image" class="img-fluid">
						</a>
						<h3 class="title"><a href="#">Double Knit Sweater</a></h3>
						<div class="price">
							<del>£99.00</del> &mdash; <span>£69.00</span>
						</div>
					</div>


				</div>
				<div class="col-6 col-sm-6 col-md-6 mb-4 col-lg-4">

					<div class="product-item">
						<a href="shop-single.html" class="product-img">
							<div class="label sale top-right">
								<div class='content'>Sale</div>
							</div>
							<img src="images/products/watch-1-min.jpg" alt="Image" class="img-fluid">
						</a>
						<h3 class="title"><a href="#">The Murray</a></h3>
						<div class="price">
							<del>£99.00</del> &mdash; <span>£69.00</span>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div> <!-- /.untree_co-section -->




	<div class="untree_co-section">
		<div class="container">
			<div class="row mb-5 align-items-center">
				<div class="col-md-6">
					<h2 class="h3">Popular Items</h2>        
				</div>
				<div class="col-sm-6 carousel-nav text-sm-right">
					<a href="#" class="prev js-custom-prev-v2">
						<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
							<path fill-rule="evenodd" d="M8.354 11.354a.5.5 0 0 0 0-.708L5.707 8l2.647-2.646a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708 0z"/>
							<path fill-rule="evenodd" d="M11.5 8a.5.5 0 0 0-.5-.5H6a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5z"/>
						</svg>
					</a>
					<a href="#" class="next js-custom-next-v2">
						<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
							<path fill-rule="evenodd" d="M7.646 11.354a.5.5 0 0 1 0-.708L10.293 8 7.646 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z"/>
							<path fill-rule="evenodd" d="M4.5 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z"/>
						</svg>
					</a>
				</div>
			</div> <!-- /.heading -->
			<div class="owl-3-slider owl-carousel">
				<div class="item">
					<div class="product-item">
						<a href="shop-single.html" class="product-img">
							<div class="label sale top-right">
								<div class='content'>Sale</div>
							</div>
							<img src="images/products/watch-1-min.jpg" alt="Image" class="img-fluid">
						</a>
						<h3 class="title"><a href="#">The Murray</a></h3>
						<div class="price">
							<del>£99.00</del> &mdash; <span>£69.00</span>
						</div>
					</div>
				</div> <!-- /.item -->


				<div class="item">
					<div class="product-item">
						<a href="shop-single.html" class="product-img">

							<div class="label new top-right">
								<div class='content'>New</div>
							</div>

							
							<img src="images/products/jacket-1-min.jpg" alt="Image" class="img-fluid">
						</a>
						<h3 class="title"><a href="#">Dark Jacket</a></h3>
						<div class="price">
							<span>£69.00</span>
						</div>
					</div>
				</div> <!-- /.item -->


				<div class="item">
					<div class="product-item">
						<a href="shop-single.html" class="product-img">
							<div class="label new top-right">
								<div class='content'>New</div>
							</div>

							<div class="label sale top-right second">
								<div class='content'>Sale</div>
							</div>
							<img src="images/products/bottoms-1-min.jpg" alt="Image" class="img-fluid">
						</a>
						<h3 class="title"><a href="#">Chino Bottoms</a></h3>
						<div class="price">
							<del>£99.00</del> &mdash; <span>£69.00</span>
						</div>
					</div>
				</div> <!-- /.item -->

				<div class="item">
					<div class="product-item">
						<a href="shop-single.html" class="product-img">
							<img src="images/products/sock-1-min.jpg" alt="Image" class="img-fluid">
						</a>
						<h3 class="title"><a href="#">The Modern Sock</a></h3>
						<div class="price">
							<span>£29.00</span>
						</div>
					</div>
				</div> <!-- /.item -->
				
			</div>
		</div> <!-- /.container -->
	</div> 





	<!-- <div class="untree_co-section bg-light">
		<div class="container">
			<div class="row align-items-stretch">
				<div class="col-12 col-sm-6 col-md-4 mb-3 mb-md-0">
					<div class="feature h-100">
						<div class="icon mb-4">
							<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-truck" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5v7h-1v-7a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .5.5v1A1.5 1.5 0 0 1 0 10.5v-7zM4.5 11h6v1h-6v-1z"/>
								<path fill-rule="evenodd" d="M11 5h2.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5h-1v-1h1a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4.5h-1V5zm-8 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 1a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
								<path fill-rule="evenodd" d="M12 13a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 1a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
							</svg>
						</div>
						<h3 class="delSecSafe_section">안전하고 정확한 배송</h3>
						<p class="delSecSafe_section">미소마켓은 협력사와의 긴밀한 연계를 통해 고객에게 최적의 배송 서비스를 제공해드립니다.</p>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 mb-3 mb-md-0">
					<div class="feature h-100">
						<div class="icon mb-4">
							<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-shield-fill-check" viewBox="0 0 16 16">
								<path fill-rule="evenodd" d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm2.146 5.146a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647z"/>
						</svg>
						</div>
						<h3 class="delSecSafe_section">철저한 개인정보 보안</h3>
						<p class="delSecSafe_section">미소마켓은 안전하고 공정한 거래와 개인정보 보호에 앞장서겠습니다.</p>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-4 mb-3 mb-md-0">
					<div class="feature h-100">
						<div class="icon mb-4">
							<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-tree-fill" viewBox="0 0 16 16">
								<path d="M8.416.223a.5.5 0 0 0-.832 0l-3 4.5A.5.5 0 0 0 5 5.5h.098L3.076 8.735A.5.5 0 0 0 3.5 9.5h.191l-1.638 3.276a.5.5 0 0 0 .447.724H7V16h2v-2.5h4.5a.5.5 0 0 0 .447-.724L12.31 9.5h.191a.5.5 0 0 0 .424-.765L10.902 5.5H11a.5.5 0 0 0 .416-.777l-3-4.5z"/>
						</svg>						</div>
						<h3 class="delSecSafe_section">지구와 환경을 보호</h3>
						<p class="delSecSafe_section">미소마켓은 지구와 환경을 생각하는 친환경적인 이커머스 쇼핑몰입니다.</p>
					</div>
				</div>
			</div>
		</div>
	</div>  -->

	<div class="site-footer">


		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-5">
					<div class="widget mb-4">
						<h3 class="mb-2 delSecSafe_section">주식회사 미소마켓</h3>
						<span class="aboutUs">대전광역시 유성구 온천서로55(장대동) 2층, 202호</span><br>
						<span class="aboutUs">사업자등록번호: 314-00-12345</span><br>
						<span class="aboutUs">통신판매업신고번호: 대전유성구 0101호</span><br>
						<span class="aboutUs">대표자: 천유식</span>
					</div>
					<div class="widget">
					
						<form action="#" class="subscribe">
						</form>

						
					</div>
				</div>
				<div class="col-lg-2">
					<div class="widget">
						<h3 class="delSecSafe_section">고객센터</h3> 
						<ul class="list-unstyled">
							<li><a href="#">채용정보</a></li>
							<li><a href="#">이용약관</a></li>
							<li><a href="#">전자금융거래약관</a></li>
							<li><a href="#"><b>개인정보 처리방침</b></a></li>
							<li><a href="#">커뮤니티</a></li> 
							<li><a href="#">문의하기</a></li> 
						</ul>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="widget">
						<h3 class="delSecSafe_section">회사 안내</h3>
						<ul class="list-unstyled">
							<li><a href="#">회사소개</a></li>
							<li><a href="#">보유기술</a></li>
							<li><a href="#">사업영역</a></li>
							<li><a href="#">협력사</a></li>
							<li><a href="#">문의하기</a></li>   
						</ul>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="widget">
						<h3 class="delSecSafe_section">쇼핑 서비스</h3>
						<ul class="list-unstyled">
							<li><a href="#">서비스 전체보기</a></li>
							<li><a href="#">회원서비스</a></li>
							<li><a href="#">이벤트</a></li>
							<li><a href="#">체험단</a></li>
							<li><a href="#">기타서비스</a></li>
						</ul>
					</div>
				</div>
				
			</div>


			<div class="row mt-5">
				<div class="col-12 text-center">
					<!-- 페이스북,인스타,유투브 홍보아이콘 자리 -->
				</div>
				<div class="col-12 text-center copyright">
					<p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with <a href="#">Korea Mutaltech.</a>

					</p>

				</div>
			</div>
		</div> <!-- /.container -->
	</div> 
</p><!-- /.site-footer -->

	<div id="overlayer"></div>
	<div class="loader">
		<div class="spinner-border" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>

	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.fancybox.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/custom.js"></script>
	
</body>
<script>
	// 로그인 메뉴 팝업
	function openWin(f,s){

var loginPopup=window.open(f,s,'width=711,height=644,status=no,scrollbars=auto');

loginPopup.moveTo(450,180)

	}

</script>


</html>