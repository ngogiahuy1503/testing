<!doctype html>

<head>

	<!-- Basics -->
	
	<meta charset="utf-8">
	<title>Login</title>
	
</head>
<script type="text/javascript" >
function check()
{
	if(document.frmlogin.textusername.value==""){
		alert("Tài Khoản hoặc Mật Khẩu chưa chính xác");
		document.frmlogin.textusername.focus();
		return false;
		}
	if(document.frmlogin.textpass.value==""){
		alert("Tài Khoản hoặc Mật Khẩu chưa chính xác");
		document.frmlogin.textpass.focus();
		return false;
		}
	else
		return true;
}
</script>
	<!-- Main HTML -->
	
<body>
<fieldset style="width:500px; margin:auto;">
	<legend>Đăng Nhập</legend>
    <form name="frmlogin" action="index.php" method="post" onSubmit="return check()">
    <table>
    	<tr>
        	<td>Tên đăng nhập</td>
            <td><input type="text" name="textusername" /></td>
        </tr>
        <tr>
        	<td>Mật khẩu</td>
            <td><input type="password" name="textpass" /></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align:center">
            	<input type="submit" name="login" value="Đăng nhập" />
            </td>
        </tr>
    </table>
</fieldset>
	
</body>

</html>
	
	
	
	
	
		
	