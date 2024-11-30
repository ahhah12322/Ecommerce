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
                <div class="card-header">
                    <h4 class="card-title">Add Product Photo</h4>
                </div>
                <div class="card-body">
                    <!-- File Upload -->
                    <form action="https://techzaa.getappui.com/" method="post" class="dropzone" id="myAwesomeDropzone"
                        data-plugin="dropzone" data-previews-container="#file-previews"
                        data-upload-preview-template="#uploadPreviewTemplate">
                        <div class="fallback">
                            <input name="file" type="file" multiple />
                        </div>
                        <div class="dz-message needsclick">
                            <i class="bx bx-cloud-upload fs-48 text-primary"></i>
                            <h3 class="mt-4">Drop your images here, or <span class="text-primary">click to
                                    browse</span></h3>
                            <span class="text-muted fs-13">
                                1600 x 1200 (4:3) recommended. PNG, JPG and GIF files are allowed
                            </span>
                        </div>
                    </form>

                </div>
                <div class="card-body">
                    <!-- File Upload -->
                    <form action="https://techzaa.getappui.com/" method="post" class="dropzone" id="myAwesomeDropzone"
                        data-plugin="dropzone" data-previews-container="#file-previews"
                        data-upload-preview-template="#uploadPreviewTemplate">
                        <div class="fallback">
                            <input name="file" type="file" multiple />
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
                            <form>
                                <div class="mb-3">
                                    <label for="product-name" class="form-label">Tên Phương Tiện</label>
                                    <input type="text" id="product-name" class="form-control" placeholder="Tên xe">
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <form>
                                <div class="mb-3">
                                    <label for="product-brand" class="form-label">Biển số xe</label>
                                    <input type="text" id="product-brand" class="form-control"
                                        placeholder="30A-123456">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <form>
                                <div class="mb-3">
                                    <label for="product-name" class="form-label">Số Khung</label>
                                    <input type="text" id="product-name" class="form-control" placeholder="Tên xe">
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-4">
                            <form>
                                <div class="mb-3">
                                    <label for="product-brand" class="form-label">Số Máy</label>
                                    <input type="text" id="product-brand" class="form-control"
                                        placeholder="30A-123456">
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-4">
                            <form>
                                <div class="mb-3">
                                    <label for="product-stock" class="form-label">Số Ghế</label>
                                    <input type="number" id="product-stock" class="form-control"
                                        placeholder="Quantity">
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <form>
                                <label for="product-categories" class="form-label">Categories</label>
                                <select class="form-control" id="product-categories" data-choices data-choices-groups
                                    data-placeholder="Select Categories" name="choices-single-groups">
                                    <option value="">Choose a categories</option>
                                    <option value="Fashion">Fashion</option>
                                    <option value="Electronics">Electronics</option>
                                    <option value="Footwear">Footwear</option>
                                    <option value="Sportswear">Sportswear</option>
                                    <option value="Watches">Watches</option>
                                    <option value="Furniture">Furniture</option>
                                    <option value="Appliances">Appliances</option>
                                    <option value="Headphones">Headphones</option>
                                    <option value="Other Accessories">Other Accessories</option>
                                </select>
                            </form>
                        </div>
                        <div class="col-lg-4">
                            <form>
                                <label for="product-categories" class="form-label">Thương Hiệu</label>
                                <select class="form-control" id="product-categories" data-choices data-choices-groups
                                    data-placeholder="Select Categories" name="choices-single-groups">
                                    <option value="">Choose a categories</option>
                                    <option value="Fashion">Fashion</option>
                                    <option value="Electronics">Electronics</option>
                                    <option value="Footwear">Footwear</option>
                                    <option value="Sportswear">Sportswear</option>
                                    <option value="Watches">Watches</option>
                                    <option value="Furniture">Furniture</option>
                                    <option value="Appliances">Appliances</option>
                                    <option value="Headphones">Headphones</option>
                                    <option value="Other Accessories">Other Accessories</option>
                                </select>
                            </form>
                        </div>
                        <div class="col-lg-4">
                            <form>
                                <label for="gender" class="form-label">Loại xe</label>
                                <select class="form-control" id="gender" data-choices data-choices-groups
                                    data-placeholder="Select Gender">
                                    <option value="">Select Gender</option>
                                    <option value="Men">Men</option>
                                    <option value="Women">Women</option>
                                    <option value="Other">Other</option>
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
                                    placeholder="Short description about the product"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <form>
                                <label for="gender" class="form-label">Địa Điểm</label>
                                <select class="form-control" id="gender" data-choices data-choices-groups
                                    data-placeholder="Select Gender">
                                    <option value="">Hiển Thị Địa Điểm</option>
                                    <option value="Men">Men</option>
                                    <option value="Women">Women</option>
                                    <option value="Other">Other</option>
                                </select>
                            </form>
                        </div>
                        <div class="col-lg-4">
                            <form>
                                <div class="mb-3">
                                    <label for="product-stock" class="form-label">năm sản xuất</label>
                                    <input type="number" id="product-stock" class="form-control"
                                        placeholder="Quantity">
                                </div>

                            </form>
                        </div>
                        <div class="col-lg-4">
                            <form>
                                <div class="mb-3">
                                    <label for="product-stock" class="form-label">Dung Lượng Pin</label>
                                    <input type="number" id="product-stock" class="form-control"
                                        placeholder="Quantity">
                                </div>

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
                            <form>
                                <label for="product-price" class="form-label">Giá thuê</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text fs-20"><i class='bx bx-dollar'></i></span>
                                    <input type="number" id="product-price" class="form-control" placeholder="000">
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-4">
                            <form>
                                <label for="product-discount" class="form-label">Dung lượng Pin</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text fs-20"><i class='bx bxs-discount'></i></span>
                                    <input type="number" id="product-discount" class="form-control"
                                        placeholder="000">
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-4">
                            <form>
                                <label for="product-tex" class="form-label">Quảng Đường Di Chuyển Tối Đa</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text fs-20"><i class='bx bxs-file-txt'></i></span>
                                    <input type="number" id="product-tex" class="form-control" placeholder="000">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-3 bg-light mb-3 rounded">
                <div class="row justify-content-end g-2">
                    <div class="col-lg-2">
                        <a href="#!" class="btn btn-outline-secondary w-100">Create Product</a>
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
<script src="../../assets/Backend/js/vendor.js"></script>

<!-- App Javascript (Require in all Page) -->
<script src="../../assets/Backend/js/app.js"></script>

</body>


<!-- Mirrored from techzaa.getappui.com/larkon/admin/product-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Sep 2024 06:07:19 GMT -->

</html>
