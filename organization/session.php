<?php
include("config.php");
session_start();
$sid=$_SESSION['uid'];
$sname=$_SESSION['uname'];

if(!isset($_SESSION['uid']))
{
	header("Location: index.php");

}
?>