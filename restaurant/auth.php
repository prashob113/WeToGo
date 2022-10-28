<?php
session_start();
if(!isset($_SESSION['SESS_FOOD_ID']) || (trim($_SESSION['SESS_FOOD_ID']) == '')) {
	header("location:../");
	exit();
}

?>
