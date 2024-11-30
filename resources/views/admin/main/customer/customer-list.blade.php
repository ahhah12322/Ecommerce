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
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-2 mb-3">
                                    <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                        <iconify-icon icon="solar:users-group-two-rounded-bold-duotone" class="fs-32 text-primary avatar-title"></iconify-icon>
                                    </div>
                                    <div>
                                        <h4 class="mb-0">All Customers</h4>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="text-muted fw-medium fs-22 mb-0">+22.63k</p>
                                    <div>
                                        <span class="badge text-success bg-success-subtle fs-12"><i class="bx bx-up-arrow-alt"></i>34.4%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-2 mb-3">
                                    <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                        <iconify-icon icon="solar:box-bold-duotone" class="fs-32 text-primary avatar-title"></iconify-icon>
                                    </div>
                                    <div>
                                        <h4 class="mb-0">Orders</h4>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="text-muted fw-medium fs-22 mb-0">+4.5k</p>
                                    <div>
                                        <span class="badge text-danger bg-danger-subtle fs-12"><i class="bx bx-down-arrow-alt"></i>8.1%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-2 mb-3">
                                    <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                        <iconify-icon icon="solar:headphones-round-sound-bold-duotone" class="fs-32 text-primary avatar-title"></iconify-icon>
                                    </div>
                                    <div>
                                        <h4 class="mb-0">Services Request</h4>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="text-muted fw-medium fs-22 mb-0">+1.03k</p>
                                    <div>
                                        <span class="badge text-success bg-success-subtle fs-12"><i class="bx bx-up-arrow-alt"></i>12.6%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-2 mb-3">
                                    <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                        <iconify-icon icon="solar:bill-list-bold-duotone" class="fs-32 text-primary avatar-title"></iconify-icon>
                                    </div>
                                    <div>
                                        <h4 class="mb-0">Invoice & Payment</h4>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="text-muted fw-medium fs-22 mb-0">$38,908.00</p>
                                    <div>
                                        <span class="badge text-success bg-success-subtle fs-12"><i class="bx bx-up-arrow-alt"></i>45.9%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-xl-12">
                         <div class="card">
                              <div class="d-flex card-header justify-content-between align-items-center">
                                   <div>
                                        <h4 class="card-title">All Customers List</h4>
                                   </div>
                                   <div class="dropdown">
                                        <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light rounded" data-bs-toggle="dropdown" aria-expanded="false">
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
                                   </div>
                              </div>


                              @section('content')
                              <div>
                                   <form method="POST" action="#">
                                   <div class="table-responsive">
                                        @csrf
                                        <table class="table align-middle mb-0 table-hover table-centered">
                                             <thead class="bg-light-subtle">
                                                  <tr>
                                                       <th style="width: 20px;">
                                                            <div class="form-check">
                                                                 <input type="checkbox" class="form-check-input" id="select-all">
                                                                 {{-- <label class="form-check-label" for="customCheck1"></label> --}}
                                                            </div>
                                                       </th>
                                                       <th>Customer Name</th>
                                                       <th>Email</th>
                                                       <th>Created</th>
                                                       <th>Address</th>
                                                       <th>Phone</th>
                                                       <th>CCCD</th>
                                                       <th>Payment Method</th>
                                                       <th>Action</th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  @foreach ($customers as $customer)
                                                  <tr>
                                                       <td>
                                                            <input type="checkbox" name="selected_customers[]" value="{{ $customer->id }}" class="customer-checkbox" />
                                                            {{-- <div class="form-check">
                                                                 <input type="checkbox" name="selected_customers[]" value="{{ $customer->id }}" class="customer-checkbox" />
                                                                 {{-- <label class="form-check-label" for="customCheck2">&nbsp;</label> --}}
                                                            {{-- </div> --}}
                                                       </td>
                                                       <td><img class="img-comment" 
                                                            src="{{ $customer->avatar ? 'data:image/jpeg;base64,' . base64_encode($customer->avatar) : 'https://n1-cstg.mioto.vn/m/avatars/h.jpg' }}" 
                                                            alt="Avatar" 
                                                            style="width: 30px; height: 30px; border-radius: 50%; object-fit: cover; cursor: pointer;" 
                                                            onclick="document.getElementById('avatar').click();" /> {{ $customer->name }}</td>
                                                            
                                                       <td><a href="javascript: void(0);" class="text-body">{{ $customer->email }}</a> </td>
                                                       <td> <span class="badge bg-success-subtle text-success py-1 px-2">{{ $customer->created_at }}</span> </td>
                                                       <td> {{ $customer->address ?? 'chưa nhập' }} </td>
                                                       <td> {{ $customer->phone ?? 'chưa nhập' }} </td>
                                                       <td> {{ $customer->CCCD ?? 'chưa nhập' }}</td>
                                                       <td> Mastercard </td>
                                                       <td>
                                                            <div class="d-flex gap-2">
                                                                 <a href="{{ route('customer.detail', $customer->id) }}" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                 <a href="#!" class="btn btn-soft-primary btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                                 <a href="{{ route('customer.detail', $customer->id) }}" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                            </div>
                                                       </td>
                                                  </tr>
                                                  @endforeach
                                             </tbody>
                                        </table>
                                   </div>
                                   <button type="submit">Thực hiện</button>
                                   </form>
                                   <!-- end table-responsive -->
                              </div>
                              <div class="card-footer border-top">
                                   <nav aria-label="Page navigation example">
                                        <ul class="pagination justify-content-end mb-0">
                                             <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                                             <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                             <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                             <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                             <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
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

     <script>
     document.getElementById('select-all').addEventListener('change', function() {
          const checkboxes = document.querySelectorAll('.customer-checkbox');
          checkboxes.forEach(checkbox => {
               checkbox.checked = this.checked;
          });
     });
     </script>


</body>


<!-- Mirrored from techzaa.getappui.com/larkon/admin/customer-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Sep 2024 06:07:51 GMT -->
</html>
