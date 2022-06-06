<?php 
include ("admin/config/config.php");   
    session_start();
    $user = (isset($_SESSION['khachhang'])) ? $_SESSION['khachhang']:[];
    //xóa sản phẩm khỏi giỏi hàng
    if (isset($_GET["page"])){
        if ($_GET["page"] == "xoa"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["masp"] == $_GET["masp"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("Product has been Removed...!")</script>';
                    echo '<script>window.location="shopingcart.php"</script>';
                }
            }
        }
    }
    //cộng số lượng
    if (isset($_GET['page'])){
        if ($_GET["page"] == "cong"){
            foreach($_SESSION['cart'] as $cart_item){
                if($cart_item['masp']!=$_GET["masp"]){
                    $product[] = array('tensp'=>$cart_item['tensp'],'masp'=>$cart_item['masp'],'soluong'=>$cart_item['soluong'],
                                'gia'=>$cart_item['gia'],'anh'=>$cart_item['anh']);
                    $_SESSION['cart'] = $product;
                }else{
                    $tangsoluong = $cart_item['soluong'] + 1;
                    if($cart_item['soluong']<=9){
                        $product[] = array('tensp'=>$cart_item['tensp'],'masp'=>$cart_item['masp'],'soluong'=>$tangsoluong,
                                'gia'=>$cart_item['gia'],'anh'=>$cart_item['anh']);
                    }else{
                        $product[] = array('tensp'=>$cart_item['tensp'],'masp'=>$cart_item['masp'],'soluong'=>$cart_item['soluong'],
                                'gia'=>$cart_item['gia'],'anh'=>$cart_item['anh']);
                    }
                    $_SESSION['cart'] = $product;
                }
            }
        }
    }
    //trừ số lượng
    if (isset($_GET['page'])){
        if ($_GET["page"] == "tru"){
            foreach($_SESSION['cart'] as $cart_item){
                if($cart_item['masp']!=$_GET["masp"]){
                    $product[] = array('tensp'=>$cart_item['tensp'],'masp'=>$cart_item['masp'],'soluong'=>$cart_item['soluong'],
                                'gia'=>$cart_item['gia'],'anh'=>$cart_item['anh']);
                    $_SESSION['cart'] = $product;
                }else{
                    $tangsoluong = $cart_item['soluong'] - 1;
                    if($cart_item['soluong']>1){
                        $product[] = array('tensp'=>$cart_item['tensp'],'masp'=>$cart_item['masp'],'soluong'=>$tangsoluong,
                                'gia'=>$cart_item['gia'],'anh'=>$cart_item['anh']);
                    }else{
                        $product[] = array('tensp'=>$cart_item['tensp'],'masp'=>$cart_item['masp'],'soluong'=>$cart_item['soluong'],
                                'gia'=>$cart_item['gia'],'anh'=>$cart_item['anh']);
                    }
                    $_SESSION['cart'] = $product;
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ Hàng</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./accset/css/trangchu.css">
    <script src="./accset/js/cart.js" async></script>
</head>
<body>
    <div id="main">
        <div class="wrapper">
            <!-- header -->
            <div class="header">
                <div class="wrapper__header">
                    <div class="top__bar">
                        <div class="header__container d-flex">
                            <div class="contact_top-bar">
                                <ul class="contact_top-items">
                                    <li style="margin-right: 15px;"><i class="fas fa-home"></i>536 Hoàng Quốc Việt,Q.Cầu Giấy, Hà nội</li>
                                    <li><i class="fas fa-mobile-alt"></i><a href="tel: 076 922 0162">076 922 0162</a></li>
                                </ul>
                            </div>
                            <div class="acount__top-bar">
                                <ul class="acount__items">
                                    <li style="margin-right: 15px;"><a href=""><i class="fas fa-search"></i></a></li>
                                    <li><a href="dangnhap.php">
                                    <?php
                                        if(isset($_SESSION['khachhang'])){
                                            echo $user['tenkh'];?>
                                                <li style = "margin-left: 15px;"><a href="dangxuat.php"><i class="fas fa-sign-out-alt"></i></a></li>
                                            <?php
                                        }else{
                                            ?>
                                                <i class="fas fa-user"> </i>
                                            <?php
                                        }
                                    ?>
                                    </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="navbar">
                        <div class="navbar__container">
                            <div class="navbar__logo">
                                <a href="" class="navbar__logo-link">
                                    <img width="150px" height="60px" src="./accset/img/logo-mona.png" alt="" title="Karo">
                                </a>
                            </div>
                            <div class="navbar__list d-flex">
                                <div class="navbar__list__modul">
                                    <ul class="modul__list d-flex">
                                        <li class="modul__item">
                                            <a href="index.php" class="modul__item-link">Trang chủ</a>
                                        </li>
                                        <li class="modul__item">
                                            <a href="" class="modul__item-link">giới thiệu</a>
                                        </li>
                                        <li class="modul__item">
                                            <a href="#" class="modul__item-link">sản phẩm</a>
                                            <ul class="modul__item-list">
                                                <?php 
                                                    include ("loaisp.php");
                                                ?>
                                                
                                            </ul>
                                        </li>
                                        <li class="modul__item">
                                            <a href="" class="modul__item-link">tin tức</a>
                                        </li>
                                        <li class="modul__item">
                                            <a href="" class="modul__item-link">liên hệ</a>
                                        </li>
                                        <li class="" style="list-style: none; border-right: 1px solid #ccc;"></li>
                                        <li class="modul__item navbar__icon navbar__cart" title="Giỏ hàng">
                                            <a href="" class=" cart-text">GIỎ HÀNG</a>
                                            <a href="" class="navbar__acount " style="font-size: 27px;">
                                                <i class="fas fa-shopping-bag" ></i>
                                                <?php 
                                                    $count = 0;
                                                    if(isset($_SESSION['cart'])){
                                                        $count = count($_SESSION['cart']);
                                                    }
                                                ?>
                                                <p style = ""><?php echo $count ?></p>
                                            </a>
                                            <ul class="modul__item-list" style="margin-top: 30px;">
                                                <li class="item-list__link" style="color: #000;background-color: #fff;">
                                                    Chưa có sản phẩm nào trong giỏ hàng
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shopping Cart -->
            <div class="shopping__cart">
                <div class="shoppingCart-container">
                    <div class="shoppingCart__title">
                        <h3>Giỏ hàng</h3>
                    </div>
                    <div class="shoppingCart__body">
                        <div class="cart__table">
                            <table class="cart__tableBox">
                                <tr class="shoppingCart__item cart_row">
                                    <th class="th__product">Ảnh sản phẩm</th>
                                    <th class="th__products">Tên sản phẩm</th>
                                    <th class="quantity">Số lượng</th>
                                    <th class="linePrice">Tổng tiền</th>
                                    <th class="remove">Xóa</th>
                                </tr>
                                <?php
                                    if(isset($_SESSION['cart'])){
                                        $tongtien = 0;
                                        foreach($_SESSION['cart'] as $cart_item){
                                            $thanhtien = $cart_item['soluong'] * $cart_item['gia'];
                                            $tongtien+=$thanhtien;
                                            ?>
                                                <tr class="shoppingCart__item cart_items">
                                                    <td class="item_image">
                                                        <img src="./accset/img/<?php echo $cart_item['anh'] ?>" alt="" width="70%">
                                                    </td>
                                                    <td class="item_number">
                                                        <div class="text__item">
                                                            <p><?php echo $cart_item['tensp'] ?></p>
                                                            <p > Giá: <?php echo number_format($cart_item['gia'],0,',','.').' vnđ'?> <input type = "hidden" class = "iprice" value = "<?php echo number_format($cart_item['gia'],0,',','.').' vnđ'?>"> </p>
                                                        </div>
                                                    </td>
                                                    <td class="item_number" style = "display:flex;margin-top: 50px;margin-left: 7px;">
                                                        <a href="shopingcart.php?page=cong&masp=<?php echo $cart_item['masp']; ?>"><i style = "border: 1px solid #ccc;padding: 5px;color: #000;font-size: 10px;background-color: #ccc;" class="fas fa-plus"></i></a>
                                                        <p style = "padding: 1px 16px;border: 1px solid #ccc;"><?php echo $cart_item['soluong'] ?></p>
                                                        <a href="shopingcart.php?page=tru&masp=<?php echo $cart_item['masp']; ?>"><i id = "s" style = "border: 1px solid #ccc;padding: 5px;color: #000;font-size: 10px;background-color: #ccc;" class="fas fa-minus"></i></a>
                                                        
                                                    </td>
                                                    <td class="item__pried" style="text-align: center;">
                                                        <p class="cart-price"><?php echo number_format($thanhtien,0,',','.').' vnđ' ?></p>
                                                    </td>
                                                    <td class="item__delete" style="text-align: center;">
                                                        <a style = "color:#000;" href="shopingcart.php?page=xoa&masp=<?php echo $cart_item['masp']; ?>"><i class="far fa-trash-alt"></i></a>
                                                    </td>
                                                </tr>
                                            <?php
                                        }
                                    }else{
                                        ?>
                                        <tr class="shoppingCart__item cart_items">
                                            <td colspan = "5" class="item__pried" style="text-align: center;margin-top: 28px;">
                                                <p style="margin-top: 28px;">Không có sản phẩm nào trong giỏ hàng</p>
                                            </td>
                                        </tr>
                                    
                                <?php 
                                    }
                                ?>
                            </table>
                            <div class="cart__button-action">
                                <a href="index.php" class="cart__button-link">Tiếp tục mua sắm</a>
                            </div>
                        </div>
                        <div class="cart__payment">
                            <div class="cart__payment-total">
                                <span>Tổng tiền</span>
                                <?php if(isset($_SESSION['cart'])){?>
                                <span class="cart__payment-sum"><?php echo number_format($tongtien,0,',','.').' vnđ' ?></span>
                                <?php }else{?>
                                    <span class="cart__payment-sum">0 vnđ</span>
                                    <?php }?>
                            </div>
                            <div class="cart__payment-pay">
                                <a href="#" class="cart__button-link link-pay">thanh toán</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- end cart -->
     

            <!-- footer -->
            <div class="footer">
                <div class="footer-container">
                    <div class="footer__head">
                        <div class="footer__logo">
                            <img src="./accset/img/logo-mona.png" alt="" style="max-width: 100px;" class="footer__logo-img">
                        </div>
                        <div class="footer__block">
                            <div class="footer__block-icon">
                                <i class="fas fa-home"></i>
                            </div>
                            <div class="footer__block__body">
                                <span class="footer__name">Địa chỉ:</span>
                                <p class="footer__value">Cổ Nhuế - Bắc Từ Liêm - Hà Nội</p>
                            </div>
                        </div>
                        <div class="footer__block">
                            <div class="footer__block-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="footer__block__body">
                                <span class="footer__name">Email:</span>
                                <a href="mailto:Haibh0903@gmail.com" class="footer__value">Nguyentientuananh@gmail.com</a>
                            </div>
                        </div>
                        <div class="footer__block">
                            <div class="footer__block-icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="footer__block__body">
                                <span class="footer__name">Điện thoại:</span>
                                <a href="tel:035 285 0379" class="footer__value">035 285 0379</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="payment">
                <div class="payment__logo">
                    <img src="./accset/img/payment-icon.png" style="max-width: 100%; max-height: 40px;" alt="">
                </div>
                <ul class="payment__list">
                    <li class="payment__item">
                        <a href="#" class="payment__item-link">Trang chủ</a>
                    </li>
                    <li class="payment__item">
                        <a href="#" class="payment__item-link">giới thiệu</a>
                    </li>
                    <li class="payment__item">
                        <a href="#" class="payment__item-link">sản phẩm</a>
                    </li>
                    <li class="payment__item">
                        <a href="#" class="payment__item-link">tin tức
                    <li class="payment__item" style="border-right: none">
                        <a href="#" class="payment__item-link">liên hệ</a>
                    </li>
                </ul>
                <div class="payment__license">
                    © Bản quyền thuộc về Nguyentientuananh | <a href="https://www.facebook.com/Haibuihoang.09" class="NTTA">NTTA</a>
                </div>
            </div>

            <!--End  footer -->
        </div>
    </div>
    
</body>
</html>
