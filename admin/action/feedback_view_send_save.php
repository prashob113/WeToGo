<?php
include("../../connect/db.php");
	
	$fdbk_id=$_POST["fdbk_id"];
	$subj=$_POST["subj"];
	$dat=date("Y-m-d");
	
$sql = "update feedback set reply='$subj',rdate='$dat' where fdbk_id='$fdbk_id'";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../feedback_reply.php");
?>
