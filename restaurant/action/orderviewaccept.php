<?php
	include("../../connect/db.php");
	
	$ord_id=$_GET["ord_id"];

	$sql="update productorder set stat='Accept' where ord_id='$ord_id'";
	$q1 = $db->prepare($sql);
	$q1->execute();
	header("location:../product_request.php");
		
	
?>