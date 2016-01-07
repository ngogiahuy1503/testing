<?php
if(isset($_POST['logout']))
{
	session_destroy();
}
?>
Chào <?php echo $_SESSION['id']; ?>!!!!!!!
<form action="" method="post">
<input name="logout" type="submit" value="thoát"></form>