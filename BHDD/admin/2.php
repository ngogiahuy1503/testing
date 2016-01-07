
<?php
if( isset($_POST['hinh']))
 {
	$arrImg = array("image/png", "image/jpeg", "image/bmp");
	$errFile = $_FILES["hinh"]["error"];
	if ($errFile>0)
		$err .="Lỗi file hình <br>";
	else
	{
		$type = $_FILES["hinh"]["type"];
		if (!in_array($type, $arrImg))
			$err .="Không phải file hình <br>";
		else
		{	$temp = $_FILES["hinh"]["tmp_name"];
			$name = $_FILES["hinh"]["name"];
			if (!move_uploaded_file($temp, "../images/".$name))
				$err .="Không thể lưu file<br>";
		
		}
	}
}
else echo "khong tim thay";
	print_r($_FILE);
?>