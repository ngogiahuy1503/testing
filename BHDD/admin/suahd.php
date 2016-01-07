<?php
include"../module/connection.php";
include"../module/qr.php";
?>
 <?php 
 ob_start();
 session_start();

 if(!isset($_SESSION['id']))
 {
	 header("location:../index.php");
 }
 else if($_SESSION['phanquyen']==0)
 {
	 header("location:../index.php");
}
 ?>
 <?php
 $mahd=$_GET['mahd']; 
 $stt=chitiethd($mahd);
 ?>
 <?php
 if(isset($_POST['btnsua']))
 {
$tt=$_POST["RadioGroup1"];

$sql="UPDATE hoadon SET tinhtrang='$tt' WHERE mahd='$mahd' ";
mysql_query($sql);
header("location:listhd.php");
}
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
    <?php include"header.php"; ?>
  </div>
	<div id="icontent">
	  <form id="form1" name="form1" method="post" action="">
	    <table width="500" border="1" cellpadding="0">
	      <tr>
	        <th colspan="2" scope="col">Thay Đổi Trạng Thái</th>
          </tr>
	      <tr>
	        <th width="202" scope="row">Trạng Thái :</th>
	        <td width="286"><p>
	          <label>
	            <input type="radio" name="RadioGroup1" value="0" id="RadioGroup1_0" <?php if($stt['tinhtrang']==0) echo"checked='checked'" ?>/>
	            Chưa Xử Lý</label>
	          <br />
	          <label>
	            <input type="radio" name="RadioGroup1" value="1" id="RadioGroup1_1" <?php if($stt['tinhtrang']==1) echo"checked='checked'" ?>/>
	            Đã xử lý</label>
	          <br />
<br />
	          <br />
            </p></td>
          </tr>
	      <tr>
	        <th colspan="2" scope="row"><input type="submit" name="btnsua" id="btnsua" value="Sửa" /></th>
          </tr>
        </table>
	</div>
    
 </div>
</body>
</html>
