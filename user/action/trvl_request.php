<?php
	include("../../connect/db.php");	
	
	$VLog_Id=$_POST["VLog_Id"];
	$ULog_Id=$_POST["ULog_Id"];
	$aadharno=$_POST["aadharno"];
	$photo=$_POST["photo"];
	$oname=$_POST["oname"];
	$ocnto=$_POST["ocnto"];
	$vname=$_POST["vname"];
	$vno=$_POST["vno"];
	$brnd=$_POST["brnd"];
	$vmodel=$_POST["vmodel"];
	$vtype=$_POST["vtype"];
	$cname=$_POST["cname"];
	$contact_no=$_POST["contact_no"];
	$tno=$_POST["tno"];
	$tdate=$_POST["tdate"];
	$amt=$_POST["amt"];
	$vdescrpt=$_POST["vdescrpt"];
	$vostat="Pending";
	$rostat="Pending";
	$tostat="Pending";
	
		
	$sql = "insert into vrequest(VLog_Id,ULog_Id,aadharno,photo,oname,ocnto,vname,vno,brnd,vmodel,vtype,cname,contact_no,tno,tdate,amt,vdescrpt,vostat,rostat,tostat)values('$VLog_Id','$ULog_Id','$aadharno','$photo','$oname','$ocnto','$vname','$vno','$brnd','$vmodel','$vtype','$cname','$contact_no','$tno','$tdate','$amt','$vdescrpt','$vostat','$rostat','$tostat')";
	$q1 = $db->prepare($sql);
	$q1->execute();


	header("location:../travel_request.php");
?>
