<?php
function danhsachhoadon()
{
	$sql="SELECT * FROM hoadon";
	return mysql_query($sql);
}

function chitiethd($mahd)
{
	$sql="SELECT * FROM hoadon WHERE mahd='$mahd'";
	$s= mysql_query($sql);
	return mysql_fetch_assoc($s);
}

function timkiem($tukhoa)
{
	$sql="Select * from sanpham where tensp like '%$tukhoa%' ORDER BY masp DESC";
	
	
	return mysql_query($sql);
}
function danhsachtintuc()
{
	$sql="SELECT * FROM tintuc";
	return mysql_query($sql);
}
function danhsachhang()
{
	$sql="SELECT * FROM mahang";
	return mysql_query($sql);
}
function chitiethang($mahang)
{
	$sql="SELECT * FROM mahang WHERE mahang='$mahang'";
	$qr=mysql_query($sql);
	return mysql_fetch_array($qr);
}
function chitietsp($masp)
{
	$sql="SELECT * FROM sanpham WHERE masp='$masp'";
	$qr=mysql_query($sql);
	return mysql_fetch_array($qr);
}

function danhsach_sanpham($mahang)
{
	$sql="select * from sanpham where MaHang='$mahang'";
	return mysql_query($sql);
}
function danhsachsanpham()
{
	$sql="select *from sanpham ";
	return mysql_query($sql);
}
?>