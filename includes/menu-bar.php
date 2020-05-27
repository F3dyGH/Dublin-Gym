<div id="fh5co-header">
			<header id="fh5co-header-section"> 
                 <?php include('includes/top-header.php');?>
				<div class="container">
                    <nav id="fh5co-menu-wrap" role="navigation">
                    </nav>
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo"><a href="index.php">Dub<span>lin</span>  <span>Gym</span></a></h1>
						<!-- START #fh5co-menu-wrap -->
                        <hr>
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li>
									<a href="index.php">Home</a>
								</li>
								<li>
									<a href="classes.php" class="fh5co-sub-ddown">Classes</a>
									 <ul class="fh5co-sub-menu">
									 	<li><a href="left-sidebar.html">Body Combat</a></li>
									 	<li><a href="right-sidebar.html">Yoga</a></li>
										<li>
											<a href="#" class="fh5co-sub-ddown">Cycling</a>
										</li>
										<li><a href="#">Boxing Fitness</a></li>
										<li><a href="#">Swimming</a></li>
										<li><a href="#">Massage</a></li> 
									</ul>
								</li>
								
								<li><a href="trainer.php">Trainers</a></li>
                                <li><a href="store.php">Store</a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="contact.php">Contact</a></li>
                                <li>	<div class="cart" style="padding: 0px;
                                                border: 1px solid #e1e1e1;
                                                -webkit-border-radius: 0;
                                                -moz-border-radius: 0;
                                                border-radius: 20px;
                                               
                                                color: #666666;">
					<!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
                                            
<?php
if(!empty($_SESSION['cart'])){
	?>
	<div class="dropdown dropdown-cart">
		<a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
			<div class="items-cart-inner">
				<div class="total-price-basket">
					<span class="total-price">
						<span class="sign"style="font-size:13px;">DT.</span>
						<span class="value"style="font-size:13px;"><?php echo $_SESSION['tp']; ?></span>
					</span>
				</div>
				<div class="basket">
					<i class="icon-shopping-cart"></i>
				</div>
				<div class="basket-item-count"style="-webkit-border-radius: 100px;
                                                      -moz-border-radius: 100px;
                                                       border-radius: 100px;
                                                       height: 21px;
                                                       position: absolute;
                                                       right: 40px;
                                                       top: -13px;
                                                       width: 21px;
                                                       background: #4CB648;
                                                       color: #fff;
                                                       font-size: 13px;
                                                       text-align: center;"><span class="count"><?php echo $_SESSION['qnty'];?></span></div>
			
		    </div>
		</a>
		<ul class="dropdown-menu">
		
		 <?php
    $sql = "SELECT * FROM products WHERE id IN(";
			foreach($_SESSION['cart'] as $id => $value){
			$sql .=$id. ",";
			}
			$sql=substr($sql,0,-1) . ") ORDER BY id ASC";
			$query = mysqli_query($con,$sql);
			$totalprice=0;
			$totalqunty=0;
			if(!empty($query)){
			while($row = mysqli_fetch_array($query)){
				$quantity=$_SESSION['cart'][$row['id']]['quantity'];
				$subtotal= $_SESSION['cart'][$row['id']]['quantity']*$row['productPrice']+$row['shippingCharge'];
				$totalprice += $subtotal;
				$_SESSION['qnty']=$totalqunty+=$quantity;

	?>
		
		
			<li>
				<div class="cart-item product-summary">
					<div class="row">
						<div class="col-xs-4">
							<div class="image">
								<a href="detail.html"><img  src="admin/productimages/<?php echo $row['id'];?>/<?php echo $row['productImage1'];?>" width="35" height="50" alt=""></a>
							</div>
						</div>
						<div class="col-xs-7">
							
							<h3 class="name"><a href="index.php?page-detail"><?php echo $row['productName']; ?></a></h3>
							<div class="price">DT.<?php echo ($row['productPrice']+$row['shippingCharge']); ?>*<?php echo $_SESSION['cart'][$row['id']]['quantity']; ?></div>
						</div>
						
					</div>
				</div><!-- /.cart-item -->
			
				<?php } }?>
				<div class="clearfix"></div>
			<hr>
		
			<div class="clearfix cart-total">
				<div class="pull-right">
					
						<span class="text">Total :</span><span class='price'>DT.<?php echo $_SESSION['tp']="$totalprice". ".00"; ?></span>
						
				</div>
			
				<div class="clearfix"></div>
					
				<a href="my-cart.php" class="btn btn-upper btn-primary btn-block m-t-20">My Cart</a>	
			</div><!-- /.cart-total-->
					
				
		</li>
		</ul><!-- /.dropdown-menu-->
	</div><!-- /.dropdown-cart -->
<?php } else { ?>
<div class="dropdown dropdown-cart">
		<a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
			<div class="items-cart-inner">
				<div class="total-price-basket">
                    <div class="basket">
					<i class="icon-shopping-cart"> - </i>
					<span class="total-price">
						<span class="sign" style="font-size:13px;">DT.</span>
						<span class="value" style="font-size:13px;">00.00</span>
					</span>
				</div>
				
				<div class="basket-item-count" style="-webkit-border-radius: 100px;
                                                      -moz-border-radius: 100px;
                                                       border-radius: 100px;
                                                       height: 21px;
                                                       position: absolute;
                                                       right: 40px;
                                                       top: -13px;
                                                       width: 21px;
                                                       background: #4CB648;
                                                       color: #fff;
                                                       font-size: 13px;
                                                       text-align: center;">
                    <span class="count">0</span>
                </div>
			</div>
		    </div>
		</a>
		<ul class="dropdown-menu" style="width:160%;">
			<li>
				<div class="cart-item product-summary"><br>
					<div class="row" >
						<div class="col-xs-12" style="text-align:center;">
							Your Shopping Cart is Empty.
						</div>
                       <hr>
						<br>
					</div>
				</div><!-- /.cart-item -->
			
				<br>
			<hr>
		
			<div class="clearfix cart-total">
				
				<div class="clearfix"></div>
					
				<a href="store.php" class="btn btn-upper btn-primary btn-block m-t-20">Shop Now</a>	
			</div><!-- /.cart-total-->
					
				
		</li>
		</ul><!-- /.dropdown-menu-->
	</div>
	<?php }?>




<!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->				
                                </div><!-- /.top-cart-row --> 
                            </li>
							</ul>
						</nav>
					</div>
				</div>
			</header>
		</div>
