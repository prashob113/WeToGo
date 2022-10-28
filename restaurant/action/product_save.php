<?php
	include("../../connect/db.php");
	include("../auth.php");
	$Log_Id=$_SESSION['SESS_FOOD_ID'];

	$name=$_POST["name"];
	$qty=$_POST["qty"];
	$price=$_POST["price"];
	$tax=$_POST["tax"];
	$location=$_POST["location"];
	$desp=$_POST["desp"];
	
	$image = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
	$image_name = addslashes($_FILES['photo']['name']);
	$image_size = getimagesize($_FILES['photo']['tmp_name']);
	move_uploaded_file($_FILES["photo"]["tmp_name"], "../../product_ph/" . $_FILES["photo"]["name"]);
	$photo = $_FILES["photo"]["name"];
	

	$sql = "insert into product(Log_Id,name,qty,price,tax,location,photo,desp)values('$Log_Id','$name','$qty','$price','$tax','$location','$photo','$desp')";
	$q1 = $db->prepare($sql);
	$q1->execute();	

	header("location:../index.php");
?>
