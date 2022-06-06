<?php
    include ("admin/config/config.php"); 
    session_start();
    unset($_SESSION['khachhang']);
    echo '<script>window.location="index.php"</script>';

?>