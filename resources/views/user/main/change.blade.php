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
                    @include('user.app.sidebar-account', ['user' => Auth::user()])
                    <div class="col-md-8">
                        <div class="product-details-content">
                            @if (session('success'))
                                <p style="color: green;">{{ session('success') }}</p>
                            @endif

                            @if ($errors->any())
                                <ul style="color: red;">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif

                            <form action="{{ route('user.update') }}" method="POST">
                                @csrf
                                <div class="checkbox-form">
                                    <h3>Thay đổi thông tin</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Name <span class="required">*</span></label>
                                                <input type="text" name="name" value="{{ old('name', Auth::user()->name) }}" required />
                                            </div>
                                            <div class="checkout-form-list">
                                                <label>Email <span class="required">*</span></label>
                                                <input type="email" name="email" value="{{ old('email', Auth::user()->email) }}" required />
                                            </div>
                                            <div class="checkout-form-list">
                                                <label>Địa chỉ <span class="required">*</span></label>
                                                <input type="text" name="address" value="{{ old('address', Auth::user()->address) }}" required />
                                            </div>
                                            <div class="checkout-form-list">
                                                <label>Số điện thoại <span class="required">*</span></label>
                                                <input type="text" name="phone" value="{{ old('phone', Auth::user()->phone) }}" required />
                                            </div>
                                            <div class="checkout-form-list">
                                                <label>CCCD <span class="required"></span></label>
                                                <input type="text" name="CCCD" value="{{ old('CCCD', Auth::user()->CCCD) }}" required pattern="\d{11,12}" minlength="11" maxlength="12" title="Vui lòng nhập 11 hoặc 12 chữ số"/>
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
 @include('user.app.footer')
