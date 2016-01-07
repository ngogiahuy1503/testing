<?php 
include"../module/connection.php";
include"../module/qr.php";
 ?>
<?php
$mahang=$_GET['mahang'];
$mysql= "DELETE FROM mahang WHERE mahang='$mahang'";
mysql_query($mysql);
header("location:listhang.php");
?>
