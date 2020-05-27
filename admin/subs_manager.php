<?php


include('subs_action.php');
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
 	<title>Admin| Manage  subs</title>
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
			<h3> Manager subs </h3>
	</div>
                    <br>
                		<form class="form-horizontal row-fluid" action="subs_action.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id_abon" value="<?= $id_abon;?>" >
				<div class="control-group">
                    <label class="control-label" for="basicinput"> type of subs : </label>
				<input type="text" name="type_abon" value="<?= $type_abon;?>" class="form-control" placeholder="Enter type" required> 
				</div>
				<div class="control-group">
                    <label class="control-label" for="basicinput">duration of subs(month) :  </label>
				<input type="number" name=" dure_abon" value="<?= $dure_abon;?>"  class="form-control" placeholder="Enter duration" required> 
				</div>
				<div class="control-group">
											<label class="control-label" for="basicinput">Description</label>
											<div class="controls">
												<textarea class="span8" name="description" rows="5"></textarea>
											</div>
										</div>
				<div class="control-group">
                    <label class="control-label" for="basicinput">Montant (en DT) :  </label>
				<input type="number" name=" montant" value="<?= $montant;?>"  class="form-control" placeholder="Enter duration" required> 
				</div>
				 
				<div class="control-group">
                    <label class="control-label" for="basicinput">  </label>
					 
         <?php  if ($update==true){  ?>
            <input type="submit" name="update" class="btn btn-success" value="Update">
          <?php } else { ?>
			<input type="submit" name="add" class="btn btn-primary" value="Add " >					
			<?php } ?>
				</div>
           
					
					 
				</div>
			</form>
      <?php 
    $query="SELECT * FROM abonnement ";
    $stmt=$con->prepare($query);
    $stmt->execute();
    $result=$stmt->get_result();


      ?>
			<div class="module-head">
								<h3>subs List </h3>
							</div>
            <div class="module-body table">
	<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table-bordered table-striped display table-responsive" width="100%" >
    <thead>
      <tr>
        
        <th>id</th>
        <th>date</th>
         <th>type</th>
          <th>duration</th>
		  <th>description</th>
		  <th>montant</th>
          <th>action</th>
            </tr>
    </thead>
    <tbody>
      <?php while ($row=$result->fetch_assoc()){?>
      <tr>
         
        
        <td><?=$row['id_abon']  ?></td>
         <td><?=$row['date_abon']  ?></td>
          <td><?=$row['type_abon']  ?></td>
           <td><?=$row['dure_abon']  ?></td>
		   <td><?=$row['description']  ?></td>
		   <td><?=$row['montant']  ?></td>
           
             <td>
			    <a href="javascript:void(0);" onClick="popUpWindow('subs_details.php?details=<?=$row['id_abon']  ?>');" title="subs Details" target="_blank"><i class="icon-list"></i>|</a> 
                <a href="subs_action.php?delete=<?=$row['id_abon']  ?>" title="Delete subs" onclick="return confirm('Do you want to delete this record ?')" ><i class="icon-trash"></i></a> |
             	<a href="subs_manager.php?edit=<?=$row['id_abon']  ?>"><i class="icon-edit" title="Edit Informations"></i> </a> 

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