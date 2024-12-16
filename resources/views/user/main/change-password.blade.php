@include('user.app.header')

<div class="container">
    <nav aria-label="breadcrumb" class="breadcrumb-nav ">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="/tai-khoan">Tài Khoản</a></li>
            <li class="breadcrumb-item"><a href="/doi-thong-tin">Thay đổi thông tin</a></li>

        </ol>
    </nav>
</div><!-- End .breadcrumb-nav -->
<!-- checkout-area start -->
<div class="checkout-area ">
    <div class="container">
        <div class="row">
            @include('user.app.sidebar-account', ['user' => Auth::user()])
            <div class="col-md-8">
                <div class="product-details-content">
                    @if (session('success'))
                        <p style="color: green;">{{ session('success') }}</p>
                    @endif

                    <!-- Hiển thị lỗi -->
                    @if ($errors->any())
                        <ul style="color: red;">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <form action="{{ route('password.update') }}" method="POST">
                        <div class="checkbox-form">
                            <h3>Đổi mật khẩu</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    @csrf
                                    <div class="checkout-form-list">
                                        <label>Mật khẩu cũ <span class="required">*</span></label>
                                        <input type="password" name="current_password" id="current_password"
                                            required><br><br>
                                    </div>
                                    <div class="checkout-form-list">
                                        <label>Mật khẩu mới <span class="required">*</span></label>
                                        <input type="password" name="new_password" id="new_password" required><br><br>
                                    </div>
                                    <div class="checkout-form-list">
                                        <label>Nhập lại mật khẩu mới <span class="required">*</span></label>
                                        <input type="password" name="new_password_confirmation"
                                            id="new_password_confirmation" required><br><br>
                                    </div>
                                    <div class="button-box text-center">
                                        <button type="submit" class="btn-style cr-btn btn-block"><span>Đổi
                                                mật khẩu</span></button>
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
