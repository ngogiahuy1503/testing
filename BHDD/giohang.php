<?php
if (!isset($_SESSION)) session_start();
if(isset($_GET['add']))
{
	$masp=$_GET['masp'];
	if(isset($_SESSION["giohang"]) && is_array($_SESSION["giohang"]))
	{
		$count= count($_SESSION["giohang"]);
		$f=false;
		for($i=0; $i< $count;$i++ )
		{
			if($_SESSION["giohang"][$i]["masp"]==$masp)
			{
				$_SESSION["giohang"][$i]["sl"]+=1;
				$f=true;
				break;
			}
		}
		if($f==false)
		{
			$_SESSION["giohang"][$count]["masp"]=$masp;
			$_SESSION["giohang"][$count]["sl"]=1;
		}
	}
	else
	{
		$_SESSION["giohang"]=array();
		$_SESSION["giohang"][0]["masp"]=$masp;
		$_SESSION["giohang"][0]["sl"]=1;
	}
	
	header("location:index.php");
}

?>