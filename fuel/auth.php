<?php
session_start();
if(!isset($_SESSION['SESS_FUEL_ID']) || (trim($_SESSION['SESS_FUEL_ID']) == '')) {
	header("location:../");
	exit();
}

?>
