<?php
	include("../../connect/db.php");	
	
	$CLog_Id=$_POST["CLog_Id"];
	$WLog_Id=$_POST["WLog_Id"];
	$cname=$_POST["cname"];
	$wname=$_POST["wname"];
	$ccntno=$_POST["ccntno"];
	$wcntno=$_POST["wcntno"];
	$prblm=$_POST["prblm"];
	$date=$_POST["date"];
	$stats="Pending";
	$tme=$_POST["tme"];
	
	$image = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
	$image_name = addslashes($_FILES['photo']['name']);
	$image_size = getimagesize($_FILES['photo']['tmp_name']);
	move_uploaded_file($_FILES["photo"]["tmp_name"], "../../pphoto/" . $_FILES["photo"]["name"]);
	$photo = $_FILES["photo"]["name"];
	

	$sql = "insert into workshoprest(CLog_Id,WLog_Id,cname,wname,ccntno,wcntno,prblm,date,stats,photo,tme)values('$CLog_Id','$WLog_Id','$cname','$wname','$ccntno','$wcntno','$prblm','$date','$stats','$photo','$tme')";
	$q1 = $db->prepare($sql);
	$q1->execute();	
	

	header("location:../workshop_request.php");
?>
