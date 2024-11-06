<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from preview.freethemescloud.com/oswan/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 16:15:32 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Oswan - eCommerce HTML5 Template</title>
    <meta name="description" content="Live Preview Of Oswan eCommerce HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/Frontend/img/logo/icon.png">

    <!-- all css here -->
    <link rel="stylesheet" href="assets/Frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/Frontend/css/animate.css">
    <link rel="stylesheet" href="assets/Frontend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/Frontend/css/chosen.min.css">
    <link rel="stylesheet" href="assets/Frontend/css/meanmenu.min.css">
    <link rel="stylesheet" href="assets/Frontend/css/themify-icons.css">
    <link rel="stylesheet" href="assets/Frontend/css/icofont.css">
    <link rel="stylesheet" href="assets/Frontend/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/Frontend/css/bundle.css">
    <link rel="stylesheet" href="assets/Frontend/css/style.css">
    <link rel="stylesheet" href="assets/Frontend/css/responsive.css">
    <script src="assets/Frontend/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <div class="wrapper">
            <header>
                    <div class="header-area transparent-bar ptb-55">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-4">
                                    <div class="logo-small-device">
                                        <a href="index.html"><img alt="" src="assets/Frontend/img/logo/megologo.png"></a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-8">
                                    <div class="header-contact-menu-wrapper pl-45">
                                        <div class="header-contact">
                                            <p>LIÊN HỆ VỚI CHÚNG TÔI +84 123456789</p>
                                        </div>
                                        <div class="menu-wrapper text-center">
                                            <button class="menu-toggle">
                                                <img class="s-open" alt="" src="assets/Frontend/img/icon-img/menu.png">
                                                <img class="s-close" alt="" src="assets/Frontend/img/icon-img/menu-close.png">
                                            </button>
                                            <div class="main-menu">
                                                <nav>
                                                    <ul>
                                                        <li><a href="">Trang chủ</a></li>
                                                        <li class="active"><a href="">Giới thiệu</a></li>
                                                        <li><a href="">Hãng xe</a>
                                                            <ul>
                                                                <li><a href="">Hà Nội</a></li>
                                                                <li><a href="">Sài Gòn</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="">Địa điểm thuê xe</a>
                                                            <ul>
                                                                <li><a href="">Hà Nội</a></li>
                                                                <li><a href="">Sài Gòn</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="">Liên hệ</a></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="header-cart-wrapper">
                            <div class="header-cart">
                                <button class="icon-cart">
                                    <i class="ti-shopping-cart"></i>
                                    <span class="count-style">02</span>
                                </button>

                            </div>
                        </div>
                    </div>
                </header>
        <div class="breadcrumb-area pt-255 pb-170" style="background-image: url(assets/Frontend/img/banner/banner-4.jpg)">
            <div class="container-fluid">
                <div class="breadcrumb-content text-center">
                    <h2>tài khoản</h2>
                    <ul>
                        <li>
                            <a href="#">home</a>
                        </li>
                        <li>tài khoản</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- checkout-area start -->
        <div class="checkout-area pt-130 pb-100">
            <div class="container">
                <div class="row">
                 @include('user.app.sidebar-account')
                    <div class="col-md-8">
                        <div class="product-details-content">
                            <form action="#">
                                <div class="checkbox-form">
                                    <h3>Thay đổi thông tin</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Name <span class="required">*</span></label>
                                                <input type="text" placeholder="" />
                                            </div>
                                            <div class="checkout-form-list">
                                                <label>Email <span class="required">*</span></label>
                                                <input type="text" placeholder="" />
                                            </div>
                                            <div class="checkout-form-list">
                                                <label>Địa chỉ <span class="required">*</span></label>
                                                <input type="text" placeholder="" />
                                            </div>
                                            <div class="checkout-form-list">
                                                <label>Số điện thoại <span class="required">*</span></label>
                                                <input type="text" placeholder="" />
                                            </div>
                                            <div class="button-box text-center">
                                                    <button type="submit" class="btn-style cr-btn"><span>Cập nhật</span></button>
                                                </div>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- checkout-area end -->
        <div class="newsletter-area">
            <div class="container">
                <div class="newsletter-wrapper-all theme-bg-2">
                    <div class="row">
                        <div class="col-lg-5 col-12 col-md-12">
                            <div class="newsletter-img bg-img"
                                style="background-image: url(assets/Frontend/img/banner/newsletter-bg.png)">
                                <img alt="image" src="assets/Frontend/img/team/newsletter-img.png">
                            </div>
                        </div>
                        <div class="col-lg-7 col-12 col-md-12">
                            <div class="newsletter-wrapper text-center">
                                <div class="newsletter-title">
                                    <h3>ĐĂNG KÝ NHẬN TIN MỚI NHẤT</h3>
                                </div>
                                <div id="mc_embed_signup" class="subscribe-form">
                                    <form action="" method="post" id="mc-embedded-subscribe-form"
                                        name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll" class="mc-form">
                                            <input type="email" value="" name="EMAIL" class="email"
                                                placeholder="Nhập email ..." required>
                                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                            <div class="mc-news" aria-hidden="true"><input type="text"
                                                    name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1"
                                                    value=""></div>
                                            <div class="clear"><input type="submit" value="Subscribe" name="subscribe"
                                                    id="mc-embedded-subscribe" class="button"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
                <div class="footer-top pt-210 pb-98 theme-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="footer-widget mb-30">
                                    <div class="footer-logo">
                                        <a href="index.html">
                                            <img src="assets/Frontend/img/logo/megologo.png" alt="">
                                        </a>
                                    </div>
                                    <div class="footer-about">
                                        <p><span>MEGO</span> là website trực tuyến cho thuê và chia sẻ xe máy tự lái dành cho
                                            các khách du lịch </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="footer-widget mb-30 pl-60">
                                    <div class="footer-widget-title">
                                        <h3>Tìm hiểu thêm</h3>
                                    </div>
                                    <div class="quick-links">
                                        <ul>
                                            <li><a href="">Giới thiệu</a></li>
                                            <li><a href="">Liên hệ</a></li>
                                            <li><a href="">Bảng giá</a></li>
                                            <li><a href="">Chính sách</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="footer-widget mb-30">
                                    <div class="footer-widget-title">
                                        <h3>Liên hệ</h3>
                                    </div>
                                    <div class="food-info-wrapper">
                                        <div class="food-address">
                                            <div class="food-info-title">
                                                <span>Địa chỉ</span>
                                            </div>
                                            <div class="food-info-content">
                                                <p>123, Nguyễn Trãi, Thanh Xuân, Hà Nội</p>
                                            </div>
                                        </div>
                                        <div class="food-address">
                                            <div class="food-info-title">
                                                <span>Số điện thoại</span>
                                            </div>
                                            <div class="food-info-content">
                                                <p>+84 123456789</p>
                                            </div>
                                        </div>
                                        <div class="food-address">
                                            <div class="food-info-title">
                                                <span>Email</span>
                                            </div>
                                            <div class="food-info-content">
                                                <a href="#">info@mego.vn</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom ptb-35 black-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-12">
                                <div class="copyright">
                                    <p>©Copyright, 2019 All Rights Reserved by <a href="#">FPOLY</a></p>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="footer-payment-method">
                                    <a href="#"><img alt="" src="assets/Frontend/img/icon-img/payment.png"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        <!-- modal -->

    </div>











    <!-- all js here -->
    <script src="assets/Frontend/js/vendor/jquery-1.12.0.min.js"></script>
    <script src="assets/Frontend/js/popper.js"></script>
    <script src="assets/Frontend/js/bootstrap.min.js"></script>
    <script src="assets/Frontend/js/isotope.pkgd.min.js"></script>
    <script src="assets/Frontend/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/Frontend/js/jquery.counterup.min.js"></script>
    <script src="assets/Frontend/js/waypoints.min.js"></script>
    <script src="assets/Frontend/js/ajax-mail.js"></script>
    <script src="assets/Frontend/js/owl.carousel.min.js"></script>
    <script src="assets/Frontend/js/plugins.js"></script>
    <script src="assets/Frontend/js/main.js"></script>
</body>

<!-- Mirrored from preview.freethemescloud.com/oswan/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 16:08:50 GMT -->

</html>
