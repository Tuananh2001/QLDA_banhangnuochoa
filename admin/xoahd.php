<?php
    $mahd = $_GET['mahd'];
    $sql = "DELETE FROM Hoadon WHERE mahd = '$mahd'";
    $query = mysqli_query($conn,$sql);
    if($query == TRUE){
        echo "xóa thành công!";
        include "listdh.php";
    }else{
        echo "Error:". $sql . "</br>". $conn->error;
    }
?>