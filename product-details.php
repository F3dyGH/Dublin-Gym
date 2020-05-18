<?php 
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=intval($_GET['id']);
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']++;
	}else{
		$sql_p="SELECT * FROM products WHERE id={$id}";
		$query_p=mysqli_query($con,$sql_p);
		if(mysqli_num_rows($query_p)!=0){
			$row_p=mysqli_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);
			header('location:my-cart.php');
		}else{
			$message="Product ID is invalid";
		}
	}
}
$pid=intval($_GET['pid']);
if(isset($_GET['pid']) && $_GET['action']=="wishlist" ){
	if(strlen($_SESSION['login'])==0)
    {   
header('location:login.php');
}
else
{
mysqli_query($con,"insert into wishlist(userId,productId) values('".$_SESSION['id']."','$pid')");
echo "<script>alert('Product aaded in wishlist');</script>";
header('location:my-wishlist.php');

}
}
if(isset($_POST['submit']))
{
	$qty=$_POST['quality'];
	$price=$_POST['price'];
	$value=$_POST['value'];
	$name=$_POST['name'];
	$summary=$_POST['summary'];
	$review=$_POST['review'];
	mysqli_query($con,"insert into productreviews(productId,quality,price,value,name,summary,review) values('$pid','$qty','$price','$value','$name','$summary','$review')");
}


?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Dublin Gym &mdash; Product Details</title>
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
        	<script language="javascript" type="text/javascript">


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
                            <br><br><br>
							<h1 class="text-center" style="height: 0;">Product Details</h1>
						</div>
					</div>
				</div>
			</div>
		</div><!-- end: fh5co-parallax -->
		<!-- end:fh5co-hero -->
        <div class="breadcrumb">
            <div class="container">
                <div class="breadcrumb-inner">
                    <ul class="list-inline list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li>/</li>
                        <li><a href="store.php">Store</a></li>
                        <li>/</li>
                        <li class='active'>Product Details</li>
                    </ul>
                </div><!-- /.breadcrumb-inner -->
            </div><!-- /.container -->
        </div><!-- /.breadcrumb -->  
		
		
	<div class="container">
		<div class="breadcrumb-inner">
<?php
$ret=mysqli_query($con,"select category.categoryName as catname, products.productName as pname from products join category on category.id=products.category where products.id='$pid'");
while ($rw=mysqli_fetch_array($ret)) {

?>


			<ul class="list-inline list-unstyled">
				
				<li><a<?php echo htmlentities($rw['catname']);?>></a></li>
				<li class='active'><?php echo htmlentities($row['pname']);?></li>
			</ul>
			<?php }?>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->

            <div class='container'>
		<div class='row single-product outer-bottom-sm '>
			<div class='col-md-3 sidebar'>
				<div class="sidebar-module-container">


					<!-- ==============================================CATEGORY============================================== -->
<div class="sidebar-widget outer-bottom-xs wow fadeInUp">
	<h3 class="section-title">Category</h3>
	<div class="sidebar-widget-body m-t-10">
		<div class="accordion">

		            <?php $sql=mysqli_query($con,"select id,categoryName  from category");
while($row=mysqli_fetch_array($sql))
{
    ?>
	    	<div class="accordion-group">
	            <div class="accordion-heading">
	                <a href="category.php?cid=<?php echo $row['id'];?>"  class="accordion-toggle collapsed">
	                   <?php echo $row['categoryName'];?>
	                </a>
	            </div>
	          
	        </div>
	        <?php } ?>
	    </div>
	</div>
</div>
	<!-- ============================================== CATEGORY : END ============================================== -->					<!-- ============================================== HOT DEALS ============================================== -->
                <br>
<div class="sidebar-widget hot-deals wow fadeInUp">
	<h3 class="section-title">Hot deals</h3>
	<div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-xs">
		
								   <?php
$ret=mysqli_query($con,"select * from products order by rand() limit 4 ");
while ($rws=mysqli_fetch_array($ret)) {

?>

					        
		<div class="item">	
					<div class="products">
						<div class="hot-deal-wrapper">
							<div class="image">
								<img src="admin/productimages/<?php echo($rws['id']);?>/<?php echo($rws['productImage1']);?>"  width="200" height="200" alt="">
							</div>
							
						</div><!-- /.hot-deal-wrapper -->

						<div class="product-info text-left m-t-20">
							<h3 class="name"><a href="product-details.php?pid=<?php echo($rws['id']);?>"><?php echo($rws['productName']);?></a></h3>
							<div class="rating rateit-small"></div>

							<div class="product-price">	
								<span class="price">
									DT. <?php echo($rws['productPrice']);?>.00
								</span>
									
							    <span class="price-before-discount">DT.<?php echo($row['productPriceBeforeDiscount']);?></span>					
							
							</div><!-- /.product-price -->
							
						</div><!-- /.product-info -->
						
                        
						<div class="cart clearfix animate-effect">
							<div class="action">
								
								<div class="add-cart-button btn-group">
									<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
								<i class="fa fa-shopping-cart"></i>													
							</button>
						<a href="product-details.php?page=product&action=add&id=<?php echo $rws['id']; ?>" class="lnk btn btn-primary">Add to cart</a>
													
															
								</div>
								
							</div><!-- /.action -->
						</div><!-- /.cart -->
					</div>	
					</div>		
					<?php } ?>        
						
	    
    </div><!-- /.sidebar-widget -->
</div>
<br>
                    
<!-- ============================================== COLOR: END ============================================== -->
				</div>
			</div><!-- /.sidebar -->
<?php 
$ret=mysqli_query($con,"select * from products where id='$pid'");
while($row=mysqli_fetch_array($ret))
{

?>


<div class='col-md-9'>

				<div class="row  wow fadeInUp">
					     <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
    <div class="product-item-holder size-big single-product-gallery small-gallery">

        <div id="owl-single-product">

		<div class="image">
								<img src="admin/productimages/<?php echo($rws['id']);?>/<?php echo($rws['productImage1']);?>"  width="200" height="200" alt="">
							</div>




            <div class="single-product-gallery-item" id="slide1">
                <a data-lightbox="image-1" data-title="<?php echo htmlentities($row['productName']);?>" href="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>">
                    <img class="img-responsive" alt="" src="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" width="370" height="350" />
                </a>
            </div><!-- /.single-product-gallery-item -->

        </div><!-- /.single-product-slider -->
		


        <div class="single-product-gallery-thumbs gallery-thumbs">

            <div id="owl-single-product-thumbnails">
                <div class="item">
                    <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide1">
                        <img class="img-responsive"  alt="" src="assets/images/blank.gif" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" />
                    </a>
                </div>                
            </div><!-- /#owl-single-product-thumbnails -->

            

        </div>

    </div>
</div>     			




					<div class='col-sm-6 col-md-7 product-info-block'>
						<div class="product-info">
							<h1 class="name"><?php echo htmlentities($row['productName']);?></h1>
<?php $rt=mysqli_query($con,"select * from productreviews where productId='$pid'");
$num=mysqli_num_rows($rt);
{
?>		
							<div class="rating-reviews m-t-20">
								<div class="row">
									<div class="col-sm-3">
										<div class="rating rateit-small"></div>
									</div>
									<div class="col-sm-8">
										<div class="reviews">
											<a href="#" class="lnk" >(<?php echo htmlentities($num);?> Reviews)</a>
										</div>
									</div>
								</div><!-- /.row -->		
							</div><!-- /.rating-reviews -->
<?php } ?>
							<div class="stock-container info-container m-t-10">
								<div class="row">
									<div class="col-sm-3">
										<div class="stock-box">
											<span class="label" style="color:black;">Availability :</span>
										</div>	
									</div>
									<div class="col-sm-9">
										<div class="stock-box">
											<span class="value"><?php echo htmlentities($row['productAvailability']);?></span>
										</div>	
									</div>
								</div><!-- /.row -->	
							</div>



<div class="stock-container info-container m-t-10">
								<div class="row">
									<div class="col-sm-3">
										<div class="stock-box">
											<span class="label" style="color:black;">Product Brand :</span>
										</div>	
									</div>
									<div class="col-sm-9">
										<div class="stock-box">
											<span class="value" ><?php echo htmlentities($row['productCompany']);?></span>
										</div>	
									</div>
								</div><!-- /.row -->	
							</div>


<div class="stock-container info-container m-t-10">
								<div class="row">
									<div class="col-sm-3">
										<div class="stock-box">
											<span class="label" style="color: black;">Shipping Charge :</span>
										</div>	
									</div>
									<div class="col-sm-9">
										<div class="stock-box">
											<span class="value"><?php if($row['shippingCharge']==0)
											{
												echo "Free";
											}
											else
											{
												echo htmlentities($row['shippingCharge']);
											}

											?></span>
										</div>	
									</div>
								</div><!-- /.row -->	
							</div>
											<br>
							<div class="price-container info-container m-t-20">
								<div class="row">
									

									<div class="col-sm-6">
										<div class="price-box">
											<span class="price">DT. <?php echo htmlentities($row['productPrice']);?></span>
											<br>
											<span class="price-strike">DT.<?php echo htmlentities($row['productPriceBeforeDiscount']);?></span>
										</div>
									</div>



                                    <br><br>
						            
								</div><!-- /.row -->
							</div><!-- /.price-container -->

	


                            

							<div class="quantity-container info-container">
								<div class="row">
									
									
									<div class="col-sm-2">
										<div class="cart-quantity">
											<div class="quant-input">
											<p>*Quantity:</p>
											<input type="number" value="1" min="1"> 
							              </div>
							            </div>
									</div>
                                    <br><br><br><br>
									<div class="col-sm-7">
										<a href="product-details.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART</a>
									</div>

									<div class="col-sm-6">
										<div class="favorite-button m-t-10">
											<a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Wishlist" href="product-details.php?pid=<?php echo htmlentities($row['id'])?>&&action=wishlist">
											    <i class="fa fa-heart"></i>
											</a>
											
										</div>
									</div>
									
								</div><!-- /.row -->
							</div><!-- /.quantity-container -->
							<br>

							<div class="product-social-link m-t-20 text-right">
								<span class="social-label">Share :</span>
								<div class="social-icons">
						            <ul class="list-inline">
						                <li><a class="fa fa-facebook" href="http://facebook.com/transvelo"></a></li>
						                <li><a class="fa fa-twitter" href="#"></a></li>
						                <li><a class="fa fa-linkedin" href="#"></a></li>
						                <li><a class="fa fa-rss" href="#"></a></li>
						                <li><a class="fa fa-pinterest" href="#"></a></li>
						            </ul><!-- /.social-icons -->
						        </div>
							</div>
                            <div class="row">
						<div class="col-sm-3">
							<ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
							<li class="active"><a data-toggle="tab" href="#description">DESCRIPTION</a></li>
							<div class="product-tab">
										<p class="text"><?php echo $row['productDescription'];?></p>
									</div>	
								<li><a data-toggle="tab" href="#review">REVIEW</a>
                                <div id="description" class="tab-pane in active">
								</div><!-- /.tab-pane -->

								<div id="review" class="tab-pane">
									<div class="product-tab">
																				
										<div class="product-reviews">
											<h4 class="title">Customer Reviews</h4>
<?php $qry=mysqli_query($con,"select * from productreviews where productId='$pid'");
while($rvw=mysqli_fetch_array($qry))
{
?>

											<div class="reviews" style="border: solid 1px #000; padding-left: 2% ">
												<div class="review">
													<div class="review-title"><span class="summary"><?php echo htmlentities($rvw['summary']);?> <br> </span><span class="date"><i class="fa fa-calendar"></i><span><?php echo htmlentities($rvw['reviewDate']);?></span></span></div>

													<div class="text">"<?php echo htmlentities($rvw['review']);?>"</div>
													<div class="text"><b>Quality :</b>  <?php echo htmlentities($rvw['quality']);?> Star</div>
													<div class="text"><b>Price :</b>  <?php echo htmlentities($rvw['price']);?> Star</div>
													<div class="text"><b>value :</b>  <?php echo htmlentities($rvw['value']);?> Star</div>
                                                <div class="author m-t-15"><i class="fa fa-pencil-square-o"></i> <span class="name"><?php echo htmlentities($rvw['name']);?></span></div>													</div>
											
											</div>
											<?php } ?><!-- /.reviews -->
										</div><!-- /.product-reviews -->
										<form role="form" class="cnt-form" name="review" method="post">

										<br>
										<div class="product-add-review">
											<h4 class="title">Write your own review</h4>
											<div class="review-table">
												<div class="table-responsive">
													<table class="table table-bordered">	
														<thead>
															<tr>
																<th class="cell-label">&nbsp;</th>
																<th>1 star</th>
																<th>2 stars</th>
																<th>3 stars</th>
																<th>4 stars</th>
																<th>5 stars</th>
															</tr>
														</thead>	
														<tbody>
															<tr>
																<td class="cell-label">Quality</td>
																<td><input type="radio" name="quality" class="radio" value="1"></td>
																<td><input type="radio" name="quality" class="radio" value="2"></td>
																<td><input type="radio" name="quality" class="radio" value="3"></td>
																<td><input type="radio" name="quality" class="radio" value="4"></td>
																<td><input type="radio" name="quality" class="radio" value="5"></td>
															</tr>
															<tr>
																<td class="cell-label">Price</td>
																<td><input type="radio" name="price" class="radio" value="1"></td>
																<td><input type="radio" name="price" class="radio" value="2"></td>
																<td><input type="radio" name="price" class="radio" value="3"></td>
																<td><input type="radio" name="price" class="radio" value="4"></td>
																<td><input type="radio" name="price" class="radio" value="5"></td>
															</tr>
															<tr>
																<td class="cell-label">Value</td>
																<td><input type="radio" name="value" class="radio" value="1"></td>
																<td><input type="radio" name="value" class="radio" value="2"></td>
																<td><input type="radio" name="value" class="radio" value="3"></td>
																<td><input type="radio" name="value" class="radio" value="4"></td>
																<td><input type="radio" name="value" class="radio" value="5"></td>
															</tr>
														</tbody>
													</table><!-- /.table .table-bordered -->
												</div><!-- /.table-responsive -->
											</div><!-- /.review-table -->
											
											<div class="review-form">
												<div class="form-container">
													
														
														<div class="row">
															<div class="col-sm-6">
																<div class="form-group">
																	<label for="exampleInputName">Your Name <span class="astk">*</span></label>
																<input type="text" class="form-control txt" id="exampleInputName" placeholder="" name="name" required="required">
																</div><!-- /.form-group -->
																<div class="form-group">
																	<label for="exampleInputSummary">Summary <span class="astk">*</span></label>
																	<input type="text" class="form-control txt" id="exampleInputSummary" placeholder="" name="summary" required="required">
																</div><!-- /.form-group -->
															</div>

															<div class="col-md-6">
																<div class="form-group">
																	<label for="exampleInputReview">Review <span class="astk">*</span></label>

<textarea class="form-control txt txt-review" id="exampleInputReview" rows="4" placeholder="" name="review" required="required"></textarea>
																</div><!-- /.form-group -->
															</div>
														</div><!-- /.row -->
														
														<div class="action text-right">
															<button name="submit" class="btn btn-primary btn-upper">SUBMIT REVIEW</button>
														</div><!-- /.action -->
                                                        </div>
                                                	</div><!-- /.form-container -->
                                            <br>
											</div><!-- /.review-form -->
                                            </form><!-- /.cnt-form -->
                               
						
						 
								</div><!-- /.tab-pane -->
                                    </div>
									</li>
							</ul><!-- /.nav-tabs #product-tabs -->				
											
							

							
						</div><!-- /.product-info -->
					</div><!-- /.col-sm-7 -->
				</div><!-- /.row -->

				
				<div class="product-tabs inner-bottom-xs  wow fadeInUp">
							</div><!-- /.tab-content -->
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.product-tabs -->

<?php $cid=$row['category'];
			 } ?>
				<!-- ============================================== UPSELL PRODUCTS ============================================== -->
<section class="section featured-product wow fadeInUp">
	<h3 class="section-title">Related Products</h3>
	<div class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">
	   
		<?php 
$qry=mysqli_query($con,"select * from products where category='$cid'");
while($rw=mysqli_fetch_array($qry))
{

			?>	


		<div class="col-md-4 animate-box"> 
			<div class="products">
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="product-details.php?pid=<?php echo htmlentities($rw['id']);?>"><img  src="admin/productimages/<?php echo htmlentities($rw['id']);?>/<?php echo htmlentities($rw['productImage1']);?>" width="150" height="150" alt=""></a>
			</div><!-- /.image -->			

			                   		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="product-details.php?pid=<?php echo htmlentities($rw['id']);?>"><?php echo htmlentities($rw['productName']);?></a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					DT.<?php echo htmlentities($rw['productPrice']);?>			</span>
										     <span class="price-before-discount">DT.
										     <?php echo htmlentities($rw['productPriceBeforeDiscount']);?></span>
									
			</div><!-- /.product-price -->
			
		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect">
				<div class="action">
					<ul class="list-unstyled list-inline">
						<li class="add-cart-button btn-group">
							<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
								<i class="fa fa-shopping-cart"></i>													
							</button>
						<a href="product-details.php?page=product&action=add&id=<?php echo $rw['id']; ?>" class="lnk btn btn-primary">Add to cart</a>
													
						</li>
	                   
		              
					</ul>
				</div><!-- /.action -->
			</div><!-- /.cart -->
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->
		<?php } ?>
	
		
			</div><!-- /.home-owl-carousel -->
</section><!-- /.section -->


<!-- ============================================== UPSELL PRODUCTS : END ============================================== -->
			
			</div><!-- /.col -->
            
            
            <!-- /.container -->
</div><!-- /.body-content -->
		</div>
	<?php include('includes/footer.php');?>
	

	</div>
	<!-- END fh5co-page -->

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
