<?php  

error_reporting(0);
session_start();
if(isset($_SESSION['pgnaplks']))
{
	session_destroy();
	header('Location:index.php?status=Anda sudah Keluar');
}else{
	session_destroy();
	header('Location:index.php?status=Silahkan Login!');
}
?>