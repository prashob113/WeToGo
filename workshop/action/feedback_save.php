<?php
include("../../connect/db.php");
require("../auth.php");
$Log_Id=$_SESSION['SESS_WORKSHOP_ID'];

	$name=$_POST["name"];
	$cntno=$_POST["contact_no"];
	$subj=$_POST["subj"];
	$sdate=date("Y-m-d");
	
$sql = "insert into feedback(Log_Id,name,cntno,subj,sdate)values('$Log_Id','$name','$cntno','$subj','$sdate')";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../feedback_view.php");
?>
