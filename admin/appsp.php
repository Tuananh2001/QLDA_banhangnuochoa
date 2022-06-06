<?php
include("config/config.php");
$sqlloai = "SELECT * FROM LoaiSP";
$queryloai = mysqli_query($conn,$sqlloai);
if(isset($_POST['sbmit'])) 
{
    $masp = $_POST['masp'];
    $maloai = $_POST['maloai'];
    $tensp = $_POST['tensp'];
    $soluong = $_POST['soluong'];
    $gia = $_POST['gia'];
    $anh = $_FILES['anh']['name'];
    $anh_tmp = $_FILES['anh']['tmp_name'];
    $mota = $_POST['mota'];
    $sql = "INSERT INTO Sanpham(masp,maloai, tensp,soluong,gia,anh,mota) VALUES('$masp','$maloai','$tensp', '$soluong','$gia','$anh','$mota')";
    $result = $conn->query($sql);
    move_uploaded_file($anh_tmp,'./images/'.$anh);
    if($result == TRUE){
        echo '<script>alert("Thêm mới thành công!");</script>';
        echo '<script>window.location="index.php?page=listsp"</script>';
    }else{
        echo "Error:". $sql . "</br>". $conn->error;
    }
}
?>
<div class="row">
   <div class="col-md-12">
   <div class="x_panel">
        <div class="x_title">
            <h2>Thêm Sản Phẩm <small></small></h2>
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
                    <input name = "masp" type="text" class="form-control " id="inputSuccess2" placeholder="Mã Sản Phẩm" required>
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
                    <input name = "tensp" type="text" class="form-control " id="inputSuccess4" placeholder="Tên Sản Phẩm" required>
                </div>
                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <input name = "soluong" type="number" class="form-control " id="inputSuccess2" placeholder="Số Lượng" required>
                </div>
                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <input name = "gia" type="number" class="form-control " id="inputSuccess2" placeholder="giá sản phẩm" required>
                </div>
                <div class="col-md-12 col-sm-12 form-group has-feedback">
                   <textarea style = "width: 100%" name="mota" id="" cols="30" rows="10" placeholder="Mô tả sản phẩm" required></textarea>
                </div>
                <div class="col-md-12 col-sm-12  form-group has-feedback">
                    <label for="">Upload ảnh sản phẩm</label></br>
                    <input name = "anh" type="file" required > 
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