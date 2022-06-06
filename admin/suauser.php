<?php

if(isset($_POST['sbm'])) 
{
    $makh = $_POST['makh'];
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
    $sql = "UPDATE  khachhang SET tenkh='$tenkh', sdt='$sdt',gioitinh='$gender',ngaysinh='$ngaysinh',diachi='$diachi',email='$email' where makh='$makh'";
    $result = $conn->query($sql);
    if($result == TRUE){
        echo '<script>alert("Sửa thành công!");</script>';
        echo '<script>window.location="index.php?page=litsuser"</script>';
    }else{
        echo "Error:". $sql . "</br>". $conn->error;
    }
}
?>

<div class="adduser">
    <?php
            
            if(isset($_POST['edit_data_btn'])){
                $makh = $_POST['edit_makh'];
                $query = "SELECT * FROM khachhang Where makh = '$makh'";
                $query_run = mysqli_query($conn,$query);
                foreach($query_run as $row){?>
                    <div class="adduser__container">
                    <div class="home" style = "margin-bottom: 23px;font-size: 24px; color: #000;">Update user </div>
                    <div class="borderhome" style = "border: 1px solid;margin-bottom: 46px;"></div>
            <form action="" method="POST">
                <div style = "display: flex;">
                    <div class="adduser__item" style = "display: flex;margin-bottom: 30px; height: 34px;margin-right: 10%;">
                        <h5 style = "font-size: 15px;color: #000;width: 35%;margin-top: 4px;">Mã khách hàng</h5>
                        <input name = "makh" type="text" placeholder= "Mã khách hàng" value="<?php echo $row['makh'];?>" style = " width: 330px;">
                    </div>
                    <div class="adduser__item" style = "display: flex;margin-bottom: 30px; height: 34px;">
                        <h5 style = "font-size: 15px;color: #000;width: 38%;margin-top: 4px;">Tên khách hàng</h5>
                        <input name = "tenkh" type="text" placeholder= "Tên khách hàng" value="<?php echo $row['tenkh'];?>" style = " width: 330px;">
                    </div>
                </div>
                <div style = "display: flex;">
                    <div class="adduser__item" style = "display: flex;margin-bottom: 30px; height: 34px;margin-right: 10.2%;">
                        <h5 style = "font-size: 15px;color: #000;width: 37%;margin-top: 4px;">Số điên thoại</h5>
                        <input name = "sdt" type="tel" placeholder= "Số điện thoại" value="<?php echo $row['sdt'];?>" style = " width: 345px;">
                    </div>
                    <div class="adduser__item" style = "display: flex;margin-bottom: 30px; height: 34px; color: #000">
                        <h5 style = "font-size: 15px;color: #000;width: 150px;margin-top: 4px;">Giới tính</h5>
                        <input type="radio" name="gioitinh" value = "Nam" style = "margin-right: 10px;margin-top: 3px;" >Nam
                        <input type="radio" name="gioitinh" value = "Nu"   style = "margin-right: 10px;margin-left: 15px;margin-top: 3px;" >Nữ
                    </div>
                </div>
                <div style = "display: flex;">
                    <div class="adduser__item" style = "display: flex;margin-bottom: 30px; height: 34px;margin-right: 10.5%;">
                        <h5 style = "font-size: 15px;color: #000;width: 40%;margin-top: 4px;">Ngày sinh</h5>
                        <input name = "ngaysinh" type="date" placeholder= "ngày sinh" value="<?php echo date('Y-m-d'); ?>" style = " width: 367px;">
                    </div>
                    <div class="adduser__item" style = "display: flex;margin-bottom: 30px; height: 34px;">
                        <h5 style = "font-size: 15px;color: #000;width: 47%;margin-top: 4px;">Địa chỉ</h5>
                        <textarea name="diachi" id="" placeholder= "Địa chỉ" cols="30" rows="10" style = "width: 386px;height: 110px;"><?php echo $row['diachi'];?>
                        </textarea>
                    </div>
                </div> 
                <div class="adduser__item" style = "display: flex;margin-bottom: 30px;">
                    <h5 style = "font-size: 15px;color: #000;width: 13%;margin-top: 4px;">Email</h5>
                    <input name = "email" type="email" placeholder= "Email" value="<?php echo $row['email'];?>" style = " width: 300px;">
                </div>  
                <button name = "sbm" type="submit" style = "margin-top:5%;margin-left: 42%;padding: 3px 15px;background-color: #2a3f54;color: #fff;">Update</button>
                <button name = "reset" type="submit" style = "margin-top:5%;margin-left: 1%;padding: 3px 15px;background-color: #2a3f54;color: #fff;">Reset</button>
                    
            </form>
           <?php }
            }
            ?>

    </div>
</div>