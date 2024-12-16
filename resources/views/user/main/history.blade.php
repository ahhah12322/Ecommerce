@include('user.app.header')
{{-- <div class="breadcrumb-area pt-255 pb-170" style="background-image: url(assets/Frontend/img/banner/banner-4.jpg)">
    <div class="container-fluid">
        <div class="breadcrumb-content text-center">
            <h2>Thông tin tài khoản</h2>
            <ul>
                <li>
                    <a href="#">home</a>
                </li>
                <li>Thông tin tài khoản</li>
            </ul>
        </div>
    </div>
</div> --}}
<div class="container">
    <nav aria-label="breadcrumb" class="breadcrumb-nav ">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="/tai-khoan">Tài Khoản</a></li>
            <li class="breadcrumb-item"><a href="/lich-su">Lịch Sử</a></li>

        </ol>
    </nav>
</div><!-- End .breadcrumb-nav -->
<!-- checkout-area start -->
<div class="checkout-area ">
    <div class="container">
        <div class="row">
            @include('user.app.sidebar-account')
            <div class="col-md-8">
                <div class="product-details-content">
                    <form action="#">
                        <div class="checkbox-form">
                            <h3>Lịch sử thuê xe</h3>
                            <div class="row">
                                <div class="history-car">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <img src="assets/Frontend/img/product/honda-air-blade.png" alt="">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h4>Honda Air Blade</h4>

                                                </div>
                                                <div class="col-md-6 text-right">
                                                    <a href="" class="btn btn-warning">Chi tiết</a>
                                                </div>
                                                <div class="col-md-12">
                                                    <p class="text-danger">Trạng thái: Đã thanh toán</p>
                                                </div>

                                            </div>

                                            <hr>
                                            <div>
                                                <p>Bắt đầu: 9:00 Ngày 20-11-2019 </p>
                                                <p>Kết thúc: 9:00 Ngày 21-11-2019 </p>
                                                <h5>Tổng tiền: 1,000,000 vnđ</h5>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="history-car">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <img src="assets/Frontend/img/product/honda-air-blade.png" alt="">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h4>Honda Air Blade</h4>

                                                </div>
                                                <div class="col-md-6 text-right">
                                                    <a href="" class="btn btn-warning">Chi tiết</a>
                                                </div>
                                                <div class="col-md-12">
                                                    <p class="text-danger">Trạng thái: Đã thanh toán</p>
                                                </div>

                                            </div>

                                            <hr>
                                            <div>
                                                <p>Bắt đầu: 9:00 Ngày 20-11-2019 </p>
                                                <p>Kết thúc: 9:00 Ngày 21-11-2019 </p>
                                                <h5>Tổng tiền: 1,000,000 vnđ</h5>

                                            </div>

                                        </div>

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
