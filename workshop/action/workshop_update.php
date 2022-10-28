<?php
	include("../../connect/db.php");
	
	$wrk_id=$_POST["wrk_id"];
	$name=$_POST["name"];
	$cntno=$_POST["cntno"];
	$wtype=$_POST["wtype"];
	$location=$_POST["location"];
	$srvce=$_POST["srvce"];
	
	$image = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
	$image_name = addslashes($_FILES['photo']['name']);
	$image_size = getimagesize($_FILES['photo']['tmp_name']);
	move_uploaded_file($_FILES["photo"]["tmp_name"], "../../v_photo/" . $_FILES["photo"]["name"]);
	$photo = $_FILES["photo"]["name"];
	

	if($photo=="")
	{
	$sql = "update workshop set name='$name',cntno='$cntno',wtype='$wtype',location='$location',srvce='$srvce' where wrk_id='$wrk_id'";
	$q1 = $db->prepare($sql);
	$q1->execute();	
	}
	else
	{
	$sql = "update workshop set name='$name',cntno='$cntno',wtype='$wtype',location='$location',srvce='$srvce',photo='$photo' where wrk_id='$wrk_id'";
	$q1 = $db->prepare($sql);
	$q1->execute();	
	}
	header("location:../service_search.php");
?>
