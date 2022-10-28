<?php
	include("../../connect/db.php");	
	
	$Log_Id=$_POST["Log_Id"];
	$aadharno=$_POST["aadharno"];
	$oname=$_POST["oname"];
	$ocnto=$_POST["ocnto"];
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
	
	$date=date("Y-m-d");;
	
	$image = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
	$image_name = addslashes($_FILES['photo']['name']);
	$image_size = getimagesize($_FILES['photo']['tmp_name']);
	move_uploaded_file($_FILES["photo"]["tmp_name"], "../../v_photo/" . $_FILES["photo"]["name"]);
	$photo = $_FILES["photo"]["name"];
	

	$sql = "insert into vehicle(Log_Id,aadharno,oname,ocnto,vname,vno,brnd,vmodel,vtype,vcolor,vengno,vbdate,vtdate,amt,photo,vdescrpt,date)values('$Log_Id','$aadharno','$oname','$ocnto','$vname','$vno','$brnd','$vmodel','$vtype','$vcolor','$vengno','$vbdate','$vtdate','$amt','$photo','$vdescrpt','$date')";
	$q1 = $db->prepare($sql);
	$q1->execute();	
	
	
	header("location:../vehicle_search.php");
?>
