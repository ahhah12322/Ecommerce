
<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from preview.freethemescloud.com/oswan/login-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 16:15:32 GMT -->
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
                        <h2>Quên mật khẩu</h2>
                        <ul>
                            <li>
                                <a href="#">home</a>
                            </li>
                            <li>Quên mật khẩu</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="login-register-area ptb-130">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 ml-auto mr-auto">
                            <div class="login-register-wrapper">
                                <div class="login-register-tab-list nav">
                                    <a class="active" data-toggle="tab" href="#lg1">
                                        <h4> Quên mật khẩu </h4>
                                    </a>
                                </div>
                                <div class="tab-content">
                                    <div id="lg1" class="tab-pane active">
                                        <div class="login-form-container">
                                            <div class="login-form">
                                                <form action="#" method="post">
                                                    <input name="user-email" placeholder="Nhập email của bạn" type="email">
                                                    <div class="button-box">
                                                        <button type="submit" class="btn-style cr-btn"><span>Tiếp tục</span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@include('user.app.footer')
