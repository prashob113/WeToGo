<?php
	include("../../connect/db.php");

	$name=$_POST["name"];
	$cntno1=$_POST["cntno1"];
	$cntno2=$_POST["cntno2"];
	$location=$_POST["location"];
	$desp=$_POST["desp"];
	$date=date("Y-m-d");
	
	$Log_Id=$_POST["Log_Id"];
	
	$image = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
	$image_name = addslashes($_FILES['photo']['name']);
	$image_size = getimagesize($_FILES['photo']['tmp_name']);
	move_uploaded_file($_FILES["photo"]["tmp_name"], "../../v_photo/" . $_FILES["photo"]["name"]);
	$photo = $_FILES["photo"]["name"];
	

	$sql = "insert into fuel(Log_Id,name,cntno1,cntno2,location,desp,date,photo)values('$Log_Id','$name','$cntno1','$cntno2','$location','$desp','$date','$photo')";
	$q1 = $db->prepare($sql);
	$q1->execute();	

	header("location:../service_search.php");
?>
