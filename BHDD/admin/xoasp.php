<?php 
include"../module/connection.php"; 
include"../module/qr.php";
?>
<?php
$mahang=$_GET['masp'];
$mysql= "DELETE FROM sanpham WHERE	masp='$mahang'";
mysql_query($mysql);
header("location:listsanpham.php");
?>

