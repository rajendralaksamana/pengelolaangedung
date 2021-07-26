<?php session_start();

if(isset($_SESSION['pgnaplks'])){

	//koneksi terpusat
	include "penghubungsistem.php";
	$username=$_SESSION['pgnaplks'];
    $id=$_SESSION['idpgnaplks'];
	$query=mysql_query("select id,username from user where id='$id'");
		if($row=mysql_fetch_array($query)){
		$nama=$row['username'];
		}
		
	
		
?>

    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="shortcut icon" href="favicon.png">
    <title>Sistem Pengelolaan Gedung CV. Tiga Mitra Utama</title>
        <link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
        <!--  jquery core -->
        <script src="js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>
        
        <!--  checkbox styling script -->
        <script src="js/jquery/ui.core.js" type="text/javascript"></script>
        <script src="js/jquery/ui.checkbox.js" type="text/javascript"></script>
        <script src="js/jquery/jquery.bind.js" type="text/javascript"></script>
        
        
        
        <![if !IE 7]>
        
        <!--  styled select box script version 1 -->
        <script src="js/jquery/jquery.selectbox-0.5.js" type="text/javascript"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            $('.styledselect').selectbox({ inputClass: "selectbox_styled" });
        });
        </script>
         
        
<script language="JavaScript">
    function notelepon(){     
    if ((event.keyCode < 48 || event.keyCode > 57)){
     if((event.keyCode == 45 || event.keyCode == 46)){
      event.returnValue = true;
   }else{
    event.returnValue = false;
	return confirm('Masukan Angka');
   }
    }  
    }
</script>


<!--START autonumber koding si ical-->

<?php
function autonumber($tabel, $kolom, $lebar=0, $awalan='')
{
    $query="select $kolom from $tabel order by $kolom desc limit 1";
    $hasil=mysql_query($query);
    $jumlahrecord = mysql_num_rows($hasil);
    if($jumlahrecord == 0)
        $nomor=1;
    else
    {
        $row=mysql_fetch_array($hasil);
        $nomor=intval(substr($row[0],strlen($awalan)))+1;
    }
    if($lebar>0)
        $angka = $awalan.str_pad($nomor,$lebar,"0",STR_PAD_LEFT);
    else
        $angka = $awalan.$nomor;
    return $angka;
}
?>
<!--END autonumber koding si ical-->

        <![endif]>
        
        <!--  styled select box script version 2 --> 
        <script src="js/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            $('.styledselect_form_1').selectbox({ inputClass: "styledselect_form_1" });
            $('.styledselect_form_2').selectbox({ inputClass: "styledselect_form_2" });
        });
        </script>
        
        <!--  styled select box script version 3 --> 
        <script src="js/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            $('.styledselect_pages').selectbox({ inputClass: "styledselect_pages" });
        });
        </script>
        
        <!--  styled file upload script --> 
        <script src="js/jquery/jquery.filestyle.js" type="text/javascript"></script>
        <script type="text/javascript" charset="utf-8">
          $(function() {
              $("input.file_1").filestyle({ 
                  image: "images/forms/choose-file.gif",
                  imageheight : 21,
                  imagewidth : 78,
                  width : 310
              });
          });
        </script>
        
        <!-- Custom jquery scripts -->
        <script src="js/jquery/custom_jquery.js" type="text/javascript"></script>
         
        <!-- Tooltips -->
        <script src="js/jquery/jquery.tooltip.js" type="text/javascript"></script>
        <script src="js/jquery/jquery.dimensions.js" type="text/javascript"></script>
        <script type="text/javascript">
        $(function() {
            $('a.info-tooltip ').tooltip({
                track: true,
                delay: 0,
                fixPNG: true, 
                showURL: false,
                showBody: " - ",
                top: -35,
                left: 5
            });
        });
        </script> 
        

        
        <!--  date picker script -->
        <link rel="stylesheet" href="css/datePicker.css" type="text/css" />
        <script src="js/jquery/date.js" type="text/javascript"></script>
        <script src="js/jquery/jquery.datePicker.js" type="text/javascript"></script>
        <script type="text/javascript" charset="utf-8">
                $(function()
        {
        
        // initialise the "Select date" link
        $('#date-pick')
            .datePicker(
                // associate the link with a date picker
                {
                    
                    createButton:false,
                    startDate:'01/01/1970',
                    endDate:'31/12/2014'
                }
            ).bind(
                // when the link is clicked display the date picker
                'click',
                function()
                {
                    updateSelects($(this).dpGetSelected()[0]);
                    $(this).dpDisplay();
                    return false;
                }
            ).bind(
                // when a date is selected update the SELECTs
                'dateSelected',
                function(e, selectedDate, $td, state)
                {
                    updateSelects(selectedDate);
                }
            ).bind(
                'dpClosed',
                function(e, selected)
                {
                    updateSelects(selected[0]);
                }
            );
            
        var updateSelects = function (selectedDate)
        {
            var selectedDate = new Date(selectedDate);
            $('#d option[value=' + selectedDate.getDate() + ']').attr('selected', 'selected');
            $('#m option[value=' + (selectedDate.getMonth()+1) + ']').attr('selected', 'selected');
            $('#y option[value=' + (selectedDate.getFullYear()) + ']').attr('selected', 'selected');
        }
        // listen for when the selects are changed and update the picker
        $('#d, #m, #y')
            .bind(
                'change',
                function()
                {
                    var d = new Date(
                                $('#d').val(),
                                $('#m').val()-1,
                                $('#y').val()
                            );
                    $('#date-pick').dpSetSelected(d.asString());
                }
            );
        
        // default the position of the selects to today
        var today = new Date();
        updateSelects(today.getTime());
        
        // and update the datePicker to reflect it...
        $('#d').trigger('change');
        });
        </script>
        



         <!--  date picker script -->
        <link rel="stylesheet" href="css/datePicker.css" type="text/css" />
        <script src="js/jquery/date.js" type="text/javascript"></script>
        <script src="js/jquery/jquery.datePicker.js" type="text/javascript"></script>
        <script type="text/javascript" charset="utf-8">
                $(function()
        {
        
        // initialise the "Select date" link
        $('#date-pick-2')
            .datePicker(
                // associate the link with a date picker
                {
                    createButton:false,
                    startDate:'01/01/1970',
                    endDate:'31/12/2014'
                }
            ).bind(
                // when the link is clicked display the date picker
                'click',
                function()
                {
                    updateSelects($(this).dpGetSelected()[0]);
                    $(this).dpDisplay();
                    return false;
                }
            ).bind(
                // when a date is selected update the SELECTs
                'dateSelected',
                function(e, selectedDate, $td, state)
                {
                    updateSelects(selectedDate);
                }
            ).bind(
                'dpClosed',
                function(e, selected)
                {
                    updateSelects(selected[0]);
                }
            );
            
        var updateSelects = function (selectedDate)
        {
            var selectedDate = new Date(selectedDate);
            $('#d option[value=' + selectedDate.getDate() + ']').attr('selected', 'selected');
            $('#m option[value=' + (selectedDate.getMonth()+1) + ']').attr('selected', 'selected');
            $('#y option[value=' + (selectedDate.getFullYear()) + ']').attr('selected', 'selected');
        }
        // listen for when the selects are changed and update the picker
        $('#d, #m, #y')
            .bind(
                'change',
                function()
                {
                    var d = new Date(
                                $('#d').val(),
                                $('#m').val()-1,
                                $('#y').val()
                            );
                    $('#date-pick-2').dpSetSelected(d.asString());
                }
            );
        
        // default the position of the selects to today
        var today = new Date();
        updateSelects(today.getTime());
        
        // and update the datePicker to reflect it...
        $('#d').trigger('change');
        });
        </script>



        <!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
        <script src="js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
        <script type="text/javascript">
        $(document).ready(function(){
        $(document).pngFix( );
        });
        </script>
    </head>
    
    <body> 
    <!-- Start: page-top-outer -->
    <div id="page-top-outer">    
    dfgdfgfdgfdfgfdgf
    <!-- Start: page-top -->
    <div id="page-top">
    
        <!-- start logo -->
        <div id="logo">
        <a href=""></a>
        </div>
        <!-- end logo -->
        
        <!--  start top-search -->
        <div id="top-search">
                <div id="nav-right">
                <div class="showhide-name">Hallo, <?php echo $nama; ?>. &nbsp;</div>
                

                <a href="logout.php" id="logout" onclick="return confirm('Apakah Anda yakin?')"><img src="images/shared/nav/nav_logout.png" width="70" height="20" alt="" /></a>
                <div class="clear">&nbsp;</div>

        </div>
        <!--  end top-search -->
        <div class="clear"></div>
    
    </div>
    <!-- End: page-top -->
    
    </div>
    <!-- End: page-top-outer -->
        
    <div class="clear">&nbsp;</div>
     
    <!--  start nav-outer-repeat................................................................................................. START -->
    <div class="nav-outer-repeat"> 
    <!--  start nav-outer -->
    <div class="nav-outer"> 
            <!-- start nav-right -->
            <div id="nav-right">
                <div class="showhide-name"></div>
                <div class="nav-divider"></div>

                <a href="logout.php" id="logout2"></a>
                <div class="clear">&nbsp;</div> 
                <div class="clear">&nbsp;</div>
            </div>
            
                <!--  start account-content -->	
                <div class="account-content">
                <div class="account-drop-inner">
                    <a href="" id="acc-settings">Settings</a>
                    <div class="clear">&nbsp;</div>
                    <div class="acc-line">&nbsp;</div>
                    <a href="" id="acc-inbox">Inbox</a>
                    <div class="clear">&nbsp;</div>
                </div>
                </div>
                <!--  end account-content -->
            
            </div>
            <!-- end nav-right -->
    
    
            <!--  start nav -->
            <div class="nav">
            <div class="table">

    		<?php 
			$domain=$_SESSION['aksespgnaplks'];
			
			if($domain=='Administrator'){
				include "menu/menu-admin.php";
			}
			
			if($domain=='Direktur'){
				include "menu/menu-direktur.php";
			}
			
			if($domain=='Manager Operasional'){
				include "menu/menu-manager.php";
			}
			
			if($domain=='Marketing'){
				include "menu/menu-marketing.php";
			}
			
			if($domain=='Account Executive'){
				include "menu/menu-account.php";
			}
			
			
			?>

            <div class="nav-divider">&nbsp;</div>
    
    
            <div class="clear"></div>
            </div>
            <div class="clear"></div>
            </div>
            <!--  start nav -->
    
    </div>
    <div class="clear"></div>
    <!--  start nav-outer -->
    </div>
    <!--  start nav-outer-repeat................................................... END -->
    
      <div class="clear"></div>
     
    <!-- start content-outer ........................................................................................................................START -->
    <div id="content-outer">
    <!-- start content -->
    <div id="content">
    	<?php include "content.php"; ?>
        
        <div class="clear">&nbsp;</div>
    
    </div>
    <!--  end content -->
    <div class="clear">&nbsp;</div>
    </div>
    <!--  end content-outer........................................................END -->
    
    <div class="clear">&nbsp;</div>
        
    <!-- start footer -->         
    <div id="footer">
    <!-- <div id="footer-pad">&nbsp;</div> -->
        <!--  start footer-left -->
        <div id="footer-left">
        Copyright <span id="spanYear"></span> <a href="http://www.eightcode.com" target="_blank">Faizal Hermiansyah | 1012505283</a> <a href="http://eightcode.com" target="_blank"></a> All rights reserved.</div>
        <!--  end footer-left -->
        <div class="clear">&nbsp;</div>
    </div>
    <!-- end footer -->
     
    </body>
    </html>
    
<?php
}else{
	session_destroy();
	header('Location:index.php?status=Silahkan Login');
}
?>	
