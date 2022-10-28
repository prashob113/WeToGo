<?php
	include("../../connect/db.php");
	
	$fuel_id=$_POST["fuel_id"];
	$name=$_POST["name"];
	$cntno1=$_POST["cntno1"];
	$cntno2=$_POST["cntno2"];
	$location=$_POST["location"];
	$desp=$_POST["desp"];
	
	$image = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
	$image_name = addslashes($_FILES['photo']['name']);
	$image_size = getimagesize($_FILES['photo']['tmp_name']);
	move_uploaded_file($_FILES["photo"]["tmp_name"], "../../v_photo/" . $_FILES["photo"]["name"]);
	$photo = $_FILES["photo"]["name"];
	

	if($photo=="")
	{
	$sql = "update fuel set name='$name',cntno1='$cntno1',cntno2='$cntno2',location='$location',desp='$desp' where fuel_id='$fuel_id'";
	$q1 = $db->prepare($sql);
	$q1->execute();	
	}
	else
	{
	$sql = "update fuel set name='$name',cntno1='$cntno1',cntno2='$cntno2',location='$location',desp='$desp',photo='$photo' where fuel_id='$fuel_id'";
	$q1 = $db->prepare($sql);
	$q1->execute();	
	}
	header("location:../service_search.php");
?>
