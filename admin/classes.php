
<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
    //=======Time Set bech koll action tet9ayed bel wakt fel base ========= ///
date_default_timezone_set('Africa/Tunis');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );
}
//requete Sql taa delete kahao l update tetekhdem fel edit-classes.php mch hna
    /*wel affichage tsyr aal tableau b <?php echo htmlentities($row['esmlattribut']);?>*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin| Classes</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>
<?php include('include/header.php');?>

	<div class="wrapper">
		<div class="container">
			<div class="row">
<?php include('include/sidebar.php');?>				
			<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Add Classes</h3>
							</div>
							<div class="module-body">

								<!-- Form (Ajout nom cours et ses autres attributs et nom coach et ses autres attributs) w requete Sql ta3hom zouz -->	
                                
							</div>
						</div>


	<div class="module">
							<div class="module-head">
								<h3>Manage Classes</h3>
							</div>
							<div class="module-body table">
                                
								<!-- Tableau fiha l affichage w fel case lekhra button supprimer w button modifier (taamel redirection lel edit-                            classes.php bel <a href="edit-classes.php>) -->
                                
							</div>
						</div>				
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

<?php include('include/footer.php');?>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="scripts/datatables/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
</body>