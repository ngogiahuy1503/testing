<?php
$masp=$_GET['masp'];
$sp=chitietsp($masp);
?>
<table width="100%" border="1" cellpadding="0" >
  <tr>
    <th colspan="2" scope="row"><h2>THÔNG TIN SẢN PHẨM</h2></th>
  </tr>
  <tr>
    <th width="25%" height="250" scope="col"><img src="images/<?php echo $sp['hinh']?>" width="235px" height="250px" /></th>
    <th width="75%" rowspan="3" scope="col"><?php echo $sp['motasp'] ?></th>
  </tr>
  <tr>
    <th scope="row"><?php echo $sp['giasp']?> vnd</th>
  </tr>
  <tr>
    <th scope="row"><?php echo $sp['tensp'] ?></th>
  </tr>
  <tr>
    <th colspan="2" scope="row" align="left"> <br/><h3>
    Bộ sản phẩm gồm: Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim <br/>
	<br />Bảo hành chính hãng: thân máy 12 tháng, pin 12 tháng, sạc 12 tháng <br/> 
	<br />Giao hàng tận nơi miễn phí trong 30 phút.  <br/>
	<br />Đổi trả sản phẩm lỗi miễn phí trong 14 ngày. <br/>
    </h3>
    </th>
  </tr>
   <tr><form action="" method="get">
    <th scope="row" colspan="2"><input name="add" type="submit" value="Gửi" />
   <input name="masp" type="hidden" value="<?php echo $sp['masp'] ?>" />
   <input name="b" type="hidden" value="gh" /> </th>
  </tr></form>
</table>
<hr>