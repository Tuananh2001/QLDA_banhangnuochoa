<?php

//thêm sản phẩm vào giỏ hàng
    include ("admin/config/config.php"); 
    session_start();
    if(isset($_POST["add"])){
        $masp = $_GET['masp'];
        $soluong = 1;
        $sql_cart ="SELECT * FROM sanpham WHERE masp = '".$masp."'";
        $query_cart = mysqli_query($conn,$sql_cart);
        $row_cart = mysqli_fetch_array($query_cart);
        if($row_cart){
            $new_product = array(array('tensp'=>$row_cart['tensp'],'masp'=>$masp,'soluong'=>$soluong,'gia'=>$row_cart['gia'],
                'anh'=>$row_cart['anh']));
            if(isset($_SESSION['cart'])){
                $found = false;
                foreach($_SESSION['cart'] as $cart_item){
                    if($cart_item['masp']==$masp){
                        $product[] = array('tensp'=>$cart_item['tensp'],'masp'=>$cart_item['masp'],'soluong'=>$soluong+1,
                            'gia'=>$cart_item['gia'],'anh'=>$cart_item['anh']);
                        $found = true;
                    }else{
                        $product[] = array('tensp'=>$cart_item['tensp'],'masp'=>$cart_item['masp'],'soluong'=>$cart_item['soluong'],
                            'gia'=>$cart_item['gia'],'anh'=>$cart_item['anh']);
                    }
                }
                if($found == false){
                    $_SESSION['cart']= array_merge($product,$new_product);
                }else{
                    $_SESSION['cart'] = $product;
                }
            }else{
                $_SESSION['cart']=$new_product;
            }
        }
        
        echo '<script>window.location="shopingcart.php"</script>';
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>hihihihifstgddyhdhhd</div>
    <span>hihihihihi</span>
</body>
</html>