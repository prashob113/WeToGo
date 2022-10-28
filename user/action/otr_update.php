<?php
	include("../auth.php");
	include("../../connect/db.php");	
	$vreq_id=$_GET['vreq_id'];

	
	$sql = "update vrequest set rostat='Accept' where vreq_id='$vreq_id'";
	$q1 = $db->prepare($sql);
	$q1->execute();		

	header("location:../travel_request_cm.php");
?>
