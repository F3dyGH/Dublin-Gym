<?php 
//session_start();

?>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<div class="header-style" style="border-right: 1px;">
	<div class="container">
		<div class="fh5co-header">
			<div class="cnt-account">
				<ul class="sf-menu" id="fh5co-primary-menu">
                    
                    <?php if(strlen($_SESSION['login'])==0)
                    {   ?>
					<li ><a href="login.php"><i class="icon fa fa-user"></i> My Account</a></li>
					<li><a href="my-wishlist.php"><i class="icon fa fa-heart"></i> Wishlist</a></li>
					<li><a href="my-cart.php"><i class="icon fa fa-shopping-cart"></i> My Cart</a></li>
                    <li><a href="login.php"><i class="icon fa fa-sign-in"></i>  Login</a></li>
                    <?php }
                    else{ ?>
                    <li><a href="#"><b>Welcome -<?php echo htmlentities($_SESSION['username']);?></b></a></li>
                    <li ><a href="my-account.php"><i class="icon fa fa-user"></i> My Account</a></li>
					<li><a href="my-wishlist.php"><i class="icon fa fa-heart"></i> Wishlist</a></li>
					<li><a href="my-cart.php"><i class="icon fa fa-shopping-cart"></i> My Cart</a></li>
					<li><a href="order-history.php"><i class="icon fa fa-history"></i> Order History</a></li>
                    <li><a href="logout.php"><i class="icon fa fa-sign-out"></i> Logout</a></li>
                    </ul>
                    <div class="cnt-block">
                        <ul class="list-unstyled list-inline" >
                            <li class="dropdown dropdown-small">
                                <a href="track-orders.php" class="dropdown-toggle"><b><span class="key">Track Order</span></b></a>
                            </li>
                        </ul>
                    </div>
				<?php } ?>	
				
			</div><!-- /.cnt-account -->



			
			<div class="clearfix"></div>
		</div><!-- /.header-top-inner -->
	</div><!-- /.container -->
    
</div><!-- /.header-top -->
