@include('user.app.header')

<h1>Hello cc</h1>

@section('content')
<div class="container">
    <h3>Thanh Toán Qua Ngân Hàng - {{ $bankName }}</h3>
    <p><strong>Số Tài Khoản:</strong> {{ $accountNumber }}</p>
    <p><strong>Tên Tài Khoản:</strong> {{ $accountName }}</p>
    <p><strong>Số Tiền:</strong> {{ number_format($amount) }} VNĐ</p>
    <p><strong>Lời Nhắn:</strong> {{ $note }}</p>

    <h4>Quét Mã QR để Thanh Toán</h4>
    <img src="{{ $qrCodeData }}" alt="QR Code Thanh Toán" style="width: 300px; height: 300px;">

    <div class="mt-3">
        <a href="{{ route('home') }}" class="btn btn-primary">Quay Về Trang Chủ</a>
    </div>
</div>
@endsection
@include('user.app.footer')
