<?php  
error_reporting(0);
session_start();

include "penghubungsistem.php";

if (isset($_POST['login'])){
	//koneksi terpusat

	$username=$_POST['username'];
	$password=md5($_POST['password']);
	
	
		$query=mysql_query("select * from user where username='$username' and password='$password'");
		$cek=mysql_num_rows($query);
		if($cek){
		$row=mysql_fetch_array($query);
		$akses=$row['akses'];
		$id=$row['id'];
		
			$_SESSION['pgnaplks']=$username;
			$_SESSION['idpgnaplks']=$id;
			$_SESSION['aksespgnaplks']=$akses;
			$_SESSION['waktu']=date("Y-m-d H:i:s");
			
			?><script language="javascript">document.location.href="home.php";</script><?php
		}
		else{
			?><script language="javascript">document.location.href="index.php?status=Gagal Login";</script><?php
		}	
		
			
}else{
	unset($_POST['login']);
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Sistem Pengelolaan Gedung CV. Tiga Mitra Utama</title>
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
<!--  jquery core -->
<script src="js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>

<!-- Custom jquery scripts -->
<script src="js/jquery/custom_jquery.js" type="text/javascript"></script>

<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src="js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function(){
	$(document).pngFix( );
	});
</script>
</head>
<body id="login-bg" onLoad="document.postform.elements['username'].focus();"> 
 
<!-- Start: login-holder -->
<div id="login-holder">

	<!-- start logo -->
	<div id="logo-login"> </div>
	<!-- end logo -->
	
	<div class="clear"></div>
	
	<!--  start loginbox ................................................................................. -->
	<div id="loginbox">
	
	<!--  start login-inner -->
	<div id="login-inner">
    	<p align="center"><font face="verdana" size="2" color="#333333"><?php  if(isset($_GET['status'])){  session_destroy();?> <div id="message-green">
            <table border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td class="green-left" align="center"><?php echo $_GET['status']?> </td>
                <td class="green-right"><a class="close-green"><img src="images/table/icon_close_green.gif"   alt="" /></a></td>
            </tr>
            </table>
            </div> <?php  }?></font></p>
        <p>&nbsp;</p>
        <form action="index.php" method="post" name="postform">
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<th>Username</th>
			<td><input type="text"  class="login-inp" name="username"/></td>
		</tr>
		<tr>
			<th>Password</th>
			<td><input type="password" value=""  name="password" onFocus="this.value=''" class="login-inp" /></td>
		</tr>
        
		<tr>
			<br>
			<th>
			<input type="submit" class="submit-login" name="login"/>
			</th>
			<td>
			<input type="reset" class="submit-bersih" name="reset"/>
			</td>
		</tr>
		</table>
        </form>
	</div>
    
    
    
 	<!--  end login-inner -->
	<div class="clear"></div>
 </div>
 <!--  end loginbox -->

</div>
<!-- End: login-holder -->
</body>

</html>