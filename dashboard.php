<?php session_start();


	$pengguna=ucwords($_SESSION['aksespgnaplks']);

?>

<div id="page-heading">
    <h1>Selamat Datang, anda Login Sebagai <?php echo $pengguna;?></h1>
</div>
<!-- end page-heading -->

<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
<tr>
    <th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
    <th class="topleft"></th>
    <td id="tbl-border-top">&nbsp;</td>
    <th class="topright"></th>
    <th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
</tr>
<tr>
    <td id="tbl-border-left"></td>
    <td>
    <!--  start content-table-inner ...................................................................... START -->
    <div id="content-table-inner">
    		
            <div id="message-green">
            <table border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td class="green-left">Selamat Datang di web Sistem Pengelolaan Gedung CV. Tiga Mitra Utama [ <?php echo $_SESSION['waktu'];?> ]</td>
                <td class="green-right"><a class="close-green"><img src="images/table/icon_close_green.gif"   alt="" /></a></td>
            </tr>
            </table>
            </div>
          
            
 	        <table border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr valign="top">
              <td><!--  start step-holder -->
                <!--  end step-holder -->
                <div id="table-content">
                <p align="center"><img src="images/logoTMU.jpg"></p>
                <b><center><i> "Membangun kepercayaan terhadap Client sangat dianjurkan"</i></center></b>
                <b>Client</b> adalah elemen Penting dari suatu perusahaan, baik perusahaan besar maupun perusahaan menengah. Kekuatan karyawan yang terpelajar juga dapat memperkuat dan meneguhkan komitmen pekerjaan dalam bidang sumber daya, kesehatan, lingkungan, budaya dan kepercayaan. Kebersamaan dalam keberagaman adalah nilai-nilai yang harus ditanamkan kepada Karyawan CV. Tiga Mitra Utama.
                <br />
                <br />
                <b>Merenungi</b> kondisi global saat ini, kita tengah dihadapkan pada keadaan dimana segalanya serba cepat. Arus Informasi, ilmu pengetahuan, kebudayaan, perdagangan, kekayaan dan sebagainya berpindah sedemikian cepatnya.
                <br />
                <br />
                </div>
                
                <!-- end id-form  -->
              </td>
              <td>
              	<!--  start related-activities -->
                <?php include "pengumuman.php";?>  
                <!-- end related-activities -->
              </td>
            </tr>
            <tr>
              <td><img src="images/shared/blank.gif" width="695" height="1" alt="blank" /></td>
              <td></td>
            </tr>
          </table>

      

	<div class="clear"></div>
     
    </div>
    <!--  end content-table-inner ............................................END  -->
    </td>
    <td id="tbl-border-right"></td>
</tr>
<tr>
    <th class="sized bottomleft"></th>
    <td id="tbl-border-bottom">&nbsp;</td>
    <th class="sized bottomright"></th>
</tr>
</table>
