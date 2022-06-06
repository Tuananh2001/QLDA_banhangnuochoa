<?php
include("config/config.php");
$qry = $conn->query("SELECT * FROM Khachhang where makh = ".$_GET['id'])->fetch_array();
foreach($qry as $k => $v){
	$$k = $v;
}
include("adduser.php");
?>