<?php
session_start();
	require('./db-conn.php');
	if(!isset($_SESSION['uid']))
	{
		header("location:./login.php");
	}
	if ($_POST) {
		$name = $_POST['name'];
		$number = $_POST['number'];
		$address = $_POST['address'];
		$txt4 = $_POST['paymentoption'];
		$date = date('Y-m-d');
		$status = "Confirm";
		$uid = $_SESSION['uid'];
		//Shipping Order
		$orderq = mysqli_query($conn, "insert into tbl_order_master(order_date,order_status,user_id,shipping_name,shipping_mobile,shipping_address,payment_mode) 
		values('{$date}','{$status}','{$uid}','{$name}','{$number}','{$address}','{$txt4}')");
		//Inserted record id
		$orderid = mysqli_insert_id($conn);
		//order details
		//Fetch cart data
		$cartq = mysqli_query($conn, "select * from tbl_cart where user_id='{$uid}'");
		while ($cartdata = mysqli_fetch_array($cartq)) {
			$pid = $cartdata['product_id'];
			$qty = $cartdata['product_qty'];
			//product data
			$pq = mysqli_query($conn, "select * from tbl_product where product_id='{$pid}'");
			$pdata = mysqli_fetch_array($pq);
			$price = $pdata['product_price'];
			//Order Detals ADD
			$orderdetailq = mysqli_query($conn, "insert into tbl_order_detail(order_id,product_id,product_qty,product_price) 
			values('{$orderid}','{$pid}','{$qty}','{$price}')");
			$newqt = $pdata['product_qty'] - $qty;
			mysqli_query($conn, "update tbl_product set product_quantity ='{$newqt}' where product_id ='{$pid}'  ");
			//Cart remove
			mysqli_query($conn, "delete from tbl_cart where cart_id='{$cartdata['cart_id']}'");
			//die();
		}
		header("location:./thankyou.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<title>Electronics Mart - Ecommerce Category Bootstrap Responsive Web Template | Checkout :: w3layouts</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Custom-Files -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" />
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

	<>
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
		<!-- top-header -->
		<!-- //modal -->
		<!-- //top-header -->
		<!-- header-bottom-->
		<!-- shop locator (popup) -->
		<!-- //header-bottom -->
		<!-- navigation -->
		<?php
			include('./navigation.php');
		?>
		<!-- //navigation -->

		<!-- banner-2 -->
		<div class="page-head_agile_info_w3l inner-checkout-page">
			<div class="container py-5">
				<h3 class="title-style text-white pt-5"><span>Checkout</span> Page</h3>
				<ul class="w3_short pt-3 pb-5">
					<li>
						<a href="index.html" class="text-white">Home</a>
						<i class="fa fa-angle-right mx-2 text-white" aria-hidden="true"></i>
					</li>
					<li class="text-light">Checkout</li>
				</ul>
			</div>
		</div>
		<!-- //banner-2 -->
		<!-- page -->
		<div class="services-breadcrumb">
			<div class="agile_inner_breadcrumb">
			</div>
		</div>
		<!-- //page -->
		<div style="margin: 8px auto; display: block; text-align:center;">
			<!---728x90--->
		</div>
		<!-- checkout page -->
		<section class="w3l-contact " id="contact">
			<div class="container py-md-5 py-4">
				<div class="mx-auto pt-lg-4 pt-md-5 pt-4" style="max-width:1000px">
					<div class="row contact-block">
						<div class="col-md-6 contact-left  px-3 mt-md-0 mt-4">
							<h2>Checkout Page</h2><br>
							<hr>
							<form action="" method="post" class="signin-form">
								<div class="input-grids">
									<input type="text" name="name" id="w3lName" placeholder="Your Name*" class="contact-input" required="" />
									<input type="number" name="number" id="w3lSender" placeholder="Your Mobile No*" class="contact-input" required="" />
								</div>
								<div class="form-input">
									<textarea name="address" id="w3lMessage" placeholder="Type Your Address*" required=""></textarea>
									<div class="col-md-6 login-right">
					<h3>Payment</h3><br />
					<input type="radio" id="pcash" value="Cash" checked name="paymentoption" />
					<b>Cash</b>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="radio" id="pupi" value="UPI" name="paymentoption" /> <b>UPI</b>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="radio" id="pcard" value="Card" name="paymentoption" />
					<b>CreditCart /
						Debitcart</b>
					<div class="icon-container" style="margin-left: 190px;">
						<i class="fa fa-cc-visa" style="color:navy;"></i>
						<i class="fa fa-cc-amex" style="color:blue;"></i>
						<i class="fa fa-cc-mastercard" style="color:red;"></i>
						<i class="fa fa-cc-discover" style="color:orange;"></i>
					</div>
					<div id="upiimg">
						<img src="https://storage.googleapis.com/dara-c1b52.appspot.com/daras_ai/media/a3202e58-17ef-11ee-9a70-8e93953183bb/cleaned_qr.png" style="width:100px;height:100px;">
						<p><b>Either Scan Image or Enter UPI No</b></p>
					</div>
					<div class="form-group" id="upitxt">
						<input type="radio" name="upi_method" value="GPay" onchange="return enter_upi_id()">
						<img src="https://t3.ftcdn.net/jpg/06/16/18/18/360_F_616181843_l404nbV07vMiXDZ1IhWiqZRDpetpuigu.jpg" style="width: 150px;">
						<br>
						<input class="form-control uip_id" type="varchar" name="" placeholder="UPI ID" required>
					</div>
					<br />
					<input type="submit" class=" hvr-skew-backward" value="Place Order" />
				</div>
								</div>
								<!-- <button class="btn btn-style">Send Message</button> -->
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- //checkout page -->
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
	<?php
		include('./footer.php');
	?>
		<!-- //footer -->
		<!-- copyright -->
		<div class="copy-right py-3">
			<div class="container">
				<p class="text-center ">© 2021 Electronics Mart. All rights reserved | Design by
					<a href="https://w3layouts.com/"> W3layouts.</a>
				</p>
			</div>
		</div>
		<!-- //copyright -->

		<!-- js-files -->
		<!-- common jquery plugin -->
		<script data-cfasync="false" src="../../../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
		<script src="js/jquery-3.3.1.min.js"></script>
		<!-- //common jquery plugin -->

		<!-- here stars scrolling icon -->
		<script type="text/javascript">
			$(document).ready(function() {
				/*
					var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
					};
				*/

				$().UItoTop({
					easingType: 'easeOutQuart'
				});

			});
		</script>
		<!-- //here ends scrolling icon -->
		<!-- js -->
		<script src="js/jquery-1.11.1.min.js"></script>
		<!-- //js -->
		<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
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
		<script src="js/jquery.magnific-popup.js"></script>
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

		<!-- cart-js -->
		<script src="js/minicart.js"></script>
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

		<!-- quantity -->
		<script>
			$('.value-plus').on('click', function() {
				var divUpd = $(this).parent().find('.value'),
					newVal = parseInt(divUpd.text(), 10) + 1;
				divUpd.text(newVal);
			});

			$('.value-minus').on('click', function() {
				var divUpd = $(this).parent().find('.value'),
					newVal = parseInt(divUpd.text(), 10) - 1;
				if (newVal >= 1) divUpd.text(newVal);
			});
		</script>
		<!--quantity-->
		<script>
			$(document).ready(function(c) {
				$('.close1').on('click', function(c) {
					$('.rem1').fadeOut('slow', function(c) {
						$('.rem1').remove();
					});
				});
			});
		</script>
		<script>
			$(document).ready(function(c) {
				$('.close2').on('click', function(c) {
					$('.rem2').fadeOut('slow', function(c) {
						$('.rem2').remove();
					});
				});
			});
		</script>
		<script>
			$(document).ready(function(c) {
				$('.close3').on('click', function(c) {
					$('.rem3').fadeOut('slow', function(c) {
						$('.rem3').remove();
					});
				});
			});
		</script>
		<!-- //quantity -->

		<!-- theme switch js (light and dark)-->
		<script src="js/theme-change.js"></script>
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
				// Now to start autoTyping just call the autoType function with the 
				// class of outer div
				// The second paramter is the speed between each letter is typed.   
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
		<script src="js/bootstrap.min.js"></script>
		<!-- //bootstrap-->
		<!-- //Js scripts -->

		<script>
			(function() {
				var js = "window['__CF$cv$params']={r:'8443ba450f160336',t:'MTcwNTA0NDk3OC4wMjUwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../../../../../cdn-cgi/challenge-platform/h/b/scripts/jsd/c8377512/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
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