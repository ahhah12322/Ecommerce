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
                                        <h4 class="card-title">Roles Information</h4>
                                   </div>
                                   <div class="card-body">
                                        <div class="row">
                                             <div class="col-lg-6">
                                                  <form>
                                                       <div class="mb-3">
                                                            <label for="roles-name" class="form-label">Roles Name</label>
                                                            <input type="text" id="roles-name" class="form-control" placeholder="Role name" value="Workspace Manager">
                                                       </div>
                                                  </form>
                                             </div>
                                             <div class="col-lg-6">
                                                  <form>
                                                       <div class="mb-3">
                                                            <label for="workspace" class="form-label">Add Workspace</label>
                                                            <select class="form-control" id="workspace" data-choices data-choices-groups data-placeholder="Select Workspace">
                                                                 <option value="">Facebook</option>
                                                                 <option value="Slack">Slack</option>
                                                                 <option value="Zoom">Zoom</option>
                                                                 <option value="Analytics">Analytics</option>
                                                                 <option value="Meet">Meet</option>
                                                                 <option value="Mail">Mail</option>
                                                                 <option value="Strip">Strip</option>
                                                            </select>
                                                       </div>
                                                  </form>
                                             </div>
                                             <div class="col-lg-6">
                                                  <div class="mb-3">
                                                       <label for="role-tag" class="form-label">Tag</label>
                                                       <select class="form-control" id="choices-multiple-remove-button" data-choices data-choices-removeItem name="choices-multiple-remove-button" multiple>
                                                            <option value="Manager" selected>Manager</option>
                                                            <option value="Product">Product</option>
                                                            <option value="Data" selected>Data</option>
                                                            <option value="Designer">Designer</option>
                                                            <option value="Supporter">Supporter</option>
                                                            <option value="System Design">System Design</option>
                                                            <option value="QA">QA</option>
                                                       </select>
                                                  </div>
                                             </div>
                                             <div class="col-lg-6">
                                                  <div class="mb-3">
                                                       <label for="user-name" class="form-label">User Name</label>
                                                       <input type="text" id="user-name" class="form-control" placeholder="Enter name" value="Gaston Lapierre ">
                                                  </div>
                                             </div>
                                             <div class="col-lg-6">
                                                  <p>User Status </p>
                                                  <div class="d-flex gap-2 align-items-center">
                                                       <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked="">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                 Active
                                                            </label>
                                                       </div>
                                                       <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                 In Active
                                                            </label>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>

                                   </div>
                                   <div class="card-footer border-top">
                                        <a href="#!" class="btn btn-primary">Save Change</a>
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
 