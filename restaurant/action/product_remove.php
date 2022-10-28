<?php
include('../../connect/db.php');


	$prd_id=$_GET["prd_id"]; 	
	
	
	$sql = "delete from product where prd_id='$prd_id'";
	$q1 = $db->prepare($sql);
	$q1->execute();

	header("location:../product_remove.php");

?>						
