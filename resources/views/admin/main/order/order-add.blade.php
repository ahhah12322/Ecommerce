@include('admin.app.header')

          <!-- ========== App Menu Start ========== -->
          @include('admin.app.menu')
          <!-- ========== App Menu End ========== -->

          <!-- ==================================================== -->
          <!-- Start right Content here -->
          <!-- ==================================================== -->

          <div class="page-content">

               <!-- Start Container -->
               <div class="container-xxl">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body"> 
                                    
                                    <div class="card-header">
                                        <h3>Thêm Hợp Đồng Thuê Xe</h3>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('admin.order.store') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <h4 class="card-title">Chọn Người dùng : </h4>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <label for="user_id" class="form-label">User : </label>
                                                        <select name="user_id" id="user_id" class="form-control" required>
                                                            @foreach ($users as $user)
                                                                <option value="{{ $user->id }}">{{ $user->name }} - {{ $user->email }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <h4 class="card-title">Chọn Phương Tiện : </h4>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="vehicle_id" class="form-label">Vehicle : </label>
                                                            <select name="vehicle_id" id="vehicle_id" class="form-control" required>
                                                                @foreach ($vehicles as $vehicle)
                                                                    @if ($vehicle->status === 'Sẵn sàng')
                                                                        <option value="{{ $vehicle->id }}">{{ $vehicle->VehicleName }} {{ $vehicle->status }}</option>
                                                                    @endif
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <h4 class="card-title">Ngày bắt đầu : </h4>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="rental_start_date" class="form-label">Date Start : </label>
                                                            <input type="datetime-local" class="form-control flatpickr-input active" name="rental_start_date" id="rental_start_date" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <h4 class="card-title">Ngày kết thúc : </h4>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="rental_end_date" class="form-label">Date End : </label>
                                                            <input type="datetime-local" class="form-control flatpickr-input active" name="rental_end_date" id="rental_end_date" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <h4 class="card-title">Payment Method : </h4>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="payment_method" class="form-label">Phương thức thanh toán : </label>
                                                            <select class="form-select" name="payment_method" id="payment_method" aria-label="Default select example">
                                                                <option selected value="Cash">Tiền mặt</option>
                                                                <option value="MoMo">MoMo</option>
                                                                <option value="VNPay">VNPay</option>
                                                                <option value="Bank">Bank</option>
                                                           </select>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-lg-3">
                                                        <h4 class="card-title">Type : </h4>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="payment_method" class="form-label">Type : </label>
                                                            <select class="form-select" id="payment_method" aria-label="Default select example">
                                                                <option selected>Tự lái</option>
                                                                <option value="Cancel">Có tài xế</option>
                                                           </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                

                                                




                                            






                                                <div>
                                                    <button type="submit" class="btn btn-primary w-100">Thêm Hợp Đồng</button>
                                                </div>
                                            
                                        </form>
                                    </div>

                                        

                                </div>
                            </div>
                        </div>
                    </div>
               </div>
          </div>
            <!-- ========== Footer Start ========== -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 text-center">
                            <script>document.write(new Date().getFullYear())</script> &copy; Larkon. Crafted by <iconify-icon icon="iconamoon:heart-duotone" class="fs-18 align-middle text-danger"></iconify-icon> <a
                                href="#" class="fw-bold footer-text" target="_blank">Techzaa</a>
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
  
       <script src="../../assets/Backend/js/pages/order-cart.js"></script>
  </body>
  
  
  <!-- Mirrored from techzaa.getappui.com/larkon/admin/order-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Sep 2024 06:07:45 GMT -->
  </html>
  