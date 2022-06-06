<?php
    session_start();
    include("./config/config.php");
    if(isset($_POST["submit"]) && $_POST["user"] !='' && $_POST["pass"] !=''){
        $u = $_POST["user"];
        $p = $_POST["pass"];
        $sql = "select * from nguoidung where taikhoan ='$u' and matkhau ='$p'";
        $ur = mysqli_query($conn, $sql);
        if(mysqli_num_rows($ur) > 0){
            header("location:index.php");
        }else{
            echo"loss";
        }
    }else{
        header("location:login.php");
    }
?>
