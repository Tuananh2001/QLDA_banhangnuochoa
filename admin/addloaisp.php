<?php
include("config/config.php");
if(isset($_POST['sbm'])) 
{
    $maloai = $_POST['maloai'];
    $tenloai = $_POST['tenloai'];
    $mota = $_POST['mota'];
    $sql = "INSERT INTO loaisp(maloai, tenloai,Mota) VALUES('$maloai','$tenloai','$mota')";
    $result = $conn->query($sql);
    if($result == TRUE){
        echo '<script>alert("Thêm mới thành công!");</script>';
        echo '<script>window.location="index.php?page=listloaisp"</script>';
    }else{
        echo "Error:". $sql . "</br>". $conn->error;
    }
}
?>
<div class="adduser">
    <div class="adduser__container">
        <div class="home" style = "margin-bottom: 23px;font-size: 24px; color: #000;">Thêm mới loại sản phẩm </div>
        <div class="borderhome" style = "border: 1px solid;margin-bottom: 46px;"></div>
        <form  method="POST" style = " border: 1px solid;padding: 20px;">
            <div class="adduser__item" style = "margin-bottom: 30px; height: 34px">
               <h5 style = "font-size: 15px;color: #000;width: 8.5%;margin-top: 8px;">Mã Loại</h5>
               <input id = "maloai" name="maloai" type="text" placeholder= "Mã loại" style = " width: 50%; height: 32px;border-style: groove;margin-left: 10px;border-radius: 5px; border: 1px solid #ccc;"
               >
            </div>
            <div class="adduser__item" style = "margin-bottom: 30px; height: 34px;">
               <h5 style = "font-size: 15px;color: #000;width: 8.5%;margin-top: 42px;">Tên loại</h5>
               <input id = "tenloai" name="tenloai" type="text" placeholder= "Tên loại" style = " width: 50%;  height: 32px;border-style: groove; margin-left: 10px;border-radius: 5px;border: 1px solid #ccc;"
               >
            </div>
            <div class="adduser__item" style = "margin-bottom: 30px; height: 34px;">
               <h5 style = "font-size: 15px;color: #000;width: 8.5%;margin-top: 42px;">Mô tả</h5>
               <textarea id = "mota" name="mota" placeholder= "Mô tả" id="" cols="30" rows="10" class="summernote form-control" style = "width:75%;margin-left: 10px;border-radius: 5px;"></textarea>
            </div>
            <button name = "sbm" type="submit" style = "margin-top:25%;margin-left: 42%;padding: 3px 15px;background-color: #2a3f54;color: #fff;">Thêm</button>
            <button name = "reset" type="submit" style = "margin-top:25%;margin-left: 1%;padding: 3px 15px;background-color: #2a3f54;color: #fff;">Reset</button>
        </form>
    </div>
</div>