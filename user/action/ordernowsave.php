<?php
	include("../../connect/db.php");
	include("../auth.php");
	$BLog_Id=$_SESSION['SESS_USER_ID'];
	$SLog_Id=$_POST["SLog_Id"];
	
	$cname=$_POST["cname"];
	$ccontact_no=$_POST["ccontact_no"];
	$clocation=$_POST["clocation"];
	
	$pname=$_POST["pname"];
	$qty=$_POST["qty"];
	$price=$_POST["price"];
	$dat=$_POST["dat"];
	
	
	$photo=$_POST["photo"];
	

	$tot=$qty*$price;
	
	$stat="Pending";
		
	$result = $db->prepare("select * from product where name='$pname'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$qty1 = $row['qty'];
	}
	
	$qtyb=$qty1-$qty;
	
	
$sql = "insert into productorder(BLog_Id,SLog_Id,cname,ccontact_no,clocation,pname,qty,price,dat,photo,tot,stat) VALUES ('$BLog_Id','$SLog_Id','$cname','$ccontact_no','$clocation','$pname','$qty','$price','$dat','$photo','$tot','$stat')";
$q1 = $db->prepare($sql);
$q1->execute();

$sql = "update product set qty='$qtyb' where name='$pname'";
$q1 = $db->prepare($sql);
$q1->execute();

header("location:../product_search.php");


?>
