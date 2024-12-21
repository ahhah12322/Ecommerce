@include('user.app.header')
<div class="container">
    <nav aria-label="breadcrumb" class="breadcrumb-nav ">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="/shop">Của hàng</a></li>
            <li class="breadcrumb-item"><a href="/chi-tiet/{{ $vehicle->id }}">{{ $vehicle->VehicleName }}</a></li>

        </ol>
    </nav>
</div><!-- End .breadcrumb-nav -->
<div class="product-details-area fluid-padding-3 pb-130">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="product-details-img-content">
                    <div class="product-details-tab mr-40">
                        <div class="product-details-large tab-content">
                            <div class="tab-pane active" id="pro-details1">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="/chi-tiet/{{ $vehicle->id }}">
                                        <img class="zoomable"
                                            src="{{ asset($vehicleImages[$vehicle->id]['mainImage']->ImageURL) }}"
                                            alt="Main Image">
                                    </a>
                                </div>
                            </div>
                            @if (isset($vehicleImages[$vehicle->id]['additionalImages']))
                                @foreach ($vehicleImages[$vehicle->id]['additionalImages'] as $image)
                                    <div class="tab-pane" id="{{ $loop->iteration }}">
                                        <div class="easyzoom easyzoom--overlay">
                                            <a href="/chi-tiet/{{ $vehicle->id }}">
                                                <img class="zoomable"
                                                    src="{{ asset($image->ImageURL) }}"alt="Additional Image">
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                        </div>
                        <div class="product-details-small nav mt-12 product-dec-slider owl-carousel">
                            <a class="active" href="#pro-details1">
                                @if (isset($vehicleImages[$vehicle->id]['mainImage']))
                                    <img src="{{ asset($vehicleImages[$vehicle->id]['mainImage']->ImageURL) }}"
                                        alt="Main Image">
                                @endif
                            </a>
                            @if (isset($vehicleImages[$vehicle->id]['additionalImages']))
                                @foreach ($vehicleImages[$vehicle->id]['additionalImages'] as $image)
                                    <a href="#{{ $loop->iteration }}">
                                        <img src="{{ asset($image->ImageURL) }}"alt="Additional Image">
                                    </a>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="product-details-content">
                    <h2>{{ $vehicle->VehicleName }}</h2>
                    <div class="quick-view-rating">
                        @if ($vehicle->reviews->count() > 0)
                            @php
                                $totalRating = $vehicle->reviews->sum('rating');
                                $averageRating = $totalRating / $vehicle->reviews->count();
                            @endphp
                            @for ($i = 1; $i <= $averageRating; $i++)
                                <i class="fa fa-star reting-color"></i>
                            @endfor
                            <span> ({{ $vehicle->reviews->count() }} Customer Reviews)</span>
                        @else
                            <span>(No reviews yet)</span>
                        @endif
                    </div>
                    <div class="product-price">
                        <span>{{ $vehicle->rental_price_per_day }}/ngày</span>
                    </div>

                    <br>
                    <div class="bundle-area">

                        <div class="bundle-all-price">
                            <div class="bundle-price">
                                <ul>
                                    <li>Hãng xe: @foreach ($brands as $brand)
                                            @if ($vehicle->BrandID == $brand->BrandID)
                                                {{ $brand->BrandName }}
                                            @endif
                                        @endforeach
                                    </li>
                                    <li>Năm SX: {{ $vehicle->year_of_manufacture }}</li>
                                    <li>Số ghế: {{ $vehicle->seat_number }}</li>
                                    <li>Biển số: {{ $vehicle->license_plate }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="product-overview">
                                    <h5 class="pd-sub-title">Product Overview</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipic it, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercita tion ullamco laboris nisi ut aliquip ex ea commodo.</p>
                                </div> --}}
                    <div class="product-color">
                        <h5 class="pd-sub-title">Product color</h5>
                        <ul>

                            <li class="red">b</li>
                            <li class="pink">p</li>
                            <li class="blue">b</li>
                            <li class="sky2">b</li>
                            <li class="green">y</li>
                            <li class="purple2">g</li>
                        </ul>
                    </div>
                    <div class="quickview-plus-minus">
                        <div class="quickview-btn-cart">


                            <form id="checkout-form" method="POST" action="{{ route('checkout') }}" style="display: none;">
                                @csrf
                                <input type="hidden" name="vehicle_id" value="{{ $vehicle->id }}">
                                {{-- <input type="hidden" name="user" value="{{ session('user') }}"> --}}
                            </form>

                            <a class="btn-style cr-btn" href="javascript:void(0);" onclick="submitCheckoutForm()" ><span>Đặt Xe</span></a>
                        </div>


                        <div class="quickview-btn-wishlist">
                            <a class="action-plus-2 p-action-none add-to-cart" title="Wishlist"
                                data-product-id="{{ $vehicle->id }}" href="javascript:void(0)">
                                <i class="ti-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-categories">
                        <h5 class="pd-sub-title">Categories</h5>
                        <ul>
                            <li>
                                <a href="#">
                                    @foreach ($categorys as $category)
                                        @if ($vehicle->CategoryID == $category->CategoryID)
                                            {{ $category->CategoryName }}
                                        @endif
                                    @endforeach
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="product-share">
                        <h5 class="pd-sub-title">Share</h5>
                        <ul>
                            <li>
                                <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="icofont icofont-social-pinterest"></i></a>
                            </li>
                            <li>
                                <a href="#"> <i class="icofont icofont-social-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <h3 style="margin: 40px 0px;">Chi tiết về xe:</h3>
            <div class="product-details-content">
                <div class="comments">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="product-overview">
                                <h5 class="pd-sub-title">Đặc điểm:</h5>
                                <div class="outstanding-features">
                                    <div class="outstanding-features__item">
                                        <div class="wrap-svg">
                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M25.9163 7.99992C25.9163 9.05846 25.0582 9.91659 23.9997 9.91659C22.9411 9.91659 22.083 9.05846 22.083 7.99992C22.083 6.94137 22.9411 6.08325 23.9997 6.08325C25.0582 6.08325 25.9163 6.94137 25.9163 7.99992Z"
                                                    stroke="#5FCF86" stroke-width="1.5"></path>
                                                <circle cx="23.9997" cy="23.9999" r="1.91667" stroke="#5FCF86"
                                                    stroke-width="1.5"></circle>
                                                <path
                                                    d="M17.9163 7.99992C17.9163 9.05846 17.0582 9.91659 15.9997 9.91659C14.9411 9.91659 14.083 9.05846 14.083 7.99992C14.083 6.94137 14.9411 6.08325 15.9997 6.08325C17.0582 6.08325 17.9163 6.94137 17.9163 7.99992Z"
                                                    stroke="#5FCF86" stroke-width="1.5"></path>
                                                <path
                                                    d="M17.9163 23.9999C17.9163 25.0585 17.0582 25.9166 15.9997 25.9166C14.9411 25.9166 14.083 25.0585 14.083 23.9999C14.083 22.9414 14.9411 22.0833 15.9997 22.0833C17.0582 22.0833 17.9163 22.9414 17.9163 23.9999Z"
                                                    stroke="#5FCF86" stroke-width="1.5"></path>
                                                <circle cx="7.99967" cy="7.99992" r="1.91667" stroke="#5FCF86"
                                                    stroke-width="1.5"></circle>
                                                <path
                                                    d="M10.1025 26.6666V21.3333H7.99837C7.59559 21.3333 7.25184 21.4053 6.96712 21.5494C6.68066 21.6918 6.46278 21.894 6.31348 22.1562C6.16244 22.4166 6.08691 22.723 6.08691 23.0754C6.08691 23.4296 6.1633 23.7343 6.31608 23.9895C6.46886 24.243 6.69021 24.4374 6.98014 24.5728C7.26834 24.7083 7.6173 24.776 8.02702 24.776H9.43587V23.8697H8.20931C7.99403 23.8697 7.81521 23.8402 7.67285 23.7812C7.53049 23.7221 7.42459 23.6336 7.35514 23.5155C7.28396 23.3975 7.24837 23.2508 7.24837 23.0754C7.24837 22.8984 7.28396 22.7491 7.35514 22.6275C7.42459 22.506 7.53136 22.414 7.67546 22.3515C7.81782 22.2872 7.9975 22.2551 8.21452 22.2551H8.97493V26.6666H10.1025ZM7.22233 24.2395L5.89681 26.6666H7.1416L8.43848 24.2395H7.22233Z"
                                                    fill="#5FCF86"></path>
                                                <path
                                                    d="M24 10.6665V15.9998M24 21.3332V15.9998M16 10.6665V21.3332M8 10.6665V15.4998C8 15.776 8.22386 15.9998 8.5 15.9998H24"
                                                    stroke="#5FCF86" stroke-width="1.5" stroke-linecap="round">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="title">
                                            <p class="sub">Truyền động</p>
                                            <p class="main">Số tự động</p>
                                        </div>
                                    </div>
                                    <div class="outstanding-features__item">
                                        <div class="wrap-svg">
                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.914 23.3289C10.9148 23.3284 10.9156 23.3279 10.9163 23.3274C10.9155 23.3279 10.9148 23.3284 10.914 23.3289ZM10.914 23.3289C10.914 23.3289 10.914 23.3289 10.914 23.3289L11.3128 23.9114M10.914 23.3289L11.3128 23.9114M11.3128 23.9114L10.9807 23.2882L20.6697 23.9458C20.6682 23.9484 20.6656 23.9496 20.6631 23.9479C20.655 23.9424 20.6343 23.9284 20.6014 23.9074C20.6014 23.9073 20.6014 23.9073 20.6013 23.9073C20.5141 23.8516 20.3413 23.7468 20.0921 23.6208C20.0919 23.6207 20.0918 23.6206 20.0917 23.6206C19.3397 23.2404 17.8926 22.6674 16.0003 22.6674C14.1715 22.6674 12.7584 23.2026 11.9869 23.5817L11.9929 23.5929M11.3128 23.9114L11.331 23.9456C11.3324 23.9483 11.3352 23.9495 11.3377 23.9478C11.3444 23.9432 11.3592 23.9332 11.3821 23.9184L11.9929 23.5929L11.9929 23.5929M11.9929 23.5929C11.9909 23.5892 11.9889 23.5855 11.9868 23.5818C11.6767 23.7342 11.4702 23.8614 11.3821 23.9184L11.9929 23.5929ZM10.6691 24.2983L10.6691 24.2983C10.7406 24.4324 10.8728 24.5792 11.0793 24.6538C11.3072 24.7361 11.5609 24.7039 11.7614 24.5667L11.7614 24.5667C11.7978 24.5418 13.4597 23.4174 16.0003 23.4174C18.5426 23.4174 20.205 24.5432 20.2393 24.5667L20.2393 24.5667C20.4389 24.7034 20.6938 24.7372 20.9245 24.6528C21.1293 24.5779 21.2557 24.4338 21.3233 24.3136L22.4886 22.2427L24.3242 23.0447L21.6934 28.584H9.99882L7.65051 23.0635L9.57427 22.2435L10.6691 24.2983ZM24.4348 22.8117L24.4345 22.8124L24.4348 22.8117Z"
                                                    stroke="#5FCF86" stroke-width="1.5"></path>
                                                <path
                                                    d="M12.75 4.66675C12.75 3.97639 13.3096 3.41675 14 3.41675H18C18.6904 3.41675 19.25 3.97639 19.25 4.66675V7.00008C19.25 7.13815 19.1381 7.25008 19 7.25008H13C12.8619 7.25008 12.75 7.13815 12.75 7.00008V4.66675Z"
                                                    stroke="#5FCF86" stroke-width="1.5"></path>
                                                <path
                                                    d="M9.33398 22.6668L9.90564 11.2336C9.95887 10.1692 10.8374 9.3335 11.9031 9.3335H20.0982C21.1639 9.3335 22.0424 10.1692 22.0957 11.2336L22.6673 22.6668"
                                                    stroke="#5FCF86" stroke-width="1.5"></path>
                                                <path d="M14.667 7.35815V9.8901" stroke="#5FCF86" stroke-width="1.5">
                                                </path>
                                                <path d="M17.334 7.35815V9.8901" stroke="#5FCF86" stroke-width="1.5">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="title">
                                            <p class="sub">Số ghế</p>
                                            <p class="main">{{ $vehicle->seat_number }} chỗ</p>
                                        </div>
                                    </div>
                                    <div class="outstanding-features__item">
                                        <div class="wrap-svg">
                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M24.3337 27.2499H7.66699C7.52892 27.2499 7.41699 27.138 7.41699 26.9999V12.4599C7.41699 12.3869 7.44888 12.3175 7.5043 12.27L14.652 6.14344L14.1639 5.574L14.652 6.14344C14.6973 6.1046 14.755 6.08325 14.8147 6.08325H24.3337C24.4717 6.08325 24.5837 6.19518 24.5837 6.33325V26.9999C24.5837 27.138 24.4717 27.2499 24.3337 27.2499Z"
                                                    stroke="#5FCF86" stroke-width="1.5" stroke-linecap="round">
                                                </path>
                                                <path d="M12.0001 5.33325L7.42285 9.46712" stroke="#5FCF86"
                                                    stroke-width="1.5" stroke-linecap="round"></path>
                                                <path
                                                    d="M17.888 19.5212L16.7708 15.93C16.5378 15.1812 15.4785 15.1798 15.2436 15.928L14.1172 19.5164C13.7178 20.7889 14.6682 22.0833 16.0019 22.0833C17.3335 22.0833 18.2836 20.7927 17.888 19.5212Z"
                                                    stroke="#5FCF86" stroke-width="1.5" stroke-linecap="round">
                                                </path>
                                                <path
                                                    d="M23.2503 3.66675V5.66675C23.2503 5.80482 23.1384 5.91675 23.0003 5.91675H14.667C14.5827 5.91675 14.5365 5.8916 14.5072 5.86702C14.4721 5.83755 14.44 5.78953 14.4245 5.72738C14.4089 5.66524 14.4147 5.60775 14.4318 5.56523C14.4461 5.52975 14.4749 5.48584 14.5493 5.44616L18.2993 3.44616C18.3356 3.42685 18.376 3.41675 18.417 3.41675H23.0003C23.1384 3.41675 23.2503 3.52868 23.2503 3.66675Z"
                                                    stroke="#5FCF86" stroke-width="1.5" stroke-linecap="round">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="title">
                                            <p class="sub">Nhiên liệu</p>
                                            <p class="main">Nạp điện</p>
                                        </div>
                                    </div>
                                    <div class="outstanding-features__item">
                                        <div class="wrap-svg">
                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.41667 24V23.25H6.66667H4.75V18.0833H6.66667H7.41667V17.3333V15.4167H9.33333H9.64399L9.86366 15.197L12.3107 12.75H24.5833V23.25H22.6667H22.356L22.1363 23.4697L19.6893 25.9167H7.41667V24Z"
                                                    stroke="#5FCF86" stroke-width="1.5" stroke-linecap="round">
                                                </path>
                                                <path d="M24 21.3333H28" stroke="#5FCF86" stroke-width="1.5">
                                                </path>
                                                <path d="M24 18.6665H28" stroke="#5FCF86" stroke-width="1.5">
                                                </path>
                                                <path
                                                    d="M15.417 7.33325C15.417 6.6429 15.9766 6.08325 16.667 6.08325H20.667C21.3573 6.08325 21.917 6.6429 21.917 7.33325V8.58325H15.417V7.33325Z"
                                                    stroke="#5FCF86" stroke-width="1.5"></path>
                                                <path d="M17.333 9.33325V11.9999M19.9997 9.33325V11.9999"
                                                    stroke="#5FCF86" stroke-width="1.5"></path>
                                                <path d="M4.66699 26.01L4.66699 15.3308" stroke="#5FCF86"
                                                    stroke-width="1.5" stroke-linecap="round"></path>
                                                <path d="M27.3291 23.3384L27.3291 16.6704" stroke="#5FCF86"
                                                    stroke-width="1.5" stroke-linecap="round"></path>
                                            </svg>
                                        </div>
                                        <div class="title">
                                            <p class="sub">Tiêu hao</p>
                                            <p class="main">
                                                {{ $vehicle->max_range }}/{{ $vehicle->battery_capacity }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-overview">
                                <h5 class="pd-sub-title">Mô tả xe:</h5>
                                <p>{{ $vehicle->description }}</p>
                            </div>
                            <div class="product-overview">
                                <h5 class="pd-sub-title">Các tiện nghi khác</h5>
                                <div class="info-car-desc">
                                    <div class="features-car">
                                        <ul>
                                            <li><img loading="lazy"
                                                    src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/map-v2.png"
                                                    alt="Thuê xe tự lái"> Bản đồ</li>
                                            <li><img loading="lazy"
                                                    src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/bluetooth-v2.png"
                                                    alt="Thuê xe tự lái"> Bluetooth</li>
                                            <li><img loading="lazy"
                                                    src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/360_camera-v2.png"
                                                    alt="Thuê xe tự lái"> Camera 360</li>
                                            <li><img loading="lazy"
                                                    src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/parking_camera-v2.png"
                                                    alt="Thuê xe tự lái"> Camera cập lề</li>
                                            <li><img loading="lazy"
                                                    src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/dash_camera-v2.png"
                                                    alt="Thuê xe tự lái"> Camera hành trình
                                            </li>
                                            <li><img loading="lazy"
                                                    src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/reverse_camera-v2.png"
                                                    alt="Thuê xe tự lái"> Camera lùi</li>
                                            <li><img loading="lazy"
                                                    src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/tpms-v2.png"
                                                    alt="Thuê xe tự lái"> Cảm biến lốp</li>
                                            <li><img loading="lazy"
                                                    src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/impact_sensor-v2.png"
                                                    alt="Thuê xe tự lái"> Cảm biến va chạm</li>
                                            <li><img loading="lazy"
                                                    src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/head_up-v2.png"
                                                    alt="Thuê xe tự lái"> Cảnh báo tốc độ</li>
                                            <li><img loading="lazy"
                                                    src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/sunroof-v2.png"
                                                    alt="Thuê xe tự lái"> Cửa sổ trời</li>
                                            <li><img loading="lazy"
                                                    src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/gps-v2.png"
                                                    alt="Thuê xe tự lái"> Định vị GPS</li>
                                            <li><img loading="lazy"
                                                    src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/usb-v2.png"
                                                    alt="Thuê xe tự lái"> Khe cắm USB</li>
                                            <li><img loading="lazy"
                                                    src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/spare_tire-v2.png"
                                                    alt="Thuê xe tự lái"> Lốp dự phòng</li>
                                            <li><img loading="lazy"
                                                    src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/dvd-v2.png"
                                                    alt="Thuê xe tự lái"> Màn hình DVD</li>
                                            <li><img loading="lazy"
                                                    src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/etc-v2.png"
                                                    alt="Thuê xe tự lái"> ETC</li>
                                            <li><img loading="lazy"
                                                    src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/airbags-v2.png"
                                                    alt="Thuê xe tự lái"> Túi khí an toàn</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="product-categories">
                                    <h5 class="pd-sub-title">Địa chỉ</h5>
                                    <div class="car-address">
                                        <div class="address">
                                            <div class="wrap-svg">
                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.9998 2.56885C7.8898 2.56885 4.5498 5.90884 4.5498 10.0188C4.5498 14.9088 10.7298 21.8288 10.9898 22.1189C11.2498 22.4089 11.6198 22.5688 11.9998 22.5688C12.3798 22.5688 12.7498 22.4089 13.0098 22.1189C13.6698 21.3889 19.4498 14.7988 19.4498 10.0188C19.4498 5.90884 16.1098 2.56885 11.9998 2.56885ZM11.9998 20.9988C11.1898 20.0588 6.0498 14.0188 6.0498 10.0188C6.0498 6.73884 8.7198 4.06885 11.9998 4.06885C15.2798 4.06885 17.9498 6.73884 17.9498 10.0188C17.9498 13.3988 14.1198 18.5988 11.9998 20.9988Z"
                                                        fill="black"></path>
                                                    <path
                                                        d="M11.9998 2.56885C7.8898 2.56885 4.5498 5.90884 4.5498 10.0188C4.5498 14.9088 10.7298 21.8288 10.9898 22.1189C11.2498 22.4089 11.6198 22.5688 11.9998 22.5688C12.3798 22.5688 12.7498 22.4089 13.0098 22.1189C13.6698 21.3889 19.4498 14.7988 19.4498 10.0188C19.4498 5.90884 16.1098 2.56885 11.9998 2.56885ZM8.87981 10.0188C8.87981 8.29884 10.2798 6.89885 11.9998 6.89885C13.7198 6.89885 15.1198 8.29884 15.1198 10.0188C15.1198 11.7388 13.7198 13.1389 11.9998 13.1389C10.2798 13.1389 8.87981 11.7388 8.87981 10.0188Z"
                                                        fill="black"></path>
                                                </svg>
                                            </div>
                                            <p>{{ $vehicle->location }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-overview">
                                    <h5 class="pd-sub-title">Thủ tục:</h5>
                                    <div class="required-papers">
                                        <div class="required-papers__item width-100">
                                            <div class="type__item">
                                                <div class="wrap-svg">
                                                    <svg width="17" height="16" viewBox="0 0 17 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.49967 1.33325C4.82634 1.33325 1.83301 4.32659 1.83301 7.99992C1.83301 11.6733 4.82634 14.6666 8.49967 14.6666C12.173 14.6666 15.1663 11.6733 15.1663 7.99992C15.1663 4.32659 12.173 1.33325 8.49967 1.33325ZM8.49967 6.05325C8.22634 6.05325 7.99967 5.83325 7.99967 5.55325C7.99967 5.27992 8.22634 5.05325 8.49967 5.05325C8.77967 5.05325 8.99967 5.27992 8.99967 5.55325C8.99967 5.83325 8.77967 6.05325 8.49967 6.05325ZM8.99967 10.3866C8.99967 10.6666 8.77301 10.8866 8.49967 10.8866C8.22634 10.8866 7.99967 10.6666 7.99967 10.3866V7.27992C7.99967 6.99992 8.22634 6.77992 8.49967 6.77992C8.77301 6.77992 8.99967 6.99992 8.99967 7.27992V10.3866Z"
                                                            fill="#666666">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <p class="font-12">Chọn 1 trong 2 hình thức</p>
                                            </div>
                                            <div class="type-content">
                                                <img loading="lazy"
                                                    src="https://n1-cstg.mioto.vn/v4/p/m/icons/papers/gplx_cccd.png">
                                                <div class="type-name">
                                                    <p>GPLX (đối chiếu) &amp; CCCD (đối chiếu VNeID)</p>
                                                </div>
                                            </div>
                                            <div class="type-content">
                                                <img loading="lazy"
                                                    src="https://n1-cstg.mioto.vn/v4/p/m/icons/papers/gplx_passport.png">
                                                <div class="type-name">
                                                    <p>GPLX (đối chiếu) &amp; Passport (giữ lại)</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-overview">
                                    <h5 class="pd-sub-title">Tài sản thế chấp</h5>

                                    <div class="required-papers">
                                        <p>15 triệu (tiền mặt/chuyển khoản cho chủ xe khi nhận xe)hoặc
                                            Xe
                                            máy (kèm cà vẹt gốc) giá trị 15 triệu</p>
                                    </div>

                                </div>
                                <div class="product-overview">
                                    <h5 class="pd-sub-title">Điều khoản</h5>
                                    <p> ◦ Sử dụng xe đúng mục đích.</p>
                                    <p>◦ Không sử dụng xe thuê vào mục đích phi pháp, trái pháp luật.
                                    </p>
                                    <p> ◦ Không sử dụng xe thuê để cầm cố, thế chấp.</p>
                                    <p>◦ Không hút thuốc, nhả kẹo cao su, xả rác trong xe.</p>
                                    <p>◦ Không chở hàng quốc cấm dễ cháy nổ.</p>
                                    <p> ◦ Không chở hoa quả, thực phẩm nặng mùi trong xe.</p>
                                    <p> ◦ Khi trả xe, nếu xe bẩn hoặc có mùi trong xe, khách hàng vui
                                        lòng
                                        vệ sinh xe sạch sẽ hoặc gửi phụ thu phí vệ sinh xe.</p>
                                    <p>Trân trọng cảm ơn, chúc quý khách hàng có những chuyến đi tuyệt
                                        vời !
                                    </p>


                                </div>
                                <div class="product-categories">
                                    <h5 class="pd-sub-title">Ghi chú:</h5>
                                    <div class="desc-note">
                                        <p>* Chính sách hủy chuyến áp dụng chung cho cả khách thuê và
                                            chủ xe
                                            (ngoài ra, tùy vào thời điểm hủy chuyến, chủ xe có thể bị
                                            đánh
                                            giá từ 2-3* trên hệ thống).</p>
                                        <p>* Khách thuê không nhận xe sẽ mất phí hủy chuyến (33% giá trị
                                            chuyến đi).</p>
                                        <p>* Chủ xe không giao xe sẽ hoàn tiền giữ chỗ &amp; bồi thường
                                            phí
                                            hủy chuyến cho khách thuê (33% giá trị chuyến đi).</p>
                                        <p class="df-align-center">* Tiền giữ chỗ &amp; bồi thường do
                                            chủ
                                            xe hủy chuyến (nếu có) sẽ được Mioto hoàn trả đến khách thuê
                                            bằng chuyển khoản ngân hàng trong vòng 1-3 ngày làm việc
                                            kế&nbsp;tiếp.
                                            <span class="tooltip tooltip--m ">

                                                <span class="wrap-svg">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                            stroke="black" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path
                                                            d="M9.08984 9.00008C9.32495 8.33175 9.789 7.76819 10.3998 7.40921C11.0106 7.05024 11.7287 6.91902 12.427 7.03879C13.1253 7.15857 13.7587 7.52161 14.2149 8.06361C14.6712 8.60561 14.9209 9.2916 14.9198 10.0001C14.9198 12.0001 11.9198 13.0001 11.9198 13.0001"
                                                            stroke="black" stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path d="M12 17H12.01" stroke="black" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg></span><span class="tooltip-text">
                                                    <b>Thủ tục hoàn tiền &amp; bồi thường hủy
                                                        chuyến</b>Mioto sẽ hoàn lại tiền giữ chỗ (&amp;
                                                    tiền
                                                    bồi thường do chủ xe hủy chuyến (nếu có) theo chính
                                                    sách
                                                    hủy chuyến) qua tài khoản ngân hàng của khách thuê
                                                    trong
                                                    vòng 1-3 ngày làm việc kể từ thời điểm hủy chuyến.
                                                    <i>*Nhân viên Mioto sẽ liên hệ khách thuê (qua số
                                                        điện
                                                        thoại đã đăng ký trên Mioto) để xin thông tin
                                                        tài
                                                        khoản ngân hàng, hoặc Khách thuê có thể chủ động
                                                        gửi
                                                        thông tin cho Mioto qua email Contact@mioto.vn
                                                        hoặc
                                                        nhắn tin tại Mioto Fanpage</i>
                                                </span>
                                            </span>

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <h3 style="margin: 40px 0px;">Nhận xét - Đánh giá:</h3>
                <div class="product-details-content">
                    <div class="comments">
                        <div class="row">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    {{ $errors->first() }}
                                </div>
                            @endif

                            <div class="col-md-12">
                                <form method="POST" action="{{ route('reviews.store') }}">
                                    @csrf
                                    <input type="hidden" name="vehicle_id" value="{{ $vehicle->id }}"
                                        class="blog-comments">
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <!-- Name -->
                                            <input type="text" name="title" id="name"
                                                class=" form-control" placeholder="Title *" maxlength="100"
                                                required="">
                                        </div>

                                        <div class="form-group col-md-12">
                                            <select class="form-control" name="rating">
                                                <option value="">Đánh giá</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>

                                        <!-- Comment -->
                                        <div class="form-group col-md-12">
                                            <textarea id="text" class=" form-control" rows="6" placeholder="Comment" maxlength="400"
                                                name="content"></textarea>
                                        </div>

                                        <!-- Send Button -->
                                        <div class="form-group col-md-12">
                                            <button class="btn-lg btn-warning btn-block " type="submit">Gửi</button>
                                        </div>


                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if ($vehicle->reviews->count() > 0)
                <div class="col-md-12">
                    <h3 style="margin: 40px 0px;">Khách hàng nhận xét:</h3>
                    <div id="reviewCarousel" class=" product-details-content carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <?php dd($reviews); ?>
                            @forelse($reviews as $index => $review)
                                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img class="img-comment"
                                                src="{{ $review->customer->avatar ?? 'https://n1-cstg.mioto.vn/m/avatars/h.jpg' }}"
                                                alt="Avatar">
                                            {{-- <div class="col-md-2">
                                            <img class="img-comment" src="https://n1-cstg.mioto.vn/m/avatars/h.jpg"
                                                alt="">
                                        </div> --}}
                                        </div>

                                        <div class="col-md-10">
                                            <div class="product-overview">
                                                <h5 class="pd-sub-title">
                                                    {{ $review->customer_name ?? 'Khách hàng' }}</h5>
                                                <div class="quick-view-rating">

                                                    @for ($i = 0; $i <= $review->rating; $i++)
                                                        <i class="fa fa-star reting-color"></i>
                                                    @endfor

                                                </div>
                                                <p>{{ $review->content }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p>Chưa có đánh giá nào cho xe này.</p>
                            @endforelse
                        </div>
                        <a class="carousel-control-prev" href="#reviewCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#reviewCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
</div>
<script>
    document.querySelectorAll('.easyzoom').forEach(easyzoom => {
        const img = easyzoom.querySelector('.zoomable');

        easyzoom.addEventListener('mousemove', (event) => {
            const rect = easyzoom.getBoundingClientRect();
            const x = ((event.clientX - rect.left) / rect.width) * 100;
            const y = ((event.clientY - rect.top) / rect.height) * 100;

            img.style.transformOrigin = `${x}% ${y}%`; // Đặt tâm phóng to
        });

        easyzoom.addEventListener('mouseleave', () => {
            img.style.transformOrigin = 'center'; // Reset tâm khi rời chuột
        });
    });
</script>
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
<script>
    function submitCheckoutForm() {
        document.getElementById('checkout-form').submit();
    }
</script>



@include('user.app.footer')
