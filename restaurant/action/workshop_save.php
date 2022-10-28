<?php
	include("../../connect/db.php");

	$name=$_POST["name"];
	$cntno=$_POST["cntno"];
	$wtype=$_POST["wtype"];
	$location=$_POST["location"];
	$srvce=$_POST["srvce"];
	$date=date("Y-m-d");
	
	$Log_Id=$_POST["Log_Id"];
	
	$image = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
	$image_name = addslashes($_FILES['photo']['name']);
	$image_size = getimagesize($_FILES['photo']['tmp_name']);
	move_uploaded_file($_FILES["photo"]["tmp_name"], "../../v_photo/" . $_FILES["photo"]["name"]);
	$photo = $_FILES["photo"]["name"];
	

	$sql = "insert into workshop(Log_Id,name,cntno,wtype,location,srvce,date,photo)values('$Log_Id','$name','$cntno','$wtype','$location','$srvce','$date','$photo')";
	$q1 = $db->prepare($sql);
	$q1->execute();	

	header("location:../service_search.php");
?>
