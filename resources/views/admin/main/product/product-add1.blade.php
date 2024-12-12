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


        <div class="col-xl-12 col-lg-12 ">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Product Photo</h4>
                </div>
                <div class="card-body">
                    <!-- File Upload -->
                    <form action="{{ route('vehical-add') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{-- <div class="dz-message needsclick">
                            <i class="bx bx-cloud-upload fs-48 text-primary"></i>
                            <h3 class="mt-4">Up Ảnh đại diện <span class="text-primary">click to
                                    browse</span></h3>
                        </div>
                        <div class="fallback">
                            <input type="file" id="mainImage" name="main_image" accept="image/*" required>
                        </div>
                        <div class="dz-message needsclick">
                            <i class="bx bx-cloud-upload fs-48 text-primary"></i>
                            <h3 class="mt-4">Up Ảnh đại diện <span class="text-primary">click to
                                    browse</span></h3>
                        </div>
                        <div class="fallback">

                            <input type="file" id="additionalImages" name="additional_images[]" accept="image/*"
                                multiple>

                        </div> --}}
                        <!-- Input cho ảnh chính -->
                        <div class="mb-3">
                            <label for="mainImage" class="form-label">Chọn ảnh chính:</label>
                            <input type="file" class="form-control" id="mainImage" name="main_image" accept="image/*"
                                onchange="previewImage(event, 'mainImagePreview')" required>
                            <div id="mainImagePreview" class="mt-2"></div>
                        </div>

                        <!-- Input cho nhiều ảnh -->
                        <div class="mb-3">
                            <label for="additionalImages" class="form-label">Chọn thêm nhiều ảnh:</label>
                            <input type="file" class="form-control" id="additionalImages" name="additional_images[]"
                                accept="image/*" multiple onchange="previewImages(event)">
                            <div id="additionalImagesPreview" class="mt-2 text-center"></div>
                        </div>


                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Product Information</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="product-name" class="form-label">Tên Phương Tiện</label>
                                <input type="text" id="ehicleName" class="form-control" placeholder="Tên xe"
                                    name="VehicleName" required>

                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="product-brand" class="form-label">Biển số xe</label>
                                <input type="text" id="product-brand" class="form-control" placeholder="30A-123456"
                                    name="license_plate">

                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="product-name" class="form-label">Số Khung</label>
                                <input type="text" id="product-name" class="form-control" placeholder="Số khung"
                                    name="chassis_number">

                            </div>

                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="product-brand" class="form-label">Số Máy</label>
                                <input type="text" id="product-brand" class="form-control" placeholder="Số Máy"
                                    name="engine_number">

                            </div>

                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="product-brand" class="form-label">màu</label>
                                <input type="text" id="product-color" name="color"class="form-control"
                                    placeholder="Số Máy">


                            </div>

                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="product-stock" class="form-label">Số Ghế</label>
                                <input type="number" id="product-stock" class="form-control" placeholder="Số ghế"
                                    name="seat_number">
                            </div>



                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="product-categories" class="form-label">Categories</label>
                            <select class="form-control" id="product-categories" data-placeholder="Select Categories"
                                name="CategoryID">
                                <option value="">Choose a categories</option>
                                @foreach ($categorys as $category)
                                    <option value="{{ $category->CategoryID }}">{{ $category->CategoryName }}
                                    </option>
                                @endforeach

                            </select>

                        </div>
                        <div class="col-lg-4">
                            <label for="product-categories" class="form-label">Thương Hiệu</label>
                            <select class="form-control" id="product-categories" name="BrandID"
                                data-placeholder="Chọn Thương Hiệu" required>
                                <option value="">Choose a Brand</option>
                                @foreach ($brands as $brand)
                                    <option value="{{ $brand->BrandID }}">{{ $brand->BrandName }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <label for="gender" class="form-label">Loại xe</label>
                            <select class="form-control" id="gender" data-placeholder="Select Categories"
                                name="vehicle_type_id">
                                <option value="">Choose a Brand</option>
                                @foreach ($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach

                            </select>

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
                                    placeholder="Short description about the product" name="description"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="gender" class="form-label">Địa Điểm</label>
                            <select class="form-control" id="gender" data-placeholder="Select Gender"
                                name="location">
                                <option value="">Hiển Thị Địa Điểm</option>
                                <option value="Hà Nội">Hà Nội</option>
                                <option value="Đà Nẵng">Đà Nẵng</option>
                                <option value="Hồ Chí Minh">Hồ Chí Minh</option>

                            </select>

                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="product-stock" class="form-label">năm sản xuất</label>
                                <input type="number" id="product-stock" class="form-control"
                                    name="year_of_manufacture" placeholder="2020">
                            </div>



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
                            <label for="product-price" class="form-label">Giá thuê</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text fs-20"><i class='bx bx-dollar'></i></span>
                                <input type="number" id="product-price" class="form-control" placeholder="000"
                                    name="rental_price_per_day">

                            </div>

                        </div>
                        <div class="col-lg-4">
                            <label for="product-discount" class="form-label">Dung lượng Pin</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text fs-20"><i class='bx bxs-discount'></i></span>
                                <input type="number" id="product-discount" class="form-control" placeholder="000"
                                    name="battery_capacity">

                            </div>

                        </div>
                        <div class="col-lg-4">
                            <label for="product-tex" class="form-label">Quảng Đường Di Chuyển Tối Đa</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text fs-20"><i class='bx bxs-file-txt'></i></span>
                                <input type="number" id="product-tex" class="form-control" placeholder="000"
                                    name="max_range">

                            </div>
                            <button type="submit" class="btn btn-primary">Gửi</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-3 bg-light mb-3 rounded">
                <div class="row justify-content-end g-2">
                    <div class="col-lg-2">
                        <a href="#!" class="btn btn-outline-secondary w-100"
                            onclick="event.preventDefault(); document.getElementById('myForm').submit();">Save
                            Change</a>


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
<!-- Thêm JavaScript từ CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Hàm xử lý khi xóa ảnh
    function removeImage(fileIndex) {
        const filesInput = document.getElementById('additionalImages');
        const files = [...filesInput.files];
        // Xóa file khỏi mảng
        files.splice(fileIndex, 1);

        // Cập nhật lại input với các file còn lại
        const dataTransfer = new DataTransfer();
        files.forEach(file => {
            dataTransfer.items.add(file);
        });
        filesInput.files = dataTransfer.files;

        // Cập nhật lại giao diện ảnh
        previewImages(); // Hàm này để cập nhật lại hình ảnh đã chọn
    }

    function previewImages(event) {
        const files = document.getElementById('additionalImages').files;
        const preview = document.getElementById('additionalImagesPreview');
        preview.innerHTML = ''; // Xóa ảnh cũ

        if (files) {
            for (let i = 0; i < files.length; i++) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const imgContainer = document.createElement('div');
                    imgContainer.classList.add('image-container');

                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.classList.add('img-fluid');
                    img.style.width = '100%';

                    // Nút Xóa ảnh
                    const removeButton = document.createElement('button');
                    removeButton.type = 'button';
                    removeButton.classList.add('btn', 'btn-danger', 'btn-sm', 'remove-button');
                    removeButton.innerHTML = 'Xóa';
                    removeButton.onclick = function() {
                        removeImage(i);
                    };

                    // Thêm ảnh và nút xóa vào container
                    imgContainer.appendChild(img);
                    imgContainer.appendChild(removeButton);
                    preview.appendChild(imgContainer);
                };
                reader.readAsDataURL(files[i]);
            }
        }
    }

    // Hàm xóa ảnh (giữ lại index nếu cần)
    function removeImage(index) {
        const files = document.getElementById('additionalImages').files;
        const fileArray = Array.from(files);
        fileArray.splice(index, 1); // Xóa file ở vị trí index
        const dataTransfer = new DataTransfer();
        fileArray.forEach(file => dataTransfer.items.add(file));
        document.getElementById('additionalImages').files = dataTransfer.files;
        previewImages(event); // Cập nhật lại preview sau khi xóa
    }
</script>