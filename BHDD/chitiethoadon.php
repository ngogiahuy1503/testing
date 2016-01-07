<?php
$tong=$_GET['tong'];
?>
<?php
@session_start();
if(isset($_POST['btngui']))
{
	$ten=$_POST['ten'];
	$email=$_POST['email'];
	$diachi=$_POST['diachi'];
	$sdt=$_POST['sdt'];
	
	$tong=$_POST['tong'];
	$qr="INSERT INTO hoadon(ten, email, diachi, sdt, tinhtrang, tonggia) VALUES ('$ten','$email','$diachi','$sdt','0','$tong')";
	$a=mysql_query($qr);
	if($a)
	{	
		for($i=0;$i<count($_SESSION['giohang']); $i++)
		{
			$max=mysql_query("SELECT max(mahd)as mahd FROM hoadon");
			$row=mysql_fetch_array($max);
			$mahd=$row["mahd"];
			$masp=$_SESSION['giohang'][$i]['masp'];
			$sl=$_SESSION['giohang'][$i]['sl'];
			$sql="INSERT INTO chitiethoadon(mahd, masp, sl) VALUES ('$mahd','$masp','$sl')";
			mysql_query($sql);
		}
	}
	unset($_SESSION['giohang']);
	header("location:index.php");
}
?>
<form action="" method="post">
<table width="500" border="1" cellpadding="0">
  <tr>
    <th colspan="2" scope="col">Thông Tin Giao Hàng</th>
    </tr>
  <tr>
    <th scope="row">Tên khách hàng</th>
    <td><label for="ten"></label>
      <input type="text" name="ten" id="ten"></td>
  </tr>
  <tr>
    <th scope="row">email</th>
    <td><label for="email"></label>
      <input type="text" name="email" id="email"></td>
  </tr>
  <tr>
    <th scope="row">Số Điện Thoại</th>
    <td><label for="sdt"></label>
      <input type="text" name="sdt" id="sdt"></td>
  </tr>
  <tr>
    <th scope="row">Đia Chỉ giao hàng</th>
    <td><label for="diachi"></label>
      <textarea name="diachi" id="diachi" cols="45" rows="5"></textarea></td>
  </tr>
  <input name="tong" type="hidden" value="<?php echo $tong ?>">
  <tr>
    <th colspan="2" scope="row"><input type="submit" name="btngui" id="btngui" value="gửi"></th>
    </tr>
</table>
</form>