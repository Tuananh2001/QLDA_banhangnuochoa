<?php
    $maloai = $_GET['maloai'];
    $sql = "DELETE FROM LoaiSP WHERE maloai = '$maloai'";
    $query = mysqli_query($conn,$sql);
    if($query == TRUE){
        echo '<script>alert("Xóa thành công!");</script>';
        echo '<script>window.location="index.php?page=listloaisp"</script>';
    }else{
        echo "Error:". $sql . "</br>". $conn->error;
    }
?>