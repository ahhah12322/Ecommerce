@include('admin.app.header')
<!-- ========== App Menu Start ========== -->
@include('admin.app.menu')
<!-- ========== App Menu End ========== -->

<!-- ==================================================== -->
<!-- Start right Content here -->
<!-- ==================================================== -->
<div class="page-content">

    <!-- Start Container Fluid -->
    <div class="container-fluid">

        <div class="row">

            <div class="col-xl-12">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if ($errors->has('error'))
                    <div class="alert alert-danger">
                        {{ $errors->first('error') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center gap-1">
                        <h4 class="card-title flex-grow-1">All Product List</h4>
                        <div class="search-bar me-3">
                            <span><i class="bx bx-search-alt"></i></span>
                            <input type="search" class="form-control" id="searchInput" placeholder="Tìm xe ..."
                                aria-controls="dataTable">
                        </div>
                        <a href="{{ route('vehical-add1') }}" class="btn btn-sm btn-primary">
                            Add Product
                        </a>
                        {{-- <div class="dropdown">
                            <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                This Month
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="#!" class="dropdown-item">Download</a>
                                <!-- item-->
                                <a href="#!" class="dropdown-item">Export</a>
                                <!-- item-->
                                <a href="#!" class="dropdown-item">Import</a>
                            </div>
                        </div> --}}
                    </div>
                    <div>
                        <div class="table-responsive">
                            <table class="table align-middle mb-0 table-hover table-centered" id="dataTable">
                                <thead class="bg-light-subtle">
                                    <tr>
                                        <th>
                                            <center>STT</center>
                                        </th>
                                        <th>Tên Xe & Hãng</th>
                                        <th>Giá Thuê</th>
                                        <th>Địa Điểm</th>
                                        <th>Dòng</th>
                                        <th>Biển Số</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    @foreach ($vehicles as $vehicle)
                                        <tr>
                                            <td>
                                                <center>{{ $loop->iteration }}</center>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">
                                                    @if (isset($vehicleImages[$vehicle->id]['mainImage']))
                                                        <div
                                                            class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                            <img src="{{ asset($vehicleImages[$vehicle->id]['mainImage']->ImageURL) }}"
                                                                alt="Main Image" class="avatar-md">
                                                        </div>
                                                    @else
                                                        <p>No main image available.</p>
                                                    @endif
                                                    <div>
                                                        <a href="/chi-tiet/{{ $vehicle->id }}"
                                                            class="text-dark fw-medium fs-15">{{ $vehicle->VehicleName }}</a>
                                                        <p class="text-muted mb-0 mt-1 fs-13"><span>Hãng : </span>
                                                            @foreach ($brands as $brand)
                                                                @if ($vehicle->BrandID == $brand->BrandID)
                                                                    {{ $brand->BrandName }}
                                                                @endif
                                                            @endforeach
                                                        </p>
                                                    </div>
                                                </div>

                                            </td>
                                            <td>{{ number_format($vehicle->rental_price_per_day) }}đ/ngày</td>
                                            <td>
                                                <p class="mb-1 text-muted"><span
                                                        class="text-dark fw-medium">{{ $vehicle->location }}</p>

                                            </td>
                                            <td>
                                                @foreach ($categorys as $cate)
                                                    @if ($vehicle->CategoryID == $cate->CategoryID)
                                                        <p>{{ $cate->CategoryName }}</p>
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td> {{ $vehicle->license_plate }}</td>
                                            <td>
                                                <div class="d-flex gap-2">

                                                    <a href="{{ route('vehicle.edit', $vehicle->id) }}"
                                                        class="btn btn-soft-primary btn-sm">
                                                        <iconify-icon icon="solar:pen-2-broken"
                                                            class="align-middle fs-18"></iconify-icon>
                                                    </a>
                                                    <form action="{{ route('vehicle.delete', $vehicle->id) }}"
                                                        method="POST" style="display: inline-block;">
                                                        @csrf
                                                        <button type="submit" class="btn btn-soft-danger btn-sm"
                                                            onclick="return confirm('Are you sure you want to delete this category?');">
                                                            <iconify-icon icon="solar:trash-bin-minimalistic-2-broken"
                                                                class="align-middle fs-18"></iconify-icon>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- end table-responsive -->
                    </div>
                    <div class="card-footer border-top">
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
                    </div>
                </div>
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

</body>


<!-- Mirrored from techzaa.getappui.com/larkon/admin/product-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Sep 2024 06:07:42 GMT -->

</html>
<script>
    document.getElementById("searchInput").addEventListener("input", function() {
        const filter = this.value.toLowerCase(); // Lấy giá trị nhập vào và chuyển thành chữ thường
        const table = document.getElementById("dataTable"); // Lấy bảng
        const rows = table.getElementsByTagName("tr"); // Lấy tất cả các hàng trong bảng

        // Lặp qua từng hàng (bắt đầu từ hàng thứ 1, bỏ qua header)
        for (let i = 1; i < rows.length; i++) {
            const cells = rows[i].getElementsByTagName("td"); // Lấy các ô trong hàng
            let match = false;

            // Kiểm tra từng ô trong hàng
            for (let j = 0; j < cells.length; j++) {
                if (cells[j].textContent.toLowerCase().indexOf(filter) > -1) {
                    match = true;
                    break; // Nếu tìm thấy từ khóa, dừng vòng lặp
                }
            }

            // Hiển thị hoặc ẩn hàng dựa trên kết quả tìm kiếm
            rows[i].style.display = match ? "" : "none";
        }
    });
</script>
