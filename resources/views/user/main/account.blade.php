@include('user.app.header')
    <div class="wrapper">
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
                                            <p><strong>CCCD:</strong> {{ Auth::user()->CCCD ?? 'chưa có' }}</p>
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
    </div>
        <!-- checkout-area end -->
 @include('user.app.footer')
