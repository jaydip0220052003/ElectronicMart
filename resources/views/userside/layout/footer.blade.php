<footer>
		<div class="footer-top-first">
			<div class="container py-5">
				<!-- footer first section -->
				<h2 class="footer-top-head-w3l font-weight-bold mb-3">Electronics :</h2>
				<p class="footer-main mb-4">
					If you're considering a new laptop, looking for a powerful new car stereo or shopping for a new
					HDTV, we make it easy to
					find exactly what you need at a price you can afford. We offer Every Day Low Prices on TVs, laptops,
					cell phones, tablets
					and iPads, video games, desktop computers, cameras and camcorders, audio, video and more.</p>
				<!-- //footer first section -->
				<!-- footer second section -->
				<div class="row w3l-grids-footer py-sm-4 py-3">
					<div class="col-md-4 offer-footer">
						<div class="d-flex align-items-center">
							<div class="icon-fot">
								<i class="fas fa-dolly"></i>
							</div>
							<div class="text-form-footer ml-3">
								<h3>Free Shipping</h3>
								<p>on orders over $100</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 offer-footer my-md-0 my-4">
						<div class="d-flex align-items-center">
							<div class="icon-fot">
								<i class="fas fa-shipping-fast"></i>
							</div>
							<div class="text-form-footer ml-3">
								<h3>Fast Delivery</h3>
								<p>World Wide</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 offer-footer">
						<div class="d-flex align-items-center">
							<div class="icon-fot">
								<i class="far fa-thumbs-up"></i>
							</div>
							<div class="text-form-footer ml-3">
								<h3>Big Choice</h3>
								<p>of Products</p>
							</div>
						</div>
					</div>
				</div>
				<!-- //footer second section -->
			</div>
		</div>
		<!-- footer third section -->
		<div class="w3l-middlefooter-sec">
			<div class="container py-5">
				<div class="row footer-info w3-agileits-info">
					<!-- footer categories -->
					<div class="col-md-3 col-sm-6 footer-grids">
						<h3 class="mb-3">Categories</h3>
						<ul>
						@foreach($categories as $category)
							<li><a href="{{route('home',['category_id' => $category->category_id])}}">{{$category->category_name}}</a></li>
						@endforeach
						</ul>
					</div>
					<!-- //footer categories -->
					<!-- quick links -->
					<div class="col-md-3 col-sm-6 footer-grids mt-sm-0 mt-4">
						<h3 class="mb-3">Quick Links</h3>
						<ul>
							<li class="mb-3">
								<a href="about.html">About Us</a>
							</li>
							<li class="mb-3">
								<a href="contact.html">Contact Us</a>
							</li>
							<li class="mb-3">
								<a href="help.html">Help</a>
							</li>
							<li class="mb-3">
								<a href="faqs.html">Faqs</a>
							</li>
							<li class="mb-3">
								<a href="terms.html">Terms of use</a>
							</li>
							<li>
								<a href="privacy.html">Privacy Policy</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 footer-grids mt-md-0 mt-4">
						<h3 class="mb-3">Get in Touch</h3>
						<ul>
							<li class="mb-3">
								<i class="fas fa-map-marker"></i> Mkc, 123 Sebastian, USA.</li>
							<li class="mb-3">
								<i class="fas fa-mobile"></i><a href="tel:+12 23456790"> 12 2345 6790</a> </li>
							<li class="mb-3">
								<i class="fas fa-phone"></i><a href="tel:+11 36721890">+11 3672 1890</a> </li>
							<li class="mb-3">
								<i class="fas fa-envelope-open"></i>
								<a href="https://p.w3layouts.com/cdn-cgi/l/email-protection#16736e777b667a73567b777f7a3875797b"> mail <span class="__cf_email__" data-cfemail="9eafdefbe6fff3eef2fbb0fdf1f3">[email&#160;protected]</span></a>
							</li>
							<li>
								<i class="fas fa-envelope-open"></i>
								<a href="https://p.w3layouts.com/cdn-cgi/l/email-protection#1c79647d716c70795c717d7570327f7371"> mail <span class="__cf_email__" data-cfemail="c6f486a3bea7abb6aaa3e8a5a9ab">[email&#160;protected]</span></a>
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 footer-grids w3l-agileits mt-md-0 mt-4">
						<!-- newsletter -->
						<h3 class="mb-3">Newsletter</h3>
						<p class="mb-3">Free Delivery on your first order!</p>
						<form action="#" method="post">
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email" name="email" required="">
								<button type="submit" class="btn"><i class="fas fa-paper-plane"></i></button>
							</div>
						</form>
						<!-- //newsletter -->
						<!-- social icons -->
						<div class="footer-grids  w3l-socialmk mt-3">
							<h3 class="mb-3">Follow Us on</h3>
							<div class="social">
								<ul>
									<li>
										<a class="icon fb" href="#facebook">
											<i class="fab fa-facebook-f"></i>
										</a>
									</li>
									<li>
										<a class="icon tw" href="#twitter">
											<i class="fab fa-twitter"></i>
										</a>
									</li>
									<li>
										<a class="icon gp" href="#google-plus">
											<i class="fab fa-google-plus-g"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- //social icons -->
					</div>
				</div>
				<!-- //quick links -->
			</div>
		</div>
		<!-- //footer third section -->

		<!-- footer fourth section -->
		<div class="agile-sometext py-5">
			<div class="container">
				<!-- brands -->
				<div class="sub-some">
					<h5 class="font-weight-bold mb-1">Mobile & Tablets :</h5>
					<ul>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Android Phones</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Smartphones</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Feature Phones</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Unboxed Phones</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Refurbished Phones</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2"> Tablets</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">CDMA Phones</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Value Added Services</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Sell Old</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Used Mobiles</a>
						</li>
					</ul>
				</div>
				<div class="sub-some mt-4">
					<h5 class="font-weight-bold mb-1">Computers :</h5>
					<ul>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Laptops </a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Printers</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Routers</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Ink & Toner Cartridges</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Monitors</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Video Games</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Unboxed & Refurbished Laptops</a>
						</li>
						<li>
							<a href="{{url('home')}}" class="border-right pr-2">Assembled Desktops</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Data Cards</a>
						</li>
					</ul>
				</div>
				<div class="sub-some mt-4">
					<h5 class="font-weight-bold mb-1">TV, Audio & Large Appliances :</h5>
					<ul>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">TVs & DTH</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Home Theatre Systems</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Hidden Cameras & CCTVs</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Refrigerators</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Washing Machines</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2"> Air Conditioners</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Cameras</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Speakers</a>
						</li>
					</ul>
				</div>
				<div class="sub-some mt-4">
					<h5 class="font-weight-bold mb-1">Mobile & Laptop Accessories :</h5>
					<ul>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Headphones</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Power Banks </a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Backpacks</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Mobile Cases & Covers</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Pen Drives</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">External Hard Disks</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2"> Mouse</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Smart Watches & Fitness Bands</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">MicroSD Cards</a>
						</li>
					</ul>
				</div>
				<div class="sub-some mt-4">
					<h5 class="font-weight-bold mb-1">Appliances :</h5>
					<ul>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Trimmers</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Hair Dryers</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Emergency Lights</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Water Purifiers </a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Electric Kettles</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Hair Straighteners</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Induction Cooktops</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Sewing Machines</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2"> Geysers</a>
						</li>
					</ul>
				</div>
				<div class="sub-some mt-4">
					<h5 class="font-weight-bold mb-1">Popular on Electronics Mart</h5>
					<ul>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Offers & Coupons</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Couple Watches</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Gas Stoves</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2"> Air Coolers</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Air Purifiers</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Headphones</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2"> Headsets</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Pressure Cookers</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Sandwich Makers</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Air Friers</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Irons</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">LED TV</a>
						</li>
						<li class="m-sm-1">
							<a href="{{url('home')}}" class="border-right pr-2">Sandwich Makers</a>
						</li>
					</ul>
				</div>
				<!-- //brands -->
				<!-- payment -->
				<div class="sub-some child-momu mt-4">
					<h5 class="font-weight-bold mb-3">Payment Method</h5>
					<ul>
						<li>
							<img src={{asset("images/pay2.png")}} alt="">
						</li>
						<li>
							<img src={{asset("images/pay5.png")}} alt="">
						</li>
						<li>
							<img src={{asset("images/pay1.png")}} alt="">
						</li>
						<li>
							<img src={{asset("images/pay4.png")}} alt="">
						</li>
						<li>
							<img src={{asset("images/pay6.png")}} alt="">
						</li>
						<li>
							<img src={{asset("images/pay3.png")}} alt="">
						</li>
						<li>
							<img src={{asset("images/pay7.png")}} alt="">
						</li>
						<li>
							<img src={{asset("images/pay8.png")}} alt="">
						</li>
						<li>
							<img src={{asset("images/pay9.png")}} alt="">
						</li>
					</ul>
				</div>
				<!-- //payment -->
			</div>
		</div>
		<!-- //footer fourth section (text) -->
	</footer>