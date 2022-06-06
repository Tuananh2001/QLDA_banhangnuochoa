<?php
include("config/config.php");
$sqlloai = "SELECT * FROM LoaiSP";
$queryloai = mysqli_query($conn,$sqlloai);
if(isset($_POST['sbmit'])) 
{
    $mahd = $_POST['mahd'];
    $makh = $_POST['makh'];
    $maloai = $_POST['maloai'];
    $masp = $_POST['masp'];
    $diachi = $_POST['diachi'];
    $ngayhd = $_POST['ngayhd'];
    $trangthai = $_POST['trangthai'];
    $sql = "INSERT INTO Hoadon(mahd,makh,maloai,masp,diachi,ngayhd,trangthai) VALUES('$mahd','$makh','$maloai', '$masp','$diachi','$ngayhd','$trangthai')";
    $result = $conn->query($sql);
    if($result == TRUE){
        echo "thêm mới thành công!";
    }else{
        echo "Error:". $sql . "</br>". $conn->error;
    }
}
?>
<div class="row">
   <div class="col-md-12">
   <div class="x_panel">
        <div class="x_title">
            <h2>Tạo Hóa Đơn <small></small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Settings 1</a>
                        <a class="dropdown-item" href="#">Settings 2</a>
                    </div>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br>
            <form class="form-label-left input_mask" method="POST" enctype = "multipart/form-data">
                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <input name = "mahd" type="text" class="form-control " id="inputSuccess2" placeholder="Mã Hóa Đơn" required>
                </div>
                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <select class="form-control" name = "maloai">
                       <?php
                        while($row_loai = mysqli_fetch_assoc($queryloai)){?>
                            <option value = "<?php echo $row_loai['maloai'];?>"><?php echo $row_loai['tenloai'];?></option>
                        <?php }?>
                    </select>
                </div>	
                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <input name = "makh" type="text" class="form-control " id="inputSuccess4" placeholder=" Mã Khách Hàng" required>
                </div>
                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <input name = "diachi" type="Text" class="form-control " id="inputSuccess2" placeholder="Địa Chỉ" required>
                </div>
                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <input name = "masp" type="text" class="form-control " id="inputSuccess2" placeholder="Mã Sản Phẩm" required>
                </div>
                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <input name = "ngayhd" type="date" class="form-control " id="inputSuccess2" placeholder="Ngày Hóa Đơn" required>
                </div>
                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <input name = "trangthai" type="text" class="form-control " id="inputSuccess2" placeholder="Trạng thái" required>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group row">
                    <div class="col-md-9 col-sm-10  offset-md-3">
                        <button type="button" class="btn btn-primary">Cancel</button>
                        <button class="btn btn-primary" type="reset">Reset</button>
                        <button name = "sbmit" type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>