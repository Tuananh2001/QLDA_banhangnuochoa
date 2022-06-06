<?php
include ("admin/config/config.php"); 


if(isset($_POST['sbm'])) 
{
    $tenkh = $_POST['tenkh'];
    $sdt = $_POST['sdt'];
    if(isset($_POST['gioitinh'])){
        $gender = $_POST['gioitinh'];
    }  else {
        $gender = false;
    }
    $ngaysinh = date('Y-m-d', strtotime($_POST['ngaysinh']));
    $diachi = $_POST['diachi'];
    $email = $_POST['email'];
    $matkhau = $_POST['matkhau'];
    $nhaplaimatkhau = $_POST['nhaplaimatkhau'];
    $matkhaumh = password_hash($matkhau,PASSWORD_DEFAULT);
    
    
    if($matkhau != $nhaplaimatkhau){
        echo '<script>alert("Nhập lại mật khẩu ko chính xác");</script>';
    }else{
        $sql = "INSERT INTO khachhang1(tenkh, sdt,gioitinh,ngaysinh,diachi,email,matkhau) VALUES('$tenkh','$sdt', '$gender','$ngaysinh','$diachi','$email','$matkhaumh')";
        $result = $conn->query($sql);
        if($result == TRUE){
            echo '<script>alert("Đăng ký thành công!");</script>';
            echo '<script>window.location="dangnhap.php"</script>';
        }else{
            echo "Error:". $sql . "</br>". $conn->error;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./accset/css/index.css">
    <link rel="stylesheet" href="./accset/fontawesome-free-5.15.4-web/css/all.min.css">
</head>
<body>
    <div class="app">
        <form class="from-logins" method = "POST">
            <h1>Đăng Kí</h1>
            <div class="flexxxx" style="display: flex;">
                <div class="itemsss xl">
                    <div class="from-nexts">
                        <input name = "tenkh" type="text" required placeholder="Tên">
                        
                    </div>
                    <div class="from-nexts">
                        <input name = "sdt" type="text" required placeholder="Số điện thoại">
                    </div>
                    <div class="from-nexts" style="display: flex; margin-left: 15px;">
                        <input name="gioitinh" style="width: 13px;margin-right: 10px;" required type="radio" placeholder="Giới tính" ><p style="color: #757575;margin-right: 25px;padding-top:8px">Nam</p>
                        <input name="gioitinh" style="width: 13px;margin-right: 10px;" required type="radio" placeholder="Giới tính"><p style="color: #757575;padding-top: 8px;">Nữ</p>
                    </div>
                    <div class="from-nexts">
                        <input name = "ngaysinh" type="date" required placeholder="Ngày Sinh" style="color: #757575;">
                    </div>
                </div>
                <div class="itemsss" >
                    <div class="from-nexts">
                        <input name = "diachi" type="text" required placeholder="Địa chỉ">
                    </div>
                    <div class="from-nexts">
                        <input name = "email"  type="Email" required placeholder="Email">
                    </div>
                    <div class="from-nexts" >
                        <input name = "matkhau" type="password" required placeholder=" Mật khẩu">
                    </div>
                    <div class="from-nexts">
                        
                        <input name = "nhaplaimatkhau" type="password" required placeholder="Nhập Lại mật khẩu">
                    </div>
                </div>
            </div>
            
            <button name = "sbm">Đăng Kí</button>
            <div class="pk">
                <a href="dangnhap.php">Đã có tài khoản rồi!</a>
            </div>
         
        </form>
    </div>
    <script>
        
        const formlogin = document.querySelectorAll('.from-next input')
        const formlabel = document.querySelectorAll('.from-next label')
        for(let i =0;i<2;i++){
            formlogin[i].addEventListener("mouseover",function(){
                formlabel[i].classList.add("focus")
            })
        }
        
        
    </script>
    
</body>
</html>