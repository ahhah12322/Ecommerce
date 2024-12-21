@include('user.app.header')

<h1>Hello cc</h1>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header text-center bg-primary text-white">
                    <h4>Thanh Toán Qua Ngân Hàng</h4>
                </div>

                <div class="card-body">
                    <h5 class="text-center mb-4">Ngân Hàng: <strong>{{ $bankName }}</strong></h5>
                    
                    <!-- Thông tin chi tiết thanh toán -->
                    <ul class="list-group mb-4">
                        <li class="list-group-item">
                            <strong>Số Tài Khoản:</strong> 
                            <span class="float-right">{{ $accountNumber }}</span>
                        </li>
                        <li class="list-group-item">
                            <strong>Tên Tài Khoản:</strong> 
                            <span class="float-right">{{ $accountName }}</span>
                        </li>
                        <li class="list-group-item">
                            <strong>Số Tiền:</strong> 
                            <span class="float-right">{{ $amount }}</span>
                        </li>
                        <li class="list-group-item">
                            <strong>Lời Nhắn (Nội Dung Chuyển Khoản):</strong> 
                            <span class="float-right">{{ $note }}</span>
                        </li>
                    </ul>

                    <!-- Phần QR Code -->
                    <div class="text-center mb-4">
                        <h5>Quét Mã QR Để Thanh Toán</h5>
                        <img src="{{ $qrCodeData }}" alt="QR Code Thanh Toán" style="width: 300px; height: 300px;" class="img-thumbnail">
                    </div>

                    <!-- Ghi chú và điều hướng -->
                    <div class="alert alert-info text-center">
                        <p><strong>Ghi chú:</strong> Vui lòng chuyển đúng số tiền và nội dung để chúng tôi xác nhận nhanh chóng!</p>
                    </div>

                    <div class="text-center mt-3">
                        <a href="{{ route('index') }}" class="btn btn-success">
                            <i class="fas fa-home"></i> Quay Về Trang Chủ
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('user.app.footer')
