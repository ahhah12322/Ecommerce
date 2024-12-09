@include('admin.app.header')

<!-- ========== App Menu Start ========== -->
@include('admin.app.menu')
<!-- ========== App Menu End ========== -->

<!-- ==================================================== -->
<!-- Start right Content here -->
<!-- ==================================================== -->
<div class="page-content">

    <!-- Start Container Fluid -->
    <div class="container-xxl">

        <div class="row">
            <div class="col-lg-3">
                <div class="card bg-light-subtle">
                    <div class="card-header border-0">
                        <div class="search-bar me-3 mb-1">
                            <span><i class="bx bx-search-alt"></i></span>
                            <input type="search" class="form-control" id="searchInput" placeholder="Tìm xe ..."
                                aria-controls="dataTable">
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body border-light">
                        <form method="GET" action="{{ route('vehicles.filter') }}">

                            <a href="#"
                                class="btn-link d-flex align-items-center text-dark bg-light p-2 rounded fw-medium fs-16 mb-0"
                                data-bs-toggle="collapse" data-bs-target="#categories" aria-expanded="false"
                                aria-controls="other">Thương hiệu
                                <i class='bx bx-chevron-down ms-auto fs-20'></i>
                            </a>
                            <div id="categories" class="collapse show">
                                <div class="categories-list d-flex flex-column gap-2 mt-2">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="all-categories" checked>
                                        <label class="form-check-label" for="all-categories">All Categories</label>
                                    </div>
                                    @foreach ($brands as $brand)
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="fashion-categories"
                                                name="brands[]">
                                            <label class="form-check-label"
                                                for="fashion-categories">{{ $brand->BrandName }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="mt-4">
                                <a href="#"
                                    class="btn-link d-flex align-items-center text-dark bg-light p-2 rounded fw-medium fs-16 mb-0"
                                    data-bs-toggle="collapse" data-bs-target="#categories" aria-expanded="false"
                                    aria-controls="other">Categories
                                    <i class='bx bx-chevron-down ms-auto fs-20'></i>
                                </a>
                                <div id="categories" class="collapse show">
                                    <div class="categories-list d-flex flex-column gap-2 mt-2">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="all-categories" checked>
                                            <label class="form-check-label" for="all-categories">All Categories</label>
                                        </div>
                                        @foreach ($categorys as $category)
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" name="categories[]"
                                                    id="fashion-categories">
                                                <label class="form-check-label"
                                                    for="fashion-categories">{{ $category->CategoryName }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <a href="#"
                                    class="btn-link d-flex align-items-center text-dark bg-light p-2 rounded fw-medium fs-16 mb-0"
                                    data-bs-toggle="collapse" data-bs-target="#price" aria-expanded="false"
                                    aria-controls="other">Product Price
                                    <i class='bx bx-chevron-down ms-auto fs-20'></i>
                                </a>
                                <div id="price" class="collapse show">
                                    <div class="categories-list d-flex flex-column gap-2 mt-2">

                                        <h5 class="text-dark fw-medium mt-3">Custom Price Range :</h5>
                                        <div id="product-price-range" [data-slider-size="md" ] class=""></div>
                                        <div class="formCost d-flex gap-2 align-items-center mt-2">
                                            <input class="form-control form-control-sm text-center" type="text"
                                                id="minCost" value="0">
                                            <span class="fw-semibold text-muted">to</span>
                                            <input class="form-control form-control-sm text-center" type="text"
                                                id="maxCost" value="2000000">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <a href="#"
                                    class="btn-link d-flex align-items-center text-dark bg-light p-2 rounded fw-medium fs-16 mb-0"
                                    data-bs-toggle="collapse" data-bs-target="#gender" aria-expanded="false"
                                    aria-controls="other">Địa Điểm
                                    <i class='bx bx-chevron-down ms-auto fs-20'></i>
                                </a>
                                <div id="gender" class="collapse show">
                                    <div class="categories-list d-flex flex-column gap-2 mt-2">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="men">
                                            <label class="form-check-label" for="men">Hà Nội</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="women">
                                            <label class="form-check-label" for="women">Đà Nẵng</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="kids">
                                            <label class="form-check-label" for="kids">Hồ Chí Minh</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <a href="#"
                                    class="btn-link d-flex align-items-center text-dark bg-light p-2 rounded fw-medium fs-16 mb-0"
                                    data-bs-toggle="collapse" data-bs-target="#size" aria-expanded="false"
                                    aria-controls="other">Size & Fit
                                    <i class='bx bx-chevron-down ms-auto fs-20'></i>
                                </a>
                                <div id="size" class="collapse show">
                                    <p class="text-muted mt-1">"For better results, select gender and category"</p>
                                    <div class="categories-list d-flex flex-column gap-2 mt-2">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="size-s">
                                            <label class="form-check-label" for="size-s">S (1,437)</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="size-m">
                                            <label class="form-check-label" for="size-m">M (2,675)</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="size-l">
                                            <label class="form-check-label" for="size-l">L (4,870)</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="size-xl">
                                            <label class="form-check-label" for="size-xl">XL (7,543)</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="size-xxl">
                                            <label class="form-check-label" for="size-xxl">XXL (1,099)</label>
                                        </div>
                                        <a href="#!" class="text-dark fw-medium">More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="#"
                                    class="btn-link d-flex align-items-center text-dark bg-light p-2 rounded fw-medium fs-16 mb-0"
                                    data-bs-toggle="collapse" data-bs-target="#rating" aria-expanded="false"
                                    aria-controls="other">Rating
                                    <i class='bx bx-chevron-down ms-auto fs-20'></i>
                                </a>
                                <div id="rating" class="collapse show">
                                    <div class="categories-list d-flex flex-column gap-2 mt-2">
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="rating-number"
                                                id="rate-1">
                                            <label class="form-check-label" for="rate-1">1 <i
                                                    class="bx bxs-star text-warning"></i> & Above (437)</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="rating-number"
                                                id="rate-2">
                                            <label class="form-check-label" for="rate-2">2 <i
                                                    class="bx bxs-star text-warning"></i> & Above (657)</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="rating-number"
                                                id="rate-3">
                                            <label class="form-check-label" for="rate-3">3 <i
                                                    class="bx bxs-star text-warning"></i> & Above (1,897)</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="rating-number"
                                                id="rate-4">
                                            <label class="form-check-label" for="rate-4">4 <i
                                                    class="bx bxs-star text-warning"></i> & Above (3,571)</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="card-footer">
                        {{-- <a href="#!" class="btn btn-primary w-100">Apply</a> --}}
                        <button type="submit" class="btn btn-primary w-100">Apply</button>

                    </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="card bg-light-subtle">
                    <div class="card-header border-0">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-lg-6">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item fw-medium"><a href="javascript: void(0);"
                                            class="text-dark">Categories</a></li>
                                    <li class="breadcrumb-item active">All Product</li>
                                </ol>
                                <p class="mb-0 text-muted">Showing all <span
                                        class="text-dark fw-semibold">5,786</span> items results</p>
                            </div>
                            <div class="col-lg-6">
                                <div class="text-md-end mt-3 mt-md-0">
                                    <button type="button" class="btn btn-outline-secondary me-1"><i
                                            class="bx bx-cog me-1"></i>More Setting</button>
                                    <button type="button" class="btn btn-outline-secondary me-1"><i
                                            class="bx bx-filter-alt me-1"></i> Filters</button>
                                    <a href="product-add.html" class="btn btn-success me-1"><i
                                            class="bx bx-plus"></i> New Product</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="dataTable" class="row">
                    @foreach ($vehicles as $vehicle)
                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                @if (isset($vehicleImages[$vehicle->id]['mainImage']))
                                    <img src="{{ asset($vehicleImages[$vehicle->id]['mainImage']->ImageURL) }}"
                                        alt="Main Image" class="img-fluid ">
                                @else
                                    <p>No main image available.</p>
                                @endif
                                <div class="card-body bg-light-subtle rounded-bottom">
                                    <a href="product-details.html"
                                        class="text-dark fw-medium fs-16">{{ $vehicle->VehicleName }}s</a>
                                    {{-- <div class="my-1">
                                        <div class="d-flex gap-2 align-items-center">
                                            <ul class="d-flex text-warning m-0 fs-18  list-unstyled">
                                                <li>
                                                    <i class="bx bxs-star"></i>
                                                </li>
                                                <li>
                                                    <i class="bx bxs-star"></i>
                                                </li>
                                                <li>
                                                    <i class="bx bxs-star"></i>
                                                </li>
                                                <li>
                                                    <i class="bx bxs-star"></i>
                                                </li>
                                                <li>
                                                    <i class="bx bxs-star-half"></i>
                                                </li>
                                            </ul>
                                            <p class="mb-0 fw-medium fs-15 text-dark">4.1 <span
                                                    class="text-muted fs-13">(370 Review)</span></p>
                                        </div>
                                    </div> --}}
                                    <h4 class="fw-semibold text-dark mt-2 d-flex align-items-center gap-2">
                                        {{ number_format($vehicle->rental_price_per_day) }}đ/ngày
                                    </h4>
                                    <div class="mt-3">
                                        <div class="d-flex gap-2">
                                            <div class="dropdown">
                                                <a href="#"
                                                    class="btn btn-soft-primary border border-primary-subtle"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class='bx bx-dots-horizontal-rounded'></i></a>
                                                <div class="dropdown-menu">
                                                    <!-- item-->
                                                    <a href="#!" class="dropdown-item">Edit</a>
                                                    <!-- item-->
                                                    <a href="#!" class="dropdown-item">Overview</a>
                                                    <!-- item-->
                                                    <a href="#!" class="dropdown-item">Delete</a>
                                                </div>
                                            </div>
                                            <a href="order-cart.html"
                                                class="btn btn-outline-dark border border-secondary-subtle d-flex align-items-center justify-content-center gap-1 w-100"><i
                                                    class='bx bx-cart align-middle'></i> Đặt xe</a>
                                        </div>
                                    </div>
                                </div>
                                <span class="position-absolute top-0 end-0 p-3">
                                    <button type="button"
                                        class="btn btn-soft-danger avatar-sm d-inline-flex align-items-center justify-content-center fs-20 rounded-circle"><iconify-icon
                                            icon="solar:heart-angle-bold-duotone"></iconify-icon></button>
                                </span>
                            </div>
                        </div>
                    @endforeach

                </div>

                {{-- <div class="py-3 border-top">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end mb-0">
                            <!-- Previous Page Link -->
                            @if ($vehicles->onFirstPage())
                                <li class="page-item disabled"><a class="page-link"
                                        href="javascript:void(0);">Previous</a></li>
                            @else
                                <li class="page-item"><a class="page-link"
                                        href="{{ $vehicles->previousPageUrl() }}">Previous</a></li>
                            @endif

                            <!-- Pagination Links -->
                            @foreach ($vehicles->getUrlRange(1, $vehicles->lastPage()) as $page => $url)
                                <li class="page-item {{ $page == $vehicles->currentPage() ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endforeach

                            <!-- Next Page Link -->
                            @if ($vehicles->hasMorePages())
                                <li class="page-item"><a class="page-link"
                                        href="{{ $vehicles->nextPageUrl() }}">Next</a></li>
                            @else
                                <li class="page-item disabled"><a class="page-link"
                                        href="javascript:void(0);">Next</a></li>
                            @endif
                        </ul>
                    </nav>
                </div> --}}

            </div>
        </div>

    </div>
    <!-- End Container Fluid -->

    <!-- ========== Footer Start ========== -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> &copy; Larkon. Crafted by <iconify-icon icon="iconamoon:heart-duotone"
                        class="fs-18 align-middle text-danger"></iconify-icon> <a href="#"
                        class="fw-bold footer-text" target="_blank">Techzaa</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- ========== Footer End ========== -->

</div>
<!-- ==================================================== -->
<!-- End Page Content -->
<!-- ==================================================== -->

</div>
<!-- END Wrapper -->

<!-- Vendor Javascript (Require in all Page) -->
<script src="../../assets/Backend/js/vendor.js"></script>

<!-- App Javascript (Require in all Page) -->
<script src="../../assets/Backend/js/app.js"></script>

<script src="../../assets/Backend/js/pages/product-grid.js"></script>
</body>


<!-- Mirrored from techzaa.getappui.com/larkon/admin/product-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Sep 2024 06:07:42 GMT -->

</html>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filters = {
            brands: [],
            categories: []
        };

        // Update filters on checkbox change
        document.querySelectorAll('.brand-filter, .category-filter').forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                const filterType = checkbox.classList.contains('brand-filter') ? 'brands' :
                    'categories';

                if (checkbox.checked) {
                    filters[filterType].push(checkbox.value);
                } else {
                    filters[filterType] = filters[filterType].filter(id => id !== checkbox
                        .value);
                }

                fetchVehicles(filters);
            });
        });

        function fetchVehicles(filters) {
            fetch('/filter-vehicles', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify(filters)
                })
                .then(response => response.json())
                .then(data => {
                    // Update vehicle list based on response
                    document.querySelector('#vehicle-list').innerHTML = data.html;
                })
                .catch(error => console.error('Error:', error));
        }
    });
</script>
<script>
    document.getElementById("searchInput").addEventListener("input", function() {
        const filter = this.value.toLowerCase(); // Lấy giá trị nhập vào và chuyển thành chữ thường
        const items = document.querySelectorAll(
        "#dataTable .col-md-6 "); // Lấy tất cả các thẻ div có class là 'item'

        // Lặp qua các item
        items.forEach(item => {
            const text = item.textContent
                .toLowerCase(); // Lấy nội dung của item và chuyển thành chữ thường
            // Kiểm tra xem nội dung có chứa từ khóa không
            item.style.display = text.indexOf(filter) > -1 ? "" : "none";
        });
    });
</script>
