<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from preview.freethemescloud.com/oswan/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 16:04:25 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MeGo - Thuê xe du lịch tự lái</title>
    <meta name="description" content="Live Preview Of Oswan eCommerce HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/Frontend/img/logo/icon.png">

    <!-- all css here -->
    <link rel="stylesheet" href="assets/Frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/Frontend/css/animate.css">
    <link rel="stylesheet" href="assets/Frontend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/Frontend/css/chosen.min.css">
    <link rel="stylesheet" href="assets/Frontend/css/icofont.css">
    <link rel="stylesheet" href="assets/Frontend/css/themify-icons.css">
    <link rel="stylesheet" href="assets/Frontend/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/Frontend/css/meanmenu.min.css">
    <link rel="stylesheet" href="assets/Frontend/css/bundle.css">
    <link rel="stylesheet" href="assets/Frontend/css/style.css">
    <link rel="stylesheet" href="assets/Frontend/css/responsive.css">
    <script src="assets/Frontend/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <div class="wrapper">

        <!-- header start -->
        <header>
            <div class="header-area transparent-bar ptb-55">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-4">
                            <div class="logo-small-device">
                                <a href="{{ route('index') }}"><img alt="" src="assets/Frontend/img/logo/megologo.png"></a>
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
                                        <img class="s-close" alt=""
                                            src="assets/Frontend/img/icon-img/menu-close.png">
                                    </button>
                                    <div class="main-menu">
                                        <nav>
                                            <ul>
                                                <li><a href="/">Trang chủ</a></li>
                                                <li class="active"><a href="{{ route('index') }}">Giới thiệu</a></li>
                                                {{-- <li><a href="{{ route('index') }}">Trang chủ</a></li> --}}
                                                {{-- <li class="active"><a href="">Giới thiệu</a></li> --}}
                                                <li><a href="{{ route('vehicle.shop') }}">Hãng xe</a>
                                                    <ul>
                                                        {{-- @foreach ($brands as $brand)
                                                            <li><a
                                                                    href="/shop/{{ $brand->BrandName }}">{{ $brand->BrandName }}</a>
                                                            </li>
                                                        @endforeach --}}
                                                    </ul>
                                                </li>
                                                <li><a href="">Địa điểm thuê xe</a>
                                                    <ul>
                                                        <li><a href="/shop/location/Hà%20Nội">Hà Nội</a></li>
                                                        <li><a href="/shop/location/Hồ%20Chí%20Minh">Hồ Chí Minh</a>
                                                        </li>
                                                        <li><a href="/shop/location/Đà%20Nẵng">Đà Nẵng</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="/lien-he">Liên hệ</a></li>
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
                            <a href="/yeu-thich"> <i class="ti-shopping-cart"></i>
                                <span class="count-style">{{ $cartCount }}</span></a>

                            <a href="/tai-khoan"> <i style="margin-left: 30px;" class="ti-user"></i> </a>
                        </button>

                    </div>
                </div>
            </div>
        </header>
