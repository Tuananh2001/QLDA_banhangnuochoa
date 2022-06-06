<?php  
    include ("admin/config/config.php"); 
    session_start();
    $user = (isset($_SESSION['khachhang'])) ? $_SESSION['khachhang']:[];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản Phẩm</title>
    <link rel="stylesheet" href="./accset/css/trangchu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
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
                                    <a href="#" class="modul__item-link">giới thiệu</a>
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
                                    <a href="#" class="modul__item-link">tin tức</a>
                                </li>
                                <li class="modul__item">
                                    <a href="#" class="modul__item-link">liên hệ</a>
                                </li>
                                <li class="" style="list-style: none; border-right: 1px solid #ccc;"></li>
                                <li class="modul__item navbar__icon navbar__cart" title="Giỏ hàng">
                                    <a href="shopingcart.php" class=" cart-text">GIỎ HÀNG</a>
                                    <a href="shopingcart.php" class="navbar__acount " style="font-size: 27px;">
                                        <i class="fas fa-shopping-bag" ></i>
                                        <?php 
                                            $count = 0;
                                            if(isset($_SESSION['cart'])){
                                                $count = count($_SESSION['cart']);
                                            }
                                        ?>
                                        <p><?php echo $count ?></p>
                                    </a>
                                    
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header-->
    
    <div class="content">
        <div class="details__product"> 
            <?php include ("ctsp.php") ?>
            
            
            <div class="similar__product">
                <div class="similar__product-title">
                    <h1>Sản phẩm tương tự</h1>
                </div>
                <div class="product" style = "flex-wrap: wrap;display: flex;">
                    <?php
                    
                    include ("proc.php");
                    ?>
                    <style>
                     
                     .swiper-slide{
                         margin-right: 20px;
                         width: 220px !important;
                         margin-bottom: 30px;
                     }
                     .box {
                         width: 220px !important;
                         box-shadow: 0px 0px 3px 0px rgb(184 184 184);
                         height: 340px;
                     }
                     .type {
                         padding: 0;
                     }
                     .btn__price  {
                         margin-left: 26%;
                         font-size: 12px;
                         
                     }
                    .box:hover{
                         box-shadow: 0px 0px 10px 0px rgb(184 184 184);
                     }
                 </style>
                </div>
            </div>
        </div>
    </div>
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
</body>
</html>