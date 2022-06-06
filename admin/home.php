<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php include("config/config.php"); 
?>
<div class="home" style = "    margin-bottom: 23px;font-size: 24px; color: #000;"> Home</div>
<div class="borderhome" style = "border: 1px solid;margin-bottom: 25px;"></div>
<div class="row" style = "justify-content: space-between;">
    <div class="dashboard__item" style = "display: flex;box-shadow: 0px 0px 5px 0px rgb(184 184 184);   width: 24%; height: 82px;">
        <div class="dab__icon" style = "padding: 15px; margin: 7px;background-color: #2d47b7;box-shadow: 0px 0px 5px 0px rgb(184 184 184);"><i class="fas fa-users" style = "font-size: 35px;color: #fff; "></i></div>
        <div class="dab__text">
            <h5 style= "padding: 10px; color: #000; font-size: 15px; ">Tổng số người</h5>
            <span style = " margin-left: 13px;color: #000;font-weight: 700;">
                <?php echo $conn->query("SELECT * FROM khachhang1 ")->num_rows; ?>
            </span>
        </div>
    </div>
    <div class="dashboard__item" style = "display: flex;box-shadow: 0px 0px 5px 0px rgb(184 184 184);   width: 24%; height: 82px;">
        <div class="dab__icon" style = "padding: 15px; margin: 7px;background-color: #2d47b7;box-shadow: 0px 0px 5px 0px rgb(184 184 184);"><i class="fa fa-edit" style = "font-size: 35px;color: #fff; "></i></div>
        <div class="dab__text">
            <h5 style= "padding: 10px; color: #000;font-size: 15px;">Tổng số sản phẩm</h5>
            <span style = " margin-left: 13px;color: #000;font-weight: 700;">
                <?php echo $conn->query("SELECT * FROM sanpham ")->num_rows; ?>
            </span>
        </div>
    </div>
    <div class="dashboard__item" style = "display: flex;box-shadow: 0px 0px 5px 0px rgb(184 184 184);   width: 24%; height: 82px;">
         <div class="dab__icon" style = "padding: 15px; margin: 7px;background-color: #2d47b7;box-shadow: 0px 0px 5px 0px rgb(184 184 184);"><i class="fa fa-table" style = "font-size: 35px;color: #fff; "></i></div>
        <div class="dab__text">
            <h5 style= "padding: 10px 10px 0px 10px; color: #000;font-size: 15px;">Tổng số đơn hàng chưa xử lý</h5>
            <span style = " margin-left: 13px;color: #000;font-weight: 700;">
                <?php echo $conn->query("SELECT * FROM hoadon WHERE trangthai ='chờ xử lý'")->num_rows; ?>
            </span>
        </div>
    </div>  
    <div class="dashboard__item" style = "display: flex;box-shadow: 0px 0px 5px 0px rgb(184 184 184);   width: 24%; height: 82px;">
        <div class="dab__icon" style = "padding: 15px; margin: 7px;background-color: #2d47b7;box-shadow: 0px 0px 5px 0px rgb(184 184 184);"><i class="fas fa-check" style = "font-size: 35px;color: #fff; "></i></div>
        <div class="dab__text">
            <h5 style= " padding: 10px 10px 0px 10px; color: #000;font-size: 15px;">Tổng số đơn hàng giao thành công</h5>
            <span style = " margin-left: 13px;color: #000;font-weight: 700;">
                <?php echo $conn->query("SELECT * FROM hoadon WHERE trangthai ='đã giao'")->num_rows; ?>
            </span>
        </div>
        
    </div>
</div>