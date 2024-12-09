<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from preview.freethemescloud.com/oswan/shop-grid-2-col.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 16:12:46 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Oswan - eCommerce HTML5 Template</title>
    <meta name="description" content="Live Preview Of Oswan eCommerce HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/Frontend/img/logo/icon.png">

    <!-- all css here -->
    <link rel="stylesheet" href="assets/Frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/Frontend/css/animate.css">
    <link rel="stylesheet" href="assets/Frontend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/Frontend/css/chosen.min.css">
    <link rel="stylesheet" href="assets/Frontend/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/Frontend/css/meanmenu.min.css">
    <link rel="stylesheet" href="assets/Frontend/css/themify-icons.css">
    <link rel="stylesheet" href="assets/Frontend/css/icofont.css">
    <link rel="stylesheet" href="assets/Frontend/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/Frontend/css/bundle.css">
    <link rel="stylesheet" href="assets/Frontend/css/style.css">
    <link rel="stylesheet" href="assets/Frontend/css/responsive.css">
    <script src="assets/Frontend/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <div class="wrapper">
        <!-- header start -->
        <header>
            <div class="header-area transparent-bar ptb-55">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-4">
                            <div class="logo-small-device">
                                <a href="index.html"><img alt=""
                                        src="assets/Frontend/img/logo/megologo.png"></a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-8">
                            <div class="header-contact-menu-wrapper pl-45">
                                <div class="header-contact">
                                    <p>LIÊN HỆ VỚI CHÚNG TÔI +01254 265 987</p>
                                </div>
                                <div class="menu-wrapper text-center">
                                    <button class="menu-toggle">
                                        <img class="s-open" alt="" src="assets/Frontend/img/icon-img/menu.png">
                                        <img class="s-close" alt=""
                                            src="assets/Frontend/img/icon-img/menu-close.png">
                                    </button>
                                    <div class="main-menu">
                                        <nav>
                                            <ul>
                                                <li><a href="">Trang chủ</a></li>
                                                <li class="active"><a href="">Giới thiệu</a></li>
                                                <li><a href="">Hãng xe</a>
                                                    <ul>
                                                        <li><a href="">Hà Nội</a></li>
                                                        <li><a href="">Sài Gòn</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="">Địa điểm thuê xe</a>
                                                    <ul>
                                                        <li><a href="">Hà Nội</a></li>
                                                        <li><a href="">Sài Gòn</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="">Liên hệ</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="header-cart-wrapper">
                    <div class="header-cart">
                        <button class="icon-cart">
                            <i class="ti-shopping-cart"></i>
                            <span class="count-style">02</span>
                        </button>

                    </div>
                </div>
            </div>
        </header>
        <div class="breadcrumb-area pt-255 pb-170"
            style="background-image: url(assets/Frontend/img/banner/banner-4.jpg)">
            <div class="container-fluid">
                <div class="breadcrumb-content text-center">
                    <h2>Danh sách xe</h2>
                    <ul>
                        <li>
                            <a href="#">home</a>
                        </li>
                        <li>Danh sách xe</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="shop-wrapper pt-120 pb-120">
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
                                                    <li><a
                                                            href="/shop/{{ $brand->BrandName }}">{{ $brand->BrandName }}</a>
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
                                <li><a href="#product-list" data-view="product-list"><i
                                            class="ti-view-list"></i></a></li>
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
                                                    <a href="/chi-tiet/{{ $vehicle->id }}">
                                                        @if (isset($vehicleImages[$vehicle->id]['mainImage']))
                                                            <img src="{{ asset($vehicleImages[$vehicle->id]['mainImage']->ImageURL) }}"
                                                                alt="Main Image">
                                                        @else
                                                            <p>No main image available.</p>
                                                        @endif
                                                    </a>
                                                    <div class="product-item-dec">
                                                        <ul>
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
                                                        </ul>
                                                    </div>
                                                    <div class="product-action">
                                                        <a class="action-plus-2 p-action-none" title="Add To Cart"
                                                            href="#">
                                                            <i class=" ti-shopping-cart"></i>
                                                        </a>
                                                        <a class="action-cart-2" title="Wishlist" href="#">
                                                            <i class=" ti-heart"></i>
                                                        </a>
                                                        <a class="action-reload" title="Quick View"
                                                            data-toggle="modal" data-target="#exampleModal"
                                                            href="#">
                                                            <i class=" ti-zoom-in"></i>
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
                                                            <span>{{ $vehicle->rental_price_per_day }}đ/ngày</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-list-details">
                                                    <h2><a
                                                            href="/chi-tiet/{{ $vehicle->id }}">{{ $vehicle->VehicleName }}</a>
                                                    </h2>
                                                    <div class="quick-view-rating">
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                        <i class="fa fa-star reting-color"></i>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>{{ $vehicle->rental_price_per_day }}đ/ngày</span>
                                                    </div>
                                                    <p>{{ $vehicle->description }}</p>
                                                    <div class="shop-list-cart">
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
                                    <li><a href="{{ $vehicles->previousPageUrl() }}"><i
                                                class="fa fa-angle-left"></i></a></li>
                                @endif

                                @foreach ($vehicles->links()->elements[0] as $page => $url)
                                    @if ($page == $vehicles->currentPage())
                                        <li class="active"><a href="#">{{ $page }}</a></li>
                                    @else
                                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                                    @endif
                                @endforeach

                                @if ($vehicles->hasMorePages())
                                    <li><a href="{{ $vehicles->nextPageUrl() }}"><i
                                                class="fa fa-angle-right"></i></a></li>
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
