<table width="700px" border="1" cellpadding="0">
  <tr>
    <th colspan="6" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <th scope="row">Hình Ảnh</th>
    <td>Tên Sản Phẩm</td>
    <td>Giá</td>
    <td>Số Lượng</td>
    <td>Thành Tiền</td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>

  <?php
  if(isset($_SESSION['giohang']))
  { $tongtien=0;
	$count=count($_SESSION['giohang']);
	for($i=0;$i<$count;$i++)
	{
		
		$qr=chitietsp($_SESSION["giohang"][$i]["masp"]) ;
		$thanhtien=1;
	 ?>
    <th scope="row"><img src="images/<?php echo $qr["hinh"] ?>" width="150px" height="150px" /></th>
    <td><?php echo $qr["tensp"]; ?></td>
    <td><?php echo $qr["giasp"]; ?></td>
    <td><?php echo number_format($_SESSION["giohang"][$i]["sl"],0,'','.')  ?></td>
    <td><?php echo $thanhtien=$qr["giasp"]*$_SESSION["giohang"][$i]["sl"]; ?></td>
    <td><a href="?b=xlgh&masp=<?php echo $_SESSION["giohang"][$i]["masp"]  ?>&p=1"><input type="submit" name="xoa" id="xoa" value="Xóa" /></a>-<a href="?b=xlgh&masp=<?php echo $_SESSION["giohang"][$i]["masp"] ?>"><input type="submit" name="them" id="them" value="Thêm" /></a>-<a href="?b=xlgh&masp=<?php echo $_SESSION["giohang"][$i]["masp"]?> &p=2"><input type="submit" name="xoahet" id="xoahet" value="Xóa Hết" /></a></td>
  </tr>
  <?php
	$tongtien +=  $thanhtien;
	}
  
  ?>
  <tr>
    <th colspan="4" scope="row"><form id="form1" name="form1" method="post" action="index.php?b=chek&amp;tong=<?php echo $tongtien ?>">
     
      <input type="submit" name="btndat" id="btndat" value="Đặt  Hàng" />
    </form></th>	
    <td colspan="2"><?php $tt=number_format($tongtien,0,'','.');
	echo $tt; ?></td>
  </tr>

<?php

  }
?>

</table> 
