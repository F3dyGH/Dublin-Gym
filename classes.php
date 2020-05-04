<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Dublin Gym &mdash; Classes</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />


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
		</div>
		<!-- end:fh5co-header -->
		<div class="fh5co-parallax" style="background-image: url(images/home-image-2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell animate-box">
                            <br><br><br>
							<h1 class="text-center" style="height:0;">Classes</h1>
						</div>
					</div>
				</div>
			</div>
		</div><!-- end: fh5co-parallax -->

<!-- bloc recherche par jour des classes -->

		<div id="fh5co-schedule-section" class="fh5co-lightgray-section">
			<div class="container">
				
				<div class="row animate-box">
							<div class="single-blog-widget" align="center">
                               <h2>Day :</h2>
                                <div class="single-tag" >
                                   <a href="classes.php" class="btn btn-success">All </a>
                                   <a href="classes.php?rech=Monday" class="btn btn-success">Monday</a>
                                   <a href="classes.php?rech=Tuesday" class="btn btn-success">Tuesday</a>
                                   <a href="classes.php?rech=Wednesday" class="btn btn-success">Wednesday </a>
                                   <a href="classes.php?rech=Thursday" class="btn btn-success">Thursday </a></li>
                                   <a href="classes.php?rech=Friday" class="btn btn-success">Friday </a>
                                   <a href="classes.php?rech=Saturday" class="btn btn-success">Saturday </a>
                                   <a href="classes.php?rech=Sunday" class="btn btn-success">Sunday</a>
                               </div>
                            </div>
					


				</div>
			</div>
		</div>
<!--Fin  bloc recherche par jour des classes -->


		<!-- end:fh5co-hero -->
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

<?php $query=mysqli_query($con,"select * from classes");


if (isset($_GET['rech']))
{


while($row=mysqli_fetch_array($query))
{
	if ($_GET['rech']==$row['jour'])
			{
?>									
										
										
				<div class="row text-center">
					<div class="col-md-4 col-sm-6">
						<div class="program animate-box">
							<img src="images/fit-dumbell.svg" alt="Cycling">
							<h3><?php echo $row['nomcour']?></h3>
							<small><?php echo $row['start']?>AM-<?php echo $row['end']?>AM</small>
							<h5>Coach :<?php echo $row['personnel']?></h5>
							<p><?php echo $row['description']?></p>
							<span><a href="#" class="btn btn-default">Join Now</a></span>
						</div>
					</div>
					
<?php 
 }
}
}
else
{
			while($row=mysqli_fetch_array($query))
			{
				
?>
											
				<div class="row text-center">
					<div class="col-md-4 col-sm-6">
						<div class="program animate-box">
							<img src="images/fit-dumbell.svg" alt="Cycling">
							<h3><?php echo $row['nomcour']?></h3>
							<p><?php echo $row['description']?></p>
							<span><a href="#" class="btn btn-default">Join Now</a></span>
						</div>
					</div>
<?php 
 }
}
?>
					
					
				</div>
			</div>
		</div>
		
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

