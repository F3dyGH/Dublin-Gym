<?php
session_start();
error_reporting(0);
include('includes/config.php');
// Code user Registration
/*if(isset($_POST['submit']))
{
$id_abon=$_POST['id_abon'];
$type_abon=$_POST['type_abon'];
$dure_abon=$_POST['dure_abon'];
 
$query=mysqli_query($con,"insert into abonnement(id_abon,type_abon,dure_abon) values('$id_abon','$type_abon','$dure_abon')");
if($query)
{
	echo "<script>alert('You are successfully register');</script>";
}
else{
echo "<script>alert('Not register something went worng');</script>";
}
}*/
if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=intval($_GET['id_abon']);
	if(isset($_SESSION['cart'][$id_abon])){
		$_SESSION['cart'][$id_abon]['quantity']++;
	}else{
		$sql_p="SELECT * FROM abonnement WHERE id_abon={$id_abon}";
		$query_p=mysqli_query($con,$sql_p);
		if(mysqli_num_rows($query_p)!=0){
			$row_p=mysqli_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id_abon']]=array("quantity" => 1, "montant" => $row_p['montant']);
			header('location:my-cart.php');
		}else{
			$message="Product ID is invalid";
		}
	}
}
// Code for User login
  
  /* if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myemail = mysqli_real_escape_string($con,$_POST['email']);
      $mypassword = mysqli_real_escape_string($con,$_POST['password']); 
      
      $sql = "SELECT id FROM users WHERE email = '$myemail' and passcode = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myemail");
         $_SESSION['login_user'] = $myemail;
         
         header("location: index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }*/
/*if(isset($_POST['join']))
{
	$id_abon=$_POST['id_abon'];
	$date_abon=$_POST['type_abon'];
	$type_abon=$_POST['dure_abon'];
//$query=mysqli_query($con,"SELECT * FROM abonnement WHERE id_abon='$id_abon' and dure_abon='$dure_abon'and type_abon='$type_abon' ");
$num=mysqli_fetch_array($query);
if($num>0)
{
$extra="index.php";
$_SESSION['join']=$_POST['id_abon'];
$_SESSION['type_abon']=$_POST['type_abon'];
$_SESSION['dure_abon']=$_POST['dure_abon'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
$log=mysqli_query($con,"insert into abonnement(id_abon,dure_abon,type_abon) values('".$_SESSION['id_abon']."','$dure_abon','$type_abon')");
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
$extra="my-account.php";
$email=$_POST['id_abon'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=0;
$log=mysqli_query($con,"insert into abonnement(id_abon,dure_abon,type_abon) values('$id_abon','$dure_abon','$type_abon')");
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
$_SESSION['errmsg']="Invalid   id dure or type";
exit();
}
}*/

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

    <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Dublin Gym &mdash; Login</title>
	

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
	<link rel="shortcut icon" href="logo.ico">

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


	<script type="text/javascript">
function valid()
{
 if(document.register.password.value!= document.register.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.register.confirmpassword.focus();
return false;
}
return true;
}
</script>
    	<script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		 
                 <?php include('includes/menu-bar.php');?>
				 
		<!-- end:fh5co-header -->
		<div class="fh5co-parallax" style="background-image: url(images/home-image-4.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell animate-box">
                            <br><br><br><br>
							<h1 class="text-center" style="height=0;">subscribe</h1>
						</div>
					</div>
				</div>
			</div>
		</div><!-- end: fh5co-parallax -->
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

<?php $query=mysqli_query($con,"select * from abonnement");


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
							<h3><?php echo $row['monatnt']?></h3>
							<small><?php echo $row['type_abon']?>AM-<?php echo $row['dure_abon']?>AM</small>
							<h5>Coach :<?php echo $row['description']?></h5>
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
							<h3><?php echo $row['type_abon']?></h3>
							<h2><?php echo $row['montant']?> DT</h2>
							
							<p><?php echo $row['description']?></p>
							<button class="btn btn-default" type="action">join us</button>
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
