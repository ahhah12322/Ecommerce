@include('user.app.header')
        <div class="breadcrumb-area pt-255 pb-170" style="background-image: url(assets/Frontend/img/banner/banner-4.jpg)">
            <div class="container-fluid">
                <div class="breadcrumb-content text-center">
                    <h2>Đặt xe</h2>
                    <ul>
                        <li>
                            <a href="{{ route('index') }}">home</a>
                        </li>
                        <li>đặt xe</li>
                    </ul>
                </div>
            </div>
        </div>
        <form action="{{ route('completeRental') }}" method="POST">
        @csrf
        <!-- checkout-area start -->
        <div class="checkout-area pt-130 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-details-content">
                                <div class="table-content table-responsive">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="product-name">Hình ảnh</th>
                                                    <th class="product-price">Xe</th>
                                                    <th class="product-priceh">Giá theo giờ</th>
                                                    <th class="product-price">Giá theo ngày</th>
                                                    <th class="product-quantity">Tổng tiền</th>
                                                    <th class="product-subtotal">delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($cart as $item)
                                                <tr>
                                                    <td class="product-thumbnail">
                                                        <a href="#"><img src="assets/Frontend/img/cart/4.jpg" alt=""></a>
                                                    </td>
                                                    <td class="product-name">
                                                        <a href="#">{{ $item->name }}</a>
                                                    </td>
                                                    <td class="product-priceh"><span class="amount">{{ $item->priceh }}</span></td>
                                                    <td class="product-price"><span class="amount">{{ $item->price }}</span></td>
                                                    <td class="product-subtotal">$1128.00</td>
                                                    <td class="product-cart-icon product-subtotal"><a href="#"><i class="ti-trash"></i></a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                        </div>
                    </div>

                    <div style="height: 40px; width: 100%;"></div>

                    <div class="col-md-4">
                        <div class="product-details-content">
                            <div class="product-overview">
                                <h5 class="pd-sub-title">Địa điểm nhận xe</h5>
                                <p>Hà Nội</p>
                            </div>
                            <div class="product-overview">
                                <h5 class="pd-sub-title">Thời gian nhận xe</h5>
                                <p>2019</p>
                            </div>
                            <div class="product-overview">
                                <h5 class="pd-sub-title">Thời gian trả xe</h5>
                                <p>Hà Nội</p>
                            </div>
                            <div class="product-overview">
                                <h5 class="pd-sub-title">Chi tiết giá</h5>
                                <table class="table">
                                    <tr>
                                        <td>Đơn giá ngày</td>
                                        <td>{{ $item->price }}</td>
                                    </tr>
                                    <tr>
                                        <td>Ngày</td>
                                        <td>2 ngày</td>
                                    </tr>
                                    <tr>
                                        <td><b>Tổng</b></td>
                                        <td>200,000 đ</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                    </div>
                    @section('content')

                    <div class="col-md-8">
                        <div class="product-details-content">
                                <div class="checkbox-form">
                                    <h3>Thông tin khách hàng</h3>
                                    <p>Kiểm tra thông tin cá nhân để tiến hành đặt</p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Họ và tên <span class="required">*</span></label>
                                                <input type="text" placeholder="" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Số điện thoại <span class="required">*</span></label>
                                                <input type="text" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="checkout-form-list">
                                                <label>Email<span class="required">*</span></label>
                                                <input type="email" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="order-notes">
                                                <div class="checkout-form-list mrg-nn">
                                                    <label>Lưu ý</label>
                                                    <textarea id="checkout-mess" cols="30" rows="10"
                                                        placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="cart-btn text-center mb-15">
                                                <button type="submit">Hoàn tất</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </form>
        {{-- <!-- checkout-area end --> --}}
        @include('user.app.footer')
