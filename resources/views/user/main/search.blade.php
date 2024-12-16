@include('user.app.header')
<div class="container">
    <nav aria-label="breadcrumb" class="breadcrumb-nav ">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="/tim-xe">Tìm kiếm</a></li>
            </a></li>

        </ol>
    </nav>
</div><!-- End .breadcrumb-nav -->
<div class="shop-wrapper  pb-120">

    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="product-sidebar-area pr-10">
                    <div class="sidebar-widget pb-55">
                        <h3 class="sidebar-widget">Tìm kiếm</h3>
                        <div class="sidebar-search">
                            <form action="/tim-xe" method="GET">
                                <input type="text" name="search1" placeholder="Tìm kiếm..."
                                    value="{{ request('search1') }}" required>
                                <button type="submit"><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="sidebar-widget pb-50">
                        <h3 class="sidebar-widget">Thông tin nhận xe - trả xe</h3>
                        <div class="widget-categories">
                            <ul>
                                <li><a href="#">Nhận xe: {{ $start_date }}</a></li>
                                <li><a href="#">Trả xe: {{ $end_date }}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget pb-50">
                        <h3 class="sidebar-widget">Hãng xe</h3>
                        <div class="widget-categories">
                            <ul>

                                @foreach ($vehicles->unique('BrandID') as $vehicle)
                                    @foreach ($brands as $brand)
                                        @if ($vehicle->BrandID == $brand->BrandID)
                                            <!-- Compare the BrandID -->
                                            <li><a href="/shop/{{ $brand->BrandName }}">{{ $brand->BrandName }}</a>
                                            </li>
                                        @break
                                    @endif
                                @endforeach
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="sidebar-widget pb-50">
                    <h3 class="sidebar-widget">Địa điểm nhận xe</h3>
                    <div class="widget-categories">
                        <ul>
                            <li><a href="#">{{ $location }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="shop-topbar-wrapper">
                <div class="grid-list-options">
                    <ul class="view-mode">
                        <li class="active"><a href="#product-grid" data-view="product-grid"><i
                                    class="ti-layout-grid2"></i></a></li>
                        <li><a href="#product-list" data-view="product-list"><i class="ti-view-list"></i></a></li>
                    </ul>
                </div>
                <div class="product-sorting">
                    <div class="shop-product-sorting nav">

                    </div>
                    <div class="sorting sorting-bg-1">
                        <form>
                            <select class="select" id="sortSelect" onchange="sortVehicles()">
                                <option value="">Sắp xếp </option>
                                <option value="">Sort by news</option>
                                <option value="">Sort by price</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
            <div class="grid-list-product-wrapper tab-content">
                <div id="new-product" class="product-grid product-view tab-pane active">
                    <div class="row">
                        @if ($vehicles->isEmpty())
                            <p style="text-align: center">Không tìm thấy xe phù hợp tại {{ $location }}
                                trong khoảng thời gian từ
                                {{ $start_date }} đến {{ $end_date }}.</p>
                        @else
                            @foreach ($vehicles as $vehicle)
                                <div class="product-width col-md-6 col-xl-6 col-lg-6">
                                    <div class="product-wrapper mb-35">
                                        <div class="product-img">
                                            <div class="fix-img">
                                                <a href="/chi-tiet/{{ $vehicle->id }}">
                                                    @if (isset($vehicleImages[$vehicle->id]['mainImage']))
                                                        <img src="{{ asset($vehicleImages[$vehicle->id]['mainImage']->ImageURL) }}"
                                                            alt="Main Image">
                                                    @else
                                                        <p>No main image available.</p>
                                                    @endif
                                                </a>
                                            </div>
                                            <div class="product-item-dec">
                                                <ul>
                                                    <li>
                                                        <p>{{ $vehicle->year_of_manufacture }}</p>
                                                    </li>
                                                    <li>
                                                        <p>{{ $vehicle->VehicleName }}</p>
                                                    </li>
                                                    <li>
                                                        @foreach ($brands as $brand)
                                                            @if ($vehicle->BrandID == $brand->BrandID)
                                                                <p>{{ $brand->BrandName }}</p>
                                                            @endif
                                                        @endforeach
                                                    </li>
                                                    <li>
                                                        @foreach ($cates as $cate)
                                                            @if ($vehicle->CategoryID == $cate->CategoryID)
                                                                <p>{{ $cate->CategoryName }}</p>
                                                            @endif
                                                        @endforeach
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-action">
                                                <a class="action-plus-2 p-action-none add-to-cart" title="Wishlist"
                                                    data-product-id="{{ $vehicle->id }}"
                                                    href="javascript:void(0)">
                                                    <i class="ti-heart"></i>
                                                </a>
                                                <a href="cart.html"><i class=" action-reload ti-shopping-cart"></i>
                                                </a>
                                            </div>

                                            <div class="product-content-wrapper">
                                                <div class="product-title-spreed">
                                                    <h4><a
                                                            href="/chi-tiet/{{ $vehicle->id }}">{{ $vehicle->VehicleName }}</a>
                                                    </h4>
                                                    <span>110 CC</span>
                                                </div>
                                                <div class="product-price">
                                                    <span>{{ number_format($vehicle->rental_price_per_day) }}đ/ngày</span>
                                                </div>
                                            </div>
                                            <div class="product-infor">
                                                <div class="address">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" fill="currentColor"
                                                        class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                                                    </svg>
                                                    <p>{{ $vehicle->location }}
                                                    </p>
                                                </div>

                                                <div class="infor">
                                                    @if ($vehicle->rentalContracts->count() > 0)
                                                        <i class="fa fa-star reting-color"></i> <span>
                                                            @if ($vehicle->reviews->count() > 0)
                                                                @php
                                                                    $totalRating = $vehicle->reviews->sum('rating');
                                                                    $averageRating =
                                                                        $totalRating / $vehicle->reviews->count();
                                                                @endphp
                                                                {{ number_format($averageRating, 1) }}
                                                            @endif
                                                        </span>
                                                        <span class="dot">•</span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="green"
                                                            class="bi bi-suitcase-fill" viewBox="0 0 16 16">
                                                            <path
                                                                d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V3h1.5A1.5 1.5 0 0 1 13 4.5v9a1.5 1.5 0 0 1-1.004 1.416A1 1 0 1 1 10 15H6a1 1 0 1 1-1.997-.084A1.5 1.5 0 0 1 3 13.5v-9A1.5 1.5 0 0 1 4.5 3H6zM9 1H7v2h2zM6 5.5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0zm2.5 0a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0zm2.5 0a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0z" />
                                                        </svg>
                                                        <span>{{ $vehicle->rentalContracts->count() }}
                                                            chuyến</span>
                                                    @else
                                                        <span>Không có chuyến</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-list-details">
                                            <h2><a
                                                    href="/chi-tiet/{{ $vehicle->id }}">{{ $vehicle->VehicleName }}</a>
                                            </h2>
                                            <div class="quick-view-rating">
                                                @if ($vehicle->reviews->count() > 0)
                                                    @php
                                                        $totalRating = $vehicle->reviews->sum('rating');
                                                        $averageRating = $totalRating / $vehicle->reviews->count();
                                                    @endphp
                                                    @for ($i = 1; $i <= $averageRating; $i++)
                                                        <i class="fa fa-star reting-color"></i>
                                                    @endfor
                                                    <span> ({{ $vehicle->reviews->count() }} Customer
                                                        Reviews)</span>
                                                @else
                                                    <span>(No reviews yet)</span>
                                                @endif
                                            </div>
                                            <div class="product-price">
                                                <span>{{ number_format($vehicle->rental_price_per_day) }}đ/ngày</span>
                                            </div>
                                            <p>{{ $vehicle->description }}</p>
                                            <div class="shop-list-cart">
                                                <a class="action-plus-2 p-action-none add-to-cart"
                                                    title="Wishlist" data-product-id="{{ $vehicle->id }}"
                                                    href="javascript:void(0)">
                                                    <i class="ti-heart"></i>
                                                </a>
                                                <a href="cart.html"><i class="ti-shopping-cart"></i> Đặt
                                                    xe</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <!-- Pagination -->
            @if ($vehicles->isEmpty())
            @else
                <div class="paginations text-center mt-20">
                    <ul>
                        @if ($vehicles->onFirstPage())
                            <li class="disabled"><span><i class="fa fa-angle-left"></i></span></li>
                        @else
                            <li><a href="{{ $vehicles->previousPageUrl() }}"><i class="fa fa-angle-left"></i></a>
                            </li>
                        @endif

                        @foreach ($vehicles->links()->elements[0] as $page => $url)
                            @if ($page == $vehicles->currentPage())
                                <li class="active"><a href="#">{{ $page }}</a></li>
                            @else
                                <li><a href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach

                        @if ($vehicles->hasMorePages())
                            <li><a href="{{ $vehicles->nextPageUrl() }}"><i class="fa fa-angle-right"></i></a>
                            </li>
                        @else
                            <li class="disabled"><span><i class="fa fa-angle-right"></i></span></li>
                        @endif
                    </ul>
                </div>
            @endif
        </div>
    </div>
</div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const addToCartButtons = document.querySelectorAll('.add-to-cart');

        addToCartButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const productId = this.getAttribute('data-product-id');

                // Gửi AJAX request đến controller Laravel
                fetch('/add-yeu-thich', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector(
                                'meta[name="csrf-token"]').content,
                        },
                        body: JSON.stringify({
                            product_id: productId
                        })
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Có lỗi từ server');
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (!data.success) {
                            alert(data.message); // Show server's error message
                        } else {
                            alert('Đã thêm sản phẩm vào giỏ hàng!');
                        }
                    })
                    .catch(error => {
                        console.error('Có lỗi xảy ra:', error.message);
                        alert('Có lỗi xảy ra, vui lòng thử lại!');
                    });

            });
        });
    });
</script>
@include('user.app.footer')
<script>
    function sortVehicles() {
        const sortValue = document.getElementById('sortSelect').value;
        if (sortValue) {
            // Cập nhật URL với tham số sắp xếp và tải lại trang
            const url = new URL(window.location.href);
            url.searchParams.set('sort', sortValue);
            window.location.href = url.toString();
        }
    }
</script>
