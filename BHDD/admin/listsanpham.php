<?php
include"../module/connection.php";
include"../module/qr.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head><script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<link rel="stylesheet" type="text/css" href="ad.css"/>
<body>
<div id="contant">
	<div id="iheader">
  	</div>
  	<div id="imenu">
     <?php include"header.php";?>
   </div>
	<div id="icontent">
	  <form id="form1" name="form1" method="post" action="">
	    <table width="961" border="1">
	      <tr>
	        <td colspan="11">Danh Sach San Pham</td>
          </tr>
	      <tr>
	        <td width="102">ma san pham</td>
	        <td width="91">ten san pham</td>
	        <td width="83">gia</td>
	        <td width="79">so luong</td>
	        <td width="106">mo ta san pham</td>
	        <td width="159">ma hang</td>
	        <td width="48">hinh</td>
            <td width="48">stt</td>
	        <td width="60"><a href="themsp.php">them</a></td>
          </tr>
          <?php
		  $sp=danhsachsanpham();
		  while($row=mysql_fetch_array($sp))
		  {
			  ob_start();
		  ?>
	      <tr>
	        <td>{masp}</td>
	        <td>{tensp}</td>
	        <td>{gia}</td>
	        <td>{sl}</td>
	        <td>{mtsp}</td>
	        <td>{mahang}</td>
	        <td><img src="../images/{hinh}" width="100px" height="100px" /></td>
             <td>{stt}</td>
	        <td><a href="suasp.php?masp={masp}">sua</a> - <a href="xoasp.php?masp={masp}">xoa</a></td>
          </tr>
          <?php
		  $s=ob_get_clean();
		  $s=str_replace("{masp}",$row['masp'],$s);
		  $s=str_replace("{tensp}",$row['tensp'],$s);
		  $s=str_replace("{gia}",$row['giasp'],$s);
		 
		  $s=str_replace("{sl}",$row['soluong'],$s);
		  
		  $s=str_replace("{mtsp}",$row['motasp'],$s);
		  $s=str_replace("{mahang}",$row['mahang'],$s);
		  $s=str_replace("{hinh}",$row['hinh'],$s);
		  $s=str_replace("{stt}",$row['new'],$s);
		  echo $s;
		  }
		  ?>
        </table>
      </form>
	</div>
    
 </div>
</body>
</html>
