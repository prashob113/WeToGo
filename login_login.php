<?php
	//Start session
	session_start();
	
	include('connect/db.php');
		
	//Sanitize the POST values
	$email = $_POST['email'];
	$password = $_POST['password'];
	//Create query
	$qrya= $db->prepare("SELECT * FROM user WHERE email='$email' AND password='$password' AND utype='Admin' AND stat='Active'");
	$qrya->execute();
	$counta = $qrya->rowcount();
	
	$qryw = $db->prepare("SELECT * FROM user WHERE email='$email' AND password='$password' AND utype='Workshop' AND stat='Active'");
	$qryw->execute();
	$countw = $qryw->rowcount();
	
	$qrysp = $db->prepare("SELECT * FROM user WHERE email='$email' AND password='$password' AND utype='Fuel' AND stat='Active'");
	$qrysp->execute();
	$countsp = $qrysp->rowcount();
	
	$qryu = $db->prepare("SELECT * FROM user WHERE email='$email' AND password='$password' AND utype='User' AND stat='Active'");
	$qryu->execute();
	$countu = $qryu->rowcount();
	
	$qryspts = $db->prepare("SELECT * FROM user WHERE email='$email' AND password='$password' AND utype='Restaurant' AND stat='Active'");
	$qryspts->execute();
	$countspts = $qryspts->rowcount();
	
	//Check whether the query was successful or not
	if($counta > 0) {
		//Login Successful
		session_regenerate_id();
		$rowa = $qrya->fetch();
		$_SESSION['SESS_ADMIN_ID'] = $rowa['Log_Id'];
		session_write_close();
		header("location: admin/index.php");
		exit();
	}
	else if($countu > 0) {
		//Login Successful
		session_regenerate_id();
		$rows = $qryu->fetch();
		$_SESSION['SESS_USER_ID'] = $rows['Log_Id'];
		session_write_close();
		header("location: user/index.php");
		exit();
	}
	else if($countw > 0) {
		//Login Successful
		session_regenerate_id();
		$roww = $qryw->fetch();
		$_SESSION['SESS_WORKSHOP_ID'] = $roww['Log_Id'];
		session_write_close();
		header("location: workshop/index.php");
		exit();
	}
	else if($countsp > 0) {
		//Login Successful
		session_regenerate_id();
		$rowsp = $qrysp->fetch();
		$_SESSION['SESS_FUEL_ID'] = $rowsp['Log_Id'];
		session_write_close();
		header("location: fuel/index.php");
		exit();
	}
	else if($countspts > 0) {
		//Login Successful
		session_regenerate_id();
		$rowspts = $qryspts->fetch();
		$_SESSION['SESS_FOOD_ID'] = $rowspts['Log_Id'];
		session_write_close();
		header("location: restaurant/index.php");
		exit();
	}
	else 
	{
		//Login failed
		echo "<script>alert('Check Username And Password'); window.location='index.php'</script>";
		exit();
	}
?>
