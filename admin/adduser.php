<?php
include("config/config.php");

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
    $matkhau = md5($matkhau);
    $sql = "INSERT INTO khachhang1(tenkh, sdt,gioitinh,ngaysinh,diachi,email,matkhau) VALUES('$tenkh','$sdt', '$gender','$ngaysinh','$diachi','$email','$matkhau')";
    $result = $conn->query($sql);
    if($result == TRUE){
        echo '<script>alert("Thêm mới thành công!");</script>';
        echo '<script>window.location="index.php?page=litsuser"</script>';
    }else{
        echo "Error:". $sql . "</br>". $conn->error;
    }
}
?>

<div class="adduser">
    <div class="adduser__container">
    <div class="home" style = "margin-bottom: 23px;font-size: 24px; color: #000;">Thêm mới user </div>
    <div class="borderhome" style = "border: 1px solid;margin-bottom: 46px;"></div>
        <form action="" method="POST">
            <div style = "display: flex;">
                <div class="adduser__item" style = "display: flex;margin-bottom: 30px; height: 34px;margin-right: 10%;">
                    <h5 style = "font-size: 15px;color: #000;width: 35%;margin-top: 4px;">Tên khách hàng</h5>
                    <input name = "tenkh" type="text" required placeholder= "Tên khách hàng" value="" style = " width: 330px;">
                </div>
                <div class="adduser__item" style = "display: flex;margin-bottom: 30px; height: 34px;">
                    <h5 style = "font-size: 15px;color: #000;width: 38%;margin-top: 4px;">Số điên thoại</h5>
                    <input name = "sdt" type="tel" required placeholder= "Số điện thoại" value="" style = " width: 345px;">
                </div>
            </div>
            <div style = "display: flex;">
                <div class="adduser__item" style = "display: flex;margin-bottom: 30px; height: 34px;margin-right: 10.5%;">
                    <h5 style = "font-size: 15px;color: #000;width: 40%;margin-top: 4px;">Ngày sinh</h5>
                    <input name = "ngaysinh" type="date" required placeholder= "ngày sinh" value="" style = " width: 367px;">
                </div>
                <div class="adduser__item" style = "display: flex;margin-bottom: 30px; height: 34px; color: #000">
                    <h5 style = "font-size: 15px;color: #000;width: 150px;margin-top: 4px;">Giới tính</h5>
                    <input type="radio" name="gioitinh" required value = "Nam" style = "margin-right: 10px;margin-top: 3px;" >Nam
                    <input type="radio" name="gioitinh" required value = "Nữ" style = "margin-right: 10px;margin-left: 15px;margin-top: 3px;" >Nữ
                </div>
            </div>
            <div style = "display: flex;">
                <div class="adduser__item" style = "display: flex;margin-bottom: 30px; height: 34px;margin-right: 10.5%;">
                    <h5 style = "font-size: 15px;color: #000;width: 45%;margin-top: 4px;">Email</h5>
                    <input name = "email" type="email" required placeholder= "Email" value="" style = " width: 395px;">
                </div>
                <div class="adduser__item" style = "display: flex;margin-bottom: 30px; height: 34px;">
                    <h5 style = "font-size: 15px;color: #000;width: 47%;margin-top: 4px;">Địa chỉ</h5>
                    <textarea name="diachi" id="" required placeholder= "Địa chỉ" cols="30" rows="10" style = "width: 386px;height: 110px;"></textarea>
                </div>
            </div> 
             
            <div class="adduser__item" style = "display: flex;margin-bottom: 30px;">
                <h5 style = "font-size: 15px;color: #000;width: 13%;margin-top: 4px;">Mật khẩu</h5>
                <input name = "matkhau" type="password" required placeholder= "Mật khẩu" value="" style = " width: 294px;">
            </div> 
            <button name = "sbm" type="submit" style = "border: none;margin-top:5%;margin-left: 42%;padding: 3px 15px;background-color: #2a3f54;color: #fff;">Thêm</button>
            <button name = "reset" type="submit" style = "border: none;margin-top:5%;margin-left: 1%;padding: 3px 15px;background-color: #2a3f54;color: #fff;">Reset</button>
                
        </form>
    </div>
</div>