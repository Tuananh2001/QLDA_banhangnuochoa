<?php
    include ("admin/config/config.php"); 
    session_start();
    if(isset($_POST['dangnhap'])){
        $email = $_POST['email'];
        $matkhau = $_POST['matkhau'];

        $sql = "SELECT * FROM khachhang1 where email = '$email'";
        $query = mysqli_query($conn,$sql);
        $data = mysqli_fetch_assoc($query);
        $checkEmail = mysqli_num_rows($query);
        if($checkEmail==1){
            $checkPass = password_get_info($matkhau);
            if($checkPass){
                //lưu vào sesstion
                $_SESSION['khachhang'] = $data;
                echo '<script>window.location="index.php"</script>';
            }else{
                echo '<script>alert("sai mat khau!");</script>';
            }
        }else{
            echo '<script>alert("email ko tồn tại");</script>';
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
        <form class="from-login" method = "POST">
            <h1>Đăng Nhập</h1>
            <div class="from-next">
                <input name = "email"  required type="text" placeholder="Email">
            </div>
            <div class="from-next">
                <input name = "matkhau" required type="password" placeholder="Mật Khẩu">
            </div>
                <button name = "dangnhap">Đăng Nhập</button>
            <div class="text">
                <span>Bạn chưa có tài khoản/<a class="linkdk"  href="dangky.php">đăng kí</a></span>
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
