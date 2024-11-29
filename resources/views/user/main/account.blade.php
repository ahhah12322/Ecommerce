@include('user.app.header')
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
                            <form action="#">
                                <div class="checkbox-form">
                                    <h3>Thông tin tài khoản</h3>

                                    @if ($user)
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p><strong>Tên:</strong> {{ Auth::user()->name }}</p>
                                            <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                                            <p><strong>Số điện thoại:</strong> {{ Auth::user()->phone ?? 'chưa có' }}</p>
                                            <p><strong>Địa chỉ:</strong> {{ Auth::user()->address ?? 'chưa có' }}</p>
                                        </div>

                                    </div>
                                    @else
                                    <p>Bạn chưa đăng nhập.</p>
                                    @endif
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- checkout-area end -->
 @include('user.app.footer')
