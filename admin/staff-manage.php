<?php


include('staff-action.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{

date_default_timezone_set('Africa/Tunis');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );


?>


<!DOCTYPE html>

 <html lang="en">


 <head>
 	<meta charset ="utf-8">
 	<meta name="author" content="sahil kumar">
 	<meta http-equiv="x-UA-compatible" content="IE=edge">
 	<meta name ="viewport" content ="width=device-with, initial-scale=1 shrink-to-fit =no">
 	<title>Admin| Manage Staff </title>
 	<!-- Latest compiled and minified CSS -->
<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script language="javascript" type="text/javascript">
var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
 if(popUpWin)
{
if(!popUpWin.closed) popUpWin.close();
}
popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+600+',height='+600+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}

</script>
 </head>
 <body>
     <?php include('include/header.php');?>
 	
<div class="wrapper">
	<div class="row justify-content-center" style="text-align: center;">
		<div class="col-md-10">
      <?php if (isset($_SESSION['response'])){  ?>
      <div class="alert alert-<?=  $_SESSION ['res_type'];  ?>
       alert-dismissible text-center">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
 <b ><?= $_SESSION ['response']?></b> 
  
</div>
<?php  } unset($_SESSION ['response']);?>
		</div>
	</div>
    <div class="container">
	<div class="row">
        <?php include('include/sidebar.php');?>	
		<div class="span9">
            <div class="content">
                <div class="module">
	<div class="module-head">
			<h3> Manage Staff </h3>
	</div>
                    <br>
                		<form class="form-horizontal row-fluid" action="staff-action.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="idpers" value="<?= $idpers;?>" >
				<div class="control-group">
                    <label class="control-label" for="basicinput"> First Name  </label>
				<input type="text" name="nom" value="<?= $nom;?>" class="form-control" placeholder="Enter first name" required> 
				</div>
				<div class="control-group">
                    <label class="control-label" for="basicinput">Last Name  </label>
				<input type="text" name="prenom" value="<?= $prenom;?>"  class="form-control" placeholder="Enter last name" required> 
				</div>
				<div class="control-group">
                    <label class="control-label" for="basicinput">Speciality  </label>
				<input type="text" name="specialite" value="<?= $specialite;?>"  class="form-control" placeholder="Enter speciality" required> 
				</div>
				<div class="control-group">
                    <label class="control-label" for="basicinput">Email  </label>
				<input type="email" name="emailpers" value="<?= $emailpers;?>"  class="form-control" placeholder="Enter email" required> 
				</div>
				<div class="control-group">
                    <label class="control-label" for="basicinput">Phone Number  </label>
				<input type="tel" name="numero" value="<?= $numero ;?>" class="form-control" placeholder="Enter number" required> 
				</div>
				<div class="control-group">
                    <label class="control-label" for="basicinput">Photo</label>
          <input type="hidden" name="oldimage" value="<?=$photo ?>" >
					<input type="file" name="image" class="custom-file">
          <img src="<?= $photo ; ?> " width="120" class="img-thumbnail">
				</div>
				<div class="control-group">
                    <label class="control-label" for="basicinput">  </label>
          <?php  if ($update==true){  ?>
            <input type="submit" name="update" class="btn btn-success" value="Update Staff">
          <?php } else { ?>
					<input type="submit" name="add" class="btn btn-primary" value="Add To Staff" >
					<?php } ?>
				</div>
			</form>
      <?php 
    $query="SELECT * FROM Personnel ";
    $stmt=$con->prepare($query);
    $stmt->execute();
    $result=$stmt->get_result();


      ?>
			<div class="module-head">
								<h3>Staff List </h3>
							</div>
            <div class="module-body table">
	<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table-bordered table-striped display table-responsive" width="100%" >
    <thead>
      <tr>
        <th>#</th>
        <th>Image</th>
        <th>nom</th>
         <th>Prenom</th>
          <th>specialite</th>
           <th>Emailpers</th>
            <th>numero</th>
            <th> Action</th>

      </tr>
    </thead>
    <tbody>
      <?php while ($row=$result->fetch_assoc()){?>
      <tr>
        <td><?=$row['idpers']  ?></td>
        <td><img src=" <?=$row['photo']  ?>" width="25" ></td>
        <td><?=$row['nom']  ?></td>
         <td><?=$row['prenom']  ?></td>
          <td><?=$row['specialite']  ?></td>
           <td><?=$row['emailpers']  ?></td>
            <td><?=$row['numero']  ?></td>
             <td>
             	<a href="javascript:void(0);" onClick="popUpWindow('staff-details.php?details=<?=$row['idpers']  ?>');" title="Employee Details" target="_blank"><i class="icon-list"></i>|</a> 
             	<a href="staff-action.php?delete=<?=$row['idpers']  ?>" title="Delete Employee" onclick="return confirm('Do you want to delete this record ?')" ><i class="icon-trash"></i></a> |
             	<a href="staff-manage.php?edit=<?=$row['idpers']  ?>"><i class="icon-edit" title="Edit Informations"></i> </a> 

             	             </td>
      </tr>
    <?php }  ?>
    </tbody>
  </table> 
                    </div>
                </div>
		</div>
	</div>
        </div>
    </div>

</div>
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
 </html>
<?php } ?>