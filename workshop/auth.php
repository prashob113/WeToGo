<?php
session_start();
if(!isset($_SESSION['SESS_WORKSHOP_ID']) || (trim($_SESSION['SESS_WORKSHOP_ID']) == '')) {
	header("location:../");
	exit();
}

?>
