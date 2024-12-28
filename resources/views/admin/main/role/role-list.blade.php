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

                    <div class="card overflow-hiddenCoupons">
                         <div class="card-body p-0">
                              @if (session('success'))
                              <div class="alert alert-success">
                                   {{ session('success') }}
                              </div>
                              @endif
                              <div class="table-responsive">
                                   <table class="table align-middle mb-0 table-hover table-centered">
                                        <thead class="bg-light-subtle">
                                             <tr>
                                                  <th>ID Staff</th>
                                                  <th>Name</th>
                                                  <th>Email</th>
                                                  <th>Role</th>
                                                  <th>Create Date</th>
                                                  <th>Status</th>
                                                  <th>Action</th>
                                             </tr>
                                        </thead>
                                        <tbody>



                                             @foreach($users as $user)
                                                  <tr>
                                                       <td>{{ $user->id }}</td>
                                                       <td>{{ $user->name }}</td>
                                                       <td>{{ $user->email }}</td>
                                                       <td>{{ ucfirst($user->role) }}</td>
                                                       <td>{{ $user->created_at ? $user->created_at->format('d-M-Y') : 'ERR' }}</td>
                                                       <td>
                                                       @if($user->status === 'active')
                                                            <span class="badge bg-success">Active</span>
                                                       @else
                                                            <span class="badge bg-danger">Inactive</span>
                                                       @endif
                                                       </td>
                                                       <td>
                                                       {{-- <a href="{{ route('roles.edit', $user->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                                       <form action="{{ route('roles.delete', $user->id) }}" method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                                       </form> --}}
                                                       <div class="d-flex gap-2">
                                                            <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                            <a href="role-edit.html" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                            <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                       </div>
                                                       </td>
                                                  </tr>
                                             @endforeach



                                        </tbody>
                                   </table>
                              </div>
                              <!-- end table-responsive -->
                         </div>
                         <div class="row g-0 align-items-center justify-content-between text-center text-sm-start p-3 border-top">
                              <div class="col-sm">
                                   <div class="text-muted">
                                        Showing <span class="fw-semibold">10</span> of <span class="fw-semibold">59</span> Results
                                   </div>
                              </div>
                              <div class="col-sm-auto mt-3 mt-sm-0">
                                   <ul class="pagination  m-0">
                                        <!-- Hiển thị nút phân trang -->
                                        <div class="d-flex justify-content-center">
                                             {{ $users->links() }}
                                        </div>
                                   </ul>
                              </div>
                         </div>
                    </div> <!-- end card -->

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
 
      </div>
      <!-- END Wrapper -->
 
      <!-- Vendor Javascript (Require in all Page) -->
      <script src="../../assets/Backend/js/vendor.js"></script>
 
      <!-- App Javascript (Require in all Page) -->
      <script src="../../assets/Backend/js/app.js"></script>
 
 </body>
 
 
 <!-- Mirrored from techzaa.getappui.com/larkon/admin/orders-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Sep 2024 06:07:44 GMT -->
 </html>
 