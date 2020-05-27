<?php
session_start();
include ('include/config.php');

        $update=false ;
		$id_abon="";
		$type_abon="";
		$dure_abon="";
		$description="";
		$montant="";

if (isset($_POST['add'])){
	$id_abon=$_POST['id_abon'];
	$type_abon=$_POST['type_abon'];
	$dure_abon=$_POST['dure_abon'];
	$description=$_POST['description'];
	$montant=$_POST['montant'];
	 


	$query="insert into abonnement(id_abon,type_abon,dure_abon,description,montant) values('$id_abon','$type_abon','$dure_abon','$description','$montant') " ;


	$stmt=$con->prepare($query);
    $stmt->bind_param($id_abon,$type_abon,$dure_abon,$description,$montant);
	$stmt->execute();
    header('location: subs_manager.php');
	$_SESSION['response']="Succefully inserted to the database!";
    $_SESSION['res_type']="success";
	}
	/*if (isset($_POST['add'])){
		$id_abon=$_POST['id_abon'];
		$type_abon=$_POST['type_abon'];
		$dure_abon=$_POST['dure_abon'];
		 
	
	
		$query="INSERT INTO abonnement(id_abon,type_abon,dure_abon) values (?,?,?,?,?,?) " ;
	
	
		$stmt=$con->prepare($query);
		$stmt->bind_param("ssssss",$id_abon,$type_abon,$dure_abon);
		$stmt->execute();
		 
		$_SESSION['response']="Succefully inserted to the database!";
		$_SESSION['res_type']="success";
		}*/
		if (isset($_GET['delete'])){
			$id_abon=$_GET['delete'];
			$sql="SELECT type_abon FROM abonnement WHERE id_abon=?";
			$stmt2=$con->prepare($sql);
			$stmt2->bind_param("i",$id_abon);
			$stmt2->execute();
			$result2=$stmt2->get_result();
			$row=$result2->fetch_assoc();
			
			$query="DELETE FROM abonnement WHERE id_abon=?";
			$stmt=$con->prepare($query);
			$stmt->bind_param("i",$id_abon);
			$stmt->execute();
			header('location:subs_manager.php');
		$_SESSION['response']="Succefully Deleted!";
		$_SESSION['res_type']="danger";
		}
		if (isset($_GET['edit'])){
			$id_abon=$_GET['edit'];
	
			$query="SELECT *FROM abonnement WHERE id_abon=?";
			$stmt=$con->prepare($query);
			$stmt->bind_param("i",$id_abon);
			$stmt->execute();
			$result=$stmt->get_result();
			$row=$result->fetch_assoc();
	
			$id_abon=$row['id_abon'];
			$type_abon=$row['type_abon'];
			$dure_abon=$row['dure_abon'];
			$description=$row['description'];
	        $montant=$row['montant'];
			$update=true;
			 
		}
		if (isset($_POST['update'])){
			$id_abon=$_POST['id_abon'] ;
			$type_abon=$_POST['type_abon'];
			$dure_abon=$_POST['dure_abon'];
			$description=$_POST['description'];
	        $montant=$_POST['montant'];
	 
			$query="UPDATE abonnement SET type_abon=?,dure_abon=?,description=?,montant=? WHERE id_abon=?" ;
			$stmt=$con->prepare($query);
			$stmt->bind_param("ssssi", $type_abon,$dure_abon,$description,$montant,$id_abon);
			$stmt->execute();
	
	$_SESSION['response']="updated succefully !";
	$_SESSION['res_type']="primary";
	header('location:subs_manager.php');
		}
		if (isset($_GET['details'])){
			$id_abon=$_GET['details'];
			$query="SELECT * FROM abonnement WHERE id_abon =?";
			$stmt=$con->prepare($query);
			$stmt->bind_param("i",$id_abon);
			$stmt->execute();
			$result=$stmt->get_result();
			$row=$result->fetch_assoc();
	
			$id_abon=$row['id_abon'];
			$type_abon=$row['type_abon'];
			$dure_abon=$row['dure_abon'];
			$description=$row['description'];
	        $montant=$row['montant'];
		}
	
		
	?>
	


