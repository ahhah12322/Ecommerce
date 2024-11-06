<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from techzaa.getappui.com/larkon/admin/forms-range-slider.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Sep 2024 06:08:17 GMT -->
<head>
     <!-- Title Meta -->
     <meta charset="utf-8" />
     <title>Range Slider | Larkon - Responsive Admin Dashboard Template</title>
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
                                   <h4 class="fw-bold topbar-button pe-none text-uppercase mb-0">Range Slider</h4>
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
                                        <h5 class="card-title mb-1 anchor" id="overview">
                                             Overview <a class="btn btn-sm btn-outline-success rounded-2 float-end" href="https://github.com/leongersen/noUiSlider#readme" target="_blank"> Official Website </a>
                                        </h5>
                                        <p class="text-muted mb-3">noUiSlider is a lightweight JavaScript range slider.</p>

                                        <h5 class="mt-2">Usage</h5>
                                        <p class="mb-0">noUiSlider's CSS and Javascript files are bundled in the <code>vender.min.css</code> and <code>vendor.js</code> and globally included in all pages.</p>
                                   </div><!-- end card-body -->
                              </div><!-- end card -->

                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-3 anchor" id="basic-range">
                                             Basic Range Slider<a class="anchor-link" href="#basic-range">#</a>
                                        </h5>

                                        <div class="mb-3">
                                             <div id="rangeslider_basic"></div>
                                        </div>
                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <ul class="nav nav-pills">
                                                       <li class="nav-item">
                                                            <a href="#basic-range-html" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                                 <span class="fs-12 text-uppercase">html</span>
                                                            </a>
                                                       </li>
                                                       <li class="nav-item">
                                                            <a href="#basic-range-javascript" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                                 <span class="fs-12 text-uppercase">javascript</span>
                                                            </a>
                                                       </li>
                                                  </ul>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="tab-content">
                                                  <div class="tab-pane show active" id="basic-range-html">
                                                       <div class="code" data-simplebar>
                                                            <pre class="language-html">
                                                                 <code>
                                                                      &lt;div id=&quot;rangeslider_basic&quot;&gt;&lt;/label&gt;
                                                                 </code>
                                                            </pre>
                                                       </div>
                                                  </div>
                                                  <div class="tab-pane" id="basic-range-javascript">
                                                       <div class="code" data-simplebar>
                                                            <pre class="language-javascript">
                                                                 <code>
                                                                      var sliderColorScheme = document.querySelectorAll('#rangeslider_basic');
                                                                      if (sliderColorScheme)
                                                                           sliderColorScheme.forEach(function (slider) {
                                                                                noUiSlider.create(slider, {
                                                                                     start: 127,
                                                                                     connect: 'lower',
                                                                                     range: {
                                                                                          'min': 0,
                                                                                          'max': 255
                                                                                     },
                                                                                });
                                                                           });
                                                                 </code>
                                                            </pre>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>


                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-3 anchor" id="vertical-range">
                                             Vertical Range Slider<a class="anchor-link" href="#vertical-range">#</a>
                                        </h5>

                                        <div class="mb-3">
                                             <div id="rangeslider_vertical" style="height: 150px;"></div>
                                        </div>
                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <ul class="nav nav-pills">
                                                       <li class="nav-item">
                                                            <a href="#vertical-range-html" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                                 <span class="fs-12 text-uppercase">html</span>
                                                            </a>
                                                       </li>
                                                       <li class="nav-item">
                                                            <a href="#vertical-range-js" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                                 <span class="fs-12 text-uppercase">javascript</span>
                                                            </a>
                                                       </li>
                                                  </ul>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="tab-content">
                                                  <div class="tab-pane show active" id="vertical-range-html">
                                                       <div class="code" data-simplebar>
                                                            <pre class="language-html">
                                                                 <code>
                                                                      &lt;div class=&quot;mb-3&quot;&gt;
                                                                           &lt;div id=&quot;rangeslider_vertical&quot; style=&quot;height: 150px;&quot;&gt;&lt;/div&gt;
                                                                      &lt;/div&gt;
                                                                 </code>
                                                            </pre>
                                                       </div>
                                                  </div>
                                                  <div class="tab-pane" id="vertical-range-js">
                                                       <div class="code" data-simplebar>
                                                            <pre class="language-javascript">
                                                                 <code>
                                                                      var rangesliderVertical = document.querySelectorAll('#rangeslider_vertical');
                                                                      if (rangesliderVertical)
                                                                      rangesliderVertical.forEach(function (slider) {
                                                                           noUiSlider.create(slider, {
                                                                                start: [60, 160],
                                                                                connect: true,
                                                                                orientation: "vertical",
                                                                                range: {
                                                                                     "min": 0,
                                                                                     "max": 200
                                                                                }
                                                                           });
                                                                      });
                                                                 </code>
                                                            </pre>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>


                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-3 anchor" id="multi-range">
                                             Multi Elements Range<a class="anchor-link" href="#multi-range">#</a>
                                        </h5>

                                        <div class="mb-3">
                                             <div id="rangeslider_multielement"></div>
                                        </div>
                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <ul class="nav nav-pills">
                                                       <li class="nav-item">
                                                            <a href="#multielement-html" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                                 <span class="fs-12 text-uppercase">html</span>
                                                            </a>
                                                       </li>
                                                       <li class="nav-item">
                                                            <a href="#multielement-javascript" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                                 <span class="fs-12 text-uppercase">javascript</span>
                                                            </a>
                                                       </li>
                                                  </ul>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="tab-content">
                                                  <div class="tab-pane show active" id="multielement-html">
                                                       <div class="code" data-simplebar>
                                                            <pre class="language-html">
                                                                 <code>
                                                                      &lt;div class=&quot;mb-3&quot;&gt;
                                                                           &lt;div id=&quot;rangeslider_multielement&quot;&gt;&lt;/div&gt;
                                                                      &lt;/div&gt;
                                                                 </code>
                                                            </pre>
                                                       </div>
                                                  </div>
                                                  <div class="tab-pane" id="multielement-javascript">
                                                       <div class="code" data-simplebar>
                                                            <pre class="language-javascript">
                                                                 <code>
                                                                      var multielementslider = document.querySelectorAll('#rangeslider_multielement');
                                                                      if (multielementslider)
                                                                      multielementslider.forEach(function (slider) {
                                                                           noUiSlider.create(slider, {
                                                                                start: [20, 80],
                                                                                connect: true,
                                                                                range: {
                                                                                     'min': 0,
                                                                                     'max': 100
                                                                                }
                                                                           });
                                                                      });
                                                                 </code>
                                                            </pre>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>


                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-3 anchor" id="colorpicker-range">
                                             Colorpicker<a class="anchor-link" href="#colorpicker-range">#</a>
                                        </h5>

                                        <div class="mb-3">
                                             <div class="sliders" id="red"></div>
                                             <div class="sliders" id="green"></div>
                                             <div class="sliders" id="blue"></div>

                                             <div id="result"></div>
                                        </div>
                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <ul class="nav nav-pills">
                                                       <li class="nav-item">
                                                            <a href="#colorpicker-html" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                                 <span class="fs-12 text-uppercase">html</span>
                                                            </a>
                                                       </li>
                                                       <li class="nav-item">
                                                            <a href="#colorpicker-javascript" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                                 <span class="fs-12 text-uppercase">javascript</span>
                                                            </a>
                                                       </li>
                                                  </ul>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="tab-content">
                                                  <div class="tab-pane show active" id="colorpicker-html">
                                                       <div class="code" data-simplebar>
                                                            <pre class="language-html">
                                                                 <code>
                                                                      &lt;div class=&quot;mb-3&quot;&gt;
                                                                      &lt;div class=&quot;sliders&quot; id=&quot;red&quot;&gt;&lt;/div&gt;
                                                                      &lt;div class=&quot;sliders&quot; id=&quot;green&quot;&gt;&lt;/div&gt;
                                                                      &lt;div class=&quot;sliders&quot; id=&quot;blue&quot;&gt;&lt;/div&gt;

                                                                      &lt;div id=&quot;result&quot;&gt;&lt;/div&gt;
                                                                 &lt;/div&gt;
                                                                 </code>
                                                            </pre>
                                                       </div>
                                                  </div>
                                                  <div class="tab-pane" id="colorpicker-javascript">
                                                       <div class="code" data-simplebar>
                                                            <pre class="language-javascript">
                                                                 <code>
                                                                      var resultElement = document.getElementById('result');
                                                                      var sliders = document.getElementsByClassName('sliders');
                                                                      var colors = [0, 0, 0];
                                                                      if (sliders)
                                                                      [].slice.call(sliders).forEach(function (slider, index) {

                                                                           noUiSlider.create(slider, {
                                                                                start: 127,
                                                                                connect: [true, false],
                                                                                orientation: "vertical",
                                                                                range: {
                                                                                     'min': 0,
                                                                                     'max': 255
                                                                                },
                                                                                format: wNumb({
                                                                                     decimals: 0
                                                                                })
                                                                           });

                                                                           // Bind the color changing function to the update event.
                                                                           slider.noUiSlider.on('update', function () {

                                                                                colors[index] = slider.noUiSlider.get();

                                                                                var color = 'rgb(' + colors.join(',') + ')';

                                                                                resultElement.style.background = color;
                                                                                resultElement.style.color = color;
                                                                           });
                                                                      });

                                                                 </code>
                                                            </pre>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>


                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-3 anchor" id="value-range">
                                             Value Range Slider<a class="anchor-link" href="#value-range">#</a>
                                        </h5>

                                        <div class="mb-3">
                                             <div id="nonlinear"></div>
                                             <div class="d-flex justify-content-between">
                                                  <div class="example-val" id="lower-value"></div>
                                                  <div class="example-val" id="upper-value"></div>
                                             </div>
                                        </div>
                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <ul class="nav nav-pills">
                                                       <li class="nav-item">
                                                            <a href="#value-range-html" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                                 <span class="fs-12 text-uppercase">html</span>
                                                            </a>
                                                       </li>
                                                       <li class="nav-item">
                                                            <a href="#value-range-javascript" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                                 <span class="fs-12 text-uppercase">javascript</span>
                                                            </a>
                                                       </li>
                                                  </ul>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="tab-content">
                                                  <div class="tab-pane show active" id="value-range-html">
                                                       <div class="code" data-simplebar>
                                                            <pre class="language-html">
                                                                 <code>
                                                                      &lt;div class=&quot;mb-3&quot;&gt;
                                                                      &lt;div id=&quot;nonlinear&quot;&gt;&lt;/div&gt;
                                                                      &lt;div class=&quot;d-flex justify-content-between&quot;&gt;
                                                                           &lt;div class=&quot;example-val&quot; id=&quot;lower-value&quot;&gt;&lt;/div&gt;
                                                                           &lt;div class=&quot;example-val&quot; id=&quot;upper-value&quot;&gt;&lt;/div&gt;
                                                                      &lt;/div&gt;
                                                                 &lt;/div&gt;
                                                                 </code>
                                                            </pre>
                                                       </div>
                                                  </div>
                                                  <div class="tab-pane" id="value-range-javascript">
                                                       <div class="code" data-simplebar>
                                                            <pre class="language-javascript">
                                                                 <code>
                                                                      var nonLinearSlider = document.getElementById('nonlinear');
                                                                      if (nonLinearSlider)
                                                                           noUiSlider.create(nonLinearSlider, {
                                                                                connect: true,
                                                                                behaviour: 'tap',
                                                                                start: [500, 4000],
                                                                                range: {
                                                                                     // Starting at 500, step the value by 500,
                                                                                     // until 4000 is reached. From there, step by 1000.
                                                                                     'min': [0],
                                                                                     '10%': [500, 500],
                                                                                     '50%': [4000, 1000],
                                                                                     'max': [10000]
                                                                                }
                                                                           });

                                                                      var nodes = [
                                                                           document.getElementById('lower-value'), // 0
                                                                           document.getElementById('upper-value') // 1
                                                                      ];

                                                                      // Display the slider value and how far the handle moved
                                                                      // from the left edge of the slider.
                                                                      nonLinearSlider.noUiSlider.on('update', function (values, handle, unencoded, isTap, positions) {
                                                                           nodes[handle].innerHTML = values[handle] + ', ' + positions[handle].toFixed(2) + '%';
                                                                      });
                                                                 </code>
                                                            </pre>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>


                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-3 anchor" id="locking-together">
                                             Locking Sliders Together<a class="anchor-link" href="#locking-together">#</a>
                                        </h5>

                                        <div class="mb-3">
                                             <div class="slider" id="slider1"></div>
                                             <span class="example-val mt-2" id="slider1-span"></span>

                                             <div class="slider" id="slider2"></div>
                                             <span class="example-val mt-2" id="slider2-span"></span>

                                             <button id="lockbutton" class="btn btn-primary">Lock</button>
                                        </div>
                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <ul class="nav nav-pills">
                                                       <li class="nav-item">
                                                            <a href="#locking-together-html" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                                 <span class="fs-12 text-uppercase">html</span>
                                                            </a>
                                                       </li>
                                                       <li class="nav-item">
                                                            <a href="#locking-together-javascript" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                                 <span class="fs-12 text-uppercase">javascript</span>
                                                            </a>
                                                       </li>
                                                  </ul>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="tab-content">
                                                  <div class="tab-pane show active" id="locking-together-html">
                                                       <div class="code" data-simplebar>
                                                            <pre class="language-html">
                                                                 <code>
                                                                      &lt;div class=&quot;mb-3&quot;&gt;
                                                                           &lt;div class=&quot;slider&quot; id=&quot;slider1&quot;&gt;&lt;/div&gt;
                                                                           &lt;span class=&quot;example-val mt-2&quot; id=&quot;slider1-span&quot;&gt;&lt;/span&gt;

                                                                           &lt;div class=&quot;slider&quot; id=&quot;slider2&quot;&gt;&lt;/div&gt;
                                                                           &lt;span class=&quot;example-val mt-2&quot; id=&quot;slider2-span&quot;&gt;&lt;/span&gt;

                                                                           &lt;button id=&quot;lockbutton&quot; class=&quot;btn btn-primary&quot;&gt;Lock&lt;/button&gt;
                                                                      &lt;/div&gt;
                                                                 </code>
                                                            </pre>
                                                       </div>
                                                  </div>
                                                  <div class="tab-pane" id="locking-together-javascript">
                                                       <div class="code" data-simplebar>
                                                            <pre class="language-javascript">
                                                                 <code>
                                                                      var lockedState = false;
                                                                      var lockedSlider = false;
                                                                      var lockedValues = [60, 80];

                                                                      var slider1 = document.getElementById('slider1');
                                                                      var slider2 = document.getElementById('slider2');

                                                                      var lockButton = document.getElementById('lockbutton');
                                                                      var slider1Value = document.getElementById('slider1-span');
                                                                      var slider2Value = document.getElementById('slider2-span');

                                                                      // When the button is clicked, the locked state is inverted.
                                                                      if (lockButton)
                                                                      lockButton.addEventListener('click', function () {
                                                                           lockedState = !lockedState;
                                                                           this.textContent = lockedState ? 'unlock' : 'lock';
                                                                      });

                                                                      function crossUpdate(value, slider) {

                                                                      // If the sliders aren't interlocked, don't
                                                                      // cross-update.
                                                                      if (!lockedState) return;

                                                                      // Select whether to increase or decrease
                                                                      // the other slider value.
                                                                      var a = slider1 === slider ? 0 : 1;

                                                                      // Invert a
                                                                      var b = a ? 0 : 1;

                                                                      // Offset the slider value.
                                                                      value -= lockedValues[b] - lockedValues[a];

                                                                      // Set the value
                                                                      slider.noUiSlider.set(value);
                                                                      }

                                                                      noUiSlider.create(slider1, {
                                                                      start: 60,

                                                                      // Disable animation on value-setting,
                                                                      // so the sliders respond immediately.
                                                                      animate: false,
                                                                      range: {
                                                                           min: 50,
                                                                           max: 100
                                                                      }
                                                                      });

                                                                      noUiSlider.create(slider2, {
                                                                      start: 80,
                                                                      animate: false,
                                                                      range: {
                                                                           min: 50,
                                                                           max: 100
                                                                      }
                                                                      });

                                                                      if (slider1 && slider2) {
                                                                      slider1.noUiSlider.on('update', function (values, handle) {
                                                                           slider1Value.innerHTML = values[handle];
                                                                      });
                                                                      slider2.noUiSlider.on('update', function (values, handle) {
                                                                           slider2Value.innerHTML = values[handle];
                                                                      });


                                                                      function setLockedValues() {
                                                                           lockedValues = [
                                                                                Number(slider1.noUiSlider.get()),
                                                                                Number(slider2.noUiSlider.get())
                                                                           ];
                                                                      }

                                                                      slider1.noUiSlider.on('change', setLockedValues);
                                                                      slider2.noUiSlider.on('change', setLockedValues);

                                                                      slider1.noUiSlider.on('slide', function (values, handle) {
                                                                           crossUpdate(values[handle], slider2);
                                                                      });

                                                                      slider2.noUiSlider.on('slide', function (values, handle) {
                                                                           crossUpdate(values[handle], slider1);
                                                                      });
                                                                      }

                                                                 </code>
                                                            </pre>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>


                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-3 anchor" id="tooltip">
                                             Tooltip<a class="anchor-link" href="#tooltip">#</a>
                                        </h5>

                                        <div class="p-3 pt-5">
                                             <div class="slider" id="slider-merging-tooltips"></div>
                                        </div>
                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <ul class="nav nav-pills">
                                                       <li class="nav-item">
                                                            <a href="#tooltip-html" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                                 <span class="fs-12 text-uppercase">html</span>
                                                            </a>
                                                       </li>
                                                       <li class="nav-item">
                                                            <a href="#tooltip-javascript" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                                 <span class="fs-12 text-uppercase">javascript</span>
                                                            </a>
                                                       </li>
                                                  </ul>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="tab-content">
                                                  <div class="tab-pane show active" id="tooltip-html">
                                                       <div class="code" data-simplebar>
                                                            <pre class="language-html">
                                                                 <code>
                                                                      &lt;div class=&quot;slider&quot; id=&quot;slider-merging-tooltips&quot;&gt;&lt;/div&gt;
                                                                 </code>
                                                            </pre>
                                                       </div>
                                                  </div>
                                                  <div class="tab-pane" id="tooltip-javascript">
                                                       <div class="code" data-simplebar>
                                                            <pre class="language-javascript">
                                                                 <code>
                                                                      var mergingTooltipSlider = document.getElementById('slider-merging-tooltips');
                                                                      if (mergingTooltipSlider) {
                                                                      noUiSlider.create(mergingTooltipSlider, {
                                                                           start: [20, 75],
                                                                           connect: true,
                                                                           tooltips: [true, true],
                                                                           range: {
                                                                                'min': 0,
                                                                                'max': 100
                                                                           }
                                                                      });

                                                                      mergeTooltips(mergingTooltipSlider, 5, ' - ');
                                                                      }

                                                                      /**
                                                                      * @param slider HtmlElement with an initialized slider
                                                                      * @param threshold Minimum proximity (in percentages) to merge tooltips
                                                                      * @param separator String joining tooltips
                                                                      */
                                                                      function mergeTooltips(slider, threshold, separator) {

                                                                      var textIsRtl = getComputedStyle(slider).direction === 'rtl';
                                                                      var isRtl = slider.noUiSlider.options.direction === 'rtl';
                                                                      var isVertical = slider.noUiSlider.options.orientation === 'vertical';
                                                                      var tooltips = slider.noUiSlider.getTooltips();
                                                                      var origins = slider.noUiSlider.getOrigins();

                                                                      // Move tooltips into the origin element. The default stylesheet handles this.
                                                                      tooltips.forEach(function (tooltip, index) {
                                                                           if (tooltip) {
                                                                                origins[index].appendChild(tooltip);
                                                                           }
                                                                      });
                                                                      if (slider)
                                                                           slider.noUiSlider.on('update', function (values, handle, unencoded, tap, positions) {

                                                                                var pools = [
                                                                                     []
                                                                                ];
                                                                                var poolPositions = [
                                                                                     []
                                                                                ];
                                                                                var poolValues = [
                                                                                     []
                                                                                ];
                                                                                var atPool = 0;

                                                                                // Assign the first tooltip to the first pool, if the tooltip is configured
                                                                                if (tooltips[0]) {
                                                                                     pools[0][0] = 0;
                                                                                     poolPositions[0][0] = positions[0];
                                                                                     poolValues[0][0] = values[0];
                                                                                }

                                                                                for (var i = 1; i < positions.length; i++) {
                                                                                     if (!tooltips[i] || (positions[i] - positions[i - 1]) > threshold) {
                                                                                          atPool++;
                                                                                          pools[atPool] = [];
                                                                                          poolValues[atPool] = [];
                                                                                          poolPositions[atPool] = [];
                                                                                     }

                                                                                     if (tooltips[i]) {
                                                                                          pools[atPool].push(i);
                                                                                          poolValues[atPool].push(values[i]);
                                                                                          poolPositions[atPool].push(positions[i]);
                                                                                     }
                                                                                }

                                                                                pools.forEach(function (pool, poolIndex) {
                                                                                     var handlesInPool = pool.length;

                                                                                     for (var j = 0; j < handlesInPool; j++) {
                                                                                          var handleNumber = pool[j];

                                                                                          if (j === handlesInPool - 1) {
                                                                                          var offset = 0;

                                                                                          poolPositions[poolIndex].forEach(function (value) {
                                                                                               offset += 1000 - value;
                                                                                          });

                                                                                          var direction = isVertical ? 'bottom' : 'right';
                                                                                          var last = isRtl ? 0 : handlesInPool - 1;
                                                                                          var lastOffset = 1000 - poolPositions[poolIndex][last];
                                                                                          offset = (textIsRtl && !isVertical ? 100 : 0) + (offset / handlesInPool) - lastOffset;

                                                                                          // Center this tooltip over the affected handles
                                                                                          tooltips[handleNumber].innerHTML = poolValues[poolIndex].join(separator);
                                                                                          tooltips[handleNumber].style.display = 'block';
                                                                                          tooltips[handleNumber].style[direction] = offset + '%';
                                                                                          } else {
                                                                                          // Hide this tooltip
                                                                                          tooltips[handleNumber].style.display = 'none';
                                                                                          }
                                                                                     }
                                                                                });
                                                                           });
                                                                      }

                                                                 </code>
                                                            </pre>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>


                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-3 anchor" id="soft-limits">
                                             Soft Limits <a class="anchor-link" href="#soft-limits">#</a>
                                        </h5>

                                        <div class="mb-3 pb-5">
                                             <div class="slider" id="soft"></div>
                                        </div>
                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <ul class="nav nav-pills">
                                                       <li class="nav-item">
                                                            <a href="#soft-limits-html" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                                 <span class="fs-12 text-uppercase">html</span>
                                                            </a>
                                                       </li>
                                                       <li class="nav-item">
                                                            <a href="#soft-limits-javascript" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                                 <span class="fs-12 text-uppercase">javascript</span>
                                                            </a>
                                                       </li>
                                                  </ul>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="tab-content">
                                                  <div class="tab-pane show active" id="soft-limits-html">
                                                       <div class="code" data-simplebar>
                                                            <pre class="language-html">
                                                                 <code>
                                                                      &lt;div  class=&quot;slider&quot; id=&quot;soft&quot;&gt;&lt;/label&gt;
                                                                 </code>
                                                            </pre>
                                                       </div>
                                                  </div>
                                                  <div class="tab-pane" id="soft-limits-javascript">
                                                       <div class="code" data-simplebar>
                                                            <pre class="language-javascript">
                                                                 <code>
                                                                      var softSlider = document.getElementById('soft');
                                                                      if (softSlider) {
                                                                      noUiSlider.create(softSlider, {
                                                                           start: 50,
                                                                           range: {
                                                                                min: 0,
                                                                                max: 100
                                                                           },
                                                                           pips: {
                                                                                mode: 'values',
                                                                                values: [20, 80],
                                                                                density: 4
                                                                           }
                                                                      });

                                                                      softSlider.noUiSlider.on('change', function (values, handle) {
                                                                           if (values[handle] < 20) {
                                                                                softSlider.noUiSlider.set(20);
                                                                           } else if (values[handle] > 80) {
                                                                                softSlider.noUiSlider.set(80);
                                                                           }
                                                                      });
                                                                      }
                                                                 </code>
                                                            </pre>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div> <!-- end card body -->
                              </div> <!-- end card -->
                         </div> <!-- end col -->

                         <div class="col-xl-3">
                              <div class="card docs-nav">
                                   <ul class="nav bg-transparent flex-column">
                                        <li class="nav-item">
                                             <a href="#overview" class="nav-link">Overview</a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="#basic-range" class="nav-link">Basic Range Slider</a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="#vertical-range" class="nav-link">Vertical Range Slider</a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="#multi-range" class="nav-link">Multi Elements Range</a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="#colorpicker-range" class="nav-link">Colorpicker</a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="#value-range" class="nav-link">Value Range SLider</a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="#locking-together" class="nav-link">Locking Sliders Together</a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="#tooltip" class="nav-link">Tooltip</a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="#soft-limits " class="nav-link">Soft Limits </a>
                                        </li>
                                   </ul>
                              </div>
                         </div>
                    </div> <!-- end row -->
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

     <!-- slider js -->
     <script src="assets/Backend/js/components/form-slider.js"></script>

</body>


<!-- Mirrored from techzaa.getappui.com/larkon/admin/forms-range-slider.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Sep 2024 06:08:17 GMT -->
</html>