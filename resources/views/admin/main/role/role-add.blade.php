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
                         <div class="col-lg-12">
                              <div class="card">
                                   <div class="card-header">
                                       <h4 class="card-title">Create User</h4>
                                   </div>
                                   <div class="card-body">
                                       <form action="{{ route('roles.add') }}" method="POST">
                                           @csrf
                                           <div class="row">
                                               <!-- Name -->
                                               <div class="col-lg-6 mb-3">
                                                   <label for="user-name" class="form-label">Name</label>
                                                   <input type="text" id="user-name" name="name" class="form-control" placeholder="Enter full name" required>
                                               </div>
                                               
                                               <!-- Email -->
                                               <div class="col-lg-6 mb-3">
                                                   <label for="user-email" class="form-label">Email</label>
                                                   <input type="email" id="user-email" name="email" class="form-control" placeholder="Enter email address" required>
                                               </div>
                                               
                                               <!-- Password -->
                                               <div class="col-lg-6 mb-3">
                                                   <label for="user-password" class="form-label">Password</label>
                                                   <input type="password" id="user-password" name="password" class="form-control" placeholder="Enter password" required>
                                               </div>
                                               
                                               <!-- Role -->
                                               <div class="col-lg-6 mb-3">
                                                   <label for="user-role" class="form-label">Role</label>
                                                   <select id="user-role" name="role" class="form-select" required>
                                                       <option value="staff">Staff</option>
                                                       <option value="admin">Admin</option>
                                                   </select>
                                               </div>
                                               
                                               
                                               <!-- Phone -->
                                               <div class="col-lg-6 mb-3">
                                                   <label for="user-phone" class="form-label">Phone</label>
                                                   <input type="text" id="user-phone" name="phone" class="form-control" placeholder="Enter phone number" required>
                                               </div>
                                               
                                               <!-- CCCD -->
                                               <div class="col-lg-6 mb-3">
                                                   <label for="user-cccd" class="form-label">CCCD</label>
                                                   <input type="text" id="user-cccd" name="cccd" class="form-control" placeholder="Enter CCCD number" required>
                                               </div>

                                               <!-- Status -->
                                               <div class="col-lg-6 mb-3">
                                                  <label class="form-label">Status</label>
                                                  <div class="d-flex gap-3">
                                                      <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="status" id="status-active" value="active" checked>
                                                          <label class="form-check-label" for="status-active">Active</label>
                                                      </div>
                                                      <div class="form-check">
                                                          <input class="form-check-input" type="radio" name="status" id="status-inactive" value="inactive">
                                                          <label class="form-check-label" for="status-inactive">Inactive</label>
                                                      </div>
                                                  </div>
                                              </div>
                                           </div>
                                           <div class="card-footer border-top">
                                               <button type="submit" class="btn btn-primary">Create User</button>
                                           </div>
                                       </form>
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
 
      </div>
      <!-- END Wrapper -->
 
      <!-- Vendor Javascript (Require in all Page) -->
      <script src="../../assets/Backend/js/vendor.js"></script>
 
      <!-- App Javascript (Require in all Page) -->
      <script src="../../assets/Backend/js/app.js"></script>
 
 </body>
 
 
 <!-- Mirrored from techzaa.getappui.com/larkon/admin/orders-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Sep 2024 06:07:44 GMT -->
 </html>
 