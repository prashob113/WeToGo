<?php
	include("../auth.php");
	include("../../connect/db.php");	
	$Log_Id=$_SESSION['SESS_USER_ID'];
	
	$vehi_id=$_POST["vehi_id"];
	$aadharno=$_POST["aadharno"];	
	$vname=$_POST["vname"];
	$vno=$_POST["vno"];
	$brnd=$_POST["brnd"];
	$vmodel=$_POST["vmodel"];
	$vtype=$_POST["vtype"];
	$vcolor=$_POST["vcolor"];
	$vengno=$_POST["vengno"];
	$vbdate=$_POST["vbdate"];
	$vtdate=$_POST["vtdate"];
	$amt=$_POST["amt"];
	$vdescrpt=$_POST["vdescrpt"];
	
	$image = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
	$image_name = addslashes($_FILES['photo']['name']);
	$image_size = getimagesize($_FILES['photo']['tmp_name']);
	move_uploaded_file($_FILES["photo"]["tmp_name"], "../../v_photo/" . $_FILES["photo"]["name"]);
	$photo = $_FILES["photo"]["name"];
	
	if($photo=="")
	{
	$sql = "update vehicle set Log_Id='$Log_Id',aadharno='$aadharno',vname='$vname',vno='$vno',brnd='$brnd',vmodel='$vmodel',vtype='$vtype',vcolor='$vcolor',vengno='$vengno',vbdate='$vbdate',vtdate='$vtdate',amt='$amt',vdescrpt='$vdescrpt' where vehi_id='$vehi_id'";
	$q1 = $db->prepare($sql);
	$q1->execute();			
	}
	else
	{
	$sql = "update vehicle set Log_Id='$Log_Id',aadharno='$aadharno',vname='$vname',vno='$vno',brnd='$brnd',vmodel='$vmodel',vtype='$vtype',vcolor='$vcolor',vengno='$vengno',vbdate='$vbdate',vtdate='$vtdate',amt='$amt',photo='$photo',vdescrpt='$vdescrpt' where vehi_id='$vehi_id'";
	$q1 = $db->prepare($sql);
	$q1->execute();		
	}
	header("location:../vehicle_search.php");
?>
