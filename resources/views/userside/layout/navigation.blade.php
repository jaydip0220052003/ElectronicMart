<div class="navbar-inner">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light">
			<!-- <div class="agileits-navi_search">
				<form action="#" method="post">
					<select id="agileinfo-nav_search" name="agileinfo_search" required="">
						<option value="">All Categories</option>
						<option value="Televisions">Televisions</option>
						<option value="Headphones">Headphones</option>
						<option value="Computers">Computers</option>
						<option value="Appliances">Appliances</option>
						<option value="Mobiles">Mobiles</option>
						<option value="Fruits &amp; Vegetables">Tv &amp; Video</option>
						<option value="iPad & Tablets">iPad & Tablets</option>
						<option value="Cameras & Camcorders">Cameras & Camcorders</option>
						<option value="Home Audio & Theater">Home Audio & Theater</option>
					</select>
				</form>
			</div> -->
			<div class="col-lg-3 col-md-4 logo_agile">
					<h1>
						<a href="{{url('home')}}"><span>E</span>lectronics <span>M</span>art</a>
					</h1>
				</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav text-center ml-auto">
					<li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
						<a class="nav-link" href="{{url('home')}}">Home
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Electronics
						</a>
						<div class="dropdown-menu">
							<div class="agile_inner_drop_nav_info p-4 m-20">
								<h5 class="mb-3">Mobiles,Computers</h5>
								<di class="row">
									<div class="col-sm-6 multi-gd-img">
										<ul class="multi-column-dropdown">
											<!-- <ul class="dropdown-menu flex-column"> -->
											@foreach($categories as $category)
											<li><a href="{{route('home',['category_id' => $category->category_id])}}">{{$category->category_name}}</a></li>
											@endforeach
										</ul>
									</div>
								</di>
							</div>
						</div>
					</li>
					<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Appliances
						</a>
						<div class="dropdown-menu">
							<div class="agile_inner_drop_nav_info p-4">
								<h5 class="mb-3">TV, Appliances, Electronics</h5>
								<div class="row">
									<div class="col-sm-6 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li>
												<a href="product2.html">Televisions</a>
											</li>
											<li>
												<a href="product2.html">Home Entertainment Systems</a>
											</li>
											<li>
												<a href="product2.html">Headphones</a>
											</li>
											<li>
												<a href="product2.html">Speakers</a>
											</li>
											<li>
												<a href="product2.html">MP3, Media Players & Accessories</a>
											</li>
											<li>
												<a href="product2.html">Audio & Video Accessories</a>
											</li>
											<li>
												<a href="product2.html">Cameras</a>
											</li>
											<li>
												<a href="product2.html">DSLR Cameras</a>
											</li>
											<li>
												<a href="product2.html">Camera Accessories</a>
											</li>
										</ul>
									</div>
									<div class="col-sm-6 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li>
												<a href="product2.html">Musical Instruments</a>
											</li>
											<li>
												<a href="product2.html">Gaming Consoles</a>
											</li>
											<li>
												<a href="product2.html">All Electronics</a>
											</li>
											<li>
												<a href="product2.html">Air Conditioners</a>
											</li>
											<li>
												<a href="product2.html">Refrigerators</a>
											</li>
											<li>
												<a href="product2.html">Washing Machines</a>
											</li>
											<li>
												<a href="product2.html">Kitchen & Home Appliances</a>
											</li>
											<li>
												<a href="product2.html">Heating & Cooling Appliances</a>
											</li>
											<li>
												<a href="product2.html">All Appliances</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
						<a class="nav-link" href="{{url('userside/contact')}}">Contact Us</a>
					</li>
					@if(Session::has('user_id'))
					<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-users"></i> @php Session::has('name') @endphp </a>
						<div class="dropdown-menu">
									<div class="col-sm-100 multi-gd-img ">
										<ul class="multi-column-dropdown ">
											<li><a class='nav-link' href='{{url('userside/order')}}'><i class="fa fa-cube"></i> My Order</a></li>			
											<li><a class='nav-link' href='{{url('userside/cart')}}'><i class='fas fa-shopping-cart'></i> Cart</a></li>			
											<li class="nav-item mr-lg-2 mb-lg-0 mb-2"><a class="nav-link" href="{{route('logout')}}"><i class="fas fa-sign-out"></i>Logout</a></li>
											<li class="nav-item mr-lg-2 mb-lg-0 mb-2"><a class="nav-link" href="{{route('changepass')}}">ChnagPassword</a></li>
										</ul>
									</div>
						</div>

						</li>
					<!-- <li class='nav-item'><a class='nav-link' href='{{url('home')}}'>Hi</a></li> -->
					@else
					<li class='nav-item'><a class='nav-link' href='{{url('userside/singin')}}'>LogIn</a></li>
					<li class='nav-item'><a class='nav-link' href='{{url('userside/register')}}'>Registration</a></li>		
					@endif
					<!-- <li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">
								Pages</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="blog.html">Blog Posts</a>
								<a class="dropdown-item" href="blog-single.html">Blog Single</a>
								<a class="dropdown-item" href="product.html">Product 1</a>
								<a class="dropdown-item" href="product2.html">Product 2</a>
								<a class="dropdown-item" href="single.html">Single Product 1</a>
								<a class="dropdown-item" href="single2.html">Single Product 2</a>
								<a class="dropdown-item" href="checkout.html">Checkout Page</a>
								<a class="dropdown-item" href="payment.html">Payment Page</a>
								<a class="dropdown-item" href="terms.html">Terms of use</a>
							</div>
						</li> -->
					<!-- <li class="nav-item">
						<a class="nav-link" href="contact.html">Contact Us</a>
					</li> -->
					<!-- if (isset($_SESSION['uid'])) 
					{
						echo "<li class='nav-item'>
						<a class='nav-link' href='contact.html'>Hi,{$_SESSION['uname']}</a>
						</li>";
						echo "<li><a class='nav-link'href='./logout.php'>LogOut</a></li>";
						echo "<li><a class='nav-link' href='./cart.php'><i class='fas fa-shopping-cart'></i> Cart</a></li>";
					} 
					else {
						echo "<li class='nav-item'>
							<a class='nav-link' href='./login.php'>LogIn</a>
						</li>";
						echo "<li class='nav-item'>
							<a class='nav-link' href='./register.php'>Registration</a>
						</li>";
					} -->
				</ul>
			</div>
		</nav>
	</div>
</div>