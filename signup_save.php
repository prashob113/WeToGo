<?php
include("connect/db.php");
	
	$name=$_POST["name"];
	$contact_no=$_POST["contact_no"];
	$email=$_POST["email"];
	$location=$_POST["location"];
	$password=$_POST["password"];
	$utype=$_POST["utype"];
	
	$Log_Id="LOG".rand(10000000785,0);	
	$stat='Active';
	
	$date=date("Y-m-d");

$sql = "insert into user(Log_Id,name,contact_no,email,location,password,utype,stat,date)values('$Log_Id','$name','$contact_no','$email','$location','$password','$utype','$stat','$date')";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:index.php");
?>

