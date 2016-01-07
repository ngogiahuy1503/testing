<?php
	include"../module/connection.php";
	include"../module/qr.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<link rel="stylesheet" type="text/css" href="ad.css"/>
<body>
<div id="contant">
	<div id="iheader">
  	</div>
  	<div id="imenu">
     <?php include"header.php";?>
 </div>
	<div id="icontent">
    	
      <table width="500" border="1px" style="background-color:#FFF">
  <tr>
    <td colspan="3">Danh Sách Hãng</td>
    </tr>
  <tr>
    <td>Mã Hãng</td>
    <td>Tên Hãng</td>
    <td><a href="themhang.php">Thêm</a></td>
  </tr>
  <?php
  $hang=danhsachhang();
  while($row = mysql_fetch_array($hang))
  {
	  ob_start();
  ?>
  <tr>
  
    <td>{mahang}</td>
    <td>{tenhang}</td>
    <td><a href="suahang.php?mahang={mahang}">Sửa</a> - <a onclick="return confirm('bạn có muốn xóa không?')" href="xoahang.php?mahang={mahang}">Xóa</a></td>

  </tr>
     <?php
  $s=ob_get_clean();
  $s=str_replace("{mahang}",$row["mahang"], $s);
  $s=str_replace("{tenhang}",$row["tenhang"], $s);
  
 echo $s;
  }
?>
</table>

	</div>
    
</div>
</body>
</html>