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

                <h1>Lỗi cmnr</h1>






                {{-- @section('content') --}}
                <h1>Thêm Hợp Đồng Thuê Xe</h1>
                <form action="{{ route('admin.order.store') }}" method="POST">
                    @csrf
                    <div>
                        <label for="user_id">Người dùng:</label>
                        <select name="user_id" id="user_id" required>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="vehicle_id">Xe:</label>
                        <select name="vehicle_id" id="vehicle_id" required>
                            @foreach ($vehicles as $vehicle)
                                @if ($vehicle->status === 'Sẵn sàng')
                                    <option value="{{ $vehicle->id }}">{{ $vehicle->VehicleName }} {{ $vehicle->status }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="rental_start_date">Ngày bắt đầu:</label>
                        <input type="datetime-local" name="rental_start_date" id="rental_start_date" required>
                    </div>
                    <div>
                        <label for="rental_end_date">Ngày kết thúc:</label>
                        <input type="datetime-local" name="rental_end_date" id="rental_end_date" required>
                    </div>
                    <div>
                        <button type="submit">Thêm Hợp Đồng</button>
                    </div>
                </form>
                {{-- @endsection --}}






























                
               </div>

            </div>
            <!-- End Container Fluid -->
  
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
  