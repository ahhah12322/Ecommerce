<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from techzaa.getappui.com/larkon/admin/widgets.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Sep 2024 06:08:00 GMT -->
<head>
     <!-- Title Meta -->
     <meta charset="utf-8" />
     <title>Widgets | Larkon - Responsive Admin Dashboard Template</title>
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
                                   <h4 class="fw-bold topbar-button pe-none text-uppercase mb-0">Widgets</h4>
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
               <div class="container-xxl">

                    <!-- Start here.... -->

                    <div class="row">
                         <div class="col-md-3">
                              <div class="card overflow-hidden">
                                   <div class="card-body">
                                        <div class="row">
                                             <div class="col-6">
                                                  <div class="avatar-md bg-soft-primary rounded">
                                                       <iconify-icon icon="solar:cart-5-bold-duotone" class="avatar-title fs-32 text-primary"></iconify-icon>
                                                  </div>
                                             </div> <!-- end col -->
                                             <div class="col-6 text-end">
                                                  <p class="text-muted mb-0 text-truncate">Total Orders</p>
                                                  <h3 class="text-dark mt-1 mb-0">13, 647</h3>
                                             </div> <!-- end col -->
                                        </div> <!-- end row-->
                                   </div> <!-- end card body -->
                                   <div class="card-footer py-2 bg-light bg-opacity-50">
                                        <div class="d-flex align-items-center justify-content-between">
                                             <div>
                                                  <span class="text-success"> <i class="bx bxs-up-arrow fs-12"></i> 2.3%</span>
                                                  <span class="text-muted ms-1 fs-12">Last Week</span>
                                             </div>
                                             <a href="#!" class="text-reset fw-semibold fs-12">View More</a>
                                        </div>
                                   </div> <!-- end card body -->
                              </div> <!-- end card -->
                         </div> <!-- end col -->

                         <div class="col-md-3">
                              <div class="card overflow-hidden">
                                   <div class="card-body">
                                        <div class="row">
                                             <div class="col-6">
                                                  <div class="avatar-md bg-soft-primary rounded">
                                                       <i class="bx bx-award avatar-title fs-24 text-primary"></i>
                                                  </div>
                                             </div> <!-- end col -->
                                             <div class="col-6 text-end">
                                                  <p class="text-muted mb-0 text-truncate">New Leads</p>
                                                  <h3 class="text-dark mt-1 mb-0">9, 526</h3>
                                             </div> <!-- end col -->
                                        </div> <!-- end row-->
                                   </div> <!-- end card body -->
                                   <div class="card-footer py-2 bg-light bg-opacity-50">
                                        <div class="d-flex align-items-center justify-content-between">
                                             <div>
                                                  <span class="text-success"> <i class="bx bxs-up-arrow fs-12"></i> 8.1%</span>
                                                  <span class="text-muted ms-1 fs-12">Last Month</span>
                                             </div>
                                             <a href="#!" class="text-reset fw-semibold fs-12">View More</a>
                                        </div>
                                   </div> <!-- end card body -->
                              </div> <!-- end card -->
                         </div> <!-- end col -->

                         <div class="col-md-3">
                              <div class="card overflow-hidden">
                                   <div class="card-body">
                                        <div class="row">
                                             <div class="col-6">
                                                  <div class="avatar-md bg-soft-primary rounded">
                                                       <i class="bx bxs-backpack avatar-title fs-24 text-primary"></i>
                                                  </div>
                                             </div> <!-- end col -->
                                             <div class="col-6 text-end">
                                                  <p class="text-muted mb-0 text-truncate">Deals</p>
                                                  <h3 class="text-dark mt-1 mb-0">976</h3>
                                             </div> <!-- end col -->
                                        </div> <!-- end row-->
                                   </div> <!-- end card body -->
                                   <div class="card-footer py-2 bg-light bg-opacity-50">
                                        <div class="d-flex align-items-center justify-content-between">
                                             <div>
                                                  <span class="text-danger"> <i class="bx bxs-down-arrow fs-12"></i> 0.3%</span>
                                                  <span class="text-muted ms-1 fs-12">Last Month</span>
                                             </div>
                                             <a href="#!" class="text-reset fw-semibold fs-12">View More</a>
                                        </div>
                                   </div> <!-- end card body -->
                              </div> <!-- end card -->
                         </div> <!-- end col -->

                         <div class="col-md-3">
                              <div class="card overflow-hidden">
                                   <div class="card-body">
                                        <div class="row">
                                             <div class="col-6">
                                                  <div class="avatar-md bg-soft-primary rounded">
                                                       <i class="bx bx-dollar-circle avatar-title text-primary fs-24"></i>
                                                  </div>
                                             </div> <!-- end col -->
                                             <div class="col-6 text-end">
                                                  <p class="text-muted mb-0 text-truncate">Booked Revenue</p>
                                                  <h3 class="text-dark mt-1 mb-0">$123.6k</h3>
                                             </div> <!-- end col -->
                                        </div> <!-- end row-->
                                   </div> <!-- end card body -->
                                   <div class="card-footer py-2 bg-light bg-opacity-50">
                                        <div class="d-flex align-items-center justify-content-between">
                                             <div>
                                                  <span class="text-danger"> <i class="bx bxs-down-arrow fs-12"></i> 10.6%</span>
                                                  <span class="text-muted ms-1 fs-12">Last Month</span>
                                             </div>
                                             <a href="#!" class="text-reset fw-semibold fs-12">View More</a>
                                        </div>
                                   </div> <!-- end card body -->
                              </div> <!-- end card -->
                         </div> <!-- end col -->
                    </div> <!-- end row -->

                    <div class="row">
                         <div class="col">
                              <div class="card">
                                   <div class="card-body overflow-hidden position-relative">
                                        <iconify-icon icon="iconamoon:3d-duotone" class="fs-36 text-info"></iconify-icon>
                                        <h3 class="mb-0 fw-bold mt-3 mb-1">$59.6k</h3>
                                        <p class="text-muted">Total Income</p>
                                        <span class="badge fs-12 badge-soft-success"><i class="ti ti-arrow-badge-up"></i> 8.72%</span>
                                        <i class='bx bx-doughnut-chart widget-icon'></i>
                                   </div> <!-- end card-body -->
                              </div> <!-- end card -->
                         </div> <!-- end col -->

                         <div class="col">
                              <div class="card">
                                   <div class="card-body overflow-hidden position-relative">
                                        <iconify-icon icon="iconamoon:category-duotone" class="fs-36 text-success"></iconify-icon>
                                        <h3 class="mb-0 fw-bold mt-3 mb-1">$24.03k</h3>
                                        <p class="text-muted">Total Expenses</p>
                                        <span class="badge fs-12 badge-soft-danger"><i class="ti ti-arrow-badge-down"></i> 3.28%</span>
                                        <i class='bx bx-bar-chart-alt-2 widget-icon'></i>
                                   </div> <!-- end card-body -->
                              </div> <!-- end card -->
                         </div> <!-- end col -->

                         <div class="col">
                              <div class="card">
                                   <div class="card-body overflow-hidden position-relative">
                                        <iconify-icon icon="iconamoon:store-duotone" class="fs-36 text-purple"></iconify-icon>
                                        <h3 class="mb-0 fw-bold mt-3 mb-1">$48.7k</h3>
                                        <p class="text-muted">Investments</p>
                                        <span class="badge fs-12 badge-soft-danger"><i class="ti ti-arrow-badge-down"></i> 5.69%</span>
                                        <i class='bx bx-building-house widget-icon'></i>
                                   </div> <!-- end card-body -->
                              </div> <!-- end card -->
                         </div> <!-- end col -->

                         <div class="col">
                              <div class="card">
                                   <div class="card-body overflow-hidden position-relative">
                                        <iconify-icon icon="iconamoon:gift-duotone" class="fs-36 text-orange"></iconify-icon>
                                        <h3 class="mb-0 fw-bold mt-3 mb-1">$11.3k</h3>
                                        <p class="text-muted">Savings</p>
                                        <span class="badge fs-12 badge-soft-success"><i class="ti ti-arrow-badge-up"></i> 10.58%</span>
                                        <i class='bx bx-bowl-hot widget-icon'></i>
                                   </div> <!-- end card-body -->
                              </div> <!-- end card -->
                         </div> <!-- end col -->

                         <div class="col">
                              <div class="card">
                                   <div class="card-body overflow-hidden position-relative">
                                        <iconify-icon icon="iconamoon:certificate-badge-duotone" class="fs-36 text-warning"></iconify-icon>
                                        <h3 class="mb-0 fw-bold mt-3 mb-1">$5.5k</h3>
                                        <p class="text-muted">Profits</p>
                                        <span class="badge fs-12 badge-soft-success"><i class="ti ti-arrow-badge-up"></i> 2.25%</span>
                                        <i class='bx bx-cricket-ball widget-icon'></i>
                                   </div> <!-- end card-body -->
                              </div> <!-- end card -->
                         </div> <!-- end col -->
                    </div>
                    <!-- end row-->

                    <div class="row">
                         <div class="col-xl-6">
                              <div class="card">
                                   <div class="card-body p-0">
                                        <div class="pt-3 px-3">
                                             <div class="float-end">
                                                  <a href="javascript:void(0);" class="text-primary">Export
                                                       <i class="bx bx-export ms-1"></i>
                                                  </a>
                                             </div>
                                             <h5 class="card-title mb-3">Recent Project Summary</h5>
                                        </div>
                                        <div class="mb-3" data-simplebar style="max-height: 324px;">
                                             <div class="table-responsive table-centered table-nowrap px-3">
                                                  <table class="table table-hover mb-0">
                                                       <thead>
                                                            <tr>
                                                                 <th>Project</th>
                                                                 <th>Client</th>
                                                                 <th>Team</th>
                                                                 <th>Deadline</th>
                                                                 <th>Work Progress</th>
                                                            </tr>
                                                       </thead> <!-- end thead -->
                                                       <tbody>
                                                            <tr>
                                                                 <td>Zelogy</td>
                                                                 <td>Daniel Olsen</td>
                                                                 <td class="avatar-group">
                                                                      <a href="javascript:void(0);" class="avatar-group-item">
                                                                           <img src="assets/Backend/images/users/avatar-2.jpg" alt="avatar-2" class="img-fluid avatar-xs rounded-circle avatar-border" />
                                                                      </a>
                                                                      <a href="javascript:void(0);" class="avatar-group-item">
                                                                           <img src="assets/Backend/images/users/avatar-3.jpg" alt="avatar-3" class="img-fluid avatar-xs rounded-circle avatar-border" />
                                                                      </a>
                                                                      <a href="javascript:void(0);" class="avatar-group-item">
                                                                           <img src="assets/Backend/images/users/avatar-4.jpg" alt="avatar-4" class="img-fluid avatar-xs rounded-circle avatar-border" />
                                                                      </a>
                                                                 </td>
                                                                 <td>12 April 2024</td>
                                                                 <td>
                                                                      <div class="progress progress-sm">
                                                                           <div class="progress-bar" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                                                      </div>
                                                                 </td>
                                                            </tr>

                                                            <tr>
                                                                 <td>Shiaz</td>
                                                                 <td>Jack Roldan</td>
                                                                 <td class="avatar-group">
                                                                      <a href="javascript:void(0);" class="avatar-group-item">
                                                                           <img src="assets/Backend/images/users/avatar-1.jpg" alt="avatar-1" class="img-fluid avatar-xs rounded-circle avatar-border" />
                                                                      </a>
                                                                      <a href="javascript:void(0);" class="avatar-group-item">
                                                                           <img src="assets/Backend/images/users/avatar-5.jpg" alt="avatar-5" class="img-fluid avatar-xs rounded-circle avatar-border" />
                                                                      </a>
                                                                 </td>
                                                                 <td>10 April 2024</td>
                                                                 <td>
                                                                      <div class="progress progress-sm">
                                                                           <div class="progress-bar bg-success" role="progressbar" style="width: 74%" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
                                                                      </div>
                                                                 </td>
                                                            </tr>
                                                            <tr>
                                                                 <td>Holderick</td>
                                                                 <td>Betty Cox</td>
                                                                 <td class="avatar-group">
                                                                      <a href="javascript:void(0);" class="avatar-group-item">
                                                                           <img src="assets/Backend/images/users/avatar-5.jpg" alt="avatar-5" class="img-fluid avatar-xs rounded-circle avatar-border" />
                                                                      </a>
                                                                      <a href="javascript:void(0);" class="avatar-group-item">
                                                                           <img src="assets/Backend/images/users/avatar-2.jpg" alt="avatar-2" class="img-fluid avatar-xs rounded-circle avatar-border" />
                                                                      </a>
                                                                      <a href="javascript:void(0);" class="avatar-group-item">
                                                                           <img src="assets/Backend/images/users/avatar-3.jpg" alt="avatar-3" class="img-fluid avatar-xs rounded-circle avatar-border" />
                                                                      </a>
                                                                 </td>
                                                                 <td>31 March 2024</td>
                                                                 <td>
                                                                      <div class="progress progress-sm">
                                                                           <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                      </div>
                                                                 </td>
                                                            </tr>
                                                            <tr>
                                                                 <td>Feyvux</td>
                                                                 <td>Carlos Johnson</td>
                                                                 <td class="avatar-group">
                                                                      <a href="javascript:void(0);" class="avatar-group-item">
                                                                           <img src="assets/Backend/images/users/avatar-3.jpg" alt="avatar-3" class="img-fluid avatar-xs rounded-circle avatar-border" />
                                                                      </a>
                                                                      <a href="javascript:void(0);" class="avatar-group-item">
                                                                           <img src="assets/Backend/images/users/avatar-7.jpg" alt="avatar-7" class="img-fluid avatar-xs rounded-circle avatar-border" />
                                                                      </a>
                                                                      <a href="javascript:void(0);" class="avatar-group-item">
                                                                           <img src="assets/Backend/images/users/avatar-6.jpg" alt="avatar-6" class="img-fluid avatar-xs rounded-circle avatar-border" />
                                                                      </a>
                                                                 </td>
                                                                 <td>25 March 2024</td>
                                                                 <td>
                                                                      <div class="progress progress-sm">
                                                                           <div class="progress-bar" role="progressbar" style="width: 92%" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100">
                                                                           </div>
                                                                      </div>
                                                                 </td>
                                                            </tr>
                                                            <tr>
                                                                 <td>Xavlox</td>
                                                                 <td>Lorraine Cox</td>
                                                                 <td class="avatar-group">
                                                                      <a href="javascript:void(0);" class="avatar-group-item">
                                                                           <img src="assets/Backend/images/users/avatar-7.jpg" alt="avatar-7" class="img-fluid avatar-xs rounded-circle avatar-border" />
                                                                      </a>
                                                                 </td>
                                                                 <td>22 March 2024</td>
                                                                 <td>
                                                                      <div class="progress progress-sm">
                                                                           <div class="progress-bar bg-danger" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100"></div>
                                                                      </div>
                                                                 </td>
                                                            </tr>
                                                            <tr>
                                                                 <td>Mozacav</td>
                                                                 <td>Delores Young</td>
                                                                 <td class="avatar-group">
                                                                      <a href="javascript:void(0);" class="avatar-group-item">
                                                                           <img src="assets/Backend/images/users/avatar-3.jpg" alt="avatar-3" class="img-fluid avatar-xs rounded-circle avatar-border" />
                                                                      </a>
                                                                      <a href="javascript:void(0);" class="avatar-group-item">
                                                                           <img src="assets/Backend/images/users/avatar-4.jpg" alt="avatar-4" class="img-fluid avatar-xs rounded-circle avatar-border" />
                                                                      </a>
                                                                      <a href="javascript:void(0);" class="avatar-group-item">
                                                                           <img src="assets/Backend/images/users/avatar-2.jpg" alt="avatar-2" class="img-fluid avatar-xs rounded-circle avatar-border" />
                                                                      </a>
                                                                 </td>
                                                                 <td>15 March 2024</td>
                                                                 <td>
                                                                      <div class="progress progress-sm">
                                                                           <div class="progress-bar bg-blue" role="progressbar" style="width: 21%" aria-valuenow="21" aria-valuemin="0" aria-valuemax="100"></div>
                                                                      </div>
                                                                 </td>
                                                            </tr>
                                                       </tbody> <!-- end tbody -->
                                                  </table> <!-- end table -->
                                             </div> <!-- end table responsive -->
                                        </div>
                                   </div> <!-- end card body -->
                              </div> <!-- end card -->
                         </div> <!-- end col -->
                         <div class="col-xl-6">
                              <div class="card">
                                   <div class="card-body ">
                                        <div class="dropdown float-end">
                                             <a href="javascript:void(0);" class="dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                                  <i class="bx bx-dots-vertical-rounded fs-18 text-dark"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-end">
                                                  <a href="javascript:void(0);" class="dropdown-item">
                                                       <i class="bx bx-list-ul me-2"></i>To Do
                                                  </a>
                                                  <a href="javascript:void(0);" class="dropdown-item">
                                                       <i class="bx bx-line-chart me-2"></i>In Progress
                                                  </a>
                                                  <a href="javascript:void(0);" class="dropdown-item">
                                                       <i class="bx bx-check-square me-2"></i>Completed
                                                  </a>
                                             </div>
                                        </div>
                                        <h5 class="card-title mb-3">Today's Schedules</h5>
                                        <div class="row align-items-center">
                                             <div class="col-3 col-sm-2">
                                                  <p>09:00</p>
                                             </div>
                                             <div class="col-9 col-sm-10">
                                                  <div class="alert alert-primary px-2" role="alert">
                                                       <p class="mb-0">Setup Github Repository</p>
                                                       <p class="mb-0">09:00 - 10:00</p>
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="row align-items-center">
                                             <div class="col-3 col-sm-2">
                                                  <p>10:00</p>
                                             </div>
                                             <div class="col-9 col-sm-10">
                                                  <div class="alert alert-success px-2" role="alert">
                                                       <p class="mb-0">Design Review - Larkon Admin</p>
                                                       <p class="mb-0">10:00 - 10:30</p>
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="row align-items-center">
                                             <div class="col-3 col-sm-2">
                                                  <p>11:00</p>
                                             </div>
                                             <div class="col-9 col-sm-10">
                                                  <div class="alert alert-info px-2" role="alert">
                                                       <p class="mb-0">Meeting with BD Team</p>
                                                       <p class="mb-0">11:00 - 12:30</p>
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="row align-items-center">
                                             <div class="col-3 col-sm-2">
                                                  <p class="mb-0">01:00</p>
                                             </div>
                                             <div class="col-9 col-sm-10">
                                                  <div class="alert alert-warning px-2 mb-0" role="alert">
                                                       <p class="mb-0">Meeting with Design Studio</p>
                                                       <p class="mb-0">01:00 - 02:00</p>
                                                  </div>
                                             </div>
                                        </div>
                                   </div> <!-- end card body -->
                              </div> <!-- end card -->
                         </div> <!-- end col -->
                    </div> <!-- end row -->

                    <div class="row">
                         <div class="col-md-6 col-xl-3">
                              <div class="card">
                                   <div class="card-body">
                                        <div class="row">
                                             <div class="col-6">
                                                  <div class="avatar-md bg-primary rounded">
                                                       <i class="bx bx-layer avatar-title fs-24 text-white"></i>
                                                  </div>
                                             </div> <!-- end col -->
                                             <div class="col-6 text-end">
                                                  <p class="text-muted mb-0 text-truncate">Campaign Sent</p>
                                                  <h3 class="text-dark mt-1 mb-0">13, 647</h3>
                                             </div> <!-- end col -->
                                        </div> <!-- end row-->
                                   </div> <!-- end card body -->
                              </div> <!-- end card -->
                         </div> <!-- end col -->
                         <div class="col-md-6 col-xl-3">
                              <div class="card">
                                   <div class="card-body">
                                        <div class="row">
                                             <div class="col-6">
                                                  <div class="avatar-md bg-success rounded">
                                                       <i class="bx bx-award avatar-title fs-24 text-white"></i>
                                                  </div>
                                             </div> <!-- end col -->
                                             <div class="col-6 text-end">
                                                  <p class="text-muted mb-0 text-truncate">New Leads</p>
                                                  <h3 class="text-dark mt-1 mb-0">9, 526</h3>
                                             </div> <!-- end col -->
                                        </div> <!-- end row-->
                                   </div> <!-- end card body -->
                              </div> <!-- end card -->
                         </div> <!-- end col -->
                         <div class="col-md-6 col-xl-3">
                              <div class="card">
                                   <div class="card-body">
                                        <div class="row">
                                             <div class="col-6">
                                                  <div class="avatar-md bg-danger rounded">
                                                       <i class="bx bxs-backpack avatar-title fs-24 text-white"></i>
                                                  </div>
                                             </div> <!-- end col -->
                                             <div class="col-6 text-end">
                                                  <p class="text-muted mb-0 text-truncate">Deals</p>
                                                  <h3 class="text-dark mt-1 mb-0">976</h3>
                                             </div> <!-- end col -->
                                        </div> <!-- end row-->
                                   </div> <!-- end card body -->
                              </div> <!-- end card -->
                         </div> <!-- end col -->
                         <div class="col-md-6 col-xl-3">
                              <div class="card">
                                   <div class="card-body">
                                        <div class="row">
                                             <div class="col-6">
                                                  <div class="avatar-md text-bg-warning rounded">
                                                       <i class="bx bx-dollar-circle avatar-title fs-24"></i>
                                                  </div>
                                             </div> <!-- end col -->
                                             <div class="col-6 text-end">
                                                  <p class="text-muted mb-0 text-truncate">Booked Revenue</p>
                                                  <h3 class="text-dark mt-1 mb-0">$123</h3>
                                             </div> <!-- end col -->
                                        </div> <!-- end row-->
                                   </div> <!-- end card body -->
                              </div> <!-- end card -->
                         </div> <!-- end col -->
                    </div> <!-- end row -->

                    <div class="row">
                         <div class="col-12">
                              <div class="card">
                                   <div class="card-body p-0">
                                        <div class="row g-0">
                                             <div class="col-lg-4">
                                                  <div class="p-3">
                                                       <h5 class="card-title">Conversions</h5>
                                                       <div id="conversions" class="apex-charts mb-2 mt-n2"></div>
                                                       <div class="row text-center">
                                                            <div class="col-6">
                                                                 <p class="text-muted mb-2">This Week</p>
                                                                 <h3 class="text-dark mb-3">23.5k</h3>
                                                            </div> <!-- end col -->
                                                            <div class="col-6">
                                                                 <p class="text-muted mb-2">Last Week</p>
                                                                 <h3 class="text-dark mb-3">41.05k</h3>
                                                            </div> <!-- end col -->
                                                       </div> <!-- end row -->
                                                       <div class="text-center">
                                                            <button type="button" class="btn btn-light shadow-none w-100">View Details</button>
                                                       </div> <!-- end row -->
                                                  </div>
                                             </div> <!-- end left chart card -->
                                             <div class="col-lg-8 border-start border-5">
                                                  <div class="p-3">
                                                       <div class="d-flex justify-content-between align-items-center">
                                                            <h4 class="card-title">Performance</h4>
                                                            <div>
                                                                 <button type="button" class="btn btn-sm btn-outline-light">ALL</button>
                                                                 <button type="button" class="btn btn-sm btn-outline-light">1M</button>
                                                                 <button type="button" class="btn btn-sm btn-outline-light">6M</button>
                                                                 <button type="button" class="btn btn-sm btn-outline-light active">1Y</button>
                                                            </div>
                                                       </div> <!-- end card-title-->

                                                       <div class="alert alert-info mt-3 text text-truncate mb-0" role="alert">
                                                            We regret to inform you that our server is currently experiencing technical difficulties.
                                                       </div>

                                                       <div dir="ltr">
                                                            <div id="dash-performance-chart" class="apex-charts"></div>
                                                       </div>
                                                  </div>
                                             </div> <!-- end right chart card -->
                                        </div> <!-- end chart card -->
                                   </div> <!-- end card body -->
                              </div> <!-- end card -->
                         </div> <!-- end col-->
                    </div> <!-- end row-->

                    <div class="row">
                         <div class="col-md-6 col-xl-3">
                              <div class="card">
                                   <div class="card-body">
                                        <div class="row">
                                             <div class="col-6">
                                                  <div class="avatar-md bg-soft-primary rounded">
                                                       <i class="bx bx-layer avatar-title fs-24 text-primary"></i>
                                                  </div>
                                             </div> <!-- end col -->
                                             <div class="col-6 text-end">
                                                  <p class="text-muted mb-0 text-truncate">Campaign Sent</p>
                                                  <h3 class="text-dark mt-1 mb-0">13, 647</h3>
                                             </div> <!-- end col -->
                                        </div> <!-- end row-->
                                   </div> <!-- end card body -->
                                   <div class="card-footer py-2 bg-light bg-opacity-50">
                                        <div class="d-flex align-items-center justify-content-between">
                                             <div>
                                                  <span class="text-success"> <i class="bx bxs-up-arrow fs-12"></i> 2.3%</span>
                                                  <span class="text-muted ms-1 fs-12">Last Month</span>
                                             </div>
                                             <a href="#!" class="text-reset fw-semibold fs-12">View More</a>
                                        </div>
                                   </div> <!-- end card body -->
                              </div> <!-- end card -->
                         </div> <!-- end col -->
                         <div class="col-md-6 col-xl-3">
                              <div class="card">
                                   <div class="card-body">
                                        <div class="row">
                                             <div class="col-6">
                                                  <div class="avatar-md bg-soft-success rounded">
                                                       <i class="bx bx-award avatar-title fs-24 text-success"></i>
                                                  </div>
                                             </div> <!-- end col -->
                                             <div class="col-6 text-end">
                                                  <p class="text-muted mb-0 text-truncate">New Leads</p>
                                                  <h3 class="text-dark mt-1 mb-0">9, 526</h3>
                                             </div> <!-- end col -->
                                        </div> <!-- end row-->
                                   </div> <!-- end card body -->
                                   <div class="card-footer py-2 bg-light bg-opacity-50">
                                        <div class="d-flex align-items-center justify-content-between">
                                             <div>
                                                  <span class="text-success"> <i class="bx bxs-up-arrow fs-12"></i> 8.1%</span>
                                                  <span class="text-muted ms-1 fs-12">Last Month</span>
                                             </div>
                                             <a href="#!" class="text-reset fw-semibold fs-12">View More</a>
                                        </div>
                                   </div> <!-- end card body -->
                              </div> <!-- end card -->
                         </div> <!-- end col -->
                         <div class="col-md-6 col-xl-3">
                              <div class="card">
                                   <div class="card-body">
                                        <div class="row">
                                             <div class="col-6">
                                                  <div class="avatar-md bg-soft-danger rounded">
                                                       <i class="bx bxs-backpack avatar-title fs-24 text-danger"></i>
                                                  </div>
                                             </div> <!-- end col -->
                                             <div class="col-6 text-end">
                                                  <p class="text-muted mb-0 text-truncate">Deals</p>
                                                  <h3 class="text-dark mt-1 mb-0">976</h3>
                                             </div> <!-- end col -->
                                        </div> <!-- end row-->
                                   </div> <!-- end card body -->
                                   <div class="card-footer py-2 bg-light bg-opacity-50">
                                        <div class="d-flex align-items-center justify-content-between">
                                             <div>
                                                  <span class="text-danger"> <i class="bx bxs-down-arrow fs-12"></i> 0.3%</span>
                                                  <span class="text-muted ms-1 fs-12">Last Month</span>
                                             </div>
                                             <a href="#!" class="text-reset fw-semibold fs-12">View More</a>
                                        </div>
                                   </div> <!-- end card body -->
                              </div> <!-- end card -->
                         </div> <!-- end col -->
                         <div class="col-md-6 col-xl-3">
                              <div class="card">
                                   <div class="card-body">
                                        <div class="row">
                                             <div class="col-6">
                                                  <div class="avatar-md bg-soft-warning rounded">
                                                       <i class="bx bx-dollar-circle avatar-title text-warning fs-24"></i>
                                                  </div>
                                             </div> <!-- end col -->
                                             <div class="col-6 text-end">
                                                  <p class="text-muted mb-0 text-truncate">Booked Revenue</p>
                                                  <h3 class="text-dark mt-1 mb-0">$123.6k</h3>
                                             </div> <!-- end col -->
                                        </div> <!-- end row-->
                                   </div> <!-- end card body -->
                                   <div class="card-footer py-2 bg-light bg-opacity-50">
                                        <div class="d-flex align-items-center justify-content-between">
                                             <div>
                                                  <span class="text-danger"> <i class="bx bxs-down-arrow fs-12"></i> 10.6%</span>
                                                  <span class="text-muted ms-1 fs-12">Last Month</span>
                                             </div>
                                             <a href="#!" class="text-reset fw-semibold fs-12">View More</a>
                                        </div>
                                   </div> <!-- end card body -->
                              </div> <!-- end card -->
                         </div> <!-- end col -->
                    </div> <!-- end row -->

                    <div class="row">
                         <div class="col-xl-4">
                              <div class="card">
                                   <div class="card-header d-flex justify-content-between align-items-center">
                                        <h4 class="card-title">My Tasks</h4>
                                        <div>
                                             <a href="#!" class="btn btn-sm btn-primary">
                                                  <i class="bx bx-plus me-1"></i>Create Task
                                             </a>
                                        </div>
                                   </div> <!-- end card-header-->
                                   <div class="card-body p-0 pb-3">
                                        <div class="p-3" data-simplebar style="max-height: 386px;">
                                             <div class="form-check form-todo ps-4">
                                                  <input type="checkbox" class="form-check-input rounded-circle mt-0 fs-18" id="customCheck1">
                                                  <label class="form-check-label" for="customCheck1">Review system logs for any reported errors</label>
                                             </div>
                                             <div class="form-check form-todo py-1 my-2 ps-4">
                                                  <input type="checkbox" class="form-check-input rounded-circle mt-0 fs-18" checked id="customCheck2">
                                                  <label class="form-check-label" for="customCheck2">Conduct user testing to identify potential bugs</label>
                                             </div>
                                             <div class="form-check form-todo py-1 my-2 ps-4">
                                                  <input type="checkbox" class="form-check-input rounded-circle mt-0 fs-18" id="customCheck3">
                                                  <label class="form-check-label" for="customCheck3">Gather feedback from stakeholders</label>
                                             </div>
                                             <div class="form-check form-todo py-1 my-2 ps-4">
                                                  <input type="checkbox" class="form-check-input rounded-circle mt-0 fs-18" id="customCheck4">
                                                  <label class="form-check-label" for="customCheck4">Prioritize bugs based on severity and impact </label>
                                             </div>
                                             <div class="form-check form-todo py-1 my-2 ps-4">
                                                  <input type="checkbox" class="form-check-input rounded-circle mt-0 fs-18" id="customCheck5">
                                                  <label class="form-check-label" for="customCheck5">Investigate and analyze the root cause of each bug</label>
                                             </div>
                                             <div class="form-check form-todo py-1 my-2 ps-4">
                                                  <input type="checkbox" class="form-check-input rounded-circle mt-0 fs-18" id="customCheck6">
                                                  <label class="form-check-label" for="customCheck6">Develop and implement fixes for the identified bugs</label>
                                             </div>
                                             <div class="form-check form-todo py-1 my-2 ps-4">
                                                  <input type="checkbox" class="form-check-input rounded-circle mt-0 fs-18" id="customCheck7">
                                                  <label class="form-check-label" for="customCheck7">Complete any recurring tasks</label>
                                             </div>
                                             <div class="form-check form-todo py-1 my-2 ps-4">
                                                  <input type="checkbox" class="form-check-input rounded-circle mt-0 fs-18" id="customCheck8">
                                                  <label class="form-check-label" for="customCheck8">Check emails and respond</label>
                                             </div>
                                             <div class="form-check form-todo py-1 my-2 ps-4">
                                                  <input type="checkbox" class="form-check-input rounded-circle mt-0 fs-18" checked id="customCheck9">
                                                  <label class="form-check-label" for="customCheck9">Review schedule for the day</label>
                                             </div>
                                             <div class="form-check form-todo pt-1 mt-2 ps-4">
                                                  <input type="checkbox" class="form-check-input rounded-circle mt-0 fs-18" id="customCheck10">
                                                  <label class="form-check-label" for="customCheck10">Daily stand-up meeting</label>
                                             </div>
                                        </div>
                                   </div> <!-- end card body -->
                              </div> <!-- end card-->
                         </div> <!-- end col-->

                         <div class="col-xl-4">
                              <div class="card">
                                   <div class="card-header d-flex justify-content-between align-items-center">
                                        <h4 class="card-title">Friends Request (10)</h4>
                                   </div> <!-- end card-header-->
                                   <div class="card-body p-0 pb-3">
                                        <div class="p-3" data-simplebar style="max-height: 400px;">
                                             <div class="d-flex align-items-center mb-3">
                                                  <div class="flex-shrink-0">
                                                       <img src="assets/Backend/images/users/avatar-10.jpg" class="img-fluid avatar-sm rounded me-2" alt="avatar-5" />
                                                  </div>
                                                  <div class="flex-grow-1">
                                                       <h5 class="mb-1 fs-14"><a href="#!">Victoria P. Miller</a></h5>
                                                       <p class="mb-0">no mutual friends</p>
                                                  </div>
                                                  <div class="dropdown">
                                                       <a href="javascript:void(0);" class="dropdown-toggle arrow-none text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded fs-18"></i>
                                                       </a>
                                                       <div class="dropdown-menu dropdown-menu-end">
                                                            <a href="#!" class="dropdown-item">
                                                                 <i class="bx bxs-user-detail me-1"></i>See Profile
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bxl-telegram me-1"></i>Message to Victoria
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bx-user-x me-1"></i>Unfriend Victoria
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bx-block me-1"></i>Block Victoria
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="d-flex align-items-center mb-3">
                                                  <div class="flex-shrink-0">
                                                       <img src="assets/Backend/images/users/avatar-9.jpg" class="img-fluid avatar-sm rounded me-2" alt="avatar-6" />
                                                  </div>
                                                  <div class="flex-grow-1">
                                                       <h5 class="mb-1 fs-14"><a href="#!">Dallas C. Payne</a></h5>
                                                       <p class="mb-0">856 mutual friends</p>
                                                  </div>
                                                  <div class="dropdown">
                                                       <a href="javascript:void(0);" class="dropdown-toggle arrow-none text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded fs-18"></i>
                                                       </a>
                                                       <div class="dropdown-menu dropdown-menu-end">
                                                            <a href="#!" class="dropdown-item">
                                                                 <i class="bx bxs-user-detail me-1"></i>See Profile
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bxl-telegram me-1"></i>Message to Victoria
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bx-user-x me-1"></i>Unfriend Victoria
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bx-block me-1"></i>Block Victoria
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="d-flex align-items-center mb-3">
                                                  <div class="flex-shrink-0">
                                                       <img src="assets/Backend/images/users/avatar-8.jpg" class="img-fluid avatar-sm rounded me-2" alt="avatar-7" />
                                                  </div>
                                                  <div class="flex-grow-1">
                                                       <h5 class="mb-1 fs-14"><a href="#!">Florence A. Lopez</a></h5>
                                                       <p class="mb-0">52 mutual friends</p>
                                                  </div>
                                                  <div class="dropdown">
                                                       <a href="javascript:void(0);" class="dropdown-toggle arrow-none text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded fs-18"></i>
                                                       </a>
                                                       <div class="dropdown-menu dropdown-menu-end">
                                                            <a href="#!" class="dropdown-item">
                                                                 <i class="bx bxs-user-detail me-1"></i>See Profile
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bxl-telegram me-1"></i>Message to Victoria
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bx-user-x me-1"></i>Unfriend Victoria
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bx-block me-1"></i>Block Victoria
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="d-flex align-items-center mb-3">
                                                  <div class="flex-shrink-0">
                                                       <img src="assets/Backend/images/users/avatar-7.jpg" class="img-fluid avatar-sm rounded me-2" alt="avatar-8" />
                                                  </div>
                                                  <div class="flex-grow-1">
                                                       <h5 class="mb-1 fs-14"><a href="#!">Gail A. Nix</a></h5>
                                                       <p class="mb-0">12 mutual friends</p>
                                                  </div>
                                                  <div class="dropdown">
                                                       <a href="javascript:void(0);" class="dropdown-toggle arrow-none text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded fs-18"></i>
                                                       </a>
                                                       <div class="dropdown-menu dropdown-menu-end">
                                                            <a href="#!" class="dropdown-item">
                                                                 <i class="bx bxs-user-detail me-1"></i>See Profile
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bxl-telegram me-1"></i>Message to Victoria
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bx-user-x me-1"></i>Unfriend Victoria
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bx-block me-1"></i>Block Victoria
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="d-flex align-items-center mb-3">
                                                  <div class="flex-shrink-0">
                                                       <img src="assets/Backend/images/users/avatar-6.jpg" class="img-fluid avatar-sm rounded me-2" alt="avatar-9" />
                                                  </div>
                                                  <div class="flex-grow-1">
                                                       <h5 class="mb-1 fs-14"><a href="#!">Lynne J. Petty</a></h5>
                                                       <p class="mb-0">no mutual friends</p>
                                                  </div>
                                                  <div class="dropdown">
                                                       <a href="javascript:void(0);" class="dropdown-toggle arrow-none text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded fs-18"></i>
                                                       </a>
                                                       <div class="dropdown-menu dropdown-menu-end">
                                                            <a href="#!" class="dropdown-item">
                                                                 <i class="bx bxs-user-detail me-1"></i>See Profile
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bxl-telegram me-1"></i>Message to Victoria
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bx-user-x me-1"></i>Unfriend Victoria
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bx-block me-1"></i>Block Victoria
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>

                                             <div class="d-flex align-items-center mb-3">
                                                  <div class="flex-shrink-0">
                                                       <img src="assets/Backend/images/users/avatar-5.jpg" class="img-fluid avatar-sm rounded me-2" alt="avatar-5" />
                                                  </div>
                                                  <div class="flex-grow-1">
                                                       <h5 class="mb-1 fs-14"><a href="#!">Victoria P. Miller</a></h5>
                                                       <p class="mb-0">no mutual friends</p>
                                                  </div>
                                                  <div class="dropdown">
                                                       <a href="javascript:void(0);" class="dropdown-toggle arrow-none text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded fs-18"></i>
                                                       </a>
                                                       <div class="dropdown-menu dropdown-menu-end">
                                                            <a href="#!" class="dropdown-item">
                                                                 <i class="bx bxs-user-detail me-1"></i>See Profile
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bxl-telegram me-1"></i>Message to Victoria
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bx-user-x me-1"></i>Unfriend Victoria
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bx-block me-1"></i>Block Victoria
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="d-flex align-items-center mb-3">
                                                  <div class="flex-shrink-0">
                                                       <img src="assets/Backend/images/users/avatar-4.jpg" class="img-fluid avatar-sm rounded me-2" alt="avatar-6" />
                                                  </div>
                                                  <div class="flex-grow-1">
                                                       <h5 class="mb-1 fs-14"><a href="#!">Dallas C. Payne</a></h5>
                                                       <p class="mb-0">856 mutual friends</p>
                                                  </div>
                                                  <div class="dropdown">
                                                       <a href="javascript:void(0);" class="dropdown-toggle arrow-none text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded fs-18"></i>
                                                       </a>
                                                       <div class="dropdown-menu dropdown-menu-end">
                                                            <a href="#!" class="dropdown-item">
                                                                 <i class="bx bxs-user-detail me-1"></i>See Profile
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bxl-telegram me-1"></i>Message to Victoria
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bx-user-x me-1"></i>Unfriend Victoria
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bx-block me-1"></i>Block Victoria
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="d-flex align-items-center mb-3">
                                                  <div class="flex-shrink-0">
                                                       <img src="assets/Backend/images/users/avatar-3.jpg" class="img-fluid avatar-sm rounded me-2" alt="avatar-7" />
                                                  </div>
                                                  <div class="flex-grow-1">
                                                       <h5 class="mb-1 fs-14"><a href="#!">Florence A. Lopez</a></h5>
                                                       <p class="mb-0">52 mutual friends</p>
                                                  </div>
                                                  <div class="dropdown">
                                                       <a href="javascript:void(0);" class="dropdown-toggle arrow-none text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded fs-18"></i>
                                                       </a>
                                                       <div class="dropdown-menu dropdown-menu-end">
                                                            <a href="#!" class="dropdown-item">
                                                                 <i class="bx bxs-user-detail me-1"></i>See Profile
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bxl-telegram me-1"></i>Message to Victoria
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bx-user-x me-1"></i>Unfriend Victoria
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bx-block me-1"></i>Block Victoria
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="d-flex align-items-center mb-3">
                                                  <div class="flex-shrink-0">
                                                       <img src="assets/Backend/images/users/avatar-2.jpg" class="img-fluid avatar-sm rounded me-2" alt="avatar-8" />
                                                  </div>
                                                  <div class="flex-grow-1">
                                                       <h5 class="mb-1 fs-14"><a href="#!">Gail A. Nix</a></h5>
                                                       <p class="mb-0">12 mutual friends</p>
                                                  </div>
                                                  <div class="dropdown">
                                                       <a href="javascript:void(0);" class="dropdown-toggle arrow-none text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded fs-18"></i>
                                                       </a>
                                                       <div class="dropdown-menu dropdown-menu-end">
                                                            <a href="#!" class="dropdown-item">
                                                                 <i class="bx bxs-user-detail me-1"></i>See Profile
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bxl-telegram me-1"></i>Message to Victoria
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bx-user-x me-1"></i>Unfriend Victoria
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bx-block me-1"></i>Block Victoria
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="d-flex align-items-center">
                                                  <div class="flex-shrink-0">
                                                       <img src="assets/Backend/images/users/avatar-1.jpg" class="img-fluid avatar-sm rounded me-2" alt="avatar-9" />
                                                  </div>
                                                  <div class="flex-grow-1">
                                                       <h5 class="mb-1 fs-14"><a href="#!">Lynne J. Petty</a></h5>
                                                       <p class="mb-0">no mutual friends</p>
                                                  </div>
                                                  <div class="dropdown">
                                                       <a href="javascript:void(0);" class="dropdown-toggle arrow-none text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded fs-18"></i>
                                                       </a>
                                                       <div class="dropdown-menu dropdown-menu-end">
                                                            <a href="#!" class="dropdown-item">
                                                                 <i class="bx bxs-user-detail me-1"></i>See Profile
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bxl-telegram me-1"></i>Message to Victoria
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bx-user-x me-1"></i>Unfriend Victoria
                                                            </a>
                                                            <a href="javascript:void(0);" class="dropdown-item">
                                                                 <i class="bx bx-block me-1"></i>Block Victoria
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div> <!-- end card body -->
                              </div> <!-- end card-->
                         </div> <!-- end col-->

                         <div class="col-xl-4">
                              <div class="card">
                                   <div class="card-header d-flex justify-content-between align-items-center">
                                        <h4 class="card-title">Recent Transactions</h4>
                                        <div>
                                             <a href="#!" class="btn btn-sm btn-primary">
                                                  <i class="bx bx-plus me-1"></i>Add
                                             </a>
                                        </div>
                                   </div> <!-- end card-header-->
                                   <div class="card-body p-0">
                                        <div class="px-3" data-simplebar style="max-height: 406px;">
                                             <table class="table table-hover mb-0 table-centered">
                                                  <tbody>
                                                       <tr>
                                                            <td>24 April, 2024</td>
                                                            <td>$120.55</td>
                                                            <td><span class="badge bg-success">Cr</span></td>
                                                            <td>Commisions </td>
                                                       </tr>
                                                       <tr>
                                                            <td>24 April, 2024</td>
                                                            <td>$9.68</td>
                                                            <td><span class="badge bg-success">Cr</span></td>
                                                            <td>Affiliates </td>
                                                       </tr>
                                                       <tr>
                                                            <td>20 April, 2024</td>
                                                            <td>$105.22</td>
                                                            <td><span class="badge bg-danger">Dr</span></td>
                                                            <td>Grocery </td>
                                                       </tr>
                                                       <tr>
                                                            <td>18 April, 2024</td>
                                                            <td>$80.59</td>
                                                            <td><span class="badge bg-success">Cr</span></td>
                                                            <td>Refunds </td>
                                                       </tr>
                                                       <tr>
                                                            <td>18 April, 2024</td>
                                                            <td>$750.95</td>
                                                            <td><span class="badge bg-danger">Dr</span></td>
                                                            <td>Bill Payments </td>
                                                       </tr>
                                                       <tr>
                                                            <td>17 April, 2024</td>
                                                            <td>$455.62</td>
                                                            <td><span class="badge bg-danger">Dr</span></td>
                                                            <td>Electricity </td>
                                                       </tr>
                                                       <tr>
                                                            <td>17 April, 2024</td>
                                                            <td>$102.77</td>
                                                            <td><span class="badge bg-success">Cr</span></td>
                                                            <td>Interest </td>
                                                       </tr>
                                                       <tr>
                                                            <td>16 April, 2024</td>
                                                            <td>$79.49</td>
                                                            <td><span class="badge bg-success">Cr</span></td>
                                                            <td>Refunds </td>
                                                       </tr>
                                                       <tr>
                                                            <td>05 April, 2024</td>
                                                            <td>$980.00</td>
                                                            <td><span class="badge bg-danger">Dr</span></td>
                                                            <td>Shopping</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>
                                   </div> <!-- end card body -->
                              </div> <!-- end card-->
                         </div> <!-- end col-->

                    </div> <!-- end row-->

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
     <script src="assets/Backend/js/vendor.js"></script>

     <!-- App Javascript (Require in all Page) -->
     <script src="assets/Backend/js/app.js"></script>

     <!-- Dashboard Js -->
     <script src="assets/Backend/js/pages/widgets.js"></script>

</body>


<!-- Mirrored from techzaa.getappui.com/larkon/admin/widgets.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Sep 2024 06:08:00 GMT -->
</html>
