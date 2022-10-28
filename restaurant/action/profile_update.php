<?php
include("../../connect/db.php");

	
	$Log_Id=$_POST["Log_Id"];

	$contact_no=$_POST["contact_no"];
	$email=$_POST["email"];
	$location=$_POST["location"];
	$password=$_POST["password"];
	
	$liceno=$_POST["liceno"];
	
	$image = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
	$image_name = addslashes($_FILES['photo']['name']);
	$image_size = getimagesize($_FILES['photo']['tmp_name']);
	move_uploaded_file($_FILES["photo"]["tmp_name"], "../../photo/" . $_FILES["photo"]["name"]);
	$photo = $_FILES["photo"]["name"];
	
	
	if($photo=="")
	{
		$sql = "update user set contact_no='$contact_no',email='$email',location='$location',password='$password',liceno='$liceno' where Log_Id='$Log_Id'";
		$q1 = $db->prepare($sql);
		$q1->execute();
	}
	else
	{
		$sql = "update user set contact_no='$contact_no',email='$email',location='$location',password='$password',liceno='$liceno',photo='$photo' where Log_Id='$Log_Id'";
		$q1 = $db->prepare($sql);
		$q1->execute();
	}

	header("location:../profile.php");
?>
