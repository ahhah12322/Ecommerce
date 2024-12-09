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

        <div class="col-xl-12 col-lg-12 ">
            <div class="card">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="card-header">
                    <h4 class="card-title">Add Product Photo</h4>
                </div>
                <div class="card-body">
                    <!-- File Upload -->
                    <form action="https://techzaa.getappui.com/" method="post" class="dropzone" id="add-vehical-1"
                        data-plugin="dropzone" data-previews-container="#file-previews"
                        data-upload-preview-template="#uploadPreviewTemplate">
                        <div class="fallback">
                            <input name="main_image[]" type="file" multiple />
                        </div>
                        <div class="dz-message needsclick">
                            <i class="bx bx-cloud-upload fs-48 text-primary"></i>
                            <h3 class="mt-4">Up Ảnh đại diện <span class="text-primary">click to
                                    browse</span></h3>

                        </div>

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </form>

                </div>
                <div class="card-body">
                    <!-- File Upload -->
                    <form action="https://techzaa.getappui.com/" method="post" class="dropzone" id="add-vehical-2"
                        data-plugin="dropzone" data-previews-container="#file-previews"
                        data-upload-preview-template="#uploadPreviewTemplate">
                        <div class="fallback">
                            <input name="additional_images[]" type="file" multiple />
                        </div>
                        <div class="dz-message needsclick">
                            <i class="bx bx-cloud-upload fs-48 text-primary"></i>
                            <h3 class="mt-4">Drop your images here, or <span class="text-primary">click to
                                    browse</span></h3>
                            <span class="text-muted fs-13">
                                1600 x 1200 (4:3) recommended. PNG, JPG and GIF files are allowed
                            </span>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div>
                    </form>

                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Product Information</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form id="add-vehical-3" method="POST">
                                <div class="mb-3">
                                    <label for="product-name" class="form-label">Tên Phương Tiện</label>
                                    <input type="text" id="product-name" class="form-control" placeholder="Tên xe"
                                        name="VehicleName" required>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <form id="add-vehical-4" method="POST">
                                <div class="mb-3">
                                    <label for="product-brand" class="form-label">Biển số xe</label>
                                    <input type="text" id="product-brand" class="form-control"
                                        placeholder="30A-123456" name="license_plate" required>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <form id="add-vehical-5" method="POST">
                                <div class="mb-3">
                                    <label for="product-name" class="form-label">Số Khung</label>
                                    <input type="text" id="product-name" class="form-control" placeholder="Số khung"
                                        name="chassis_number" required>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-4">
                            <form id="add-vehical-6" method="POST">
                                <div class="mb-3">
                                    <label for="product-brand" class="form-label">Số Máy</label>
                                    <input type="text" id="product-brand" class="form-control" placeholder="Số Máy"
                                        name="engine_number" required>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-4">
                            <form id="add-vehical-7" method="POST">
                                <div class="mb-3">
                                    <label for="product-stock" class="form-label">Số Ghế</label>
                                    <input type="number" id="product-stock" class="form-control"
                                        placeholder="Số ghế" name="seat_number" required>
                                </div>

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <form id="add-vehical-8" method="POST">
                                <label for="product-categories" class="form-label">Categories</label>
                                <select class="form-control" id="product-categories" data-choices data-choices-groups
                                    data-placeholder="Select Categories" name="CategoryID" required>
                                    <option value="">Choose a categories</option>
                                    @foreach ($categorys as $category)
                                        <option value="{{ $category->CategoryID }}">{{ $category->CategoryName }}
                                        </option>
                                    @endforeach
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </select>
                            </form>
                        </div>
                        <div class="col-lg-4">
                            <form id="add-vehical-9" method="POST">
                                <label for="product-categories" class="form-label">Thương Hiệu</label>
                                <select class="form-control" id="product-categories" data-choices data-choices-groups
                                    data-placeholder="Select Categories" name="BrandID" required>
                                    <option value="">Choose a Brand</option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->BrandID }}">{{ $brand->BrandName }}</option>
                                    @endforeach
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </select>
                            </form>
                        </div>
                        <div class="col-lg-4">
                            <form id="add-vehical-10" method="POST">
                                <label for="gender" class="form-label">Loại xe</label>
                                <select class="form-control" id="gender" data-choices data-choices-groups
                                    data-placeholder="Select Categories" name="vehicle_type_id" required>
                                    <option value="">Choose a Brand</option>
                                    @foreach ($types as $type)
                                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                                    @endforeach
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </select>
                            </form>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-4">
                            <div class="mt-3">
                                <h5 class="text-dark fw-medium">Size :</h5>
                                <div class="d-flex flex-wrap gap-2" role="group"
                                    aria-label="Basic checkbox toggle button group">
                                    <input type="checkbox" class="btn-check" id="size-xs1">
                                    <label
                                        class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                        for="size-xs1">XS</label>

                                    <input type="checkbox" class="btn-check" id="size-s1">
                                    <label
                                        class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                        for="size-s1">S</label>

                                    <input type="checkbox" class="btn-check" id="size-m1">
                                    <label
                                        class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                        for="size-m1">M</label>

                                    <input type="checkbox" class="btn-check" id="size-xl1">
                                    <label
                                        class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                        for="size-xl1">Xl</label>

                                    <input type="checkbox" class="btn-check" id="size-xxl1">
                                    <label
                                        class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                        for="size-xxl1">XXL</label>
                                    <input type="checkbox" class="btn-check" id="size-3xl1">
                                    <label
                                        class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                        for="size-3xl1">3XL</label>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="mt-3">
                                <h5 class="text-dark fw-medium">Màu Sắc</h5>
                                <div class="d-flex flex-wrap gap-2" role="group"
                                    aria-label="Basic checkbox toggle button group">
                                    <input type="checkbox" class="btn-check" id="color-dark1">
                                    <label
                                        class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                        for="color-dark1"> <i class="bx bxs-circle fs-18 text-dark"></i></label>

                                    <input type="checkbox" class="btn-check" id="color-yellow1">
                                    <label
                                        class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                        for="color-yellow1"> <i class="bx bxs-circle fs-18 text-warning"></i></label>

                                    <input type="checkbox" class="btn-check" id="color-white1">
                                    <label
                                        class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                        for="color-white1"> <i class="bx bxs-circle fs-18 text-white"></i></label>

                                    <input type="checkbox" class="btn-check" id="color-red1">
                                    <label
                                        class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                        for="color-red1"> <i class="bx bxs-circle fs-18 text-primary"></i></label>

                                    <input type="checkbox" class="btn-check" id="color-green1">
                                    <label
                                        class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                        for="color-green1"> <i class="bx bxs-circle fs-18 text-success"></i></label>

                                    <input type="checkbox" class="btn-check" id="color-blue1">
                                    <label
                                        class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                        for="color-blue1"> <i class="bx bxs-circle fs-18 text-danger"></i></label>

                                    <input type="checkbox" class="btn-check" id="color-sky1">
                                    <label
                                        class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                        for="color-sky1"> <i class="bx bxs-circle fs-18 text-info"></i></label>

                                    <input type="checkbox" class="btn-check" id="color-gray1">
                                    <label
                                        class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center"
                                        for="color-gray1"> <i class="bx bxs-circle fs-18 text-secondary"></i></label>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="description" class="form-label">Mô Tả</label>
                                <textarea class="form-control bg-light-subtle" id="description" rows="7"
                                    placeholder="Short description about the product" name="description" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <form id="add-vehical-12" method="POST">
                                <label for="gender" class="form-label">Địa Điểm</label>
                                <select class="form-control" id="gender" data-choices data-choices-groups
                                    data-placeholder="Select Gender" required name="location">
                                    <option value="">Hiển Thị Địa Điểm</option>
                                    <option value="Hà Nội">Hà Nội</option>
                                    <option value="Đà Nẵng">Đà Nẵng"</option>
                                    <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </select>
                            </form>
                        </div>
                        <div class="col-lg-4">
                            <form id="add-vehical-13" method="POST">
                                <div class="mb-3">
                                    <label for="product-stock" class="form-label">năm sản xuất</label>
                                    <input type="number" id="product-stock" class="form-control"
                                        name="year_of_manufacture" required placeholder="2020">
                                </div>

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                        </div>
                        <div class="col-lg-4">
                            <form id="add-vehical-14" method="POST">
                                <div class="mb-3">
                                    <label for="product-stock" class="form-label">Dung Lượng Pin</label>
                                    <input type="number" id="product-stock" class="form-control"
                                        placeholder="Quantity">
                                </div>

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Pricing Details</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <form id="add-vehical-15" method="POST">
                                <label for="product-price" class="form-label">Giá thuê</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text fs-20"><i class='bx bx-dollar'></i></span>
                                    <input type="number" id="product-price" class="form-control" placeholder="000"
                                        name="rental_price_per_day" required>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-4">
                            <form id="add-vehical-16" method="POST">
                                <label for="product-discount" class="form-label">Dung lượng Pin</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text fs-20"><i class='bx bxs-discount'></i></span>
                                    <input type="number" id="product-discount" class="form-control"
                                        placeholder="000" required name="battery_capacity">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-4">
                            <form id="add-vehical-17" method="POST">
                                <label for="product-tex" class="form-label">Quảng Đường Di Chuyển Tối Đa</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text fs-20"><i class='bx bxs-file-txt'></i></span>
                                    <input type="number" id="product-tex" class="form-control" placeholder="000"
                                        name="max_range" required>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-3 bg-light mb-3 rounded">
                <div class="row justify-content-end g-2">
                    <div class="col-lg-2">
                        <a href="#" class="btn btn-outline-secondary w-100"
                            onclick="submitAllForms(); return false;">Save Change</a>



                    </div>
                    <div class="col-lg-2">
                        <a href="#!" class="btn btn-primary w-100">Cancel</a>
                    </div>
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
<script src="{{ asset('assets/Backend/js/vendor.js') }}"></script>

<!-- App Javascript (Require in all Page) -->
<script src="{{ asset('assets/Backend/js/app.js') }}"></script>


</body>


<!-- Mirrored from techzaa.getappui.com/larkon/admin/product-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Sep 2024 06:07:19 GMT -->

</html>
<script>
    function submitAllForms() {
        const forms = document.querySelectorAll(
        'form[id^="add-vehical"]'); // Chọn tất cả các form có id bắt đầu bằng "add-vehical"

        // Kiểm tra xem có form nào không
        if (forms.length === 0) {
            console.log("No forms found.");
            return;
        }

        let valid = true; // Biến để kiểm tra tính hợp lệ của các form

        forms.forEach(form => {
            // Kiểm tra tính hợp lệ của form
            if (!form.checkValidity()) {
                form.reportValidity(); // Báo lỗi nếu form không hợp lệ
                valid = false; // Đặt valid thành false nếu có form không hợp lệ
            }
        });

        if (!valid) {
            console.log("Form not valid.");
            return; // Dừng lại nếu có form không hợp lệ
        }

        // Nếu tất cả form hợp lệ, tiếp tục gửi dữ liệu
        forms.forEach(form => {
            const formData = new FormData(form);
            formData.append('_token', '{{ csrf_token() }}');

            fetch('{{ route('vehical-add') }}', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => {
                    if (response.ok) {
                        return response.json();
                    } else {
                        throw new Error('Network response was not ok');
                    }
                })
                .then(data => {
                    console.log('Success:', data);
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        });
    }
</script>
