@include('user.app.header')
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
