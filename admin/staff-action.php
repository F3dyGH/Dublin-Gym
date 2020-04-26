<?php
session_start();
include ('include/config.php');

	$update=false ;
	$idpers="";
		$nom="";
		$prenom="";
		$specialite="";
		$emailpers="";
		$numero="";
		$photo="";

if (isset($_POST['add'])){
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$specialite=$_POST['specialite'];
	$emailpers=$_POST['emailpers'];
	$numero=$_POST['numero'];
	$photo=$_FILES['image']['name'];
	$Upload="Uploads/ ".$photo ;


	$query="INSERT INTO personnel(nom,prenom,specialite,emailpers,numero,photo) values (?,?,?,?,?,?) " ;


	$stmt=$con->prepare($query);
$stmt->bind_param("ssssss",$nom,$prenom,$specialite,$emailpers,$numero,$Upload);
	$stmt->execute();
	move_uploaded_file($_FILES['image']['tmp_name'], $Upload);
	header('location:staff-manage.php');
	$_SESSION['response']="Succefully inserted to the database!";
    $_SESSION['res_type']="success";
	}
	if (isset($_GET['delete'])){
		$idpers=$_GET['delete'];
		$sql="SELECT photo FROM personnel WHERE idpers=?";
		$stmt2=$con->prepare($sql);
		$stmt2->bind_param('i',$idpers);
		$stmt2->execute();
		$result2=$stmt2->get_result();
		$row=$result2->fetch_assoc();

		$imagepath=$row['photo'];
		unlink($imagepath);
		$query="DELETE FROM personnel WHERE idpers=?";
		$stmt=$con->prepare($query);
		$stmt->bind_param("i",$idpers);
		$stmt->execute();
		header('location:staff-manage.php');
	$_SESSION['response']="Succefully Deleted!";
    $_SESSION['res_type']="danger";
	}
	if (isset($_GET['edit'])){
		$idpers=$_GET['edit'];

		$query="SELECT *FROM personnel WHERE idpers=?";
		$stmt=$con->prepare($query);
		$stmt->bind_param("i",$idpers);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();

		$idpers=$row['idpers'];
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$specialite=$row['specialite'];
		$emailpers=$row['emailpers'];
		$numero=$row['numero'];
		$photo=$row['photo'];
		$update=true;
	}
	if (isset($_POST['update'])){
		$idpers=$_POST['idpers'] ;
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$specialite=$_POST['specialite'];
		$emailpers=$_POST['emailpers'];
		$numero=$_POST['numero'];
		$oldimage=$_POST['oldimage'];

		if (isset($_FILES['image']['name'])&&($_FILES['image']['name']!="" )){
			$newimage="Uploads/".$_FILES['image']['name'];
			unlink($oldimage);
			move_uploaded_file($_FILES['image']['tmp_name'], $newimage);
		}
		else{
			$newimage=$oldimage;
		}
		$query="UPDATE personnel SET nom=?,prenom=?, specialite=?, emailpers=?, numero=?,photo=?  WHERE  idpers=?" ;
		$stmt=$con->prepare($query);
		$stmt->bind_param("ssssssi",$nom,$prenom,$specialite,$emailpers,$numero,$newimage,$idpers);
		$stmt->execute();

$_SESSION['response']="updated succefully !";
$_SESSION['res_type']="primary";
header('location:staff-manage.php');




	}
	if (isset($_GET['details'])){
		$idpers=$_GET['details'];
		$query="SELECT * FROM personnel WHERE idpers=?";
		$stmt=$con->prepare($query);
		$stmt->bind_param("i",$idpers);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();

		$vidpers=$row['idpers'];
		$vnom=$row['nom'];
		$vprenom=$row['prenom'];
		$vspecialite=$row['specialite'];
		$vemailpers=$row['emailpers'];
		$vnumero=$row['numero'];
		$vphoto=$row['photo'];
	}

	
?>

