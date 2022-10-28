<?php
	include("../../connect/db.php");	
	
	$Log_Id=$_POST["Log_Id"];
	$aadharno=$_POST["aadharno"];
	$vname=$_POST["vname"];
	$vno=$_POST["vno"];
	$vtype=$_POST["vtype"];
	$kmeter=$_POST["kmeter"];
	$fname=$_POST["fname"];
	$vbdate=$_POST["vbdate"];
	$vmodel=$_POST["vmodel"];
	$amt=$_POST["amt"];
	$desp=$_POST["desp"];
	$date=date("Y-m-d");
	
	$st="Fuel";
	
	$sql = "insert into fltrack(Log_Id,aadharno,vno,vname,vtype,kmeter,fname,amt,desp,date)values('$Log_Id','$aadharno','$vno','$vname','$vtype','$kmeter','$fname','$amt','$desp','$date')";
	$q1 = $db->prepare($sql);
	$q1->execute();
	
	$sql = "insert into track(Log_Id,aadharno,vname,vhno,model,bdaye,amt,date,st)values('$Log_Id','$aadharno','$vname','$vno','$vmodel','$vbdate','$amt','$date','$st')";
	$q1 = $db->prepare($sql);
	$q1->execute();

	header("location:../fuel_invoice.php");
?>
