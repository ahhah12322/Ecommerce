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

            <div class="col-xl-12 col-lg-12 ">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">General Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form action="{{ route('brand-update', $brand->BrandID) }}" method="POST"
                                    id="category-form">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="category-title" class="form-label">Brand Name</label>
                                        <input type="text" id="category-title" class="form-control"
                                            placeholder="Enter Title" value="{{ $brand->BrandName }}"
                                            name="BrandName" required>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-3 bg-light mb-3 rounded">
                    <div class="row justify-content-end g-2">
                        <div class="col-lg-2">
                            <a href="#!" class="btn btn-outline-secondary w-100"
                                onclick="event.preventDefault(); document.getElementById('category-form').submit();">Save
                                Change</a>
                        </div>

                        <div class="col-lg-2">
                            <a href="{{ route('category-list') }}" class="btn btn-primary w-100">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>




    <div class="page-content">
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
<script src="{{ asset('assets/Backend/js/vendor.js')}}"></script>

<!-- App Javascript (Require in all Page) -->
<script src="{{ asset('assets/Backend/js/app.js')}}"></script>

</body>


<!-- Mirrored from techzaa.getappui.com/larkon/admin/category-edit.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Sep 2024 06:07:44 GMT -->

</html>
