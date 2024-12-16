@include('user.app.header')

<div class="overview-area pt-135" style="margin-top:40px">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="overview-content">

                    <h3>CÙNG BẠN TRÊN MỌI HÀNH TRÌNH</h3>
                    <br>

                    <div class="">
                        <div class="col-md-8">
                            <div class="car-rental">
                                <form action="/tim-xe" method="GET">
                                    <div class="form-group">
                                        <label for="">Chọn địa điểm</label>
                                        <select class="form-control" name="location" required>
                                            <option value="" hidden="">Chọn điểm nhận xe</option>
                                            <option value="Hà Nội">Hà Nội</option>
                                            <option value="TP. Hồ Chí Minh">TP. Hồ Chí Minh</option>
                                            <option value="Đà Nẵng">Đà Nẵng</option>
                                            <option value="Phú Quốc">Phú Quốc</option>
                                            <option value="Sapa (Lào Cai)">Sapa (Lào Cai)</option>
                                            <option value="Ninh Bình">Ninh Bình</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Ngày nhận xe</label>
                                        <input class="form-control" type="date" name="start_date" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Ngày trả xe</label>
                                        <input class="form-control" type="date" name="end_date" required>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn-lg btn-warning btn-block " type="submit">TÌM XE</button>
                                    </div>
                                </form>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="overview-img">
                    <img class="tilter" src="assets/Frontend/img/banner/banner-1.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="banner-area pt-135 pb-120">
    <div class="container">
        <div class="section-title text-center mb-50">
            <h2>THUÊ XE MÁY TẠI</h2>
            <hr>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="banner-wrapper mb-30">
                    <a href="/shop/location/Hà%20Nội"><img src="assets/Frontend/img/banner/ha-noi.jpg"
                            alt="image"></a>
                    <div class="banner-content">
                        <h2>HÀ NỘI</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="banner-wrapper mb-30">
                    <a href="/shop/location/Hồ%20Chí%20Minh"><img src="assets/Frontend/img/banner/sai-gon.jpg"
                            alt="image"></a>
                    <div class="banner-content">
                        <h2>Hồ Chí Minh</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="banner-wrapper mb-30">
                    <a href="/shop/location/Đà%20Nẵng"><img src="assets/Frontend/img/banner/da-nang.jpg"
                            alt="image"></a>
                    <div class="banner-content">
                        <h2>ĐÀ NẴNG</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-area pb-190">
    <div class="container">
        <div class="section-title text-center mb-50">
            <h2>XE DÀNH CHO BẠN</h2>
        </div>
        <div class="product-tab-list text-center mb-80 nav product-menu-mrg" role="tablist">
            <a class="active" href="#home1" data-toggle="tab">
                <h4>Xe ÔTô Điện </h4>
            </a>
            <a href="#home2" data-toggle="tab">
                <h4>Xe Máy Điện</h4>
            </a>
        </div>
        <div class="tab-content jump">
            <div class="tab-pane active" id="home1">
                <div class="product-slider-active owl-carousel">
                    @foreach ($vehicles as $vehicle)
                        @if ($vehicle->vehicle_type_id == 1)
                            <div class="product-wrapper-bundle">
                                <div class="product-wrapper mb-30">
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
                                                <li>{{ $vehicle->year_of_manufacture }}</li>
                                                <li>{{ $vehicle->VehicleName }}</li>
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
                                                data-product-id="{{ $vehicle->id }}" href="javascript:void(0)">
                                                <i class="ti-heart"></i>
                                            </a>
                                            <a class="action-reload" title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal" href="#">
                                                <i class=" ti-zoom-in"></i>
                                            </a>
                                        </div>
                                        <div class="product-content-wrapper">
                                            <div class="product-title-spreed">
                                                <h4><a
                                                        href="/chi-tiet/{{ $vehicle->id }}">{{ $vehicle->VehicleName }}</a>
                                                </h4>

                                            </div>
                                            <div class="product-price">
                                                <span>{{ number_format($vehicle->rental_price_per_day) }}đ/ngày</span>
                                            </div>
                                        </div>
                                        <div class="product-infor">
                                            <div class="address">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-geo-alt-fill"
                                                    viewBox="0 0 16 16">
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
                                                        height="16" fill="green" class="bi bi-suitcase-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V3h1.5A1.5 1.5 0 0 1 13 4.5v9a1.5 1.5 0 0 1-1.004 1.416A1 1 0 1 1 10 15H6a1 1 0 1 1-1.997-.084A1.5 1.5 0 0 1 3 13.5v-9A1.5 1.5 0 0 1 4.5 3H6zM9 1H7v2h2zM6 5.5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0zm2.5 0a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0zm2.5 0a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0z" />
                                                    </svg>
                                                    <span>{{ $vehicle->rentalContracts->count() }} chuyến</span>
                                                @else
                                                    <span>Không có chuyến</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="tab-pane" id="home2">
                <div class="product-slider-active owl-carousel">
                    @foreach ($vehicles as $vehicle)
                        @if ($vehicle->vehicle_type_id == 2)
                            <div class="product-wrapper-bundle">
                                <div class="product-wrapper mb-30">
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
                                                <li>{{ $vehicle->year_of_manufacture }}</li>
                                                <li>{{ $vehicle->VehicleName }}</li>
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
                                                data-product-id="{{ $vehicle->id }}" href="javascript:void(0)">
                                                <i class="ti-heart"></i>
                                            </a>

                                            <a class="action-reload" title="Quick View" data-toggle="modal"
                                                data-target="#exampleModal" href="#">
                                                <i class=" ti-zoom-in"></i>
                                            </a>
                                        </div>
                                        <div class="product-content-wrapper">
                                            <div class="product-title-spreed">
                                                <h4><a
                                                        href="/chi-tiet/{{ $vehicle->id }}">{{ $vehicle->VehicleName }}</a>
                                                </h4>

                                            </div>
                                            <div class="product-price">
                                                <span>{{ number_format($vehicle->rental_price_per_day) }}đ/ngày</span>
                                            </div>
                                        </div>
                                        <div class="product-infor">
                                            <div class="address">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-geo-alt-fill"
                                                    viewBox="0 0 16 16">
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
                                                        height="16" fill="green" class="bi bi-suitcase-fill"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5V3h1.5A1.5 1.5 0 0 1 13 4.5v9a1.5 1.5 0 0 1-1.004 1.416A1 1 0 1 1 10 15H6a1 1 0 1 1-1.997-.084A1.5 1.5 0 0 1 3 13.5v-9A1.5 1.5 0 0 1 4.5 3H6zM9 1H7v2h2zM6 5.5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0zm2.5 0a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0zm2.5 0a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0z" />
                                                    </svg>
                                                    <span>{{ $vehicle->rentalContracts->count() }} chuyến</span>
                                                @else
                                                    <span>Không có chuyến</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

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
