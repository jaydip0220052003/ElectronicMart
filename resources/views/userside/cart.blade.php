<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from p.w3layouts.com/demos_new/template_demo/11-06-2021/electronics-mart-liberty-demo_Free/1081434887/web/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Jan 2024 07:37:07 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
	<title>Electronics</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Custom-Files -->
	<link href="{{asset('../css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="{{asset('../css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="{{asset('../css/fontawesome-all.css')}}">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="{{asset('../css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="{{asset('../css/menu.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- menu style -->
	<!-- //Custom-Files -->
	<!-- web fonts -->
	<link href="http://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
	<!-- //web fonts -->
</head>

<body>
	<script src="../../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
	<script>
		(function() {
			if (typeof _bsa !== 'undefined' && _bsa) {
				// format, zoneKey, segment:value, options
				_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
			}
		})();
	</script>
	<script>
		(function() {
			if (typeof _bsa !== 'undefined' && _bsa) {
				// format, zoneKey, segment:value, options
				_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
			}
		})();
	</script>
	<script>
		(function() {
			if (typeof _bsa !== 'undefined' && _bsa) {
				// format, zoneKey, segment:value, options
				_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
			}
		})();
	</script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src='https://www.googletagmanager.com/gtag/js?id=G-98H8KRKT85'></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'G-98H8KRKT85');
	</script>
	<meta name="robots" content="noindex">

	<body>
		<link rel="stylesheet" href="../../../../../../assests/css/font-awesome.min.css">
		<!-- New toolbar-->
		<style>
			* {
				box-sizing: border-box;
				font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
			}

			#w3lDemoBar.w3l-demo-bar {
				top: 0;
				right: 0;
				bottom: 0;
				z-index: 9999;
				padding: 40px 5px;
				padding-top: 70px;
				margin-bottom: 70px;
				background: #0D1326;
				border-top-left-radius: 9px;
				border-bottom-left-radius: 9px;
			}

			#w3lDemoBar.w3l-demo-bar a {
				display: block;
				color: #e6ebff;
				text-decoration: none;
				line-height: 24px;
				opacity: .6;
				margin-bottom: 20px;
				text-align: center;
			}

			#w3lDemoBar.w3l-demo-bar span.w3l-icon {
				display: block;
			}

			#w3lDemoBar.w3l-demo-bar a:hover {
				opacity: 1;
			}

			#w3lDemoBar.w3l-demo-bar .w3l-icon svg {
				color: #e6ebff;
			}

			#w3lDemoBar.w3l-demo-bar .responsive-icons {
				margin-top: 30px;
				border-top: 1px solid #41414d;
				padding-top: 40px;
			}

			#w3lDemoBar.w3l-demo-bar .demo-btns {
				border-top: 1px solid #41414d;
				padding-top: 30px;
			}

			#w3lDemoBar.w3l-demo-bar .responsive-icons a span.fa {
				font-size: 26px;
			}

			#w3lDemoBar.w3l-demo-bar .no-margin-bottom {
				margin-bottom: 0;
			}

			.toggle-right-sidebar span {
				background: #0D1326;
				width: 50px;
				height: 50px;
				line-height: 50px;
				text-align: center;
				color: #e6ebff;
				border-radius: 50px;
				font-size: 26px;
				cursor: pointer;
				opacity: .5;
			}

			.pull-right {
				float: right;
				position: fixed;
				right: 0px;
				top: 70px;
				width: 90px;
				z-index: 99999;
				text-align: center;
			}

			/* ============================================================
RIGHT SIDEBAR SECTION
============================================================ */

			#right-sidebar {
				width: 90px;
				position: fixed;
				height: 100%;
				z-index: 1000;
				right: 0px;
				top: 0;
				margin-top: 60px;
				-webkit-transition: all .5s ease-in-out;
				-moz-transition: all .5s ease-in-out;
				-o-transition: all .5s ease-in-out;
				transition: all .5s ease-in-out;
				overflow-y: auto;
			}

			/* ============================================================
RIGHT SIDEBAR TOGGLE SECTION
============================================================ */

			.hide-right-bar-notifications {
				margin-right: -300px !important;
				-webkit-transition: all .3s ease-in-out;
				-moz-transition: all .3s ease-in-out;
				-o-transition: all .3s ease-in-out;
				transition: all .3s ease-in-out;
			}

			@media (max-width: 992px) {
				#w3lDemoBar.w3l-demo-bar a.desktop-mode {
					display: none;
				}
			}

			@media (max-width: 767px) {
				#w3lDemoBar.w3l-demo-bar a.tablet-mode {
					display: none;
				}
			}

			@media (max-width: 568px) {
				#w3lDemoBar.w3l-demo-bar a.mobile-mode {
					display: none;
				}

				#w3lDemoBar.w3l-demo-bar .responsive-icons {
					margin-top: 0px;
					border-top: none;
					padding-top: 0px;
				}

				#right-sidebar,
				.pull-right {
					width: 90px;
				}

				#w3lDemoBar.w3l-demo-bar .no-margin-bottom-mobile {
					margin-bottom: 0;
				}
			}
		</style>
		<!-- navigation -->
		@include('userside.layout.navigation')
		<!-- //navigation -->
		<!-- banner -->
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<!-- Indicators-->
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item item1 active">
					<div class="banner-style d-flex align-items-center">
						<div class="container">
							<div class="w3l-space-banner">
								<div class="carousel-caption-banner" style="max-width:500px">
									<p>Get flat
										<span>10%</span> Cashback
									</p>
									<h3 class="mt-2">Exciting Deals on Televisions</h3>
									<a class="btn btn-style mt-4" href="product.html">Shop Now </a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item item2">
					<div class="banner-style d-flex align-items-center">
						<div class="container">
							<div class="w3l-space-banner">
								<div class="carousel-caption-banner" style="max-width:500px">
									<p>Top
										<span>Brands</span> lowest <span>Prices</span>
									</p>
									<h3 class="mt-2">Wide Range of Mobile Phones!</h3>
									<a class="btn btn-style mt-4" href="product.html">Shop Now </a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item item3">
					<div class="banner-style d-flex align-items-center">
						<div class="container">
							<div class="w3l-space-banner">
								<div class="carousel-caption-banner" style="max-width:500px">
									<p>Get up to
										<span>25%</span> Off
									</p>
									<h3 class="mt-2">Smart Watches New Collection!</h3>
									<a class="btn btn-style mt-4" href="product.html">Shop Now </a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item item4">
					<div class="banner-style d-flex align-items-center">
						<div class="container">
							<div class="w3l-space-banner">
								<div class="carousel-caption-banner" style="max-width:500px">
									<p>Top
										<span>Sale</span> Best <span>Deals</span>
									</p>
									<h3 class="mt-2">Fresh, Healthy Air Everywhere!</h3>
									<a class="btn btn-style mt-4" href="product.html">Shop Now </a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<!-- //banner -->
		<div style="margin: 8px auto; display: block; text-align:center;">
			<!---728x90--->
		</div>
		<!-- top Products -->
		<div class="ads-grid py-5">
			<div class="container py-md-0 py-4">
				<!-- tittle heading -->
				<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
					<span class="font-weight-normal"></span>CART
				</h3>
				<!-- //tittle heading -->
				<div class="row">
					<!-- product right -->
					 @include('userside.layout.productright')
				<!-- //product right -->
				</div>
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9 order-lg-last order-first">
					<div class="wrapper">
						<!-- first section -->
						<!-- // echo "<h1>Cart</h1>"; -->
						<div class="table-responsive">
							@if(Session::has('success'))
							<p style="text-align: center;" class="alert alert-info">{{ Session::get('success')}}</p>
							@endif
						@if(count($products)>0)
							<table class="timetable_sub">
								<tr style='background-color: #3498db; color: #fff;'>
									<th style='padding: 10px; border: 1px solid #ddd;'>ID</th>
									<th style='padding: 10px; border: 1px solid #ddd;'>NAME</th>
									<th style='padding: 10px; border: 1px solid #ddd;'>PHOTO</th>
									<th style='padding: 10px; border: 1px solid #ddd;'>PRICE</th>
									<th style='padding: 10px; border: 1px solid #ddd;'>QUANTITY</th>
									<th style='padding: 10px; border: 1px solid #ddd;'>SUBTOTAL</th>
									<th style='padding: 10px; border: 1px solid #ddd;'>REMOVE</th>
								</tr>
								<?php
								$total = 0;
								?>
								@foreach($products as $detail)
								<?php
								$total += intval($detail['p_price']) * intval($detail['qty']);
								?>
								<tr style='border-bottom: 1px solid #ddd;'>
									<td style='padding: 10px; border: 1px solid #ddd;'>{{$detail['cart_id']}}</td>
									<td style='padding: 10px; border: 1px solid #ddd;'>{{$detail['p_name']}}</td>
									<td style='padding: 10px; border: 1px solid #ddd;'><img width='100' src='../upload/{{$detail["img"]}}'></td>
									<td style='padding: 10px; border: 1px solid #ddd;'>{{$detail["p_price"]}}</td>
									<td style='padding: 10px; border: 1px solid #ddd;'>
										<form action="{{url('update_cart/'.$detail->cart_id)}}" method="post">
											@csrf
											<input type="number" value="{{$detail->qty}}" min="1" max="4" name="qty" id="" style="width: 50px; padding: 5px; border: 1px solid #ccc; border-radius: 5px;" />
											<br>
											<br>
											<input type="submit" value="UPDATE">
										</form>
									</td>
									<td style='padding: 10px; border: 1px solid #ddd;'>{{($detail->p_price)*($detail->qty)}}</td>
									<form action="{{url('delete_cart/'.$detail->cart_id)}}" method="post">
										@method('DELETE')
										@csrf
										<td><input type="submit" value="REMOVE"></td>
									</form>
								</tr>
								@endforeach
								<tr style='background-color: #d9d8e773; color: #333;'>
									<td style='padding: 10px; border:0;'></td>
									<td style='padding:7px; border:0;'></td>
									<td style='padding: 10px; border:0;'></td>
									<td style='padding: 10px; border:0;'></td>
									<td style='padding: 10px; border: 1px solid #ddd;'>TOTAL</td>
									<td style='padding: 10px; border:1px solid #ddd;'>{{$total}}</td>
									<td><a href='{{url('userside/checkout')}}' class='btn btn-info hvr-skew-backward mx-auto' style='cursor: pointer; text-decoration: none; background-color: #3498db; color: #fff; padding: 10px 20px; border-radius: 10px; box-shadow: 2px 2px 4px #ccc; font-size: 18px; font-weight: bold; transition: all 0.3s ease-in-out;'>Checkout <i class='fas fa-arrow-right'></i></a></td>
								</tr>
							</table>
							@else
							<div class='alert alert-warning alert-icon my-3' role='alert'><i class='fas fa-exclamation-triangle'></i> CART IS EMPTY !</div>
							@endif
						</div>
						<hr>
						<a href='{{url('home')}}' class='btn btn-warning hvr-skew-backward ' style='cursor: pointer; text-decoration: none; margin: 10px auto; display: block;'>Continue&nbsp;Shopping</a>
					</div>
				</div>
				<br />
				<div class="clearfix"></div>
				<!-- //first section -->
			</div>
		</div>
		<!-- //product left -->
		</div>
		</div>
		</div>
		<!-- //top products -->
		<!-- middle section -->
		<div class="join-w3l1 py-sm-5 py-4">
			<div class="container py-xl-4 py-lg-2">
				<div class="row">
					<div class="col-lg-6">
						<a href="product2.html">
							<div class="join-agile text-left p-4">
								<div class="row">
									<div class="col-sm-7 offer-name">
										<h6>New Collections, New Trendy</h6>
										<h4 class="mb-3">Smart Watches</h4>
										<p>Sale up to 25% off all in store</p>
									</div>
									<div class="col-sm-5 offerimg-w3l">
										<img src="images/off1.png" alt="" class="img-fluid">
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-lg-6 mt-lg-0 mt-4">
						<a href="product.html">
							<div class="join-agile text-left p-4">
								<div class="row ">
									<div class="col-sm-7 offer-name">
										<h6>Top Brands, lowest Prices</h6>
										<h4 class="mb-3">Smart Phones</h4>
										<p>Free shipping order over $100</p>
									</div>
									<div class="col-sm-5 offerimg-w3l">
										<img src="images/off2.png" alt="" class="img-fluid">
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- middle section -->
		<div style="margin: 8px auto; display: block; text-align:center;">
			<!---728x90--->
		</div>
		<!-- footer -->
		@include('userside.layout.footer')
		<!-- //footer -->
		<!-- copyright -->
		<div class="copy-right py-3">
			<div class="container">
				<p class="text-center ">© 2021 Electronics Mart. All rights reserved | Design by
					<a href="https://w3layouts.com/"> jaydeep.</a>
				</p>
			</div>
		</div>
		<!-- //copyright -->
		<!-- js-files -->
		<!-- common jquery plugin -->
		<script data-cfasync="false" src="../../../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
		<script src="{{asset('../js/jquery-3.3.1.min.js')}}"></script>
		<!-- //common jquery plugin -->
		<!-- here stars scrolling icon -->
		<script type="text/javascript">
			$(document).ready(function() {
				$().UItoTop({
					easingType: 'easeOutQuart'
				});

			});
		</script>
		<!-- //here ends scrolling icon -->
		<!-- js -->
		<script src="{{asset('../js/jquery-1.11.1.min.js')}}"></script>
		<!-- //js -->
		<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="{{asset('../js/move-top.js')}}"></script>
		<script type="text/javascript" src="{{asset('../js/easing.js')}}"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event) {
					event.preventDefault();
					$('html,body').animate({
						scrollTop: $(this.hash).offset().top
					}, 1000);
				});
			});
		</script>
		<!-- start-smoth-scrolling -->
		<!-- nav smooth scroll -->
		<script>
			$(document).ready(function() {
				$(".dropdown").hover(
					function() {
						$('.dropdown-menu', this).stop(true, true).slideDown("fast");
						$(this).toggleClass('open');
					},
					function() {
						$('.dropdown-menu', this).stop(true, true).slideUp("fast");
						$(this).toggleClass('open');
					}
				);
			});
		</script>
		<!-- //nav smooth scroll -->
		<!-- popup modal (for location)-->
		<script src="{{asset('../js/jquery.magnific-popup.js')}}"></script>
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
				});

			});
		</script>
		<!-- //popup modal (for location)-->
		<!-- scroll seller -->
		<script src="{{asset('../js/scroll.js')}}"></script>
		<!-- //scroll seller -->
		<!-- cart-js -->
		<script src="{{asset('../js/minicart.js')}}"></script>
		<script>
			paypals.minicarts
				.render(); //use only unique class names other than paypals.minicarts.Also Replace same class name in css and minicart.min.js
			paypals.minicarts.cart.on('checkout', function(evt) {
				var items = this.items(),
					len = items.length,
					total = 0,
					i;
				// Count the number of each item in the cart
				for (i = 0; i < len; i++) {
					total += items[i].get('quantity');
				}

				if (total < 3) {
					alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
					evt.preventDefault();
				}
			});
		</script>
		<!-- //cart-js -->
		<!-- password-script -->
		<script>
			window.onload = function() {
				document.getElementById("password1").onchange = validatePassword;
				document.getElementById("password2").onchange = validatePassword;
			}

			function validatePassword() {
				var pass2 = document.getElementById("password2").value;
				var pass1 = document.getElementById("password1").value;
				if (pass1 != pass2)
					document.getElementById("password2").setCustomValidity("Passwords Don't Match");
				else
					document.getElementById("password2").setCustomValidity('');
				//empty string means no validation error
			}
		</script>
		<!-- //password-script -->
		<!-- theme switch js (light and dark)-->
		<script src="{{asset('../js/theme-change.js')}}"></script>
		<script>
			function autoType(elementClass, typingSpeed) {
				var thhis = $(elementClass);
				thhis.css({
					"position": "relative",
					"display": "inline-block"
				});
				thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
				thhis = thhis.find(".text-js");
				var text = thhis.text().trim().split('');
				var amntOfChars = text.length;
				var newString = "";
				thhis.text("|");
				setTimeout(function() {
					thhis.css("opacity", 1);
					thhis.prev().removeAttr("style");
					thhis.text("");
					for (var i = 0; i < amntOfChars; i++) {
						(function(i, char) {
							setTimeout(function() {
								newString += char;
								thhis.text(newString);
							}, i * typingSpeed);
						})(i + 1, text[i]);
					}
				}, 1500);
			}

			$(document).ready(function() {
				autoType(".type-js", 200);
			});
		</script>
		<!-- //theme switch js (light and dark)-->
		<!-- disable body scroll which navbar is in active -->
		<script>
			$(function() {
				$('.navbar-toggler').click(function() {
					$('body').toggleClass('noscroll');
				})
			});
		</script>
		<!-- //disable body scroll which navbar is in active -->
		<!--bootstrap-->
		<script src="{{asset('../js/bootstrap.min.js')}}"></script>
		<!-- //bootstrap-->
		<!-- //Js scripts -->
		<script>
			(function() {
				var js = "window['__CF$cv$params']={r:'8443ba414e5e0337',t:'MTcwNTA0NDk3Ny40MTAwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../../../../../cdn-cgi/challenge-platform/h/b/scripts/jsd/c8377512/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
				var _0xh = document.createElement('iframe');
				_0xh.height = 1;
				_0xh.width = 1;
				_0xh.style.position = 'absolute';
				_0xh.style.top = 0;
				_0xh.style.left = 0;
				_0xh.style.border = 'none';
				_0xh.style.visibility = 'hidden';
				document.body.appendChild(_0xh);

				function handler() {
					var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
					if (_0xi) {
						var _0xj = _0xi.createElement('script');
						_0xj.innerHTML = js;
						_0xi.getElementsByTagName('head')[0].appendChild(_0xj);
					}
				}
				if (document.readyState !== 'loading') {
					handler();
				} else if (window.addEventListener) {
					document.addEventListener('DOMContentLoaded', handler);
				} else {
					var prev = document.onreadystatechange || function() {};
					document.onreadystatechange = function(e) {
						prev(e);
						if (document.readyState !== 'loading') {
							document.onreadystatechange = prev;
							handler();
						}
					};
				}
			})();
		</script>
	</body>

</html>