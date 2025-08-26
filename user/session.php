<?php
include("config.php");
session_start();
$sid=$_SESSION['uid'];
$sname=$_SESSION['uname'];
// $chk=mysql_query("select * from sign where id='$sid' ");
// $c=mysql_fetch_array($chk);
// $usr_id=$c[0];
// $usr_name=$c[1];


if(!isset($_SESSION['uid']))
{
	header("Location: index.php");

}
?>