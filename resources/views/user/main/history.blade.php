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
                                @forelse ($rentalContracts as $contract)
                                <div class="history-car mb-4">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <a href="/chi-tiet/{{ $vehicle->id }}">
                                                @if (isset($vehicleImages[$vehicle->id]['mainImage']))
                                                    <img src="{{ asset($vehicleImages[$vehicle->id]['mainImage']->ImageURL) }}"
                                                        alt="Main Image">
                                                @else
                                                    <p>No main image available.</p>
                                                @endif
                                            </a>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    {{-- Hiển thị tên xe --}}
                                                    <h4>{{ $contract->vehicle->VehicleName ?? 'Xe không xác định' }}</h4>
                                                </div>
                                                <div class="col-md-6 text-right">
                                                    {{-- Nút xem chi tiết --}}
                                                    {{-- <a href="{{ route('rental.details', ['id' => $contract->id]) }}" class="btn btn-warning">Chi tiết</a> --}}
                                                    <a href="#" class="btn btn-warning">Chi tiết</a>
                                                </div>
                                                <div class="col-md-12">
                                                    {{-- Hiển thị trạng thái thanh toán --}}
                                                    <p class="text-danger">Trạng thái: {{ $contract->StatusPayment }}</p>
                                                </div>
                                            </div>
                                            
                                            <hr>
                                            <div>
                                                {{-- Hiển thị ngày bắt đầu và kết thúc --}}
                                                <p>Bắt đầu: {{ $contract->RentalEndDate ?? 'N/A' }}</p>
                                                <p>Kết thúc: {{ $contract->RentalEndDate ?? 'N/A' }}</p>
                                                {{-- Hiển thị tổng tiền --}}
                                                <h5>Tổng tiền: {{ number_format($contract->TotalCost) }} vnđ</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                {{-- Hiển thị thông báo nếu không có lịch sử --}}
                                <p>Chưa có lịch sử thuê xe.</p>
                            @endforelse
                        
                            {{-- Phân trang --}}
                            <div class="mt-4">
                                {{ $rentalContracts->links() }}
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
