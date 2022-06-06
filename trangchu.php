<?php  
    session_start(); 
    $user = (isset($_SESSION['khachhang'])) ? $_SESSION['khachhang']:[];
?>
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
                                    <a href="#" class="modul__item-link">Trang chủ</a>
                                </li>
                                <li class="modul__item">
                                    <a href="" class="modul__item-link">giới thiệu</a>
                                </li>
                                <li class="modul__item">
                                    <a href="./sanpham.php" class="modul__item-link">sản phẩm</a>
                                </li>
                                <li class="modul__item">
                                    <a href="" class="modul__item-link">tin tức</a>
                                </li>
                                <li class="modul__item">
                                    <a href="" class="modul__item-link">liên hệ</a>
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

    <!-- slider-->
    <div class="slider">

        <!-- Slideshow container -->
        <div class="slideshow-container">
            
            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <img src="./accset/img/slide-1.jpg" style="width:100%;" >
                <div class="text__content rw" style="left: 5%;">
                    <h1><span style="color: #d00122;">Mona</span> Jewerly</h1>
                    <p>Mona Jewerly chuyên bán các mặt hàng trang sức phụ kiện chất lượng nhập khẩu từ Thái Lan, Hàn Quốc, Trung Quốc…. Hàng có sẵn. Mẫu mới về liên tục mỗi tuần. Giá cả thấp nhất thị trường và có nhiều
                        ưu đãi đặc biệt dành cho khách hàng quen thuộc.</p>
                    <a href="" target="_self" class="btn_slider">
                        <span>Xem sản phẩm</span>
                        <i class="icon-shopping-bag" ></i>
                    </a>
                </div>
            </div>
            <div class="mySlides fade">
                <img src="./accset/img/slide-2.jpg" style="width:100%;">
                <div class="text__content lw" style="top: 32%;right: 5%;width: 46%;height: 40%;">
                    <h1 style="margin-left: 38%;"><span style="color: #d00122;">Mona</span> Jewerly</h1>
                    <p>Mona Jewerly chuyên bán các mặt hàng trang sức phụ kiện chất lượng nhập khẩu từ Thái Lan, Hàn Quốc, Trung Quốc…. Hàng có sẵn. Mẫu mới về liên tục mỗi tuần. Giá cả thấp nhất thị trường và có nhiều
                        ưu đãi đặc biệt dành cho khách hàng quen thuộc.</p>
                    <a href="" target="_self" class="btn_slider" style="margin-left: 73%;">
                        <span>Xem sản phẩm</span>
                        <i class="icon-shopping-bag" ></i>
                    </a>
                </div>
            </div>
            <div class="mySlides fade" style="height: 600px;overflow: hidden;">
                <img src="./accset/img/slide-3s.jpg" style="width: 100%">
                <div class="text__content rw" style=" top: 32%; left: 5%; width: 36%; height: 37%;">
                    <h1 >Sản phẩm dành cho các cặp đôi</h1>
                    
                    <a href="" target="_self" class="btn_slider">
                        <span>Xem sản phẩm</span>
                        <i class="icon-shopping-bag" ></i>
                    </a>
                </div>
            </div>
            
            <!-- The dots/circles -->
            <div class="slider__dot" style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </div>
        <br>
    </div>
    <!--                    Banner                  -->
    <div class="banner">
        <div class="banner__container d-flex">
            <div class="banner__block">
                <img src="./accset/img/feature-1.jpg" alt="" style="zoom: 1.03;">
                <div class="banner__link">
                    <div class="hover__bounce ">
                        <h2 class="banner__title ">
                            Thời trang 2021
                        </h2>
                    </div>
                    <div class="hover__baner">
                        <p><h2>Giảm 50%</h2></p>
                        <a href="" class="btn__hover-banner">Xem ngay</a>
                    </div>
                </div>
            </div>
            <div class="banner__block">
                <img src="./accset/img/feature-2.jpg" alt="" style="zoom: 1.03;">
                <div class="banner__link">
                    <div class="hover__bounce ">
                        <h2 class="banner__title ">
                            Thời trang nam
                        </h2>
                    </div>
                    <div class="hover__baner">
                        <p><h2>Giảm 20%</h2></p>
                        <a href="" class="btn__hover-banner">Xem ngay</a>
                    </div>
                </div>
            </div>
            <div class="banner__block">
                <img src="./accset/img/feature-4.jpg" alt=""style="zoom: 1.03;">
                <div class="banner__link">
                    <div class="hover__bounce ">
                        <h2 class="banner__title ">
                            Trang sức nữ
                        </h2>
                    </div>
                    <div class="hover__baner">
                        <p><h2>Giảm 50%</h2></p>
                        <a href="" class="btn__hover-banner">Xem ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ENd banner -->

    <!-- Start product-->
    <div class="product ">
        <div class="product__container">
            <div class="product__title">
               <h1>Sản phẩm mới</h1>
               <div class="icon-flower">
                   <div class="img-iner">
                       <img src="./accset/img/icon-flower.png" alt="">
                   </div>
               </div>
               <p>Giá cả thấp nhất thị trường và có nhiều ưu đãi đặc biệt dành cho khách hàng quen thuộc.</p>

            </div>
            
            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php 
                        include ("allproduct.php");
                    ?>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
    
    <!-- end product -->

    <!-- go section -->
    <div class="section">
        <div class="section__container">
            <div class="section__bill">
                <div class="sec__bill-banner">
                    <div class="sec-img">
                        <img src="./accset/img/summer.jpg" alt="" style=" zoom: 1.13;">
                    </div>
                    <div class="sec__bill-text">
                        <div class="is-border" ></div>
                        <div class="sec-text">
                            <p>Xu hướng mơi 2019</p>
                            <h2>Sản phẩm mùa hè</h2>
                            <a href="">Xem sản phẩm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end di section -->

    <!-- product - banchay-->

    <div class="product s">
        <div class="product__container">
            <div class="product__title">
               <h1>Sản phẩm bán chạy</h1>
               <div class="icon-flower">
                   <div class="img-iner">
                       <img src="./accset/img/icon-flower.png" alt="">
                   </div>
               </div>
               <p>Giá cả thấp nhất thị trường và có nhiều ưu đãi đặc biệt dành cho khách hàng quen thuộc.</p>

            </div>
            
            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php 
                        include ("allproduct.php");
                    ?>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
    <!-- end product ban chay -->

    <div class="borders"></div>

    <!-- product khác -->
    <div class="product" style="margin-bottom: 70px;">
        <div class="product__container">
            <div class="product__title">
               <h1>Sản phẩm khác</h1>
               <div class="icon-flower">
                   <div class="img-iner">
                       <img src="./accset/img/icon-flower.png" alt="">
                   </div>
               </div>
               <p>Giá cả thấp nhất thị trường và có nhiều ưu đãi đặc biệt dành cho khách hàng quen thuộc.</p>

            </div>
            <div class="banner">
                <div class="banner__container d-flex">
                    <!-- item  1 -->
                    <div class="Banner-item">
                        <div class="hover__img">
                            <a href="" >
                                <img class="density" src="./accset/img/cate2.jpg" alt=""style="zoom: 1.03;">
                            </a>
                        </div>
                        <div class="product-link">
                            <h1>Túi xách</h1>
                            <p>7 loại</p>
                        </div>
                    </div>
                    <!-- item  2 -->
                    <div class="Banner-item">
                        <div class="hover__img">
                            <a href="" >
                                <img class="density" src="./accset/img/cate3.jpg" alt=""style="zoom: 1.03;">
                            </a>
                        </div>
                        <div class="product-link">
                            <h1>Váy - Đầm</h1>
                            <p>3 loại</p>
                        </div>
                    </div>
                    <!-- item  3 -->
                    <div class="Banner-item">
                        <div class="hover__img">
                            <a href="" >
                                <img class="density" src="./accset/img/cate.jpg" alt=""style="zoom: 1.03;">
                            </a>
                        </div>
                        <div class="product-link">
                            <h1>Mắt kính</h1>
                            <p>7 loại</p>
                        </div>
                    </div>
                    <!-- item  4 -->
                    <div class="Banner-item">
                        <div class="hover__img">
                            <a href="" >
                                <img class="density" src="./accset/img/cate4.jpg" alt=""style="zoom: 1.03;">
                            </a>
                        </div>
                        <div class="product-link">
                            <h1>Vòng đeo tay</h1>
                            <p>7 loại</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End product khac -->

    <!-- Contact  -->

    <div class="contact">
        <div class="contact__container">
            <img src="./accset/img/banner-2-aunzcaus.png" alt="" width="100%" style="filter: brightness(50%);">
            <div class="contact__item ">
                <div class="contact__img">
                    <img src="./accset/img/customer-2-150x150.png" alt="" width="100px" height="100px">
                </div>
                <div class="contact__text">
                    <i>
                        <h3>Nga My</h3>
                        <p>Mona Jewerly chuyên bán các mặt hàng trang sức phụ kiện chất lượng nhập khẩu từ Thái Lan, Hàn Quốc, Trung Quốc…. Hàng có sẵn. Mẫu mới về liên tục mỗi tuần. Giá cả thấp nhất thị trường
                            và có nhiều ưu đãi đặc biệt dành cho khách hàng quen thuộc..</p>

                    </i>
                </div>
            </div>
        </div>
    </div>

    <!-- End  Contact  -->

    <!-- Blog   -->

    <div class="product" style="margin-bottom: 70px;">
        <div class="product__container">
            <div class="product__title">
               <h1>Tin tức</h1>
               <div class="icon-flower">
                   <div class="img-iner">
                       <img src="./accset/img/icon-flower.png" alt="">
                   </div>
               </div>
               <p>Giá cả thấp nhất thị trường và có nhiều ưu đãi đặc biệt dành cho khách hàng quen thuộc.</p>

            </div>
            <div class="blog">
                <div class="blog__container d-flex">
                    <!-- item  1 -->
                    <div class="blog-item">
                        <div class="hover__img blog-img">
                            <a href="" >
                                <img class="density" src="./accset/img/nes3.jpg" alt="" style="width: 385px; height: 215px;">
                            </a>
                        </div>
                        <div class="blog__text">
                            <h5>Vòng tay hình rắn đẹp ngỡ ngàng</h5>
                            <div class="blog-boder"></div>
                            <p>Bạn có nghĩ rằng, rắn cũng có thể mang đến vẻ đẹp quyến rũ cho đôi tay của bạn? Rắn là một trong những biểu ... </p>
                            <a href="">Đọc thêm</a>
                        </div>
                    </div>
                    <!-- item  2 -->
                    <div class="blog-item">
                        <div class="hover__img blog-img">
                            <a href="" >
                                <img class="density" src="./accset/img/news22.jpg" alt="" style="width: 385px; height: 215px;" >
                            </a>
                        </div>
                        <div class="blog__text">
                            <h5>Lý Nhã Kỳ xuất hiện gợi cảm với váy cúp ngực và trang sức kim cương</h5>
                            <div class="blog-boder"></div>
                            <p>Người đẹp Lý Nhã Kỳ xuất hiện với phong cách quý phái, gợi cảm trong triển lãm kim cương tối 28/7. Tối 28/7, Lý Nhã Kỳ khai ... </p>
                            <a href="">Đọc thêm</a>
                        </div>
                    </div>
                    <!-- item  3 -->
                    <div class="blog-item">
                        <div class="hover__img blog-img">
                            <a href="" >
                                <img class="density" src="./accset/img/news11.jpg" alt="" style="width: 385px; height: 215px;">
                            </a>
                        </div>
                        <div class="blog__text">
                            <h5>Ngọc trai &#8211; Phụ kiện đang được sao Việt mê mẩn những ngày đầu năm 2019</h5>
                            <div class="blog-boder"></div>
                            <p>Bộ sưu tập &#8220;Bí mật đại dương&#8221; của thương hiệu Long Beach Pearl vừa ra mắt nhận được sự ủng hộ nhiệt tình từ các ... </p>
                            <a href="">Đọc thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Blog -->

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