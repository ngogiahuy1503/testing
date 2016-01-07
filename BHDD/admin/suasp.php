<?php 
include"../module/connection.php"; 
include"../module/qr.php";
?>
<?php
	$masp=$_GET['masp'];
	$sq="SELECT * FROM sanpham WHERE masp = '$masp'";
	$a=mysql_query($sq);
	$arr=mysql_fetch_assoc($a);

	
?>
<?php
if( isset($_POST["btnhinh"]) )
 {
	 if($_FILES)
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
	
}
?>
<?php
if(isset($_POST['btnhinh']))
{
	$tensp=$_POST['tensp'];
	$giasp=$_POST['giasp'];
	settype($giasp,"float");
	$sl=$_POST['sl'];
	settype($sl,"int");
	$mahang=$_POST['mahang'];
	$mtsp=$_POST['mtsp'];
	if($_FILES['hinh']['name']!='')	$hinh=$name;
	else $hinh=$_POST['img'];
	$new=$_POST['RadioGroup1'];
	$sql="UPDATE sanpham SET tensp='$tensp',giasp='$giasp',SoLuong='$sl',motasp='$mtsp',mahang='$mahang',hinh='$hinh',new='$new' WHERE masp='$masp'";
	mysql_query($sql);
	//print_r($_POST);
	//print_r($_FILE);
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
<table width="300" border="1">
  <tr>
    <td colspan="2">Thêm Sản Phẩm</td>
    </tr>
  <tr>
    <td>tên sản phẩm :</td>
    <td><label for="tensp"></label>
      <input type="text" name="tensp" id="tensp" value="<?php echo $arr['tensp'] ?>"></td>
  </tr>
  <tr>
    <td>giá sản phẩm :</td>
    <td><label for="giasp"></label>
      <input type="text" name="giasp" id="giasp" value="<?php echo $arr['giasp'] ?>"></td>
  </tr>
 
  <tr>
    <td>số lượng :</td>
    <td><label for="sl"></label>
      <input type="text" name="sl" id="sl" value="<?php echo $arr['soluong'] ?>" ></td>
  </tr>
 <tr>
	 <th scope="row">Mô tả sản phẩm:</th>
	 <td><textarea name="mtsp" cols="45" rows="5" value=""><?php echo $arr['motasp']?> </textarea></td>

 <tr>
    <td>stt</td>
    <td><p>
      <label>
        <input type="radio" name="RadioGroup1" value="1" id="RadioGroup1_0" checked="checked" />
        MỚI</label>
      <br />
      <label>
        <input type="radio" name="RadioGroup1" value="0" id="RadioGroup1_1" />
        CŨ</label>
      <br />
    </p></td>
  </tr>
  <tr>
    <td>mã hãng :</td>
    <td>
      <label for="mahang"></label>
      <select name="mahang" id="mahang">
      	<?php 
			  $hang= danhsachhang();
			  while($row=mysql_fetch_array($hang))
			  {
			  ?>
              <option <?php if($row["mahang"]==$arr["mahang"]) echo "selected='selected'"; ?> value="<?php echo $row['mahang'] ?>"><?php echo $row['tenhang']; ?></option>
              <?php
			  };
			  ?>
      </select></td>
  </tr>
  <tr>
      <th height="39" scope="row">hinh</th>
      <td><label for="hinh"></label>
      <?php
	  if($arr['hinh']!= '')
	  {
		$img=$arr['hinh'] ;?>
		<input name="img" type="hidden" value="<?php echo $img ?>" />
        <?php
   		echo $img ;
	  }
	  ?>
      
        <input type="file" name="hinh" id="hinh" /></td>
    </tr>
  <tr>
    <td colspan="2"><input type="submit" name="btnhinh" id="btnhinh" value="SỬA"></td>
    </tr>
    
</table>

</form>
</div>

 </div>
</body>
</html>
