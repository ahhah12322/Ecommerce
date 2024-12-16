@include('user.app.header')
<div class="wrapper">
    <div class="container">
        <nav aria-label="breadcrumb" class="breadcrumb-nav ">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="/tai-khoan">Tài Khoản</a></li>
            </ol>
        </nav>
    </div><!-- End .breadcrumb-nav -->
    <!-- checkout-area start -->
    <div class="checkout-area">
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
                                            <p><strong>Số điện thoại:</strong> {{ Auth::user()->phone ?? 'chưa có' }}
                                            </p>
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
