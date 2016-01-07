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
 <table width="100%" border="1" cellpadding="0">
	    <tr>
	      <th colspan="9" scope="col">DANH SÁCH HÓA ĐƠN</th>
        </tr>
	    <tr>
	      <th width="11%" scope="row">mã hóa đơn</th>
	      <td width="12%"> tên người nhận</td>
	      <td width="11%">email</td>
	      <td width="11%">Địa Chỉ</td>
	      <td width="11%"> Số Điện Thoại</td>
	      <td width="11%">Ngày Đặt</td>
	      <td width="11%">Trạng Thái</td>
	      <td width="11%">Tổng Giá</td>
	      <td width="11%">&nbsp;</td>
        </tr>
        <?php
		$a=danhsachhoadon();
		while($row=mysql_fetch_array($a))
		{
			ob_start();
		?>
	    <tr>
	      <th scope="row">{mahd}</th>
	      <td>{ten}</td>
	      <td>{email}</td>
	      <td>{diachi}</td>
	      <td>{sdt}</td>
	      <td>{ngaydat}</td>
	      <td>{tinhtrang}</td>
	      <td>{tonggia}</td>
	      <td><a href="suahd.php?mahd={mahd}">Sửa</a> - <a onclick="return confirm('ban co chak muốn xóa hay không?')" href="../xoahd.php?mahd={mahd}">Xóa</a></td>
        </tr>
        <?php
			$s=ob_get_clean();
			$gia=number_format($row['tonggia'],0,'','.');
			$s=str_replace("{mahd}",$row["mahd"],$s);
			$s=str_replace("{ten}",$row["ten"],$s);
			$s=str_replace("{email}",$row["email"],$s);
			$s=str_replace("{diachi}",$row["diachi"],$s);
			$s=str_replace("{sdt}",$row["sdt"],$s);
			$s=str_replace("{ngaydat}",$row["ngaydat"],$s);
			$s=str_replace("{tinhtrang}",$row["tinhtrang"],$s);
			$s=str_replace("{tonggia}",$gia,$s);
			echo $s;
		}
		?>
         <th colspan="9" scope="col"><a href="thongkephoc.php">thongkedaxuly</a> - thongkedaxuly</th>
      </table>
	</div>
    
 </div>
</body>
</html>
