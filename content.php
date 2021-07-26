<?php
error_reporting(0);
if(isset($_GET['page'])){
	$page=$_GET['page'];	
	$file="$page";
	
	if (!file_exists($file)){
		include ("dashboard.php");
	}else{
		include ("$page");
	}
}else{
	include ("dashboard.php");
}
?>