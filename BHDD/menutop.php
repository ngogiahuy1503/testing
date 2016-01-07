
<?php
	if(!isset($_REQUEST["b"])) $b="home";
	else $b=$_REQUEST["b"];
                switch ($b) {
                        case 'home':
                        		$class0="class='cur'";
                        		$class1="";
                        		$class2="";
                        		$class3="";
								$class4="";
                              break;
                        case 'tt':
                        		$class1="class='cur'";
                        		$class0="";
                        		$class2="";
                        		$class3="";
								$class4="";
                        		
                              break;
                        case 'dichvu':
                        		$class2="class='cur'";
                        		$class0="";
                        		$class1="";
                        		$class3="";
								$class4="";
                        	
                              break;
                              
                        case 'ctgh':
                              	$class3="class='cur'";
                        		$class0="";
                        		$class1="";
                        		$class2="";
								$class4="";
                              break;
						case 'lh':
                              	$class4="class='cur'";
                        		$class0="";
                        		$class1="";
                        		$class2="";
								$class3="";
                              break;
                        default: 
                             	$class0="class='cur'";
                        		$class1="";
                        		$class2="";
                        		$class3="";
								$class4="";
                              break;
                  }
?>
 <table width="100%" height="51" border="0" align="center" >
  <tr>
    <td width="13%" align="center">&nbsp;</td>
    <td width="19%" align="center"><a href="index.php" <?=$class0?>><img src="Việt Anh Mobile - Hệ thống bán lẻ Smartphone chính hãng_files/home.png" width="25px" height="25px"/>Trang Chủ  </a></td>
    <td width="19%" align="center"><a href="?b=tt" <?=$class1?>>Dịch vụ</a></td>
    <td width="19%" align="center"><a href="?b=lh" <?=$class4?>>Liên Hệ </a></td>
    <td width="19%" align="center"><a href="?b=ctgh" <?=$class3?>>Giỏ Hàng( <?php if(isset($_SESSION['giohang'])) echo count($_SESSION['giohang']); else echo "0"; ?>)</a></td>
    <td width="19%" align="center" style="color:#FFF;">
     <?php
			if(!isset($_SESSION['id']) )
				echo "<a href='?b=dn'>Đăng Nhập</a>" ;
			else include"formhello.php";			
			?></td>
  </tr>
</table>