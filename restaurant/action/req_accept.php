<?php
	include("../../connect/db.php");	
	
	$stats=$_POST["stats"];
	$wrkid=$_POST["wrkid"];
	
	$sql = "update workshoprest set stats='$stats' where wrkid='$wrkid'";
	$q1 = $db->prepare($sql);
	$q1->execute();	
	

	header("location:../request_view.php");
?>
