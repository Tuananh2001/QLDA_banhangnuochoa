<?php
    $masp = $_GET['masp'];
    $sql = "DELETE FROM Sanpham WHERE masp = '$masp'";
    $query = mysqli_query($conn,$sql);
    if($query == TRUE){
        echo '<script>alert("Xóa thành công!");</script>';
        echo '<script>window.location="index.php?page=listsp"</script>';
    }else{
        echo "Error:". $sql . "</br>". $conn->error;
    }
?>