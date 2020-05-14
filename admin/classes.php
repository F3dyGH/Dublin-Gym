
<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{

date_default_timezone_set('Africa/Tunis');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );
}
if(isset($_POST['classsubmit']))
{
	$personnel=$_POST['personnel'];
	$nomcour=$_POST['nomcour'];
	$jour=$_POST['jour'];
	$start=$_POST['start'];
	$end=$_POST['end'];
	$description=$_POST['description'];
$query=mysqli_query($con,"select max(id) as clid from classes");
	$result=mysqli_fetch_array($query);
	 $productid=$result['clid']+1;
$sql=mysqli_query($con,"insert into classes(personnel,nomcour,jour,start,end,description) values('$personnel','$nomcour','$jour','$start','$end','$description')");
$_SESSION['msg']="Class Inserted Successfully !!";

}
if(isset($_GET['del']))
		  {
		          mysqli_query($con,"delete from classes where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Class deleted !!";
		  }
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

								<?php if(isset($_POST['classsubmit']))
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Well done!</strong>	<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
<?php } ?>


									<?php if(isset($_GET['del']))
{?>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Oh snap!</strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
									</div>
<?php } ?>

									<br />	
                                
                                <form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">

<div class="control-group">
<label class="control-label" for="basicinput">Trainer</label>
<div class="controls">
<select name="personnel" class="span8 tip"  required>
<option value="">Select Trainer</option> 
<?php $query=mysqli_query($con,"select * from personnel");
while($row=mysqli_fetch_array($query))
{?>

<option value="<?php echo $row['nom']; ?>  <?php echo $row['prenom'];?>"><?php echo $row['nom']; ?>  <?php echo $row['prenom'];?></option>
<?php } ?>
</select>
</div>
</div>

									


<div class="control-group">
<label class="control-label" for="basicinput">Class Name</label>
<div class="controls">
<input type="text"    name="nomcour"  placeholder="Enter Class Name" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Week Day</label>
<div class="controls">
<select   name="jour"  id="jour" class="span8 tip" required>
<option value="">Select</option>
<option value="Monday">Monday</option>
<option value="Tuesday">Tuesday</option>
<option value="Wednesday">Wednesday</option>
<option value="Thursday">Thursday</option>
<option value="Friday">Friday</option>
<option value="Saturday">Saturday</option>
<option value="Sunday">Sunday</option>
</select>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Starting Hour</label>
<div class="controls">
<input type="text" name="start"  placeholder="Enter Starting Hour" class="span8 tip" >
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Ending Hour</label>
<div class="controls">
<input type="text"    name="end"  placeholder="Enter Ending Hour" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">Description</label>
<div class="controls">
<textarea  name="description"  placeholder="Enter Class Description" rows="6" class="span8 tip">
</textarea>  
</div>
</div>
                                    <div class="control-group">
											<div class="controls">
												<button type="submit" name="classsubmit" class="btn">Create</button>
											</div>
										</div>

                                </form>
                                
							</div>
						</div>


	<div class="module">
							<div class="module-head">
								<h3>Manage Classes</h3>
							</div>
							<div class="module-body table">
                                
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>#</th>
											<th>Trainer</th>
											<th>Class Name</th>
											<th>Week Day</th>
											<th>Starting Hour</th>
											<th>Ending Hour</th>
                                            <th>Action</th>
										</tr>
									</thead>
									<tbody>

<?php $query=mysqli_query($con,"select * from classes");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>									
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($row['personnel']);?></td>
											<td><?php echo htmlentities($row['nomcour']);?></td>
											<td> <?php echo htmlentities($row['jour']);?></td>
											<td><?php echo htmlentities($row['start']);?></td>
											<td><?php echo htmlentities($row['end']);?></td>
											<td>
											<a href="edit-classes.php?id=<?php echo $row['id']?>" ><i class="icon-edit"></i></a>
											<a href="classes.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"><i class="icon-remove-sign"></i></a></td>
										</tr>
										<?php $cnt=$cnt+1; } ?>
										
								</table>
                                
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