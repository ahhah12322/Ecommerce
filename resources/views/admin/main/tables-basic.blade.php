<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from techzaa.getappui.com/larkon/admin/tables-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Sep 2024 06:08:17 GMT -->
<head>
     <!-- Title Meta -->
     <meta charset="utf-8" />
     <title>Basic Tables | Larkon - Responsive Admin Dashboard Template</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="description" content="A fully responsive premium admin dashboard template" />
     <meta name="author" content="Techzaa" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />

     <!-- App favicon -->
     <link rel="shortcut icon" href="assets/Backend/images/favicon.ico">

     <!-- Vendor css (Require in all Page) -->
     <link href="assets/Backend/css/vendor.min.css" rel="stylesheet" type="text/css" />

     <!-- Icons css (Require in all Page) -->
     <link href="assets/Backend/css/icons.min.css" rel="stylesheet" type="text/css" />

     <!-- App css (Require in all Page) -->
     <link href="assets/Backend/css/app.min.css" rel="stylesheet" type="text/css" />

     <!-- Theme Config js (Require in all Page) -->
     <script src="assets/Backend/js/config.js"></script>
</head>

<body>

     <!-- START Wrapper -->
     <div class="wrapper">

          <!-- ========== Topbar Start ========== -->
          <header class="topbar">
               <div class="container-fluid">
                    <div class="navbar-header">
                         <div class="d-flex align-items-center">
                              <!-- Menu Toggle Button -->
                              <div class="topbar-item">
                                   <button type="button" class="button-toggle-menu me-2">
                                        <iconify-icon icon="solar:hamburger-menu-broken" class="fs-24 align-middle"></iconify-icon>
                                   </button>
                              </div>

                              <!-- Menu Toggle Button -->
                              <div class="topbar-item">
                                   <h4 class="fw-bold topbar-button pe-none text-uppercase mb-0">Basic Tables</h4>
                              </div>
                         </div>

                         <div class="d-flex align-items-center gap-1">

                              <!-- Theme Color (Light/Dark) -->
                              <div class="topbar-item">
                                   <button type="button" class="topbar-button" id="light-dark-mode">
                                        <iconify-icon icon="solar:moon-bold-duotone" class="fs-24 align-middle"></iconify-icon>
                                   </button>
                              </div>

                              <!-- Notification -->
                              <div class="dropdown topbar-item">
                                   <button type="button" class="topbar-button position-relative" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <iconify-icon icon="solar:bell-bing-bold-duotone" class="fs-24 align-middle"></iconify-icon>
                                        <span class="position-absolute topbar-badge fs-10 translate-middle badge bg-danger rounded-pill">3<span class="visually-hidden">unread messages</span></span>
                                   </button>
                                   <div class="dropdown-menu py-0 dropdown-lg dropdown-menu-end" aria-labelledby="page-header-notifications-dropdown">
                                        <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                                             <div class="row align-items-center">
                                                  <div class="col">
                                                       <h6 class="m-0 fs-16 fw-semibold"> Notifications</h6>
                                                  </div>
                                                  <div class="col-auto">
                                                       <a href="javascript: void(0);" class="text-dark text-decoration-underline">
                                                            <small>Clear All</small>
                                                       </a>
                                                  </div>
                                             </div>
                                        </div>
                                        <div data-simplebar style="max-height: 280px;">
                                             <!-- Item -->
                                             <a href="javascript:void(0);" class="dropdown-item py-3 border-bottom text-wrap">
                                                  <div class="d-flex">
                                                       <div class="flex-shrink-0">
                                                            <img src="assets/Backend/images/users/avatar-1.jpg" class="img-fluid me-2 avatar-sm rounded-circle" alt="avatar-1" />
                                                       </div>
                                                       <div class="flex-grow-1">
                                                            <p class="mb-0"><span class="fw-medium">Josephine Thompson </span>commented on admin panel <span>" Wow 😍! this admin looks good and awesome design"</span></p>
                                                       </div>
                                                  </div>
                                             </a>
                                             <!-- Item -->
                                             <a href="javascript:void(0);" class="dropdown-item py-3 border-bottom">
                                                  <div class="d-flex">
                                                       <div class="flex-shrink-0">
                                                            <div class="avatar-sm me-2">
                                                                 <span class="avatar-title bg-soft-info text-info fs-20 rounded-circle">
                                                                      D
                                                                 </span>
                                                            </div>
                                                       </div>
                                                       <div class="flex-grow-1">
                                                            <p class="mb-0 fw-semibold">Donoghue Susan</p>
                                                            <p class="mb-0 text-wrap">
                                                                 Hi, How are you? What about our next meeting
                                                            </p>
                                                       </div>
                                                  </div>
                                             </a>
                                             <!-- Item -->
                                             <a href="javascript:void(0);" class="dropdown-item py-3 border-bottom">
                                                  <div class="d-flex">
                                                       <div class="flex-shrink-0">
                                                            <img src="assets/Backend/images/users/avatar-3.jpg" class="img-fluid me-2 avatar-sm rounded-circle" alt="avatar-3" />
                                                       </div>
                                                       <div class="flex-grow-1">
                                                            <p class="mb-0 fw-semibold">Jacob Gines</p>
                                                            <p class="mb-0 text-wrap">Answered to your comment on the cash flow forecast's graph 🔔.</p>
                                                       </div>
                                                  </div>
                                             </a>
                                             <!-- Item -->
                                             <a href="javascript:void(0);" class="dropdown-item py-3 border-bottom">
                                                  <div class="d-flex">
                                                       <div class="flex-shrink-0">
                                                            <div class="avatar-sm me-2">
                                                                 <span class="avatar-title bg-soft-warning text-warning fs-20 rounded-circle">
                                                                      <iconify-icon icon="iconamoon:comment-dots-duotone"></iconify-icon>
                                                                 </span>
                                                            </div>
                                                       </div>
                                                       <div class="flex-grow-1">
                                                            <p class="mb-0 fw-semibold text-wrap">You have received <b>20</b> new messages in the
                                                                 conversation</p>
                                                       </div>
                                                  </div>
                                             </a>
                                             <!-- Item -->
                                             <a href="javascript:void(0);" class="dropdown-item py-3 border-bottom">
                                                  <div class="d-flex">
                                                       <div class="flex-shrink-0">
                                                            <img src="assets/Backend/images/users/avatar-5.jpg" class="img-fluid me-2 avatar-sm rounded-circle" alt="avatar-5" />
                                                       </div>
                                                       <div class="flex-grow-1">
                                                            <p class="mb-0 fw-semibold">Shawn Bunch</p>
                                                            <p class="mb-0 text-wrap">
                                                                 Commented on Admin
                                                            </p>
                                                       </div>
                                                  </div>
                                             </a>
                                        </div>
                                        <div class="text-center py-3">
                                             <a href="javascript:void(0);" class="btn btn-primary btn-sm">View All Notification <i class="bx bx-right-arrow-alt ms-1"></i></a>
                                        </div>
                                   </div>
                              </div>

                              <!-- Theme Setting -->
                              <div class="topbar-item d-none d-md-flex">
                                   <button type="button" class="topbar-button" id="theme-settings-btn" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
                                        <iconify-icon icon="solar:settings-bold-duotone" class="fs-24 align-middle"></iconify-icon>
                                   </button>
                              </div>

                              <!-- Activity -->
                              <div class="topbar-item d-none d-md-flex">
                                   <button type="button" class="topbar-button" id="theme-settings-btn" data-bs-toggle="offcanvas" data-bs-target="#theme-activity-offcanvas" aria-controls="theme-settings-offcanvas">
                                        <iconify-icon icon="solar:clock-circle-bold-duotone" class="fs-24 align-middle"></iconify-icon>
                                   </button>
                              </div>

                              <!-- User -->
                              <div class="dropdown topbar-item">
                                   <a type="button" class="topbar-button" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="d-flex align-items-center">
                                             <img class="rounded-circle" width="32" src="assets/Backend/images/users/avatar-1.jpg" alt="avatar-3">
                                        </span>
                                   </a>
                                   <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <h6 class="dropdown-header">Welcome Gaston!</h6>
                                        <a class="dropdown-item" href="pages-profile.html">
                                             <i class="bx bx-user-circle text-muted fs-18 align-middle me-1"></i><span class="align-middle">Profile</span>
                                        </a>
                                        <a class="dropdown-item" href="apps-chat.html">
                                             <i class="bx bx-message-dots text-muted fs-18 align-middle me-1"></i><span class="align-middle">Messages</span>
                                        </a>

                                        <a class="dropdown-item" href="pages-pricing.html">
                                             <i class="bx bx-wallet text-muted fs-18 align-middle me-1"></i><span class="align-middle">Pricing</span>
                                        </a>
                                        <a class="dropdown-item" href="pages-faqs.html">
                                             <i class="bx bx-help-circle text-muted fs-18 align-middle me-1"></i><span class="align-middle">Help</span>
                                        </a>
                                        <a class="dropdown-item" href="auth-lock-screen.html">
                                             <i class="bx bx-lock text-muted fs-18 align-middle me-1"></i><span class="align-middle">Lock screen</span>
                                        </a>

                                        <div class="dropdown-divider my-1"></div>

                                        <a class="dropdown-item text-danger" href="auth-signin.html">
                                             <i class="bx bx-log-out fs-18 align-middle me-1"></i><span class="align-middle">Logout</span>
                                        </a>
                                   </div>
                              </div>

                              <!-- App Search-->
                              <form class="app-search d-none d-md-block ms-2">
                                   <div class="position-relative">
                                        <input type="search" class="form-control" placeholder="Search..." autocomplete="off" value="">
                                        <iconify-icon icon="solar:magnifer-linear" class="search-widget-icon"></iconify-icon>
                                   </div>
                              </form>
                         </div>
                    </div>
               </div>
          </header>

          <!-- Activity Timeline -->
          <div>
               <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-activity-offcanvas" style="max-width: 450px; width: 100%;">
                    <div class="d-flex align-items-center bg-primary p-3 offcanvas-header">
                         <h5 class="text-white m-0 fw-semibold">Activity Stream</h5>
                         <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>

                    <div class="offcanvas-body p-0">
                         <div data-simplebar class="h-100 p-4">
                              <div class="position-relative ms-2">
                                   <span class="position-absolute start-0  top-0 border border-dashed h-100"></span>
                                   <div class="position-relative ps-4">
                                        <div class="mb-4">
                                             <span class="position-absolute start-0 avatar-sm translate-middle-x bg-danger d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-20"><iconify-icon icon="iconamoon:folder-check-duotone"></iconify-icon></span>
                                             <div class="ms-2">
                                                  <h5 class="mb-1 text-dark fw-semibold fs-15 lh-base">Report-Fix / Update </h5>
                                                  <p class="d-flex align-items-center">Add 3 files to <span class=" d-flex align-items-center text-primary ms-1"><iconify-icon icon="iconamoon:file-light"></iconify-icon> Tasks</span></p>
                                                  <div class="bg-light bg-opacity-50 rounded-2 p-2">
                                                       <div class="row">
                                                            <div class="col-lg-6 border-end border-light">
                                                                 <div class="d-flex align-items-center gap-2">
                                                                      <i class="bx bxl-figma fs-20 text-red"></i>
                                                                      <a href="#!" class="text-dark fw-medium">Concept.fig</a>
                                                                 </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                 <div class="d-flex align-items-center gap-2">
                                                                      <i class="bx bxl-file-doc fs-20 text-success"></i>
                                                                      <a href="#!" class="text-dark fw-medium">larkon.docs</a>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </div>
                                                  <h6 class="mt-2 text-muted">Monday , 4:24 PM</h6>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="position-relative ps-4">
                                        <div class="mb-4">
                                             <span class="position-absolute start-0 avatar-sm translate-middle-x bg-success d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-20"><iconify-icon icon="iconamoon:check-circle-1-duotone"></iconify-icon></span>
                                             <div class="ms-2">
                                                  <h5 class="mb-1 text-dark fw-semibold fs-15 lh-base">Project Status
                                                  </h5>
                                                  <p class="d-flex align-items-center mb-0">Marked<span class=" d-flex align-items-center text-primary mx-1"><iconify-icon icon="iconamoon:file-light"></iconify-icon> Design </span> as <span class="badge bg-success-subtle text-success px-2 py-1 ms-1"> Completed</span></p>
                                                  <div class="d-flex align-items-center gap-3 mt-1 bg-light bg-opacity-50 p-2 rounded-2">
                                                       <a href="#!" class="fw-medium text-dark">UI/UX Figma Design</a>
                                                       <div class="ms-auto">
                                                            <a href="#!" class="fw-medium text-primary fs-18" data-bs-toggle="tooltip" data-bs-title="Download" data-bs-placement="bottom"><iconify-icon icon="iconamoon:cloud-download-duotone"></iconify-icon></a>
                                                       </div>
                                                  </div>
                                                  <h6 class="mt-3 text-muted">Monday , 3:00 PM</h6>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="position-relative ps-4">
                                        <div class="mb-4">
                                             <span class="position-absolute start-0 avatar-sm translate-middle-x bg-primary d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-16">UI</span>
                                             <div class="ms-2">
                                                  <h5 class="mb-1 text-dark fw-semibold fs-15">Larkon Application UI v2.0.0 <span class="badge bg-primary-subtle text-primary px-2 py-1 ms-1"> Latest</span>
                                                  </h5>
                                                  <p>Get access to over 20+ pages including a dashboard layout, charts, kanban board, calendar, and pre-order E-commerce & Marketing pages.</p>
                                                  <div class="mt-2">
                                                       <a href="#!" class="btn btn-light btn-sm">Download Zip</a>
                                                  </div>
                                                  <h6 class="mt-3 text-muted">Monday , 2:10 PM</h6>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="position-relative ps-4">
                                        <div class="mb-4">
                                             <span class="position-absolute start-0 translate-middle-x bg-success bg-gradient d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-20"><img src="assets/Backend/images/users/avatar-7.jpg" alt="avatar-5" class="avatar-sm rounded-circle"></span>
                                             <div class="ms-2">
                                                  <h5 class="mb-0 text-dark fw-semibold fs-15 lh-base">Alex Smith Attached Photos
                                                  </h5>
                                                  <div class="row g-2 mt-2">
                                                       <div class="col-lg-4">
                                                            <a href="#!">
                                                                 <img src="assets/Backend/images/small/img-6.jpg" alt="" class="img-fluid rounded">
                                                            </a>
                                                       </div>
                                                       <div class="col-lg-4">
                                                            <a href="#!">
                                                                 <img src="assets/Backend/images/small/img-3.jpg" alt="" class="img-fluid rounded">
                                                            </a>
                                                       </div>
                                                       <div class="col-lg-4">
                                                            <a href="#!">
                                                                 <img src="assets/Backend/images/small/img-4.jpg" alt="" class="img-fluid rounded">
                                                            </a>
                                                       </div>
                                                  </div>
                                                  <h6 class="mt-3 text-muted">Monday 1:00 PM</h6>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="position-relative ps-4">
                                        <div class="mb-4">
                                             <span class="position-absolute start-0 translate-middle-x bg-success bg-gradient d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-20"><img src="assets/Backend/images/users/avatar-6.jpg" alt="avatar-5" class="avatar-sm rounded-circle"></span>
                                             <div class="ms-2">
                                                  <h5 class="mb-0 text-dark fw-semibold fs-15 lh-base">Rebecca J. added a new team member
                                                  </h5>
                                                  <p class="d-flex align-items-center gap-1"><iconify-icon icon="iconamoon:check-circle-1-duotone" class="text-success"></iconify-icon> Added a new member to Front Dashboard</p>
                                                  <h6 class="mt-3 text-muted">Monday 10:00 AM</h6>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="position-relative ps-4">
                                        <div class="mb-4">
                                             <span class="position-absolute start-0 avatar-sm translate-middle-x bg-warning d-inline-flex align-items-center justify-content-center rounded-circle text-light fs-20"><iconify-icon icon="iconamoon:certificate-badge-duotone"></iconify-icon></span>
                                             <div class="ms-2">
                                                  <h5 class="mb-0 text-dark fw-semibold fs-15 lh-base">Achievements
                                                  </h5>
                                                  <p class="d-flex align-items-center gap-1 mt-1">Earned a <iconify-icon icon="iconamoon:certificate-badge-duotone" class="text-danger fs-20"></iconify-icon>" Best Product Award"</p>
                                                  <h6 class="mt-3 text-muted">Monday 9:30 AM</h6>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <a href="#!" class="btn btn-outline-dark w-100">View All</a>
                         </div>
                    </div>
               </div>
          </div>

          <!-- Right Sidebar (Theme Settings) -->
          <div>
               <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-settings-offcanvas">
                    <div class="d-flex align-items-center bg-primary p-3 offcanvas-header">
                         <h5 class="text-white m-0">Theme Settings</h5>
                         <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>

                    <div class="offcanvas-body p-0">
                         <div data-simplebar class="h-100">
                              <div class="p-3 settings-bar">

                                   <div>
                                        <h5 class="mb-3 font-16 fw-semibold">Color Scheme</h5>

                                        <div class="form-check mb-2">
                                             <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-color-light" value="light">
                                             <label class="form-check-label" for="layout-color-light">Light</label>
                                        </div>

                                        <div class="form-check mb-2">
                                             <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-color-dark" value="dark">
                                             <label class="form-check-label" for="layout-color-dark">Dark</label>
                                        </div>
                                   </div>

                                   <div>
                                        <h5 class="my-3 font-16 fw-semibold">Topbar Color</h5>

                                        <div class="form-check mb-2">
                                             <input class="form-check-input" type="radio" name="data-topbar-color" id="topbar-color-light" value="light">
                                             <label class="form-check-label" for="topbar-color-light">Light</label>
                                        </div>
                                        <div class="form-check mb-2">
                                             <input class="form-check-input" type="radio" name="data-topbar-color" id="topbar-color-dark" value="dark">
                                             <label class="form-check-label" for="topbar-color-dark">Dark</label>
                                        </div>
                                   </div>


                                   <div>
                                        <h5 class="my-3 font-16 fw-semibold">Menu Color</h5>

                                        <div class="form-check mb-2">
                                             <input class="form-check-input" type="radio" name="data-menu-color" id="leftbar-color-light" value="light">
                                             <label class="form-check-label" for="leftbar-color-light">
                                                  Light
                                             </label>
                                        </div>

                                        <div class="form-check mb-2">
                                             <input class="form-check-input" type="radio" name="data-menu-color" id="leftbar-color-dark" value="dark">
                                             <label class="form-check-label" for="leftbar-color-dark">
                                                  Dark
                                             </label>
                                        </div>
                                   </div>

                                   <div>
                                        <h5 class="my-3 font-16 fw-semibold">Sidebar Size</h5>

                                        <div class="form-check mb-2">
                                             <input class="form-check-input" type="radio" name="data-menu-size" id="leftbar-size-default" value="default">
                                             <label class="form-check-label" for="leftbar-size-default">
                                                  Default
                                             </label>
                                        </div>

                                        <div class="form-check mb-2">
                                             <input class="form-check-input" type="radio" name="data-menu-size" id="leftbar-size-small" value="condensed">
                                             <label class="form-check-label" for="leftbar-size-small">
                                                  Condensed
                                             </label>
                                        </div>

                                        <div class="form-check mb-2">
                                             <input class="form-check-input" type="radio" name="data-menu-size" id="leftbar-hidden" value="hidden">
                                             <label class="form-check-label" for="leftbar-hidden">
                                                  Hidden
                                             </label>
                                        </div>

                                        <div class="form-check mb-2">
                                             <input class="form-check-input" type="radio" name="data-menu-size" id="leftbar-size-small-hover-active" value="sm-hover-active">
                                             <label class="form-check-label" for="leftbar-size-small-hover-active">
                                                  Small Hover Active
                                             </label>
                                        </div>

                                        <div class="form-check mb-2">
                                             <input class="form-check-input" type="radio" name="data-menu-size" id="leftbar-size-small-hover" value="sm-hover">
                                             <label class="form-check-label" for="leftbar-size-small-hover">
                                                  Small Hover
                                             </label>
                                        </div>
                                   </div>

                              </div>
                         </div>
                    </div>
                    <div class="offcanvas-footer border-top p-3 text-center">
                         <div class="row">
                              <div class="col">
                                   <button type="button" class="btn btn-danger w-100" id="reset-layout">Reset</button>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <!-- ========== Topbar End ========== -->

          <!-- ========== App Menu Start ========== -->
          <div class="main-nav">
               <!-- Sidebar Logo -->
               <div class="logo-box">
                    <a href="index.html" class="logo-dark">
                         <img src="assets/Backend/images/logo-sm.png" class="logo-sm" alt="logo sm">
                         <img src="assets/Backend/images/logo-dark.png" class="logo-lg" alt="logo dark">
                    </a>

                    <a href="index.html" class="logo-light">
                         <img src="assets/Backend/images/logo-sm.png" class="logo-sm" alt="logo sm">
                         <img src="assets/Backend/images/logo-light.png" class="logo-lg" alt="logo light">
                    </a>
               </div>

               <!-- Menu Toggle Button (sm-hover) -->
               <button type="button" class="button-sm-hover" aria-label="Show Full Sidebar">
                    <iconify-icon icon="solar:double-alt-arrow-right-bold-duotone" class="button-sm-hover-icon"></iconify-icon>
               </button>

               <div class="scrollbar" data-simplebar>
                    <ul class="navbar-nav" id="navbar-nav">

                         <li class="menu-title">General</li>

                         <li class="nav-item">
                              <a class="nav-link" href="index.html">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:widget-5-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Dashboard </span>
                              </a>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarProducts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProducts">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:t-shirt-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Products </span>
                              </a>
                              <div class="collapse" id="sidebarProducts">
                                   <ul class="nav sub-navbar-nav">
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="product-list.html">List</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="product-grid.html">Grid</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="product-details.html">Details</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="product-edit.html">Edit</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="product-add.html">Create</a>
                                        </li>
                                   </ul>
                              </div>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarCategory" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCategory">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:clipboard-list-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Category </span>
                              </a>
                              <div class="collapse" id="sidebarCategory">
                                   <ul class="nav sub-navbar-nav">
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="category-list.html">List</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="category-edit.html">Edit</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="category-add.html">Create</a>
                                        </li>
                                   </ul>
                              </div>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarInventory" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarInventory">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:box-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Inventory </span>
                              </a>
                              <div class="collapse" id="sidebarInventory">
                                   <ul class="nav sub-navbar-nav">

                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="inventory-warehouse.html">Warehouse</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="inventory-received-orders.html">Received Orders</a>
                                        </li>
                                   </ul>
                              </div>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarOrders" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarOrders">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:bag-smile-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Orders </span>
                              </a>
                              <div class="collapse" id="sidebarOrders">
                                   <ul class="nav sub-navbar-nav">

                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="orders-list.html">List</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="order-detail.html">Details</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="order-cart.html">Cart</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="order-checkout.html">Check Out</a>
                                        </li>
                                   </ul>
                              </div>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarPurchases" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPurchases">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:card-send-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Purchases </span>
                              </a>
                              <div class="collapse" id="sidebarPurchases">
                                   <ul class="nav sub-navbar-nav">
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="purchase-list.html">List</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="purchase-order.html">Order</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="purchase-returns.html">Return</a>
                                        </li>
                                   </ul>
                              </div>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarAttributes" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAttributes">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:confetti-minimalistic-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Attributes </span>
                              </a>
                              <div class="collapse" id="sidebarAttributes">
                                   <ul class="nav sub-navbar-nav">
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="attributes-list.html">List</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="attributes-edit.html">Edit</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="attributes-add.html">Create</a>
                                        </li>
                                   </ul>
                              </div>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarInvoice" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarInvoice">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:bill-list-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Invoices </span>
                              </a>
                              <div class="collapse" id="sidebarInvoice">
                                   <ul class="nav sub-navbar-nav">
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="invoice-list.html">List</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="invoice-details.html">Details</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="invoice-add.html">Create</a>
                                        </li>
                                   </ul>
                              </div>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link" href="settings.html">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:settings-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Settings </span>
                              </a>
                         </li>

                         <li class="menu-title mt-2">Users</li>

                         <li class="nav-item">
                              <a class="nav-link" href="pages-profile.html">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:chat-square-like-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Profile </span>
                              </a>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarRoles" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarRoles">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:user-speak-rounded-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Roles </span>
                              </a>
                              <div class="collapse" id="sidebarRoles">
                                   <ul class="nav sub-navbar-nav">
                                        <ul class="nav sub-navbar-nav">
                                             <li class="sub-nav-item">
                                                  <a class="sub-nav-link" href="role-list.html">List</a>
                                             </li>
                                             <li class="sub-nav-item">
                                                  <a class="sub-nav-link" href="role-edit.html">Edit</a>
                                             </li>
                                             <li class="sub-nav-item">
                                                  <a class="sub-nav-link" href="role-add.html">Create</a>
                                             </li>
                                        </ul>
                                   </ul>
                              </div>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link" href="pages-permissions.html">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:checklist-minimalistic-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Permissions </span>
                              </a>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarCustomers" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCustomers">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:users-group-two-rounded-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Customers </span>
                              </a>
                              <div class="collapse" id="sidebarCustomers">
                                   <ul class="nav sub-navbar-nav">

                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="customer-list.html">List</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="customer-detail.html">Details</a>
                                        </li>
                                   </ul>
                              </div>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarSellers" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSellers">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:shop-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Sellers </span>
                              </a>
                              <div class="collapse" id="sidebarSellers">
                                   <ul class="nav sub-navbar-nav">
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="seller-list.html">List</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="seller-details.html">Details</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="seller-edit.html">Edit</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="seller-add.html">Create</a>
                                        </li>
                                   </ul>
                              </div>
                         </li>

                         <li class="menu-title mt-2">Other</li>

                         <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarCoupons" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCoupons">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:leaf-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Coupons </span>
                              </a>
                              <div class="collapse" id="sidebarCoupons">
                                   <ul class="nav sub-navbar-nav">
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="coupons-list.html">List</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="coupons-add.html">Add</a>
                                        </li>
                                   </ul>
                              </div>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link" href="pages-review.html">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:chat-square-like-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Reviews </span>
                              </a>
                         </li>

                         <li class="menu-title mt-2">Other Apps</li>

                         <li class="nav-item">
                              <a class="nav-link" href="apps-chat.html">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:chat-round-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Chat </span>
                              </a>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link" href="apps-email.html">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:mailbox-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Email </span>
                              </a>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link" href="apps-calendar.html">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:calendar-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Calendar </span>
                              </a>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link" href="apps-todo.html">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:checklist-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Todo </span>
                              </a>
                         </li>

                         <li class="menu-title mt-2">Support</li>

                         <li class="nav-item">
                              <a class="nav-link" href="help-center.html">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:help-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Help Center </span>
                              </a>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link" href="pages-faqs.html">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:question-circle-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> FAQs </span>
                              </a>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link" href="privacy-policy.html">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:document-text-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Privacy Policy </span>
                              </a>
                         </li>

                         <li class="menu-title mt-2">Custom</li>

                         <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:gift-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Pages </span>
                              </a>
                              <div class="collapse" id="sidebarPages">
                                   <ul class="nav sub-navbar-nav">
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="pages-starter.html">Welcome</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="pages-comingsoon.html">Coming Soon</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="pages-timeline.html">Timeline</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="pages-pricing.html">Pricing</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="pages-maintenance.html">Maintenance</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="pages-404.html">404 Error</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="pages-404-alt.html">404 Error (alt)</a>
                                        </li>
                                   </ul>
                              </div>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarAuthentication" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuthentication">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:lock-keyhole-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Authentication </span>
                              </a>
                              <div class="collapse" id="sidebarAuthentication">
                                   <ul class="nav sub-navbar-nav">
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="auth-signin.html">Sign In</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="auth-signup.html">Sign Up</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="auth-password.html">Reset Password</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="auth-lock-screen.html">Lock Screen</a>
                                        </li>
                                   </ul>
                              </div>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link" href="widgets.html">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:atom-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text">Widgets</span>
                                   <span class="badge bg-info badge-pill text-end">9+</span>
                              </a>
                         </li>

                         <li class="menu-title mt-2">Components</li>

                         <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarBaseUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarBaseUI">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:bookmark-square-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Base UI </span>
                              </a>
                              <div class="collapse" id="sidebarBaseUI">
                                   <ul class="nav sub-navbar-nav">
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="ui-accordion.html">Accordion</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="ui-alerts.html">Alerts</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="ui-avatar.html">Avatar</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="ui-badge.html">Badge</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="ui-breadcrumb.html">Breadcrumb</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="ui-buttons.html">Buttons</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="ui-card.html">Card</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="ui-carousel.html">Carousel</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="ui-collapse.html">Collapse</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="ui-dropdown.html">Dropdown</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="ui-list-group.html">List Group</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="ui-modal.html">Modal</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="ui-tabs.html">Tabs</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="ui-offcanvas.html">Offcanvas</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="ui-pagination.html">Pagination</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="ui-placeholders.html">Placeholders</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="ui-popovers.html">Popovers</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="ui-progress.html">Progress</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="ui-scrollspy.html">Scrollspy</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="ui-spinners.html">Spinners</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="ui-toasts.html">Toasts</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="ui-tooltips.html">Tooltips</a>
                                        </li>
                                   </ul>
                              </div>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarExtendedUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarExtendedUI">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:case-round-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Advanced UI </span>
                              </a>
                              <div class="collapse" id="sidebarExtendedUI">
                                   <ul class="nav sub-navbar-nav">
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="extended-ratings.html">Ratings</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="extended-sweetalert.html">Sweet Alert</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="extended-swiper-silder.html">Swiper Slider</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="extended-scrollbar.html">Scrollbar</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="extended-toastify.html">Toastify</a>
                                        </li>
                                   </ul>
                              </div>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarCharts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCharts">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:pie-chart-2-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Charts </span>
                              </a>
                              <div class="collapse" id="sidebarCharts">
                                   <ul class="nav sub-navbar-nav">
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="charts-apex-area.html">Area</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="charts-apex-bar.html">Bar</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="charts-apex-bubble.html">Bubble</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="charts-apex-candlestick.html">Candlestick</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="charts-apex-column.html">Column</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="charts-apex-heatmap.html">Heatmap</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="charts-apex-line.html">Line</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="charts-apex-mixed.html">Mixed</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="charts-apex-timeline.html">Timeline</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="charts-apex-boxplot.html">Boxplot</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="charts-apex-treemap.html">Treemap</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="charts-apex-pie.html">Pie</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="charts-apex-radar.html">Radar</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="charts-apex-radialbar.html">RadialBar</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="charts-apex-scatter.html">Scatter</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="charts-apex-polar-area.html">Polar Area</a>
                                        </li>
                                   </ul>
                              </div>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarForms" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarForms">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:book-bookmark-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Forms </span>
                              </a>
                              <div class="collapse" id="sidebarForms">
                                   <ul class="nav sub-navbar-nav">
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="forms-basic.html">Basic Elements</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="forms-checkbox-radio.html">Checkbox &amp; Radio</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="forms-choices.html">Choice Select</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="forms-clipboard.html">Clipboard</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="forms-flatepicker.html">Flatepicker</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="forms-validation.html">Validation</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="forms-wizard.html">Wizard</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="forms-fileuploads.html">File Upload</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="forms-editors.html">Editors</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="forms-input-mask.html">Input Mask</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="forms-range-slider.html">Slider</a>
                                        </li>
                                   </ul>
                              </div>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarTables" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTables">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:tuning-2-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Tables </span>
                              </a>
                              <div class="collapse" id="sidebarTables">
                                   <ul class="nav sub-navbar-nav">
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="tables-basic.html">Basic Tables</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="tables-gridjs.html">Grid Js</a>
                                        </li>
                                   </ul>
                              </div>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarIcons" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarIcons">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:ufo-2-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Icons </span>
                              </a>
                              <div class="collapse" id="sidebarIcons">
                                   <ul class="nav sub-navbar-nav">
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="icons-boxicons.html">Boxicons</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="icons-solar.html">Solar Icons</a>
                                        </li>
                                   </ul>
                              </div>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarMaps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMaps">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:streets-map-point-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Maps </span>
                              </a>
                              <div class="collapse" id="sidebarMaps">
                                   <ul class="nav sub-navbar-nav">
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="maps-google.html">Google Maps</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="maps-vector.html">Vector Maps</a>
                                        </li>
                                   </ul>
                              </div>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link" href="javascript:void(0);">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:volleyball-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text">Badge Menu</span>
                                   <span class="badge bg-danger badge-pill text-end">1</span>
                              </a>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link menu-arrow" href="#sidebarMultiLevelDemo" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMultiLevelDemo">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:share-circle-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Menu Item </span>
                              </a>
                              <div class="collapse" id="sidebarMultiLevelDemo">
                                   <ul class="nav sub-navbar-nav">
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link" href="javascript:void(0);">Menu Item 1</a>
                                        </li>
                                        <li class="sub-nav-item">
                                             <a class="sub-nav-link  menu-arrow" href="#sidebarItemDemoSubItem" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarItemDemoSubItem">
                                                  <span> Menu Item 2 </span>
                                             </a>
                                             <div class="collapse" id="sidebarItemDemoSubItem">
                                                  <ul class="nav sub-navbar-nav">
                                                       <li class="sub-nav-item">
                                                            <a class="sub-nav-link" href="javascript:void(0);">Menu Sub item</a>
                                                       </li>
                                                  </ul>
                                             </div>
                                        </li>
                                   </ul>
                              </div>
                         </li>

                         <li class="nav-item">
                              <a class="nav-link disabled" href="javascript:void(0);">
                                   <span class="nav-icon">
                                        <iconify-icon icon="solar:user-block-rounded-bold-duotone"></iconify-icon>
                                   </span>
                                   <span class="nav-text"> Disable Item </span>
                              </a>
                         </li>
                    </ul>
               </div>
          </div>
          <!-- ========== App Menu End ========== -->

          <!-- ==================================================== -->
          <!-- Start right Content here -->
          <!-- ==================================================== -->
          <div class="page-content">

               <!-- Start Container Fluid -->
               <div class="container">

                    <div class="row">
                         <div class="col-xl-9">
                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="basic">
                                             Basic Example <a class="anchor-link" href="#basic">#</a>
                                        </h5>
                                        <p class="text-muted font-14"> For basic styling—light padding and only horizontal dividers—add the base class <code>.table</code> to any <code>&lt;table&gt;</code>.</p>
                                        <div class="table-responsive">
                                             <table class="table table-centered">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry the Bird</td>
                                                            <td>Simsons</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>
                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-centered&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry the Bird&lt;/td&gt;
                                                                           &lt;td&gt;Simsons&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="inverse">
                                             Variants <a class="anchor-link" href="#inverse">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Use contextual classes to color tables, table rows or individual cells.
                                        </p>
                                        <div class="table-responsive">
                                             <table class="table">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">Class</th>
                                                            <th scope="col">Heading</th>
                                                            <th scope="col">Heading</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>Default</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                       </tr>

                                                       <tr class="table-primary">
                                                            <td>Primary</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                       </tr>
                                                       <tr class="table-secondary">
                                                            <td>Secondary</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                       </tr>
                                                       <tr class="table-success">
                                                            <td>Success</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                       </tr>
                                                       <tr class="table-danger">
                                                            <td>Danger</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                       </tr>
                                                       <tr class="table-warning">
                                                            <td>Warning</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                       </tr>
                                                       <tr class="table-info">
                                                            <td>Info</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                       </tr>
                                                       <tr class="table-light">
                                                            <td>Light</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                       </tr>
                                                       <tr class="table-dark">
                                                            <td>Dark</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>
                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Class&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;Default&lt;/td&gt;
                                                                           &lt;td&gt;Cell&lt;/td&gt;
                                                                           &lt;td&gt;Cell&lt;/td&gt;
                                                                      &lt;/tr&gt;

                                                                      &lt;tr class=&quot;table-primary&quot;&gt;
                                                                           &lt;td&gt;Primary&lt;/td&gt;
                                                                           &lt;td&gt;Cell&lt;/td&gt;
                                                                           &lt;td&gt;Cell&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr class=&quot;table-secondary&quot;&gt;
                                                                           &lt;td&gt;Secondary&lt;/td&gt;
                                                                           &lt;td&gt;Cell&lt;/td&gt;
                                                                           &lt;td&gt;Cell&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr class=&quot;table-success&quot;&gt;
                                                                           &lt;td&gt;Success&lt;/td&gt;
                                                                           &lt;td&gt;Cell&lt;/td&gt;
                                                                           &lt;td&gt;Cell&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr class=&quot;table-danger&quot;&gt;
                                                                           &lt;td&gt;Danger&lt;/td&gt;
                                                                           &lt;td&gt;Cell&lt;/td&gt;
                                                                           &lt;td&gt;Cell&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr class=&quot;table-warning&quot;&gt;
                                                                           &lt;td&gt;Warning&lt;/td&gt;
                                                                           &lt;td&gt;Cell&lt;/td&gt;
                                                                           &lt;td&gt;Cell&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr class=&quot;table-info&quot;&gt;
                                                                           &lt;td&gt;Info&lt;/td&gt;
                                                                           &lt;td&gt;Cell&lt;/td&gt;
                                                                           &lt;td&gt;Cell&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr class=&quot;table-light&quot;&gt;
                                                                           &lt;td&gt;Light&lt;/td&gt;
                                                                           &lt;td&gt;Cell&lt;/td&gt;
                                                                           &lt;td&gt;Cell&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr class=&quot;table-dark&quot;&gt;
                                                                           &lt;td&gt;Dark&lt;/td&gt;
                                                                           &lt;td&gt;Cell&lt;/td&gt;
                                                                           &lt;td&gt;Cell&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>

                              </div>

                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="striped">Striped Rows Table <a class="anchor-link" href="#striped">#</a></h5>
                                        <p class="text-muted font-14">
                                             Use <code>.table-striped</code> to add zebra-striping to any table row
                                             within the <code>&lt;tbody&gt;</code>.
                                        </p>
                                        <div class="table-responsive">
                                             <table class="table table-striped table-centered">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry the Bird</td>
                                                            <td> Simsons</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-striped table-centered&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry the Bird&lt;/td&gt;
                                                                           &lt;td&gt; Simsons&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>

                              </div>
                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="striped">
                                             Striped Rows Table Dark <a class="anchor-link" href="#striped">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Use <code>.table-dark .table-striped</code> to add zebra-striping to any table row
                                             within the <code>&lt;tbody&gt;</code>.
                                        </p>
                                        <div class="table-responsive">
                                             <table class="table table-dark table-striped table-centered">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry the Bird</td>
                                                            <td> Simsons</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-dark table-striped table-centered&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry the Bird&lt;/td&gt;
                                                                           &lt;td&gt; Simsons&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>

                              </div>
                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="striped">
                                             Striped Rows Table Success <a class="anchor-link" href="#striped">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Use <code>.table-success .table-striped</code> to add zebra-striping to any table row
                                             within the <code>&lt;tbody&gt;</code>.
                                        </p>
                                        <div class="table-responsive">
                                             <table class="table table-success table-striped table-centered">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry the Bird</td>
                                                            <td> Simsons</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-success table-striped table-centered&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry the Bird&lt;/td&gt;
                                                                           &lt;td&gt; Simsons&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>

                              </div>

                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor">
                                             Striped columns <a class="anchor-link" href="#!">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Use <code>.table-striped-columns </code>to add zebra-striping to any table column.
                                        </p>
                                        <div class="table-responsive-sm">
                                             <table class="table table-striped-columns table-centered">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry the Bird</td>
                                                            <td>Simsons</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-striped-columns table-centered&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry the Bird&lt;/td&gt;
                                                                           &lt;td&gt;Simsons&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>

                              </div>
                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor">
                                             Striped columns Dark<a class="anchor-link" href="#!">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Use <code>.table-dark .table-striped-columns </code>to add zebra-striping to any table column.
                                        </p>
                                        <div class="table-responsive-sm">
                                             <table class="table table-dark table-striped-columns table-centered">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry the Bird</td>
                                                            <td>Simsons</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-dark table-striped-columns table-centered&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry the Bird&lt;/td&gt;
                                                                           &lt;td&gt;Simsons&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>

                              </div>
                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor">
                                             Striped columns Dark<a class="anchor-link" href="#!">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Use <code>.table-success .table-striped-columns </code>to add zebra-striping to any table column.
                                        </p>
                                        <div class="table-responsive-sm">
                                             <table class="table table-success table-striped-columns table-centered">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry the Bird</td>
                                                            <td>Simsons</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-success table-striped-columns table-centered&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry the Bird&lt;/td&gt;
                                                                           &lt;td&gt;Simsons&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>

                              </div>

                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="hoverable-row">
                                             Hoverable rows <a class="anchor-link" href="#hoverable-row">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Add <code>.table-hover</code> to enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.
                                        </p>
                                        <div class="table-responsive">
                                             <table class="table table-hover table-centered">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry the Bird</td>
                                                            <td>Simsons</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-hover table-centered&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry the Bird&lt;/td&gt;
                                                                           &lt;td&gt;Simsons&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>

                              </div>

                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor">
                                             Hoverable rows Dark <a class="anchor-link" href="#!">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Add <code>.table-dark .table-hover</code> to enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.
                                        </p>
                                        <div class="table-responsive">
                                             <table class="table table-dark table-hover table-centered">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry the Bird</td>
                                                            <td>Simsons</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-dark table-hover table-centered&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry the Bird&lt;/td&gt;
                                                                           &lt;td&gt;Simsons&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>

                              </div>

                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="active">
                                             Active Tables <a class="anchor-link" href="#active">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Highlight a table row or cell by adding a <code>.table-active</code> class.
                                        </p>

                                        <div class="table-responsive">
                                             <table class="table table-centered">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr class="table-active">
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td class="table-active">Larry the Bird</td>
                                                            <td>Simsons</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-centered&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr class=&quot;table-active&quot;&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td class=&quot;table-active&quot;&gt;Larry the Bird&lt;/td&gt;
                                                                           &lt;td&gt;Simsons&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>

                              </div>

                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor">
                                             Active Tables Dark<a class="anchor-link" href="#!">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Highlight a table row or cell by adding a <code>.table-dark .table-active</code> class.
                                        </p>

                                        <div class="table-responsive">
                                             <table class="table table-dark table-centered">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr class="table-active">
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td class="table-active">Larry the Bird</td>
                                                            <td>Simsons</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-dark table-centered&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr class=&quot;table-active&quot;&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td class=&quot;table-active&quot;&gt;Larry the Bird&lt;/td&gt;
                                                                           &lt;td&gt;Simsons&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>

                              </div>

                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="bordered">
                                             Bordered Table <a class="anchor-link" href="#bordered">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Add <code>.table-bordered</code> for borders on all sides of the table and cells.
                                        </p>
                                        <div class="table-responsive">
                                             <table class="table table-bordered">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry the Bird</td>
                                                            <td>Simsons</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-bordered&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry the Bird&lt;/td&gt;
                                                                           &lt;td&gt;Simsons&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>

                              </div>

                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="border-color">
                                             Bordered color Table <a class="anchor-link" href="#border-color">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Add <code>.table-bordered</code> & <code>.border-primary</code> can be added to change colors.
                                        </p>

                                        <div class="table-responsive">
                                             <table class="table table-bordered border-primary table-centered">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry the Bird</td>
                                                            <td>Simsons</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-bordered border-primary table-centered&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry the Bird&lt;/td&gt;
                                                                           &lt;td&gt;Simsons&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>

                              </div>
                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="borderless">
                                             Tables without borders <a class="anchor-link" href="#borderless">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Add <code>.table-borderless</code> for a table without borders..
                                        </p>

                                        <div class="table-responsive">
                                             <table class="table table-borderless table-centered">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry the Bird</td>
                                                            <td>Simsons</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-borderless table-centered&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry the Bird&lt;/td&gt;
                                                                           &lt;td&gt;Simsons&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor">
                                             Tables without borders Dark<a class="anchor-link" href="#!">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Add <code>.table-borderless</code> <code>.table-dark</code> for a table without borders and dark table.
                                        </p>

                                        <div class="table-responsive">
                                             <table class="table table-borderless table-dark table-centered">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry the Bird</td>
                                                            <td>Simsons</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-borderless table-dark table-centered&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry the Bird&lt;/td&gt;
                                                                           &lt;td&gt;Simsons&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="small">
                                             Small tables <a class="anchor-link" href="#small">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Add <code>.table-sm </code>to make any .table more compact by cutting all cell padding in half.
                                        </p>
                                        <div class="table-responsive">
                                             <table class="table table-sm">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry the Bird</td>
                                                            <td>Simsons</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-sm&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry the Bird&lt;/td&gt;
                                                                           &lt;td&gt;Simsons&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>

                              </div>
                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="small">
                                             Small Tables Dark<a class="anchor-link" href="#small">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Add <code>.table-sm </code> <code>.table-dark </code>to make any .table more compact by cutting all cell padding in half.
                                        </p>
                                        <div class="table-responsive">
                                             <table class="table table-dark table-sm">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry the Bird</td>
                                                            <td>Simsons</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-dark table-sm&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry the Bird&lt;/td&gt;
                                                                           &lt;td&gt;Simsons&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>

                              </div>

                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="dividers">
                                             Table group dividers <a class="anchor-link" href="#borderless">#</a>
                                        </h5>
                                        <p class="text-muted font-14"> Add a thicker border, darker between table groups—<code>&lt;thead&gt;</code>, <code>&lt;tbody&gt;</code>, and <code>&lt;tfoot&gt;</code>—with <code>.table-group-divider</code>. Customize the color by changing the <code>border-top-color</code> (which we don’t currently provide a utility class for at this time).
                                        </p>

                                        <div class="table-responsive">
                                             <table class="table">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody class="table-group-divider">
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry the Bird</td>
                                                            <td>Simsons</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody class=&quot;table-group-divider&quot;&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry the Bird&lt;/td&gt;
                                                                           &lt;td&gt;Simsons&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>

                              </div>

                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="alignment">
                                             Vertical alignment <a class="anchor-link" href="#alignment">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Table cells of <code>&lt;thead&gt;</code> are always vertical aligned to the bottom. Table cells in <code>&lt;tbody&gt;</code> inherit their alignment from <code>&lt;table&gt;</code> and are aligned to the top by default. Use the <a href="https://techzaa.getappui.com/docs/5.3/utilities/vertical-align/">vertical align</a> classes to re-align where needed.
                                        </p>
                                        <div class="">
                                             <div class="table-responsive">
                                                  <table class="table align-middle table-centered">
                                                       <thead>
                                                            <tr>
                                                                 <th scope="col" class="w-25">Heading 1</th>
                                                                 <th scope="col" class="w-25">Heading 2</th>
                                                                 <th scope="col" class="w-25">Heading 3</th>
                                                                 <th scope="col" class="w-25">Heading 4</th>
                                                            </tr>
                                                       </thead>
                                                       <tbody>
                                                            <tr>
                                                                 <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
                                                                 <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
                                                                 <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
                                                                 <td>This here is some placeholder text, intended to take up quite a bit of vertical space, to demonstrate how the vertical alignment works in the preceding cells.</td>
                                                            </tr>
                                                            <tr class="align-bottom">
                                                                 <td>This cell inherits <code>vertical-align: bottom;</code> from the table row</td>
                                                                 <td>This cell inherits <code>vertical-align: bottom;</code> from the table row</td>
                                                                 <td>This cell inherits <code>vertical-align: bottom;</code> from the table row</td>
                                                                 <td>This here is some placeholder text, intended to take up quite a bit of vertical space, to demonstrate how the vertical alignment works in the preceding cells.</td>
                                                            </tr>
                                                            <tr>
                                                                 <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
                                                                 <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
                                                                 <td class="align-top">This cell is aligned to the top.</td>
                                                                 <td>This here is some placeholder text, intended to take up quite a bit of vertical space, to demonstrate how the vertical alignment works in the preceding cells.</td>
                                                            </tr>
                                                       </tbody>
                                                  </table>
                                             </div>

                                             <div class="highlight">
                                                  <div class="highlight-toolbar">
                                                       <small class="text-uppercase">html</small>
                                                       <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                                  </div>
                                                  <div class="code" data-simplebar>
                                                       <pre class="language-html">
                                                            <code>
                                                                 &lt;table class=&quot;table align-middle table-centered&quot;&gt;
                                                                      &lt;thead&gt;
                                                                           &lt;tr&gt;
                                                                                &lt;th scope=&quot;col&quot; class=&quot;w-25&quot;&gt;Heading 1&lt;/th&gt;
                                                                                &lt;th scope=&quot;col&quot; class=&quot;w-25&quot;&gt;Heading 2&lt;/th&gt;
                                                                                &lt;th scope=&quot;col&quot; class=&quot;w-25&quot;&gt;Heading 3&lt;/th&gt;
                                                                                &lt;th scope=&quot;col&quot; class=&quot;w-25&quot;&gt;Heading 4&lt;/th&gt;
                                                                           &lt;/tr&gt;
                                                                      &lt;/thead&gt;
                                                                      &lt;tbody&gt;
                                                                           &lt;tr&gt;
                                                                                &lt;td&gt;This cell inherits &lt;code&gt;vertical-align: middle;&lt;/code&gt; from the table&lt;/td&gt;
                                                                                &lt;td&gt;This cell inherits &lt;code&gt;vertical-align: middle;&lt;/code&gt; from the table&lt;/td&gt;
                                                                                &lt;td&gt;This cell inherits &lt;code&gt;vertical-align: middle;&lt;/code&gt; from the table&lt;/td&gt;
                                                                                &lt;td&gt;This here is some placeholder text, intended to take up quite a bit of vertical space, to demonstrate how the vertical alignment works in the preceding cells.&lt;/td&gt;
                                                                           &lt;/tr&gt;
                                                                           &lt;tr class=&quot;align-bottom&quot;&gt;
                                                                                &lt;td&gt;This cell inherits &lt;code&gt;vertical-align: bottom;&lt;/code&gt; from the table row&lt;/td&gt;
                                                                                &lt;td&gt;This cell inherits &lt;code&gt;vertical-align: bottom;&lt;/code&gt; from the table row&lt;/td&gt;
                                                                                &lt;td&gt;This cell inherits &lt;code&gt;vertical-align: bottom;&lt;/code&gt; from the table row&lt;/td&gt;
                                                                                &lt;td&gt;This here is some placeholder text, intended to take up quite a bit of vertical space, to demonstrate how the vertical alignment works in the preceding cells.&lt;/td&gt;
                                                                           &lt;/tr&gt;
                                                                           &lt;tr&gt;
                                                                                &lt;td&gt;This cell inherits &lt;code&gt;vertical-align: middle;&lt;/code&gt; from the table&lt;/td&gt;
                                                                                &lt;td&gt;This cell inherits &lt;code&gt;vertical-align: middle;&lt;/code&gt; from the table&lt;/td&gt;
                                                                                &lt;td class=&quot;align-top&quot;&gt;This cell is aligned to the top.&lt;/td&gt;
                                                                                &lt;td&gt;This here is some placeholder text, intended to take up quite a bit of vertical space, to demonstrate how the vertical alignment works in the preceding cells.&lt;/td&gt;
                                                                           &lt;/tr&gt;
                                                                      &lt;/tbody&gt;
                                                                 &lt;/table&gt;
                                                            </code>
                                                       </pre>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>

                              </div>

                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="nesting">
                                             Nesting Table <a class="anchor-link" href="#nesting">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Border styles, active styles, and table variants are not inherited by nested tables.
                                        </p>
                                        <div class="table-responsive">
                                             <table class="table table-bordered table-striped table-centered">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td colspan="4">
                                                                 <table class="table mb-0">
                                                                      <thead>
                                                                           <tr>
                                                                                <th scope="col">Header</th>
                                                                                <th scope="col">Header</th>
                                                                                <th scope="col">Header</th>
                                                                           </tr>
                                                                      </thead>
                                                                      <tbody>
                                                                           <tr>
                                                                                <td>A</td>
                                                                                <td>First</td>
                                                                                <td>Last</td>
                                                                           </tr>
                                                                           <tr>
                                                                                <td>B</td>
                                                                                <td>First</td>
                                                                                <td>Last</td>
                                                                           </tr>
                                                                           <tr>
                                                                                <td>C</td>
                                                                                <td>First</td>
                                                                                <td>Last</td>
                                                                           </tr>
                                                                      </tbody>
                                                                 </table>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry</td>
                                                            <td>the Bird</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-bordered table-striped table-centered&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td colspan=&quot;4&quot;&gt;
                                                                                &lt;table class=&quot;table mb-0&quot;&gt;
                                                                                     &lt;thead&gt;
                                                                                          &lt;tr&gt;
                                                                                               &lt;th scope=&quot;col&quot;&gt;Header&lt;/th&gt;
                                                                                               &lt;th scope=&quot;col&quot;&gt;Header&lt;/th&gt;
                                                                                               &lt;th scope=&quot;col&quot;&gt;Header&lt;/th&gt;
                                                                                          &lt;/tr&gt;
                                                                                     &lt;/thead&gt;
                                                                                     &lt;tbody&gt;
                                                                                          &lt;tr&gt;
                                                                                               &lt;td&gt;A&lt;/td&gt;
                                                                                               &lt;td&gt;First&lt;/td&gt;
                                                                                               &lt;td&gt;Last&lt;/td&gt;
                                                                                          &lt;/tr&gt;
                                                                                          &lt;tr&gt;
                                                                                               &lt;td&gt;B&lt;/td&gt;
                                                                                               &lt;td&gt;First&lt;/td&gt;
                                                                                               &lt;td&gt;Last&lt;/td&gt;
                                                                                          &lt;/tr&gt;
                                                                                          &lt;tr&gt;
                                                                                               &lt;td&gt;C&lt;/td&gt;
                                                                                               &lt;td&gt;First&lt;/td&gt;
                                                                                               &lt;td&gt;Last&lt;/td&gt;
                                                                                          &lt;/tr&gt;
                                                                                     &lt;/tbody&gt;
                                                                                &lt;/table&gt;
                                                                           &lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry&lt;/td&gt;
                                                                           &lt;td&gt;the Bird&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>
                              </div> <!-- end card body -->

                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="head-option">
                                             Table head <a class="anchor-link" href="#head-option">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Similar to tables and dark tables, use the modifier classes <code>.table-light</code>to make <code>&lt;thead&gt;</code>s appear light or dark gray.
                                        </p>

                                        <div class="table-responsive">
                                             <table class="table table-centered">
                                                  <thead class="table-light">
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry</td>
                                                            <td>the Bird</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-centered&quot;&gt;
                                                                 &lt;thead class=&quot;table-light&quot;&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry&lt;/td&gt;
                                                                           &lt;td&gt;the Bird&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>
                              </div> <!-- end card body -->
                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="tablehead">
                                             Table head Dark<a class="anchor-link" href="#tablehead">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Similar to tables and dark tables, use the modifier classes <code>.table-dark</code> to make <code>&lt;thead&gt;</code>s appear light or dark gray.
                                        </p>

                                        <div class="table-responsive">
                                             <table class="table table-centered">
                                                  <thead class="table-dark">
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry</td>
                                                            <td>the Bird</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-centered&quot;&gt;
                                                                 &lt;thead class=&quot;table-dark&quot;&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry&lt;/td&gt;
                                                                           &lt;td&gt;the Bird&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>
                              </div> <!-- end card body -->


                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="tablefoot">
                                             Table foot<a class="anchor-link" href="#tablefoot">#</a>
                                        </h5>
                                        <div class="mt-2 table-responsive">
                                             <table class="table table-centered">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry</td>
                                                            <td>the Bird</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                                  <tfoot>
                                                       <tr>
                                                            <td>Footer</td>
                                                            <td>Footer</td>
                                                            <td>Footer</td>
                                                            <td>Footer</td>
                                                       </tr>
                                                  </tfoot>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-centered&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry&lt;/td&gt;
                                                                           &lt;td&gt;the Bird&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                                 &lt;tfoot&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;Footer&lt;/td&gt;
                                                                           &lt;td&gt;Footer&lt;/td&gt;
                                                                           &lt;td&gt;Footer&lt;/td&gt;
                                                                           &lt;td&gt;Footer&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tfoot&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>
                              </div> <!-- end card body -->

                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="captions">
                                             Captions<a class="anchor-link" href="#captions">#</a>
                                        </h5>
                                        <p class="text-muted font-14">A <code>&lt;caption&gt;</code> functions like a heading for a table. It helps users with screen readers to find a table and understand what it’s about and decide if they want to read it.</p>
                                        <div class="table-responsive">
                                             <table class="table table-centered">
                                                  <caption>List of users</caption>
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry the Bird</td>
                                                            <td>Simsons</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-centered&quot;&gt;
                                                                 &lt;caption&gt;List of users&lt;/caption&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry the Bird&lt;/td&gt;
                                                                           &lt;td&gt;Simsons&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>
                              </div> <!-- end card body -->
                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="captions">
                                             Captions<a class="anchor-link" href="#captions">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             You can also put the <code>&lt;caption&gt;</code> on the top of the table with <code>.caption-top</code>
                                        </p>
                                        <div class="table-responsive">
                                             <table class="table caption-top table-centered">
                                                  <caption>List of users</caption>
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry</td>
                                                            <td>the Bird</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table caption-top table-centered&quot;&gt;
                                                                 &lt;caption&gt;List of users&lt;/caption&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry&lt;/td&gt;
                                                                           &lt;td&gt;the Bird&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>
                              </div> <!-- end card body -->

                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="responsive">
                                             Always responsive <a class="anchor-link" href="#responsive">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Across every breakpoint, use <code>.table-responsive</code> for horizontally scrolling tables.
                                        </p>
                                        <div class="table-responsive">
                                             <table class="table">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Heading</th>
                                                            <th scope="col">Heading</th>
                                                            <th scope="col">Heading</th>
                                                            <th scope="col">Heading</th>
                                                            <th scope="col">Heading</th>
                                                            <th scope="col">Heading</th>
                                                            <th scope="col">Heading</th>
                                                            <th scope="col">Heading</th>
                                                            <th scope="col">Heading</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;div class=&quot;table-responsive&quot;&gt;
                                                                 &lt;table class=&quot;table&quot;&gt;
                                                                      &lt;thead&gt;
                                                                           &lt;tr&gt;
                                                                                &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                                &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
                                                                                &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
                                                                                &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
                                                                                &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
                                                                                &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
                                                                                &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
                                                                                &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
                                                                                &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
                                                                                &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
                                                                           &lt;/tr&gt;
                                                                      &lt;/thead&gt;
                                                                      &lt;tbody&gt;
                                                                           &lt;tr&gt;
                                                                                &lt;td&gt;1&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                           &lt;/tr&gt;
                                                                           &lt;tr&gt;
                                                                                &lt;td&gt;2&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                           &lt;/tr&gt;
                                                                           &lt;tr&gt;
                                                                                &lt;td&gt;3&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                           &lt;/tr&gt;
                                                                      &lt;/tbody&gt;
                                                                 &lt;/table&gt;
                                                            &lt;/div&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>
                              </div> <!-- end card body -->
                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="responsive">
                                             With avatars <a class="anchor-link" href="#responsive">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             A list of all the users in your account including their name, title, email and role.
                                        </p>
                                        <div class="table-responsive">
                                             <table class="table table-hover table-centered">
                                                  <thead class="table-light">
                                                       <tr>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Title</th>
                                                            <th scope="col">Email</th>
                                                            <th scope="col">Role</th>
                                                            <th scope="col">Action</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>
                                                                 <div class="d-flex align-items-center gap-1">
                                                                      <img src="assets/Backend/images/users/avatar-2.jpg" alt="" class="avatar-sm rounded-circle">
                                                                      <div class="d-block">
                                                                           <h5 class="mb-0"> Tony M. Carter</h5>
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td>Designer</td>
                                                            <td>tonymcarter@jourrapide.com</td>
                                                            <td>Member</td>
                                                            <td><a href="#!" class="btn btn-primary btn-sm w-100">Edit</a></td>
                                                       </tr>
                                                       <tr>
                                                            <td>
                                                                 <div class="d-flex align-items-center gap-1">
                                                                      <img src="assets/Backend/images/users/avatar-1.jpg" alt="" class="avatar-sm rounded-circle">
                                                                      <div class="d-block">
                                                                           <h5 class="mb-0">James E. Chamb</h5>
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td>UI/UX Designer</td>
                                                            <td>jamesechambliss@teleworm.us</td>
                                                            <td>Admin</td>
                                                            <td><a href="#!" class="btn btn-primary btn-sm w-100">Edit</a></td>
                                                       </tr>
                                                       <tr>
                                                            <td>
                                                                 <div class="d-flex align-items-center gap-1">
                                                                      <img src="assets/Backend/images/users/avatar-4.jpg" alt="" class="avatar-sm rounded-circle">
                                                                      <div class="d-block">
                                                                           <h5 class="mb-0">Charlotte J. Torres</h5>
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td>Copywriter</td>
                                                            <td>charlotte@jourrapide.com</td>
                                                            <td>Member</td>
                                                            <td><a href="#!" class="btn btn-primary btn-sm w-100">Edit</a></td>

                                                       </tr>
                                                       <tr class="table-active">
                                                            <td>
                                                                 <div class="d-flex align-items-center gap-1">
                                                                      <img src="assets/Backend/images/users/avatar-6.jpg" alt="" class="avatar-sm rounded-circle">
                                                                      <div class="d-block">
                                                                           <h5 class="mb-0 d-flex align-items-center gap-1">Mary J. Germain<i class='bx bxs-badge-check text-success'></i></iconify-icon></h5>
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td>Full Stack</td>
                                                            <td>maryjgermain@jourrapide.com</td>
                                                            <td>CEO</td>
                                                            <td><a href="#!" class="btn btn-primary btn-sm w-100">Edit</a></td>
                                                       </tr>
                                                       <tr>
                                                            <td>
                                                                 <div class="d-flex align-items-center gap-1">
                                                                      <img src="assets/Backend/images/users/avatar-7.jpg" alt="" class="avatar-sm rounded-circle">
                                                                      <div class="d-block">
                                                                           <h5 class="mb-0">Kevin C. Reyes</h5>
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td>Director of Product</td>
                                                            <td>kevincreyes@jourrapide.com</td>
                                                            <td>Member</td>
                                                            <td><a href="#!" class="btn btn-primary btn-sm w-100">Edit</a></td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-hover table-centered&quot;&gt;
                                                                 &lt;thead class=&quot;table-light&quot;&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Name&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Title&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Email&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Role&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Action&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;
                                                                                &lt;div class=&quot;d-flex align-items-center gap-1&quot;&gt;
                                                                                     &lt;img src=&quot;assets/Backend/images/users/avatar-2.jpg&quot; alt=&quot;&quot; class=&quot;avatar-sm rounded-circle&quot;&gt;
                                                                                     &lt;div class=&quot;d-block&quot;&gt;
                                                                                          &lt;h5 class=&quot;mb-0&quot;&gt; Tony M. Carter&lt;/h5&gt;
                                                                                     &lt;/div&gt;
                                                                                &lt;/div&gt;
                                                                           &lt;/td&gt;
                                                                           &lt;td&gt;Designer&lt;/td&gt;
                                                                           &lt;td&gt;tonymcarter@jourrapide.com&lt;/td&gt;
                                                                           &lt;td&gt;Member&lt;/td&gt;
                                                                           &lt;td&gt;&lt;a href=&quot;#!&quot; class=&quot;btn btn-primary btn-sm w-100&quot;&gt;Edit&lt;/a&gt;&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;
                                                                                &lt;div class=&quot;d-flex align-items-center gap-1&quot;&gt;
                                                                                     &lt;img src=&quot;assets/Backend/images/users/avatar-1.jpg&quot; alt=&quot;&quot; class=&quot;avatar-sm rounded-circle&quot;&gt;
                                                                                     &lt;div class=&quot;d-block&quot;&gt;
                                                                                          &lt;h5 class=&quot;mb-0&quot;&gt;James E. Chamb&lt;/h5&gt;
                                                                                     &lt;/div&gt;
                                                                                &lt;/div&gt;
                                                                           &lt;/td&gt;
                                                                           &lt;td&gt;UI/UX Designer&lt;/td&gt;
                                                                           &lt;td&gt;jamesechambliss@teleworm.us&lt;/td&gt;
                                                                           &lt;td&gt;Admin&lt;/td&gt;
                                                                           &lt;td&gt;&lt;a href=&quot;#!&quot; class=&quot;btn btn-primary btn-sm w-100&quot;&gt;Edit&lt;/a&gt;&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;
                                                                                &lt;div class=&quot;d-flex align-items-center gap-1&quot;&gt;
                                                                                     &lt;img src=&quot;assets/Backend/images/users/avatar-4.jpg&quot; alt=&quot;&quot; class=&quot;avatar-sm rounded-circle&quot;&gt;
                                                                                     &lt;div class=&quot;d-block&quot;&gt;
                                                                                          &lt;h5 class=&quot;mb-0&quot;&gt;Charlotte J. Torres&lt;/h5&gt;
                                                                                     &lt;/div&gt;
                                                                                &lt;/div&gt;
                                                                           &lt;/td&gt;
                                                                           &lt;td&gt;Copywriter&lt;/td&gt;
                                                                           &lt;td&gt;charlotte@jourrapide.com&lt;/td&gt;
                                                                           &lt;td&gt;Member&lt;/td&gt;
                                                                           &lt;td&gt;&lt;a href=&quot;#!&quot; class=&quot;btn btn-primary btn-sm w-100&quot;&gt;Edit&lt;/a&gt;&lt;/td&gt;

                                                                      &lt;/tr&gt;
                                                                      &lt;tr class=&quot;table-active&quot;&gt;
                                                                           &lt;td&gt;
                                                                                &lt;div class=&quot;d-flex align-items-center gap-1&quot;&gt;
                                                                                     &lt;img src=&quot;assets/Backend/images/users/avatar-6.jpg&quot; alt=&quot;&quot; class=&quot;avatar-sm rounded-circle&quot;&gt;
                                                                                     &lt;div class=&quot;d-block&quot;&gt;
                                                                                          &lt;h5 class=&quot;mb-0 d-flex align-items-center gap-1&quot;&gt;Mary J. Germain&lt;i class='bx bxs-badge-check text-success'&gt;&lt;/i&gt;&lt;/iconify-icon&gt;&lt;/h5&gt;
                                                                                     &lt;/div&gt;
                                                                                &lt;/div&gt;
                                                                           &lt;/td&gt;
                                                                           &lt;td&gt;Full Stack&lt;/td&gt;
                                                                           &lt;td&gt;maryjgermain@jourrapide.com&lt;/td&gt;
                                                                           &lt;td&gt;CEO&lt;/td&gt;
                                                                           &lt;td&gt;&lt;a href=&quot;#!&quot; class=&quot;btn btn-primary btn-sm w-100&quot;&gt;Edit&lt;/a&gt;&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;
                                                                                &lt;div class=&quot;d-flex align-items-center gap-1&quot;&gt;
                                                                                     &lt;img src=&quot;assets/Backend/images/users/avatar-7.jpg&quot; alt=&quot;&quot; class=&quot;avatar-sm rounded-circle&quot;&gt;
                                                                                     &lt;div class=&quot;d-block&quot;&gt;
                                                                                          &lt;h5 class=&quot;mb-0&quot;&gt;Kevin C. Reyes&lt;/h5&gt;
                                                                                     &lt;/div&gt;
                                                                                &lt;/div&gt;
                                                                           &lt;/td&gt;
                                                                           &lt;td&gt;Director of Product&lt;/td&gt;
                                                                           &lt;td&gt;kevincreyes@jourrapide.com&lt;/td&gt;
                                                                           &lt;td&gt;Member&lt;/td&gt;
                                                                           &lt;td&gt;&lt;a href=&quot;#!&quot; class=&quot;btn btn-primary btn-sm w-100&quot;&gt;Edit&lt;/a&gt;&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>
                              </div> <!-- end card body -->
                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="responsive">
                                             With checkboxes <a class="anchor-link" href="#responsive">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             A list of all the users in your account including their name, title, email and role.
                                        </p>
                                        <div class="table-responsive">
                                             <table class="table table-striped table-borderless table-centered">
                                                  <thead class="table-light">
                                                       <tr>
                                                            <th scope="col">
                                                                 <div class="form-check">
                                                                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
                                                                 </div>
                                                            </th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Title</th>
                                                            <th scope="col">Email</th>
                                                            <th scope="col">Role</th>
                                                            <th scope="col">Action</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>
                                                                 <div class="form-check">
                                                                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                 </div>
                                                            </td>
                                                            <td> Tony M. Carter </td>
                                                            <td>Designer</td>
                                                            <td>tonymcarter@jourrapide.com</td>
                                                            <td>Member</td>
                                                            <td><a href="#!" class="btn btn-primary btn-sm w-100">Edit</a></td>
                                                       </tr>
                                                       <tr>
                                                            <td>
                                                                 <div class="form-check">
                                                                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                                                 </div>
                                                            </td>
                                                            <td>James E. Chamb</td>
                                                            <td>UI/UX Designer</td>
                                                            <td>jamesechambliss@teleworm.us</td>
                                                            <td>Admin</td>
                                                            <td><a href="#!" class="btn btn-primary btn-sm w-100">Edit</a></td>
                                                       </tr>
                                                       <tr>
                                                            <td>
                                                                 <div class="form-check">
                                                                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                                                                 </div>
                                                            </td>
                                                            <td> Charlotte J. Torres </td>
                                                            <td>Copywriter</td>
                                                            <td>charlotte@jourrapide.com</td>
                                                            <td>Member</td>
                                                            <td><a href="#!" class="btn btn-primary btn-sm w-100">Edit</a></td>

                                                       </tr>
                                                       <tr>
                                                            <td>
                                                                 <div class="form-check">
                                                                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                                                                 </div>
                                                            </td>
                                                            <td>
                                                                 Mary J. Germain <i class='bx bxs-badge-check text-success'></i></iconify-icon>
                                                            </td>
                                                            <td>Full Stack</td>
                                                            <td>maryjgermain@jourrapide.com</td>
                                                            <td>CEO</td>
                                                            <td><a href="#!" class="btn btn-primary btn-sm w-100">Edit</a></td>
                                                       </tr>
                                                       <tr>
                                                            <td>
                                                                 <div class="form-check">
                                                                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
                                                                 </div>
                                                            </td>
                                                            <td>Kevin C. Reyes</td>
                                                            <td>Director of Product</td>
                                                            <td>kevincreyes@jourrapide.com</td>
                                                            <td>Member</td>
                                                            <td><a href="#!" class="btn btn-primary btn-sm w-100">Edit</a></td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-striped table-borderless table-centered&quot;&gt;
                                                                 &lt;thead class=&quot;table-light&quot;&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;
                                                                                &lt;div class=&quot;form-check&quot;&gt;
                                                                                     &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexCheckDefault5&quot;&gt;
                                                                                &lt;/div&gt;
                                                                           &lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Name&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Title&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Email&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Role&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Action&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;
                                                                                &lt;div class=&quot;form-check&quot;&gt;
                                                                                     &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexCheckDefault&quot;&gt;
                                                                                &lt;/div&gt;
                                                                           &lt;/td&gt;
                                                                           &lt;td&gt; Tony M. Carter &lt;/td&gt;
                                                                           &lt;td&gt;Designer&lt;/td&gt;
                                                                           &lt;td&gt;tonymcarter@jourrapide.com&lt;/td&gt;
                                                                           &lt;td&gt;Member&lt;/td&gt;
                                                                           &lt;td&gt;&lt;a href=&quot;#!&quot; class=&quot;btn btn-primary btn-sm w-100&quot;&gt;Edit&lt;/a&gt;&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;
                                                                                &lt;div class=&quot;form-check&quot;&gt;
                                                                                     &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexCheckDefault2&quot;&gt;
                                                                                &lt;/div&gt;
                                                                           &lt;/td&gt;
                                                                           &lt;td&gt;James E. Chamb&lt;/td&gt;
                                                                           &lt;td&gt;UI/UX Designer&lt;/td&gt;
                                                                           &lt;td&gt;jamesechambliss@teleworm.us&lt;/td&gt;
                                                                           &lt;td&gt;Admin&lt;/td&gt;
                                                                           &lt;td&gt;&lt;a href=&quot;#!&quot; class=&quot;btn btn-primary btn-sm w-100&quot;&gt;Edit&lt;/a&gt;&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;
                                                                                &lt;div class=&quot;form-check&quot;&gt;
                                                                                     &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexCheckDefault3&quot;&gt;
                                                                                &lt;/div&gt;
                                                                           &lt;/td&gt;
                                                                           &lt;td&gt; Charlotte J. Torres &lt;/td&gt;
                                                                           &lt;td&gt;Copywriter&lt;/td&gt;
                                                                           &lt;td&gt;charlotte@jourrapide.com&lt;/td&gt;
                                                                           &lt;td&gt;Member&lt;/td&gt;
                                                                           &lt;td&gt;&lt;a href=&quot;#!&quot; class=&quot;btn btn-primary btn-sm w-100&quot;&gt;Edit&lt;/a&gt;&lt;/td&gt;

                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;
                                                                                &lt;div class=&quot;form-check&quot;&gt;
                                                                                     &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexCheckDefault4&quot;&gt;
                                                                                &lt;/div&gt;
                                                                           &lt;/td&gt;
                                                                           &lt;td&gt;
                                                                                Mary J. Germain &lt;i class='bx bxs-badge-check text-success'&gt;&lt;/i&gt;&lt;/iconify-icon&gt;
                                                                           &lt;/td&gt;
                                                                           &lt;td&gt;Full Stack&lt;/td&gt;
                                                                           &lt;td&gt;maryjgermain@jourrapide.com&lt;/td&gt;
                                                                           &lt;td&gt;CEO&lt;/td&gt;
                                                                           &lt;td&gt;&lt;a href=&quot;#!&quot; class=&quot;btn btn-primary btn-sm w-100&quot;&gt;Edit&lt;/a&gt;&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;
                                                                                &lt;div class=&quot;form-check&quot;&gt;
                                                                                     &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexCheckDefault5&quot;&gt;
                                                                                &lt;/div&gt;
                                                                           &lt;/td&gt;
                                                                           &lt;td&gt;Kevin C. Reyes&lt;/td&gt;
                                                                           &lt;td&gt;Director of Product&lt;/td&gt;
                                                                           &lt;td&gt;kevincreyes@jourrapide.com&lt;/td&gt;
                                                                           &lt;td&gt;Member&lt;/td&gt;
                                                                           &lt;td&gt;&lt;a href=&quot;#!&quot; class=&quot;btn btn-primary btn-sm w-100&quot;&gt;Edit&lt;/a&gt;&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>
                              </div> <!-- end card body -->
                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="nesting1">
                                             Nesting Table <a class="anchor-link" href="#nesting1">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Border styles, active styles, and table variants are not inherited by nested tables.
                                        </p>
                                        <div class="table-responsive">
                                             <table class="table table-bordered table-striped table-centered">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">Invoice Number</th>
                                                            <th scope="col">Invoice Amount</th>
                                                            <th scope="col">Confirmation by the client</th>
                                                            <th scope="col">Planned payment date</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>F-011221/21</td>
                                                            <td>$ 879.500</td>
                                                            <td>11/05/2023</td>
                                                            <td>12/05/2023</td>
                                                       </tr>
                                                       <tr>
                                                            <td colspan="4">
                                                                 <table class="table mb-0">
                                                                      <thead>
                                                                           <tr>
                                                                                <th scope="col">ERP number</th>
                                                                                <th scope="col">Carrier legal entity</th>
                                                                                <th scope="col">Responsible logistician</th>
                                                                                <th scope="col">Status</th>
                                                                           </tr>
                                                                      </thead>
                                                                      <tbody>
                                                                           <tr>
                                                                                <td>3-128-3</td>
                                                                                <td>ToBrookfield Asset Management</td>
                                                                                <td>
                                                                                     <div class="d-flex align-items-center gap-1">
                                                                                          <img src="assets/Backend/images/users/avatar-7.jpg" alt="" class="avatar-sm rounded-circle">
                                                                                          <div class="d-block">
                                                                                               <h5 class="mb-0">Kevin C. Reyes</h5>
                                                                                          </div>
                                                                                     </div>
                                                                                </td>
                                                                                <td><span class="badge bg-success-subtle text-success py-1 px-2">Verified</span></td>
                                                                           </tr>
                                                                           <tr>
                                                                                <td>3-128-2</td>
                                                                                <td>Brookfield Asset Management</td>
                                                                                <td>
                                                                                     <div class="d-flex align-items-center gap-1">
                                                                                          <img src="assets/Backend/images/users/avatar-6.jpg" alt="" class="avatar-sm rounded-circle">
                                                                                          <div class="d-block">
                                                                                               <h5 class="mb-0">Mary J. Germain</h5>
                                                                                          </div>
                                                                                     </div>
                                                                                </td>
                                                                                <td><span class="badge bg-warning-subtle text-warning py-1 px-2">Pending</span></td>
                                                                           </tr>
                                                                           <tr>
                                                                                <td>3-128-1</td>
                                                                                <td>Westfield Asset Management</td>
                                                                                <td>
                                                                                     <div class="d-flex align-items-center gap-1">
                                                                                          <img src="assets/Backend/images/users/avatar-8.jpg" alt="" class="avatar-sm rounded-circle">
                                                                                          <div class="d-block">
                                                                                               <h5 class="mb-0">Charlotte J. Torres
                                                                                               </h5>
                                                                                          </div>
                                                                                     </div>
                                                                                </td>
                                                                                <td><span class="badge bg-danger-subtle text-danger py-1 px-2">Rejected</span></td>
                                                                           </tr>
                                                                      </tbody>
                                                                 </table>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <td>F-011221/19</td>
                                                            <td>$ 93.250</td>
                                                            <td>9/05/2023</td>
                                                            <td>10/05/2023</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-bordered table-striped table-centered&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Invoice Number&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Invoice Amount&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Confirmation by the client&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Planned payment date&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;F-011221/21&lt;/td&gt;
                                                                           &lt;td&gt;$ 879.500&lt;/td&gt;
                                                                           &lt;td&gt;11/05/2023&lt;/td&gt;
                                                                           &lt;td&gt;12/05/2023&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td colspan=&quot;4&quot;&gt;
                                                                                &lt;table class=&quot;table mb-0&quot;&gt;
                                                                                     &lt;thead&gt;
                                                                                          &lt;tr&gt;
                                                                                               &lt;th scope=&quot;col&quot;&gt;ERP number&lt;/th&gt;
                                                                                               &lt;th scope=&quot;col&quot;&gt;Carrier legal entity&lt;/th&gt;
                                                                                               &lt;th scope=&quot;col&quot;&gt;Responsible logistician&lt;/th&gt;
                                                                                               &lt;th scope=&quot;col&quot;&gt;Status&lt;/th&gt;
                                                                                          &lt;/tr&gt;
                                                                                     &lt;/thead&gt;
                                                                                     &lt;tbody&gt;
                                                                                          &lt;tr&gt;
                                                                                               &lt;td&gt;3-128-3&lt;/td&gt;
                                                                                               &lt;td&gt;ToBrookfield Asset Management&lt;/td&gt;
                                                                                               &lt;td&gt;
                                                                                                    &lt;div class=&quot;d-flex align-items-center gap-1&quot;&gt;
                                                                                                         &lt;img src=&quot;assets/Backend/images/users/avatar-7.jpg&quot; alt=&quot;&quot; class=&quot;avatar-sm rounded-circle&quot;&gt;
                                                                                                         &lt;div class=&quot;d-block&quot;&gt;
                                                                                                              &lt;h5 class=&quot;mb-0&quot;&gt;Kevin C. Reyes&lt;/h5&gt;
                                                                                                         &lt;/div&gt;
                                                                                                    &lt;/div&gt;
                                                                                               &lt;/td&gt;
                                                                                               &lt;td&gt;&lt;span class=&quot;badge bg-success-subtle text-success py-1 px-2&quot;&gt;Verified&lt;/span&gt;&lt;/td&gt;
                                                                                          &lt;/tr&gt;
                                                                                          &lt;tr&gt;
                                                                                               &lt;td&gt;3-128-2&lt;/td&gt;
                                                                                               &lt;td&gt;Brookfield Asset Management&lt;/td&gt;
                                                                                               &lt;td&gt;
                                                                                                    &lt;div class=&quot;d-flex align-items-center gap-1&quot;&gt;
                                                                                                         &lt;img src=&quot;assets/Backend/images/users/avatar-6.jpg&quot; alt=&quot;&quot; class=&quot;avatar-sm rounded-circle&quot;&gt;
                                                                                                         &lt;div class=&quot;d-block&quot;&gt;
                                                                                                              &lt;h5 class=&quot;mb-0&quot;&gt;Mary J. Germain&lt;/h5&gt;
                                                                                                         &lt;/div&gt;
                                                                                                    &lt;/div&gt;
                                                                                               &lt;/td&gt;
                                                                                               &lt;td&gt;&lt;span class=&quot;badge bg-warning-subtle text-warning py-1 px-2&quot;&gt;Pending&lt;/span&gt;&lt;/td&gt;
                                                                                          &lt;/tr&gt;
                                                                                          &lt;tr&gt;
                                                                                               &lt;td&gt;3-128-1&lt;/td&gt;
                                                                                               &lt;td&gt;Westfield Asset Management&lt;/td&gt;
                                                                                               &lt;td&gt;
                                                                                                    &lt;div class=&quot;d-flex align-items-center gap-1&quot;&gt;
                                                                                                         &lt;img src=&quot;assets/Backend/images/users/avatar-8.jpg&quot; alt=&quot;&quot; class=&quot;avatar-sm rounded-circle&quot;&gt;
                                                                                                         &lt;div class=&quot;d-block&quot;&gt;
                                                                                                              &lt;h5 class=&quot;mb-0&quot;&gt;Charlotte J. Torres
                                                                                                              &lt;/h5&gt;
                                                                                                         &lt;/div&gt;
                                                                                                    &lt;/div&gt;
                                                                                               &lt;/td&gt;
                                                                                               &lt;td&gt;&lt;span class=&quot;badge bg-danger-subtle text-danger py-1 px-2&quot;&gt;Rejected&lt;/span&gt;&lt;/td&gt;
                                                                                          &lt;/tr&gt;
                                                                                     &lt;/tbody&gt;
                                                                                &lt;/table&gt;
                                                                           &lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;F-011221/19&lt;/td&gt;
                                                                           &lt;td&gt;$ 93.250&lt;/td&gt;
                                                                           &lt;td&gt;9/05/2023&lt;/td&gt;
                                                                           &lt;td&gt;10/05/2023&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>
                              </div> <!-- end card body -->
                         </div> <!-- end col -->

                         <div class="col-xl-3">
                              <div class="card docs-nav">
                                   <ul class="nav bg-transparent flex-column">
                                        <li class="nav-item">
                                             <a href="#basic" class="nav-link">Basic Example </a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="#inverse" class="nav-link">Inverse Table </a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="#striped" class="nav-link">Striped Rows Table </a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="#hoverable-row" class="nav-link">Hoverable rows </a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="#active" class="nav-link">Active Table </a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="#bordered" class="nav-link">Bordered Table </a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="#border-color" class="nav-link">Bordered color Table </a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="#borderless" class="nav-link">Basic Borderless Example </a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="#small" class="nav-link">Small Table </a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="#alignment " class="nav-link">Alignment Table </a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="#nesting" class="nav-link">Nesting Table </a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="#head-option" class="nav-link">Table head options </a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="#tablefoot" class="nav-link">Tablefoot</a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="#captions" class="nav-link">Captions</a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="#responsive" class="nav-link">Always Responsive Table </a>
                                        </li>

                                   </ul>
                              </div>
                         </div>
                    </div> <!-- end row -->
               </div>
               <!-- End Container Fluid -->

               <!-- ==================================================== -->
               <!-- End Page Content -->
               <!-- ==================================================== -->

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

     </div>
     <!-- END Wrapper -->

     <!-- Vendor Javascript (Require in all Page) -->
     <script src="assets/Backend/js/vendor.js"></script>

     <!-- App Javascript (Require in all Page) -->
     <script src="assets/Backend/js/app.js"></script>

</body>


<!-- Mirrored from techzaa.getappui.com/larkon/admin/tables-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Sep 2024 06:08:17 GMT -->
</html>
