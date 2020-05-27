<?php
session_start();
include ('include/config.php');

  $id="";
  $name="";
  $email="";
  $contactno="";
  $password="";
  $billingpincode="";
  $shippingAddress="";
  $shippingState="";
  $shippingCity="";
  $shippingPincode="";
  $billingAddress="";
  $billingState="";
  $billingCity="";
   
  $updationDate="";
  $update=false ;
  
if (isset($_POST['add'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$contactno=$_POST['contactno'];
	$password=$_POST['password'];
    $billingpincode=$_POST['billingpincode'];
    $shippingAddress=$_POST['shippingAddress'];
    $shippingState=$_POST['shippingState'];
    $shippingCity=$_POST['shippingCity'];
    $shippingPincode=$_POST['shippingPincode'];
    $billingAddress=$_POST['billingAddress'];
    $billingState=$_POST['billingState'];
    $billingCity=$_POST['billingCity'];
     
    $updationDate=$_POST['updationDate'];

 

	 


	$query="insert into users(name,email,contactno,password,billingpincode,shippingAddress,shippingState,shippingCity,shippingPincode,billingAddress,billingState,billingCity,regDate,updationDate) values ('$name','$email','$contactno','$password','$billingpincode','$shippingAddress','$shippingState','$shippingCity','$shippingPincode','$billingAddress','$billingState','$billingCity','$regDate','$updationDate') " ;


	$stmt=$con->prepare($query);
    $stmt->bind_param("ssssss",$name,$email,$contactno,$password,$billingpincode,$shippingAddress,$shippingState,$shippingCity,$shippingPincode,$billingAddress,$billingState,$billingCity,$regDate,$updationDate);
	$stmt->execute();
    header('location: manage-users.php');
	$_SESSION['response']="Succefully inserted to the database!";
    $_SESSION['res_type']="success";
	}
	if (isset($_GET['delete'])){
		$id=$_GET['delete'];
		$sql="SELECT name FROM users WHERE id=?";
		$stmt2=$con->prepare($sql);
		$stmt2->bind_param("i",$id);
		$stmt2->execute();
		$result2=$stmt2->get_result();
		$row=$result2->fetch_assoc();

		 
		$query="DELETE FROM users WHERE id =?";
		$stmt=$con->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		header('location:manage-users.php');
	$_SESSION['response']="Succefully Deleted!";
    $_SESSION['res_type']="danger";
	}
	if (isset($_GET['edit'])){
		$id=$_GET['edit'];

		$query="SELECT *FROM users WHERE id =?";
		$stmt=$con->prepare($query);
		$stmt->bind_param("i",$id );
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();
        $name=$row['name'];
        $email=$row['email'];
        $contactno=$row['contactno'];
        $password=$row['password'];
        $billingpincode=$row['billingpincode'];
        $shippingAddress=$row['shippingAddress'];
        $shippingState=$row['shippingState'];
        $shippingCity=$row['shippingCity'];
        $shippingPincode=$row['shippingPincode'];
        $billingAddress=$row['billingAddress'];
        $billingState=$row['billingState'];
        $billingCity=$row['billingCity'];
         
        $updationDate=$row['updationDate'];
        $update=true;
	}
	if (isset($_POST['update'])){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $contactno=$_POST['contactno'];
        $password=$_POST['password'];
        $billingpincode=$_POST['billingpincode'];
        $shippingAddress=$_POST['shippingAddress'];
        $shippingState=$_POST['shippingState'];
        $shippingCity=$_POST['shippingCity'];
        $shippingPincode=$_POST['shippingPincode'];
        $billingAddress=$_POST['billingAddress'];
        $billingState=$_POST['billingState'];
        $billingCity=$_POST['billingCity'];
         
        $updationDate=$_POST['updationDate'];
        
        $query="UPDATE users SET name=?,email=?,contactno=?,password=?,billingpincode=?,shippingAddress=?,shippingState=?,shippingCity=?,shippingPincode=?,billingAddress=?,billingState=?,billingCity=?,regDate=?,updationDate=?  WHERE  id=?" ;
		$stmt=$con->prepare($query);
		$stmt->bind_param("ssssssssssssssi",$name,$email,$contactno,$password,$billingpincode,$shippingAddress,$shippingState,$shippingCity,$shippingPincode,$billingAddress,$billingState,$billingCity,$regDate,$updationDate,$id);
		$stmt->execute();

$_SESSION['response']="updated succefully !";
$_SESSION['res_type']="primary";
header('location:manage-users.php');
    }
    if (isset($_GET['details'])){
        $id =$_GET['details'];
        $query="SELECT * FROM users WHERE id =?";
        $stmt=$con->prepare($query);
        $stmt->bind_param("i",$id );
        $stmt->execute();
        $result=$stmt->get_result();
        $row=$result->fetch_assoc();

        $id =$row['id'];
        $name=$row['name'];
         $contactno=$row['contactno'];
         $billingpincode=$row['billingpincode'];
        $shippingAddress=$row['shippingAddress'];
        $shippingState=$row['shippingState'];
        $shippingCity=$row['shippingCity'];
        $shippingPincode=$row['shippingPincode'];
        $billingAddress=$row['billingAddress'];
        $billingState=$row['billingState'];
        $billingCity=$row['billingCity'];
    }



	
?>

