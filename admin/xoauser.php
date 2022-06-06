<?php
    $makh = $_GET['makh'];
    $sql = "DELETE FROM khachhang1 WHERE makh = '$makh'";
    $query = mysqli_query($conn,$sql);
    if($query == TRUE){
        echo '<script>alert("Xóa thành công!");</script>';
        echo '<script>window.location="index.php?page=litsuser"</script>';
    }else{
        echo "Error:". $sql . "</br>". $conn->error;
    }
?>