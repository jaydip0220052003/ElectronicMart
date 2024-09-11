<div class="agile-main-top">
		<div class="container">
			<div class="row main-top-w3l py-2">
				<div class="col-lg-3 col-sm-4 header-most-top">
					<p class=" text-lg-left text-center">Welcome to our shop!</p>
				</div>
				<div class="col-lg-9 col-sm-8 header-right ml-auto text-sm-right text-center">
					<!-- header lists -->
					<ul class="top-header-lists">
						<li>
							<a class="play-icon popup-with-zoom-anim " href="#small-dialog1">
								<i class="fas fa-map-marker mr-1"></i>Select Location</a>
						</li>
						<li class="mx-3">
							<a href="#login" data-toggle="modal" data-target="#exampleModal" class="">
								<i class="fas fa-sign-in-alt mr-1"></i> Log In </a>
						</li>
						<li>
							<a href="#register" data-toggle="modal" data-target="#exampleModal2" class="">
								<i class="fas fa-sign-out-alt mr-1"></i>Register </a>
						</li>
					</ul>
					<!-- //header lists -->
				</div>
			</div>
		</div>
	</div>

	<!-- Button trigger modal(select-location) -->
	<div id="small-dialog1" class="mfp-hide">
		<div class="select-city">
			<h3>
				<i class="fas fa-map-marker"></i> Please Select Your Location</h3>
			<select class="list_of_cities">
				<optgroup label="Popular Cities">
					<option selected style="display:none;color:#eee;">Select City</option>
					<option>Birmingham</option>
					<option>Anchorage</option>
					<option>Phoenix</option>
					<option>Little Rock</option>
					<option>Los Angeles</option>
					<option>Denver</option>
					<option>Bridgeport</option>
					<option>Wilmington</option>
					<option>Jacksonville</option>
					<option>Atlanta</option>
					<option>Honolulu</option>
					<option>Boise</option>
					<option>Chicago</option>
					<option>Indianapolis</option>
				</optgroup>
				<optgroup label="Alabama">
					<option>Birmingham</option>
					<option>Montgomery</option>
					<option>Mobile</option>
					<option>Huntsville</option>
					<option>Tuscaloosa</option>
				</optgroup>
			</select>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //shop locator (popup) -->
	<!-- modals -->
	<!-- log in -->
	<?php
	// session_start();	
require('./db-conn.php');
	if($_POST)
	{
	$email=$_POST['email'];
	$password=$_POST['password'];
	$q=mysqli_query($conn,"select * from tbl_user where user_email='{$email}' and user_password='{$password}'");
	$data=mysqli_fetch_array($q);
	$count=mysqli_num_rows($q);
	if($count>0)
	{
		$_SESSION['uid']=$data['user_id'];
		$_SESSION['uname']=$data['user_name'];
		header("location:home.php");
	}
	
	else
	{
		echo"<script>alert('Login Fail')location:login.php</script>";
	}
	}
?>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-center">Log In</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="#" method="post">
						<div class="form-group">
							<input type="email" class="form-control" placeholder="Email" name="email" required="">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="password" name="password"
								required="">
						</div>
						
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing">
								<label class="custom-control-label" for="customControlAutosizing">Remember me?</label>
							</div>
						</div>
						<p class="text-center dont-do mt-3">Don't have an account?
							<a href="#" data-toggle="modal" data-target="#exampleModal2">
								Register Now</a>
						</p>
                        <div class="right-w3l">
							<input type="submit" class="form-control" value="Log in">
						</div>
						<!-- <p class="text-center dont-do mt-3">(Or)</p>
						<div class="social text-center mt-2">
							<ul class="list-unstyled">
								<li class="d-inline">
									<a class="icon fb" href="#facebook">
										<i class="fab fa-facebook-f"></i>
									</a>
								</li>
								<li class="d-inline mx-1">
									<a class="icon tw" href="#twitter">
										<i class="fab fa-twitter"></i>
									</a>
								</li>
								<li class="d-inline">
									<a class="icon gp" href="#google-plus">
										<i class="fab fa-google-plus-g"></i>
									</a>
								</li>
							</ul>
						</div> -->
					</form>
				</div>
			</div>
		</div>
	</div>
		<!-- // include('./login.php'); -->
		
	<!-- register -->
	<!-- // include('./register.php'); -->
	<?php
// session_start();
    require('./db-conn.php');
    if($_POST)
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $password=$_POST['cpassword'];
        $address=$_POST['address'];

        $iq=mysqli_query($conn,"insert into tbl_user(user_name,user_email,user_password,user_address) values ('$name','$email','$password','$address')");
        // $q=mysqli_query($conection,"insert into tbl_student(s_name,s_gender)values('{$name}','{$gend}')");
        if ($iq) 
        {
			header("location:login.php");
        }
    }
?>
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Register</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="#" method="post">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Your Name" name="name" required="">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" placeholder="Email" name="email" required="">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Password" name="password"
								id="password1" required="">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Confirm Password"
								name="cpassword" id="password2" required="">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Address..."
								name="address" id="password2" required="">
						</div>
					
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing2">
								<label class="custom-control-label" for="customControlAutosizing2">I Accept to the Terms
									& Conditions</label>
							</div>
						</div>
						<div class="right-w3l">

							<input type="submit"  class="form-control" value="Register">
						</div>
						<input type="hidden" name="name" value="name">
						<!-- <p class="text-center dont-do mt-3">(Or)</p> -->
						<!-- <div class="social text-center mt-2">
							<ul class="list-unstyled">
								<li class="d-inline">
									<a class="icon fb" href="#facebook">
										<i class="fab fa-facebook-f"></i>
									</a>
								</li>
								<li class="d-inline mx-1">
									<a class="icon tw" href="#twitter">
										<i class="fab fa-twitter"></i>
									</a>
								</li>
								<li class="d-inline">
									<a class="icon gp" href="#google-plus">
										<i class="fab fa-google-plus-g"></i>
									</a>
								</li>
							</ul>
						</div> -->
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->
	<!-- //top-header -->

	<!-- header-bottom-->
	<div class="header-bot my-md-4 my-3" id="site-header">
		<div class="container">
			<div class="row header-bot_inner_wthreeinfo_header_mid align-items-center">
				<!-- logo -->
				<div class="col-lg-3 col-md-4 logo_agile">
					<h1>
						<a href="home.php"><span>E</span>lectronics <span>M</span>art</a>
					</h1>
				</div>
				<!-- //logo -->
				<!-- header-bot -->
				<div class="col-lg-9 col-md-8 header">
					<div class="row">
						<!-- search -->
						<div class="col-lg-9 col-sm-8 agileits_search">
							<form class="form-inline" action="#" method="post" style="max-width:600px;">
								<input class="form-control" type="search"
									placeholder="Search for products, brands and more" aria-label="Search" required>
								<button class="btn" type="submit"><i class="fa fa-search"
										aria-hidden="true"></i></button>
							</form>
						</div>
						<!-- //search -->
						<!-- cart details -->
						<div
							class="col-lg-3 col-sm-4 top_nav_right text-center mt-sm-0 mt-2 d-flex align-items-center justify-content-between">
							<div class="cart-store">
								<!-- toggle switch for light and dark theme -->
								<div class="cont-ser-position">
									<nav class="navigation">
										<div class="theme-switch-wrapper">
											<label class="theme-switch" for="checkbox">
												<input type="checkbox" id="checkbox">
												<div class="mode-container">
													<i class="gg-sun"></i>
													<i class="gg-moon"></i>
												</div>
											</label>
										</div>
									</nav>
								</div>
								<!-- //toggle switch for light and dark theme -->
							</div>
							<div class="cart-store">
								<a href="checkout.html"><i class="far fa-heart"></i></a>
							</div>
							<div class="wthreecartaits wthreecartaits2 cart cart box_1">
								<form action="#" method="post" class="last text-right">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="display" value="1">
									<button class="btn w3view-cart p-0" type="submit" name="submit" value="">
										<img src="images/cart.png" alt="" class="img-fluid"> Cart
									</button>
								</form>
							</div>
						</div>
						<!-- //cart details -->
					</div>
				</div>
			</div>
		</div>
	</div>
