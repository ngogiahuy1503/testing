<?php
$mahang=$_GET['tim'];
$q=timkiem($mahang);
?>
<?php
while($row=mysql_fetch_array($q))
{
	ob_start();
?>
<div>
<div id="{masp}" class="sp"><a href="?b=ctsp&masp={masp}">

<div class="hinh"><img src="images/{hinh}" width="200px" height="220px"/></div>
<hr />
<div class="ten" size: 10px>  {ten}</div>
<div class="gia">Gia : {gia} vnd</div></a>
</div> 
</div>



<?php
	$s=ob_get_clean();
	$s=str_replace("{masp}",$row["masp"], $s);
	
	$s=str_replace("{hinh}",$row["hinh"], $s);
	$s=str_replace("{ten}",$row["tensp"], $s);
	$s=str_replace("{gia}",$row["giasp"], $s);
	
	echo $s;
	 
}
?>

