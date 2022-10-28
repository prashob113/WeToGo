<?php
	include("../../connect/db.php");
	
	$prd_id=$_POST["prd_id"];
	$price=$_POST["price"];
	$qty=$_POST["qty"];
	$tax=$_POST["tax"];
	$desp=$_POST["desp"];

	$sql="update product set price='$price',qty='$qty',tax='$tax',desp='$desp' where prd_id='$prd_id'";
	$q1 = $db->prepare($sql);
	$q1->execute();
	header("location:../product_update.php");
		
	
?>