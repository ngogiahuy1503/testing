<?php 
include"../module/connection.php"; 
include"../module/qr.php";
?>
<?php
if( isset($_POST["btnthem"]) )
 {
	$arrImg = array("image/png", "image/jpeg", "image/bmp");
	$errFile = $_FILES["hinh"]["error"];
	if ($errFile>0)
		$err .="L?i file h?nh <br>";
	else
	{
		$type = $_FILES["hinh"]["type"];
		if (!in_array($type, $arrImg))
			$err .="Không ph?i file h?nh <br>";
		else
		{	$temp = $_FILES["hinh"]["tmp_name"];
			$name = $_FILES["hinh"]["name"];
			if (!move_uploaded_file($temp, "../images/".$name))
				$err .="Không th? lưu file<br>";
		
		}
	}
}
?>
<?php
if( isset($_POST["btnthem"]) )
 {
	
	$tensp=$_POST["TenSanPham"];
	$gia=$_POST["GiaSanPham"]; 
	settype($gia,"float");
	$sl=$_POST['SoLuong'];
	settype($sl,"int");
	$mtsp=$_POST["mtsp"]; 
	$mahang=$_POST["mahang"];
	$hinh=$name;
	$sql="INSERT INTO sanpham(tensp, giasp, soluong, motasp, mahang, hinh) VALUES ( '$tensp', '$gia', '$sl', '$mtsp', '$mahang', '$name')";
	mysql_query($sql);
	header("location:listsanpham.php");
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
    <?php include"header.php";?>
  </div>
<div id="icontent">

<form action="" method="post" enctype="multipart/form-data" >
  <table width="315" border="1" cellpadding="0">
    <tr>
      <th colspan="2" scope="col">Thông Tin sản Phẩm</th>
      </tr>
    <tr>
      <th scope="row">Tên Sản Phẩm:</th>
      <td><label for="TenSanPham"></label>
        <input type="text" name="TenSanPham" id="TenSanPham" /></td>
    </tr>
    <tr>
      <th scope="row">Giá</th>
      <td><label for="GiaSanPham"></label>
        <input type="text" name="GiaSanPham" id="GiaSanPham" /></td>
    </tr>
    <tr>
      <th scope="row">Số lượng</th>
      <td><label for="SoLuong"></label>
        <input type="text" name="SoLuong" id="SoLuong" /></td>
    </tr>
    <tr>
      <th scope="row">Mô tả sp</th>
      <td><textarea name="mtsp" cols="45" rows="5"></textarea>
        </td>
    </tr>
    <tr>
      <th scope="row">Mã hãng</th>
      <td><select name="mahang" id="mahang">
      	<?php
		$hang=danhsachhang();
		while($row=mysql_fetch_array($hang))
		{
		?>
        <option value="<?php echo $row['mahang']; ?>" ><?php echo $row['tenhang']; ?></option>
        <?php
		}
		?>
      </select></td>
    </tr>
    <tr>
      <th height="39" scope="row">h?nh</th>
      <td><label for="hinh"></label>
        <input type="file" name="hinh" id="hinh" /></td>
    </tr>
    <tr>
      <th colspan="2" scope="row"><input type="submit" name="btnthem" id="btnthem" value="Them" /></th>
      </tr>
  </table>
</form>
</div>

 </div>
</body>
</html>
