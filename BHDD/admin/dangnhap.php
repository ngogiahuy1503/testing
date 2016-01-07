<?php
if(isset($_POST['btnDangNhap'])){
    $err = false;
    if($_POST['username'] == ''){
        $err_username = 'Hãy nhập tên đăng nhập<br>';
        $err = true;
    }
    if($_POST['password'] == ''){
        $err_password = 'Hãy nhập mật khẩu';
        $err = true;
    }

    if(!$err){
        $taikhoan = $obj->getData("select * from thanhvien where TenDangNhap='". $_POST['username'] ."' AND matkhau='". $_POST['password'] ."' ");
        if(count($taikhoan) > 0){
            echo "<script>alert('Đăng nhập thành công!'); location.href='index.php';</script>";
        }else{
            $err_mess = 'Tên đăng nhập hoặc mật khẩu không đúng!';
        }
    }
}
?>
<link rel="stylesheet" type="text/css" href="ad.css">

<div id="icontent">
    <center>
        <h1> ĐĂNG NHẬP </h1>

        <form action="" method="post">
            <?php
            if(isset($err_mess)){
            ?>
                <div><?php echo $err_mess ?></div>
            <?php
            }
            ?>
            <div class="login">
                <div class="chuk2" >
                </div>
                Tên Đăng Nhập:<input type="text" placeholder="Username" id="username" name="username">
                <div>
                    <?php echo isset($err_username) ? $err_username : '' ?>
                </div>
                <br><br>
                Mật khẩu:<input type="password" placeholder="password" id="password" name="password">
                <div>
                    <?php echo isset($err_password) ? $err_password : '' ?>
                </div>
                <br><br>
                <input type="submit" name="btnDangNhap" value="Đăng Nhập"><br><br>
                <a href="admindangnhap.php" class="forgot">ADMIN!!! </a>
                <a href="#" class="forgot">Quên mật khẩu?</a>
                <a href="dktaikhoan.php" class="forgot"> Đăng kí tài khoản</a>
            </div>
        </form>

        <div class="shadow"></div>
    </center>
</div>