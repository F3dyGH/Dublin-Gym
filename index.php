<?php
session_start();
error_reporting(0);
//include('includes/config.php');
/*$sql = "SELECT * FROM home";
		if($_SESSION['home']) {
		$sql .=$id. ",";
		}
		$sql=substr($sql,0,-1) . ") ORDER BY id ASC";
		$query = mysqli_query($con,$sql);
		if(!empty($query)){
		while($row = mysqli_fetch_array($query)){
			$quantity=$_SESSION['home'][$row['id']]['video'];}
		}
*/
 

?>
		

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Dublin Gym &mdash; Home</title>
	

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="photos/logo.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
    <script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<?php include('includes/menu-bar.php'); ?> 
		<!-- end:fh5co-header -->
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/home-image.jpg); width: 1280; height: 720;">
			<section id="banner">
               
				
                    <img class="img-responsive" alt="" src="photos/photo1.jpg" data-echo="photos/photos1.jpg<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['video']);?>" width="370" height="350" 
                
           style=" opacity: 30%; align-content: center; -ms-flex-align: center; -moz-transform: translateX(50%) translateY(50%);
					-webkit-transform: translateX(50%) translateY(50%);
					-ms-transform: translateX(50%) translateY(50%);
					transform: translateX(50%) translateY(50%);
					bottom: 50%;
					height: 100%;
					min-height: 80%;
					min-width: 100%;
					overflow: hidden;
					position: absolute;
					right: 50%;
					width: auto;"/>
				</section> 
				<div class="desc animate-box">
					<div class="container">
						<div class="row">
							<div class="col-md-7">
								<h2>Fitness &amp; Health <br>is a <b>Mentality</b></h2>
								<br>
								<span><a class="btn btn-primary" href="login.php">Login and Start Your Journey</a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- end:fh5co-hero -->
		<div id="fh5co-schedule-section" class="fh5co-lightgray-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="heading-section text-center animate-box">
							<h2>Class Schedule</h2>
							<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						</div>
					</div>
				</div>
				<div class="row animate-box">
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="schedule">
							<li><a href="#" class="active" data-sched="sunday">Sunday</a></li>
							<li><a href="#" data-sched="monday">Monday</a></li>
							<li><a href="#" data-sched="tuesday">Tuesday</a></li>
							<li><a href="#" data-sched="wednesday">Wednesday</a></li>
							<li><a href="#" data-sched="thursday">Thursday</a></li>
							<li><a href="#" data-sched="monday">Monday</a></li>
							<li><a href="#" data-sched="saturday">Saturday</a></li>
						</ul>
					</div>
					<div class="row text-center">

						<div class="col-md-12 schedule-container">

							<div class="schedule-content active" data-day="sunday">
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/fit-dumbell.svg" alt="Cycling">
										<small>06AM-7AM</small>
										<h3>Body Building</h3>
										<span>John Doe</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/fit-yoga.svg" alt="">
										<small>06AM-7AM</small>
										<h3>Yoga Programs</h3>
										<span>James Smith</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/fit-cycling.svg" alt="">
										<small>06AM-7AM</small>
										<h3>Cycling Program</h3>
										<span>Rita Doe</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/fit-boxing.svg" alt="Cycling">
										<small>06AM-7AM</small>
										<h3>Boxing Fitness</h3>
										<span>John Dose</span>
									</div>
								</div>
							</div>
							<!-- END sched-content -->

							<div class="schedule-content" data-day="monday">
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/fit-yoga.svg" alt="">
										<small>06AM-7AM</small>
										<h3>Yoga Programs</h3>
										<span>James Smith</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/fit-dumbell.svg" alt="Cycling">
										<small>06AM-7AM</small>
										<h3>Body Building</h3>
										<span>John Doe</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/fit-boxing.svg" alt="Cycling">
										<small>06AM-7AM</small>
										<h3>Boxing Fitness</h3>
										<span>John Dose</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/fit-cycling.svg" alt="">
										<small>06AM-7AM</small>
										<h3>Cycling Program</h3>
										<span>Rita Doe</span>
									</div>
								</div>
								
							</div>
							<!-- END sched-content -->

							<div class="schedule-content" data-day="tuesday">
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/fit-dumbell.svg" alt="Cycling">
										<small>06AM-7AM</small>
										<h3>Body Building</h3>
										<span>John Doe</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/fit-yoga.svg" alt="">
										<small>06AM-7AM</small>
										<h3>Yoga Programs</h3>
										<span>James Smith</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/fit-cycling.svg" alt="">
										<small>06AM-7AM</small>
										<h3>Cycling Program</h3>
										<span>Rita Doe</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/fit-boxing.svg" alt="Cycling">
										<small>06AM-7AM</small>
										<h3>Boxing Fitness</h3>
										<span>John Dose</span>
									</div>
								</div>
							</div>
							<!-- END sched-content -->

							<div class="schedule-content" data-day="wednesday">
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/fit-yoga.svg" alt="">
										<small>06AM-7AM</small>
										<h3>Yoga Programs</h3>
										<span>James Smith</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/fit-dumbell.svg" alt="Cycling">
										<small>06AM-7AM</small>
										<h3>Body Building</h3>
										<span>John Doe</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/fit-boxing.svg" alt="Cycling">
										<small>06AM-7AM</small>
										<h3>Boxing Fitness</h3>
										<span>John Dose</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/fit-cycling.svg" alt="">
										<small>06AM-7AM</small>
										<h3>Cycling Program</h3>
										<span>Rita Doe</span>
									</div>
								</div>
							</div>
							<!-- END sched-content -->

							<div class="schedule-content" data-day="thursday">
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/fit-dumbell.svg" alt="Cycling">
										<small>06AM-7AM</small>
										<h3>Body Building</h3>
										<span>John Doe</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/fit-yoga.svg" alt="">
										<small>06AM-7AM</small>
										<h3>Yoga Programs</h3>
										<span>James Smith</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/fit-cycling.svg" alt="">
										<small>06AM-7AM</small>
										<h3>Cycling Program</h3>
										<span>Rita Doe</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/fit-boxing.svg" alt="Cycling">
										<small>06AM-7AM</small>
										<h3>Boxing Fitness</h3>
										<span>John Dose</span>
									</div>
								</div>
							</div>
							<!-- END sched-content -->

							<div class="schedule-content" data-day="friday">
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/fit-yoga.svg" alt="">
										<small>06AM-7AM</small>
										<h3>Yoga Programs</h3>
										<span>James Smith</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/fit-dumbell.svg" alt="Cycling">
										<small>06AM-7AM</small>
										<h3>Body Building</h3>
										<span>John Doe</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/fit-boxing.svg" alt="Cycling">
										<small>06AM-7AM</small>
										<h3>Boxing Fitness</h3>
										<span>John Dose</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/fit-cycling.svg" alt="">
										<small>06AM-7AM</small>
										<h3>Cycling Program</h3>
										<span>Rita Doe</span>
									</div>
								</div>
							</div>
							<!-- END sched-content -->

							<div class="schedule-content" data-day="saturday">
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/fit-dumbell.svg" alt="Cycling">
										<small>06AM-7AM</small>
										<h3>Body Building</h3>
										<span>John Doe</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/fit-yoga.svg" alt="">
										<small>06AM-7AM</small>
										<h3>Yoga Programs</h3>
										<span>James Smith</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/fit-cycling.svg" alt="">
										<small>06AM-7AM</small>
										<h3>Cycling Program</h3>
										<span>Rita Doe</span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="program program-schedule">
										<img src="images/fit-boxing.svg" alt="Cycling">
										<small>06AM-7AM</small>
										<h3>Boxing Fitness</h3>
										<span>John Dose</span>
									</div>
								</div>
							</div>
							<!-- END sched-content -->
						</div>

						
					</div>
				</div>
			</div>
		</div>
		<div class="fh5co-parallax" style="background-image: url(images/home-image-3.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell animate-box">
							<h1 class="text-center"></h1>
							<p></p>
						</div>
					</div>
				</div>
			</div>
		</div><!-- end: fh5co-parallax -->
		<div id="fh5co-programs-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="heading-section text-center animate-box">
							<h2>Our Programs</h2>
							<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						</div>
					</div>
				</div>
				<div class="row text-center">
					<div class="col-md-4 col-sm-6">
						<div class="program animate-box">
							<img src="images/fit-dumbell.svg" alt="Cycling">
							<h3>Body Combat</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
							<span><a href="#" class="btn btn-default">Join Now</a></span>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="program animate-box">
							<img src="images/fit-yoga.svg" alt="">
							<h3>Yoga Programs</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
							<span><a href="#" class="btn btn-default">Join Now</a></span>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="program animate-box">
							<img src="images/fit-cycling.svg" alt="">
							<h3>Cycling Program</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
							<span><a href="#" class="btn btn-default">Join Now</a></span>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="program animate-box">
							<img src="images/fit-boxing.svg" alt="Cycling">
							<h3>Boxing Fitness</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
							<span><a href="#" class="btn btn-default">Join Now</a></span>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="program animate-box">
							<img src="images/fit-swimming.svg" alt="">
							<h3>Swimming Program</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
							<span><a href="#" class="btn btn-default">Join Now</a></span>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="program animate-box">
							<img src="images/fit-massage.svg" alt="">
							<h3>Massage</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
							<span><a href="#" class="btn btn-default">Join Now</a></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="fh5co-team-section" class="fh5co-lightgray-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="heading-section text-center animate-box">
							<h2>Meet Our Trainers</h2>
							<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						</div>
					</div>
				</div>
				<div class="row text-center">
					<div class="col-md-4 col-sm-6">
						<div class="team-section-grid animate-box" style="background-image: url(images/trainer-1.jpg);">
							<div class="overlay-section">
								<div class="desc">
									<h3>John Doe</h3>
									<span>Body Trainer</span>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
									<p class="fh5co-social-icons">
										<a href="#"><i class="icon-twitter-with-circle"></i></a>
										<a href="#"><i class="icon-facebook-with-circle"></i></a>
										<a href="#"><i class="icon-instagram-with-circle"></i></a>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="team-section-grid animate-box" style="background-image: url(images/trainer-2.jpg);">
							<div class="overlay-section">
								<div class="desc">
									<h3>James Smith</h3>
									<span>Swimming Trainer</span>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
									<p class="fh5co-social-icons">
										<a href="#"><i class="icon-twitter-with-circle"></i></a>
										<a href="#"><i class="icon-facebook-with-circle"></i></a>
										<a href="#"><i class="icon-instagram-with-circle"></i></a>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="team-section-grid animate-box" style="background-image: url(images/trainer-3.jpg);">
							<div class="overlay-section">
								<div class="desc">
									<h3>John Doe</h3>
									<span>Chief Executive Officer</span>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="fh5co-social-icons">
										<a href="#"><i class="icon-twitter-with-circle"></i></a>
										<a href="#"><i class="icon-facebook-with-circle"></i></a>
										<a href="#"><i class="icon-instagram-with-circle"></i></a>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="team-section-grid animate-box" style="background-image: url(images/trainer-4.jpg);">
							<div class="overlay-section">
								<div class="desc">
									<h3>John Doe</h3>
									<span>Chief Executive Officer</span>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="fh5co-social-icons">
										<a href="#"><i class="icon-twitter-with-circle"></i></a>
										<a href="#"><i class="icon-facebook-with-circle"></i></a>
										<a href="#"><i class="icon-instagram-with-circle"></i></a>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="team-section-grid animate-box" style="background-image: url(images/trainer-5.jpg);">
							<div class="overlay-section">
								<div class="desc">
									<h3>John Doe</h3>
									<span>Chief Executive Officer</span>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="fh5co-social-icons">
										<a href="#"><i class="icon-twitter-with-circle"></i></a>
										<a href="#"><i class="icon-facebook-with-circle"></i></a>
										<a href="#"><i class="icon-instagram-with-circle"></i></a>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="team-section-grid animate-box" style="background-image: url(images/trainer-6.jpg);">
							<div class="overlay-section">
								<div class="desc">
									<h3>John Doe</h3>
									<span>Chief Executive Officer</span>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="fh5co-social-icons">
										<a href="#"><i class="icon-twitter-with-circle"></i></a>
										<a href="#"><i class="icon-facebook-with-circle"></i></a>
										<a href="#"><i class="icon-instagram-with-circle"></i></a>
									</p>
								</div>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
		<div class="fh5co-parallax" style="background-image: url(images/home-image-2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 fh5co-table">
						<div class="fh5co-intro fh5co-table-cell box-area">
							<div class="animate-box">
								<h1>Fitness Classes this summer</h1>
								<p>Pay now and get 25% Discount</p>
								<a href="#" class="btn btn-primary">Become A Member</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- end: fh5co-parallax -->
		<div id="fh5co-pricing-section" class="fh5co-pricing fh5co-lightgray-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="heading-section text-center animate-box">
							<h2>Pricing Plan</h2>
							<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="pricing">
					<div class="col-md-3 animate-box">
						<div class="price-box animate-box">
							<h2 class="pricing-plan">Starter</h2>
							<div class="price"><sup class="currency">$</sup>9<small>/month</small></div>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
							<ul class="classes">
								<li>15 Cardio Classes</li>
								<li class="color">10 Swimming Lesson</li>
								<li>10 Yoga Classes</li>
								<li class="color">20 Aerobics</li>
								<li>10 Zumba Classes</li>
								<li class="color">5 Massage</li>
								<li>10 Body Building</li>
							</ul>
							<a href="#" class="btn btn-default">Select Plan</a>
						</div>
					</div>

					<div class="col-md-3 animate-box">
						<div class="price-box animate-box">
							<h2 class="pricing-plan">Basic</h2>
							<div class="price"><sup class="currency">$</sup>27<small>/month</small></div>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
							<ul class="classes">
								<li>15 Cardio Classes</li>
								<li class="color">10 Swimming Lesson</li>
								<li>10 Yoga Classes</li>
								<li class="color">20 Aerobics</li>
								<li>10 Zumba Classes</li>
								<li class="color">5 Massage</li>
								<li>10 Body Building</li>
							</ul>
							<a href="#" class="btn btn-default">Select Plan</a>
						</div>
					</div>

					<div class="col-md-3 animate-box">
						<div class="price-box animate-box popular">
							<h2 class="pricing-plan pricing-plan-offer">Pro <span>Best Offer</span></h2>
							<div class="price"><sup class="currency">$</sup>74<small>/month</small></div>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
							<ul class="classes">
								<li>15 Cardio Classes</li>
								<li class="color">10 Swimming Lesson</li>
								<li>10 Yoga Classes</li>
								<li class="color">20 Aerobics</li>
								<li>10 Zumba Classes</li>
								<li class="color">5 Massage</li>
								<li>10 Body Building</li>
							</ul>
							<a href="#" class="btn btn-select-plan btn-sm">Select Plan</a>
						</div>
					</div>

					<div class="col-md-3 animate-box">
						<div class="price-box animate-box">
							<h2 class="pricing-plan">Unlimited</h2>
							<div class="price"><sup class="currency">$</sup>140<small>/month</small></div>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
							<ul class="classes">
								<li>15 Cardio Classes</li>
								<li class="color">10 Swimming Lesson</li>
								<li>10 Yoga Classes</li>
								<li class="color">20 Aerobics</li>
								<li>10 Zumba Classes</li>
								<li class="color">5 Massage</li>
								<li>10 Body Building</li>
							</ul>
							<a href="#" class="btn btn-default">Select Plan</a>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
		
		<div id="fh5co-blog-section">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="col-md-12">
							<div class="heading-section animate-box">
								<h2>Recent from Blog</h2>
							</div>
						</div>
						<div class="col-md-12 col-md-offset-0">
							<div class="fh5co-blog animate-box">
								<div class="inner-post">
									<a href="#"><img class="img-responsive" src="images/blog-1.jpg" alt=""></a>
								</div>
								<div class="desc">
									<h3><a href=""#>Starting new session of body building this summer</a></h3>
									<span class="posted_by">Posted by: Admin</span>
									<span class="comment"><a href="">21<i class="icon-bubble22"></i></a></span>
									<p>Far far away, behind the word mountains</p>
									<a href="#" class="btn btn-default">Read More</a>
								</div> 
							</div>
						</div>
						<div class="col-md-12 col-md-offset-0">
							<div class="fh5co-blog animate-box">
								<div class="inner-post">
									<a href="#"><img class="img-responsive" src="images/blog-1.jpg" alt=""></a>
								</div>
								<div class="desc">
									<h3><a href=""#>Starting new session of body building this summer</a></h3>
									<span class="posted_by">Posted by: Admin</span>
									<span class="comment"><a href="">21<i class="icon-bubble22"></i></a></span>
									<p>Far far away, behind the word mountains</p>
									<a href="#" class="btn btn-default">Read More</a>
								</div> 
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="col-md-12">
							<div class="heading-section animate-box">
								<h2>Upcoming Events</h2>
							</div>
						</div>
						<div class="col-md-12 col-md-offset-0">
							<div class="fh5co-blog animate-box">
								<div class="meta-date text-center">
									<p><span class="date">14</span><span>June</span><span>2016</span></p>
								</div>
								<div class="desc desc2">
									<h3><a href=""#>Starting new session of body building this summer</a></h3>
									<span class="posted_by">Posted by: Admin</span>
									<span class="comment"><a href="">21<i class="icon-bubble22"></i></a></span>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
									<a href="#" class="btn btn-default">Read More</a>
								</div> 
							</div>
						</div>
						<div class="col-md-12 col-md-offset-0">
							<div class="fh5co-blog animate-box">
								<div class="meta-date text-center">
									<p><span class="date">13</span><span>June</span><span>2016</span></p>
								</div>
								<div class="desc desc2">
									<h3><a href=""#>Starting new session of body building this summer</a></h3>
									<span class="posted_by">Posted by: Admin</span>
									<span class="comment"><a href="">21<i class="icon-bubble22"></i></a></span>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
									<a href="#" class="btn btn-default">Read More</a>
								</div> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- fh5co-blog-section -->
		<?php include('includes/footer.php');?>
	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>
