<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from techzaa.getappui.com/larkon/admin/apps-email.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Sep 2024 06:07:57 GMT -->
<head>
     <!-- Title Meta -->
     <meta charset="utf-8" />
     <title>Inbox | Larkon - Responsive Admin Dashboard Template</title>
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
                                   <h4 class="fw-bold topbar-button pe-none text-uppercase mb-0">Inbox</h4>
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

               <!-- Start Container -->
               <div class="container-xxl">

                    <div class="row g-1 mb-3">
                         <div class="col-xxl-2">
                              <div class="offcanvas-xxl offcanvas-start h-100" tabindex="-1" id="EmailSidebaroffcanvas" aria-labelledby="EmailSidebaroffcanvasLabel">
                                   <div class="card h-100 mb-0" data-simplebar="">
                                        <div class="card-body">
                                             <div class="d-grid">
                                                  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#compose-modal">Compose</button>
                                             </div>

                                             <div class="nav flex-column mt-3" id="email-tab" role="tablist" aria-orientation="vertical">
                                                  <a class="nav-link px-0 py-1 active show" id="email-inbox-tab" data-bs-toggle="pill" href="#email-inbox" role="tab" aria-controls="email-inbox" aria-selected="true">
                                                       <span class="text-danger fw-bold">
                                                            <i class="bx bxs-inbox fs-16 me-2 align-middle"></i> Inbox
                                                            <span class="badge badge-soft-danger float-end ms-2">7</span>
                                                       </span>
                                                  </a>

                                                  <a class="nav-link px-0 py-1" id="email-starred-tab" data-bs-toggle="pill" href="#email-starred" role="tab" aria-controls="email-starred" aria-selected="false">
                                                       <i class="bx bx-star fs-16 align-middle me-2"></i>Starred
                                                  </a>

                                                  <a class="nav-link px-0 py-1" id="email-draft-tab" data-bs-toggle="pill" href="#email-draft" role="tab" aria-controls="email-draft" aria-selected="false">
                                                       <i class="bx bxs-file-doc fs-16 align-middle me-2"></i>Draft<span class="badge badge-soft-info float-end ms-2">32</span>
                                                  </a>

                                                  <a class="nav-link px-0 py-1" id="email-sent-tab" data-bs-toggle="pill" href="#email-sent" role="tab" aria-controls="email-sent" aria-selected="false">
                                                       <i class="bx bx-send fs-16 align-middle me-2"></i>Sent Mail
                                                  </a>

                                                  <a class="nav-link px-0 py-1" id="email-trash-tab" data-bs-toggle="pill" href="#email-trash" role="tab" aria-controls="email-trash" aria-selected="false">
                                                       <i class="bx bx-trash fs-16 align-middle me-2"></i>Trash Mail
                                                  </a>

                                                  <a class="nav-link px-0 py-1" id="email-important-tab" data-bs-toggle="pill" href="#email-important" role="tab" aria-controls="email-important" aria-selected="false">
                                                       <i class="bx bx-tag fs-16 align-middle me-2"></i>Important
                                                  </a>

                                                  <h6 class="text-uppercase mt-4">Labels</h6>

                                                  <a class="nav-link px-0 py-1" id="email-updates-tab" data-bs-toggle="pill" href="#email-updates" role="tab" aria-controls="email-updates" aria-selected="false">
                                                       <i class="bx bxs-circle font-13 text-info me-2"></i>Updates
                                                  </a>

                                                  <a class="nav-link px-0 py-1" id="email-social-tab" data-bs-toggle="pill" href="#email-social" role="tab" aria-controls="email-social" aria-selected="false">
                                                       <i class="bx bxs-circle font-13 text-primary me-2"></i>Social
                                                  </a>

                                                  <a class="nav-link px-0 py-1" id="email-promotion-tab" data-bs-toggle="pill" href="#email-promotion" role="tab" aria-controls="email-promotion" aria-selected="false">
                                                       <i class="bx bxs-circle font-13 text-secondary me-2"></i>Promotions
                                                  </a>

                                                  <a class="nav-link px-0 py-1" id="email-forums-tab" data-bs-toggle="pill" href="#email-forums" role="tab" aria-controls="email-forums" aria-selected="false">
                                                       <i class="bx bxs-circle font-13 text-success me-2"></i>Forums</a>
                                                  </a>
                                             </div>


                                             <div class="mt-5">
                                                  <h4><span class="badge rounded-pill p-1 px-2 badge-soft-secondary">FREE</span></h4>
                                                  <h6 class="text-uppercase mt-3">Storage</h6>
                                                  <div class="progress my-2 progress-sm">
                                                       <div class="progress-bar progress-lg bg-success" role="progressbar" style="width: 46%" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100"></div>
                                                  </div>
                                                  <p class="text-muted font-13 mb-0">7.02 GB (46%) of 15 GB used</p>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="col-xxl-10">
                              <div class="card position-relative overflow-hidden h-100">
                                   <div class="p-3">
                                        <div class="d-flex flex-wrap gap-2">
                                             <button class="btn btn-light d-xxl-none d-flex align-items-center px-2 me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#EmailSidebaroffcanvas" aria-controls="EmailSidebaroffcanvas">
                                                  <i class="bx bx-menu fs-18"></i>
                                             </button>

                                             <!-- archive, spam & delete -->
                                             <div class="btn-group">
                                                  <button type="button" class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive">
                                                       <i class="bx bx-archive fs-18"></i>
                                                  </button>
                                                  <button type="button" class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as spam">
                                                       <i class="bx bx-info-square fs-18"></i>
                                                  </button>
                                                  <button type="button" class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                       <i class="bx bx-trash fs-18"></i>
                                                  </button>
                                             </div>

                                             <!-- move to -->
                                             <div class="btn-group" data-bs-toggle="tooltip" data-bs-placement="top" title="Folder">
                                                  <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                       <i class="bx bx-folder fs-18"></i>
                                                  </button>
                                                  <div class="dropdown-menu">
                                                       <span class="dropdown-header">Move to</span>
                                                       <a class="dropdown-item" href="javascript: void(0);">Social</a>
                                                       <a class="dropdown-item" href="javascript: void(0);">Promotions</a>
                                                       <a class="dropdown-item" href="javascript: void(0);">Updates</a>
                                                       <a class="dropdown-item" href="javascript: void(0);">Forums</a>
                                                  </div>
                                             </div>

                                             <!-- labels -->
                                             <div class="btn-group" data-bs-toggle="tooltip" data-bs-placement="top" title="Labels">
                                                  <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                       <i class="bx bx-bookmarks fs-18"></i>
                                                  </button>
                                                  <div class="dropdown-menu">
                                                       <span class="dropdown-header">Label as :</span>
                                                       <a class="dropdown-item" href="javascript: void(0);">Updates</a>
                                                       <a class="dropdown-item" href="javascript: void(0);">Social</a>
                                                       <a class="dropdown-item" href="javascript: void(0);">Promotions</a>
                                                       <a class="dropdown-item" href="javascript: void(0);">Forums</a>
                                                  </div>
                                             </div>

                                             <!-- more option -->
                                             <div class="btn-group" data-bs-toggle="tooltip" data-bs-placement="top" title="More Actions">
                                                  <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">More</button>
                                                  <div class="dropdown-menu">
                                                       <span class="dropdown-header">More Option :</span>
                                                       <a class="dropdown-item" href="javascript: void(0);">Mark as Unread</a>
                                                       <a class="dropdown-item" href="javascript: void(0);">Add to Tasks</a>
                                                       <a class="dropdown-item" href="javascript: void(0);">Add Star</a>
                                                       <a class="dropdown-item" href="javascript: void(0);">Mute</a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>

                                   <div class="tab-content pt-0" id="email-tabContent">
                                        <div class="tab-pane fade active show" id="email-inbox" role="tabpanel" aria-labelledby="email-inbox-tab">
                                             <div>
                                                  <ul class="nav nav-tabs nav-justified">
                                                       <li class="nav-item">
                                                            <a href="#primaryMail" data-bs-toggle="tab" aria-expanded="true" class="nav-link d-flex align-items-center active">
                                                                 <span class="me-2"><i class="bx bxs-inbox fs-18"></i></span>
                                                                 <span class="d-none d-md-block">Primary</span>
                                                            </a>
                                                       </li> <!-- end nav item -->
                                                       <li class="nav-item">
                                                            <a href="#socialMail" data-bs-toggle="tab" aria-expanded="false" class="nav-link d-flex align-items-center">
                                                                 <span class="me-2"><i class="bx bxs-group fs-18"></i></span>
                                                                 <span class="d-none d-md-block">Social</span>
                                                            </a>
                                                       </li> <!-- end nav item -->
                                                       <li class="nav-item">
                                                            <a href="#PromotionsMail" data-bs-toggle="tab" aria-expanded="false" class="nav-link d-flex align-items-center">
                                                                 <span class="me-2"><i class="bx bxs-purchase-tag fs-18"></i></span>
                                                                 <span class="d-none d-md-block">Promotions</span>
                                                            </a>
                                                       </li> <!-- end nav item -->
                                                       <li class="nav-item">
                                                            <a href="#updatesMail" data-bs-toggle="tab" aria-expanded="false" class="nav-link d-flex align-items-center">
                                                                 <span class="me-2"><i class="bx bxs-info-circle fs-18"></i></span>
                                                                 <span class="d-none d-md-block">Updates</span>
                                                            </a>
                                                       </li> <!-- end nav item -->
                                                       <li class="nav-item">
                                                            <a href="#forumsMail" data-bs-toggle="tab" aria-expanded="false" class="nav-link d-flex align-items-center">
                                                                 <span class="me-2"><i class="bx bxs-chat fs-18"></i></span>
                                                                 <span class="d-none d-md-block">Forums</span>
                                                            </a>
                                                       </li> <!-- end nav item -->
                                                  </ul> <!-- end nav tabs -->

                                                  <div class="tab-content text-muted pt-0">
                                                       <div class="tab-pane show active" id="primaryMail">
                                                            <ul class="message-list mb-0">
                                                                 <li class="unread">
                                                                      <div class="col-mail col-mail-1">
                                                                           <div class="checkbox-wrapper-mail">
                                                                                <input type="checkbox" id="InboxChk1">
                                                                                <label for="InboxChk1" class="toggle"></label>
                                                                           </div>
                                                                           <span class="star-toggle bx bx-star"></span>
                                                                           <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="title">Daniel J. Olsen</a>
                                                                      </div>
                                                                      <div class="col-mail col-mail-2">
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                                Lucas Kriebel (@Daniel J. Olsen) has sent you a direct message on Twitter! &nbsp;&ndash;&nbsp;
                                                                                <span>
                                                                                     @Daniel J. Olsen - Very cool :) Nicklas, You have a new direct message.
                                                                                </span>
                                                                           </a>
                                                                           <div class="date">11:49 am</div>
                                                                      </div>
                                                                 </li>
                                                                 <li>
                                                                      <div class="col-mail col-mail-1">
                                                                           <div class="checkbox-wrapper-mail">
                                                                                <input type="checkbox" id="InboxChk2">
                                                                                <label for="InboxChk2" class="toggle"></label>
                                                                           </div>
                                                                           <span class="star-toggle bx bxs-star text-warning"></span>
                                                                           <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="title">Jack P. Roldan</a>
                                                                      </div>
                                                                      <div class="col-mail col-mail-2">
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                                Images
                                                                                <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bx-images text-primary me-2"></i>IMG_201</span>
                                                                                <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bx-images text-primary me-2"></i>IMG_202</span>
                                                                                <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bx-images text-primary me-2"></i>IMG_203</span>
                                                                                <span class="badge bg-light border text-dark fw-semibold rounded-circle">+5</span>
                                                                           </a>
                                                                           <div class="date">Feb 21</div>
                                                                      </div>
                                                                 </li>
                                                                 <li>
                                                                      <div class="col-mail col-mail-1">
                                                                           <div class="checkbox-wrapper-mail">
                                                                                <input type="checkbox" id="InboxChk3">
                                                                                <label for="InboxChk3" class="toggle"></label>
                                                                           </div>
                                                                           <span class="star-toggle bx bx-star"></span>
                                                                           <span class="bx bx-tag-alt important-toggle"></span>
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="title">Betty C. Cox (11)</a>
                                                                      </div>
                                                                      <div class="col-mail col-mail-2">
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                                Train/Bus &nbsp;&ndash;&nbsp;
                                                                                <span>
                                                                                     Yes ok, great! I'm not stuck in Stockholm anymore, we're making progress.
                                                                                </span>
                                                                           </a>
                                                                           <div class="date">Feb 19</div>
                                                                      </div>
                                                                 </li>
                                                                 <li class="unread">
                                                                      <div class="col-mail col-mail-1">
                                                                           <div class="checkbox-wrapper-mail">
                                                                                <input type="checkbox" id="InboxChk4">
                                                                                <label for="InboxChk4" class="toggle"></label>
                                                                           </div>
                                                                           <span class="star-toggle bx bx-star"></span>
                                                                           <span class="bx bx-tag-alt important-toggle"></span>
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="title">Medium</a>
                                                                      </div>
                                                                      <div class="col-mail col-mail-2">
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                                This Week's Top Stories &nbsp;&ndash;&nbsp;
                                                                                <span>
                                                                                     Our top pick for you on Medium this week The Man Who Destroyed America's Ego
                                                                                </span>
                                                                           </a>
                                                                           <div class="date">Feb 28</div>
                                                                      </div>
                                                                 </li>
                                                                 <li>
                                                                      <div class="col-mail col-mail-1">
                                                                           <div class="checkbox-wrapper-mail">
                                                                                <input type="checkbox" id="InboxChk5">
                                                                                <label for="InboxChk5" class="toggle"></label>
                                                                           </div>
                                                                           <span class="star-toggle bx bxs-star text-warning"></span>
                                                                           <span class="bx bx-tag-alt important-toggle"></span>
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="title">Death to Stock</a>
                                                                      </div>
                                                                      <div class="col-mail col-mail-2">
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                                (no subject)
                                                                                <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bxs-file-pdf text-danger me-2"></i>dashboard.pdf</span>
                                                                                <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bxs-file-pdf text-danger me-2"></i>pages-data.pdf</span>
                                                                           </a>
                                                                           <div class="date">Feb 28</div>
                                                                      </div>
                                                                 </li>
                                                                 <li>
                                                                      <div class="col-mail col-mail-1">
                                                                           <div class="checkbox-wrapper-mail">
                                                                                <input type="checkbox" id="InboxChk6">
                                                                                <label for="InboxChk6" class="toggle"></label>
                                                                           </div>
                                                                           <span class="star-toggle bx bx-star"></span>
                                                                           <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="title">Revibe</a>
                                                                      </div>
                                                                      <div class="col-mail col-mail-2">
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                                (no subject)
                                                                                <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bxs-file-doc text-blue me-2"></i>doc1.doc</span>
                                                                                <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bxs-file-doc text-blue me-2"></i>doc2.doc</span>
                                                                                <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bxs-file-doc text-blue me-2"></i>doc3.doc</span>
                                                                                <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bxs-file-doc text-blue me-2"></i>doc4.doc</span>
                                                                           </a>
                                                                           <div class="date">Feb 27</div>
                                                                      </div>
                                                                 </li>
                                                                 <li>
                                                                      <div class="col-mail col-mail-1">
                                                                           <div class="checkbox-wrapper-mail">
                                                                                <input type="checkbox" id="InboxChk7">
                                                                                <label for="InboxChk7" class="toggle"></label>
                                                                           </div>
                                                                           <span class="star-toggle bx bxs-star text-warning"></span>
                                                                           <span class="bx bx-tag-alt important-toggle"></span>
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="title">Erik, me (5)</a>
                                                                      </div>
                                                                      <div class="col-mail col-mail-2">
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                                Regarding our meeting &nbsp;&ndash;&nbsp;
                                                                                <span>
                                                                                     That's great, see you on Thursday!
                                                                                </span>
                                                                           </a>
                                                                           <div class="date">Feb 24</div>
                                                                      </div>
                                                                 </li>
                                                                 <li>
                                                                      <div class="col-mail col-mail-1">
                                                                           <div class="checkbox-wrapper-mail">
                                                                                <input type="checkbox" id="InboxChk8">
                                                                                <label for="InboxChk8" class="toggle"></label>
                                                                           </div>
                                                                           <span class="star-toggle bx bxs-star text-warning"></span>
                                                                           <span class="bx bx-tag-alt important-toggle"></span>
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="title">KanbanFlow</a>
                                                                      </div>
                                                                      <div class="col-mail col-mail-2">
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                                Task assigned: Clone ARP's website &nbsp;&ndash;&nbsp;
                                                                                <span>
                                                                                     You have been assigned a task by Alex@Work on the board Web.
                                                                                </span>
                                                                           </a>
                                                                           <div class="date">Feb 24</div>
                                                                      </div>
                                                                 </li>
                                                                 <li>
                                                                      <div class="col-mail col-mail-1">
                                                                           <div class="checkbox-wrapper-mail">
                                                                                <input type="checkbox" id="InboxChk9">
                                                                                <label for="InboxChk9" class="toggle"></label>
                                                                           </div>
                                                                           <span class="star-toggle bx bx-star"></span>
                                                                           <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="title">Tobias Berggren</a>
                                                                      </div>
                                                                      <div class="col-mail col-mail-2">
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                                Let's go fishing! &nbsp;&ndash;&nbsp;
                                                                                <span>
                                                                                     Hey, You wanna join me and Fred at the lake tomorrow? It'll be awesome.
                                                                                </span>
                                                                           </a>
                                                                           <div class="date">Feb 23</div>
                                                                      </div>
                                                                 </li>
                                                                 <li>
                                                                      <div class="col-mail col-mail-1">
                                                                           <div class="checkbox-wrapper-mail">
                                                                                <input type="checkbox" id="InboxChk10">
                                                                                <label for="InboxChk10" class="toggle"></label>
                                                                           </div>
                                                                           <span class="star-toggle bx bxs-star text-warning"></span>
                                                                           <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="title">Charukaw, me (7)</a>
                                                                      </div>
                                                                      <div class="col-mail col-mail-2">
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                                Hey man &nbsp;&ndash;&nbsp;
                                                                                <span>
                                                                                     Nah man sorry i don't. Should i get it?
                                                                                </span>
                                                                           </a>
                                                                           <div class="date">Feb 23</div>
                                                                      </div>
                                                                 </li>
                                                                 <li>
                                                                      <div class="col-mail col-mail-1">
                                                                           <div class="checkbox-wrapper-mail">
                                                                                <input type="checkbox" id="InboxChk11">
                                                                                <label for="InboxChk11" class="toggle"></label>
                                                                           </div>
                                                                           <span class="star-toggle bx bxs-star text-warning"></span>
                                                                           <span class="bx bx-tag-alt important-toggle"></span>
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="title">Stack Exchange</a>
                                                                      </div>
                                                                      <div class="col-mail col-mail-2">
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                                1 new items in your Stackexchange inbox &nbsp;&ndash;&nbsp;
                                                                                <span>
                                                                                     The following items were added to your Stack Exchange global inbox since you last checked it.
                                                                                </span>
                                                                           </a>
                                                                           <div class="date">Feb 21</div>
                                                                      </div>
                                                                 </li>
                                                                 <li>
                                                                      <div class="col-mail col-mail-1">
                                                                           <div class="checkbox-wrapper-mail">
                                                                                <input type="checkbox" id="InboxChk12">
                                                                                <label for="InboxChk12" class="toggle"></label>
                                                                           </div>
                                                                           <span class="star-toggle bx bxs-star text-warning"></span>
                                                                           <span class="bx bx-tag-alt important-toggle"></span>
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="title">Google Drive Team</a>
                                                                      </div>
                                                                      <div class="col-mail col-mail-2">
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                                You can now use your storage in Google Drive &nbsp;&ndash;&nbsp;
                                                                                <span>
                                                                                     Hey Nicklas Sandell! Thank you for purchasing extra storage space in Google Drive.
                                                                                </span>
                                                                           </a>
                                                                           <div class="date">Feb 20</div>
                                                                      </div>
                                                                 </li>
                                                                 <li>
                                                                      <div class="col-mail col-mail-1">
                                                                           <div class="checkbox-wrapper-mail">
                                                                                <input type="checkbox" id="InboxChk13">
                                                                                <label for="InboxChk13" class="toggle"></label>
                                                                           </div>
                                                                           <span class="star-toggle bx bx-star"></span>
                                                                           <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="title">Peter, me (3)</a>
                                                                      </div>
                                                                      <div class="col-mail col-mail-2">
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                                Hello &nbsp;&ndash;&nbsp;
                                                                                <span>
                                                                                     Trip home from Colombo has been arranged, then Jenna will come get me from Stockholm. :)
                                                                                </span>
                                                                           </a>
                                                                           <div class="date">Mar 6</div>
                                                                      </div>
                                                                 </li>
                                                                 <li>
                                                                      <div class="col-mail col-mail-1">
                                                                           <div class="checkbox-wrapper-mail">
                                                                                <input type="checkbox" id="InboxChk14">
                                                                                <label for="InboxChk14" class="toggle"></label>
                                                                           </div>
                                                                           <span class="star-toggle bx bx-star"></span>
                                                                           <span class="bx bx-tag-alt important-toggle"></span>
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="title">me, Susanna (7)</a>
                                                                      </div>
                                                                      <div class="col-mail col-mail-2">
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                                Since you asked... and i'm inconceivably bored at the train station &nbsp;&ndash;&nbsp;
                                                                                <span>
                                                                                     Alright thanks. I'll have to re-book that somehow, i'll get back to you.
                                                                                </span>
                                                                           </a>
                                                                           <div class="date">Mar 6</div>
                                                                      </div>
                                                                 </li>
                                                            </ul> <!-- end message list -->
                                                       </div> <!-- end pimary mail tab pane -->
                                                       <div class="tab-pane" id="socialMail">
                                                            <ul class="message-list mb-0">
                                                                 <li class="unread">
                                                                      <div class="col-mail col-mail-1">
                                                                           <div class="checkbox-wrapper-mail">
                                                                                <input type="checkbox" id="InboxChk15">
                                                                                <label for="InboxChk15" class="toggle"></label>
                                                                           </div>
                                                                           <span class="star-toggle bx bx-star"></span>
                                                                           <span class="bx bx-tag-alt important-toggle"></span>
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="title">Daniel J. Olsen</a>
                                                                      </div>
                                                                      <div class="col-mail col-mail-2">
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                                Lucas Kriebel (@Daniel J. Olsen) has sent you a direct message on Twitter! &nbsp;&ndash;&nbsp;
                                                                                <span>
                                                                                     @Daniel J. Olsen - Very cool :) Nicklas, You have a new direct message.
                                                                                </span>
                                                                           </a>
                                                                           <div class="date">11:49 am</div>
                                                                      </div>
                                                                 </li>
                                                                 <li>
                                                                      <div class="col-mail col-mail-1">
                                                                           <div class="checkbox-wrapper-mail">
                                                                                <input type="checkbox" id="InboxChk16">
                                                                                <label for="InboxChk16" class="toggle"></label>
                                                                           </div>
                                                                           <span class="star-toggle bx bxs-star text-warning"></span>
                                                                           <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="title">Jack P. Roldan</a>
                                                                      </div>
                                                                      <div class="col-mail col-mail-2">
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                                Images
                                                                                <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bx-images text-primary me-2"></i>IMG_201</span>
                                                                                <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bx-images text-primary me-2"></i>IMG_202</span>
                                                                                <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bx-images text-primary me-2"></i>IMG_203</span>
                                                                                <span class="badge bg-light border text-dark fw-semibold rounded-circle">+5</span>
                                                                           </a>
                                                                           <div class="date">Feb 21</div>
                                                                      </div>
                                                                 </li>
                                                                 <li>
                                                                      <div class="col-mail col-mail-1">
                                                                           <div class="checkbox-wrapper-mail">
                                                                                <input type="checkbox" id="InboxChk17">
                                                                                <label for="InboxChk17" class="toggle"></label>
                                                                           </div>
                                                                           <span class="star-toggle bx bx-star"></span>
                                                                           <span class="bx bx-tag-alt important-toggle"></span>
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="title">Betty C. Cox (11)</a>
                                                                      </div>
                                                                      <div class="col-mail col-mail-2">
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                                Train/Bus &nbsp;&ndash;&nbsp;
                                                                                <span>
                                                                                     Yes ok, great! I'm not stuck in Stockholm anymore, we're making progress.
                                                                                </span>
                                                                           </a>
                                                                           <div class="date">Feb 19</div>
                                                                      </div>
                                                                 </li>
                                                                 <li>
                                                                      <div class="col-mail col-mail-1">
                                                                           <div class="checkbox-wrapper-mail">
                                                                                <input type="checkbox" id="InboxChk18">
                                                                                <label for="InboxChk18" class="toggle"></label>
                                                                           </div>
                                                                           <span class="star-toggle bx bx-star"></span>
                                                                           <span class="bx bx-tag-alt important-toggle"></span>
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="title">Medium</a>
                                                                      </div>
                                                                      <div class="col-mail col-mail-2">
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                                This Week's Top Stories &nbsp;&ndash;&nbsp;
                                                                                <span>
                                                                                     Our top pick for you on Medium this week The Man Who Destroyed America's Ego
                                                                                </span>
                                                                           </a>
                                                                           <div class="date">Feb 28</div>
                                                                      </div>
                                                                 </li>
                                                                 <li>
                                                                      <div class="col-mail col-mail-1">
                                                                           <div class="checkbox-wrapper-mail">
                                                                                <input type="checkbox" id="InboxChk19">
                                                                                <label for="InboxChk19" class="toggle"></label>
                                                                           </div>
                                                                           <span class="star-toggle bx bxs-star text-warning"></span>
                                                                           <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="title">Death to Stock</a>
                                                                      </div>
                                                                      <div class="col-mail col-mail-2">
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                                (no subject)
                                                                                <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bxs-file-pdf text-danger me-2"></i>dashboard.pdf</span>
                                                                                <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bxs-file-pdf text-danger me-2"></i>pages-data.pdf</span>
                                                                           </a>
                                                                           <div class="date">Feb 28</div>
                                                                      </div>
                                                                 </li>
                                                                 <li>
                                                                      <div class="col-mail col-mail-1">
                                                                           <div class="checkbox-wrapper-mail">
                                                                                <input type="checkbox" id="InboxChk20">
                                                                                <label for="InboxChk20" class="toggle"></label>
                                                                           </div>
                                                                           <span class="star-toggle bx bx-star"></span>
                                                                           <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="title">Revibe</a>
                                                                      </div>
                                                                      <div class="col-mail col-mail-2">
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                                (no subject)
                                                                                <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bi bxs-file-word text-blue me-2"></i>doc1.doc</span>
                                                                                <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bi bxs-file-word text-blue me-2"></i>doc2.doc</span>
                                                                                <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bi bxs-file-word text-blue me-2"></i>doc3.doc</span>
                                                                                <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bi bxs-file-word text-blue me-2"></i>doc4.doc</span>
                                                                           </a>
                                                                           <div class="date">Feb 27</div>
                                                                      </div>
                                                                 </li>
                                                            </ul> <!-- end message list -->
                                                       </div> <!-- end social mail tab pane -->
                                                       <div class="tab-pane" id="PromotionsMail">
                                                            <ul class="message-list mb-0">
                                                                 <li>
                                                                      <div class="col-mail col-mail-1">
                                                                           <div class="checkbox-wrapper-mail">
                                                                                <input type="checkbox" id="InboxChk21">
                                                                                <label for="InboxChk21" class="toggle"></label>
                                                                           </div>
                                                                           <span class="star-toggle bx bx-star"></span>
                                                                           <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="title">Tobias Berggren</a>
                                                                      </div>
                                                                      <div class="col-mail col-mail-2">
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                                Let's go fishing! &nbsp;&ndash;&nbsp;
                                                                                <span>
                                                                                     Hey, You wanna join me and Fred at the lake tomorrow? It'll be awesome.
                                                                                </span>
                                                                           </a>
                                                                           <div class="date">Feb 23</div>
                                                                      </div>
                                                                 </li>
                                                                 <li>
                                                                      <div class="col-mail col-mail-1">
                                                                           <div class="checkbox-wrapper-mail">
                                                                                <input type="checkbox" id="InboxChk22">
                                                                                <label for="InboxChk22" class="toggle"></label>
                                                                           </div>
                                                                           <span class="star-toggle bx bxs-star text-warning"></span>
                                                                           <span class="bx bx-tag-alt important-toggle"></span>
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="title">Charukaw, me (7)</a>
                                                                      </div>
                                                                      <div class="col-mail col-mail-2">
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                                Hey man &nbsp;&ndash;&nbsp;
                                                                                <span>
                                                                                     Nah man sorry i don't. Should i get it?
                                                                                </span>
                                                                           </a>
                                                                           <div class="date">Feb 23</div>
                                                                      </div>
                                                                 </li>
                                                                 <li>
                                                                      <div class="col-mail col-mail-1">
                                                                           <div class="checkbox-wrapper-mail">
                                                                                <input type="checkbox" id="InboxChk23">
                                                                                <label for="InboxChk23" class="toggle"></label>
                                                                           </div>
                                                                           <span class="star-toggle bx bxs-star text-warning"></span>
                                                                           <span class="bx bx-tag-alt important-toggle"></span>
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="title">Stack Exchange</a>
                                                                      </div>
                                                                      <div class="col-mail col-mail-2">
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                                1 new items in your Stackexchange inbox &nbsp;&ndash;&nbsp;
                                                                                <span>
                                                                                     The following items were added to your Stack Exchange global inbox since you last checked it.
                                                                                </span>
                                                                           </a>
                                                                           <div class="date">Feb 21</div>
                                                                      </div>
                                                                 </li>
                                                                 <li>
                                                                      <div class="col-mail col-mail-1">
                                                                           <div class="checkbox-wrapper-mail">
                                                                                <input type="checkbox" id="InboxChk24">
                                                                                <label for="InboxChk24" class="toggle"></label>
                                                                           </div>
                                                                           <span class="star-toggle bx bxs-star text-warning"></span>
                                                                           <span class="bx bx-tag-alt important-toggle"></span>
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="title">Google Drive Team</a>
                                                                      </div>
                                                                      <div class="col-mail col-mail-2">
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                                You can now use your storage in Google Drive &nbsp;&ndash;&nbsp;
                                                                                <span>
                                                                                     Hey Nicklas Sandell! Thank you for purchasing extra storage space in Google Drive.
                                                                                </span>
                                                                           </a>
                                                                           <div class="date">Feb 20</div>
                                                                      </div>
                                                                 </li>
                                                                 <li>
                                                                      <div class="col-mail col-mail-1">
                                                                           <div class="checkbox-wrapper-mail">
                                                                                <input type="checkbox" id="InboxChk25">
                                                                                <label for="InboxChk25" class="toggle"></label>
                                                                           </div>
                                                                           <span class="star-toggle bx bx-star"></span>
                                                                           <span class="bx bx-tag-alt important-toggle"></span>
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="title">Peter, me (3)</a>
                                                                      </div>
                                                                      <div class="col-mail col-mail-2">
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                                Hello &nbsp;&ndash;&nbsp;
                                                                                <span>
                                                                                     Trip home from Colombo has been arranged, then Jenna will come get me from Stockholm. :)
                                                                                </span>
                                                                           </a>
                                                                           <div class="date">Mar 6</div>
                                                                      </div>
                                                                 </li>
                                                            </ul> <!-- end message list -->
                                                       </div> <!-- end promotion mail tab pane -->
                                                       <div class="tab-pane" id="updatesMail">
                                                            <ul class="message-list mb-0">
                                                                 <li class="unread">
                                                                      <div class="col-mail col-mail-1">
                                                                           <div class="checkbox-wrapper-mail">
                                                                                <input type="checkbox" id="InboxChk26">
                                                                                <label for="InboxChk26" class="toggle"></label>
                                                                           </div>
                                                                           <span class="star-toggle bx bx-star"></span>
                                                                           <span class="bx bx-tag-alt important-toggle"></span>
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="title">Medium</a>
                                                                      </div>
                                                                      <div class="col-mail col-mail-2">
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                                This Week's Top Stories &nbsp;&ndash;&nbsp;
                                                                                <span>
                                                                                     Our top pick for you on Medium this week The Man Who Destroyed America's Ego
                                                                                </span>
                                                                           </a>
                                                                           <div class="date">Feb 28</div>
                                                                      </div>
                                                                 </li>
                                                                 <li>
                                                                      <div class="col-mail col-mail-1">
                                                                           <div class="checkbox-wrapper-mail">
                                                                                <input type="checkbox" id="InboxChk27">
                                                                                <label for="InboxChk27" class="toggle"></label>
                                                                           </div>
                                                                           <span class="star-toggle bx bxs-star text-warning"></span>
                                                                           <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="title">Death to Stock</a>
                                                                      </div>
                                                                      <div class="col-mail col-mail-2">
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                                (no subject)
                                                                                <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bxs-file-pdf text-danger me-2"></i>dashboard.pdf</span>
                                                                                <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bxs-file-pdf text-danger me-2"></i>pages-data.pdf</span>
                                                                           </a>
                                                                           <div class="date">Feb 28</div>
                                                                      </div>
                                                                 </li>
                                                                 <li>
                                                                      <div class="col-mail col-mail-1">
                                                                           <div class="checkbox-wrapper-mail">
                                                                                <input type="checkbox" id="InboxChk28">
                                                                                <label for="InboxChk28" class="toggle"></label>
                                                                           </div>
                                                                           <span class="star-toggle bx bx-star"></span>
                                                                           <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="title">Revibe</a>
                                                                      </div>
                                                                      <div class="col-mail col-mail-2">
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                                (no subject)
                                                                                <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bi bxs-file-word text-blue me-2"></i>doc1.doc</span>
                                                                                <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bi bxs-file-word text-blue me-2"></i>doc2.doc</span>
                                                                                <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bi bxs-file-word text-blue me-2"></i>doc3.doc</span>
                                                                                <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bi bxs-file-word text-blue me-2"></i>doc4.doc</span>
                                                                           </a>
                                                                           <div class="date">Feb 27</div>
                                                                      </div>
                                                                 </li>
                                                                 <li>
                                                                      <div class="col-mail col-mail-1">
                                                                           <div class="checkbox-wrapper-mail">
                                                                                <input type="checkbox" id="InboxChk29">
                                                                                <label for="InboxChk29" class="toggle"></label>
                                                                           </div>
                                                                           <span class="star-toggle bx bxs-star text-warning"></span>
                                                                           <span class="bx bx-tag-alt important-toggle"></span>
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="title">Erik, me (5)</a>
                                                                      </div>
                                                                      <div class="col-mail col-mail-2">
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                                Regarding our meeting &nbsp;&ndash;&nbsp;
                                                                                <span>
                                                                                     That's great, see you on Thursday!
                                                                                </span>
                                                                           </a>
                                                                           <div class="date">Feb 24</div>
                                                                      </div>
                                                                 </li>
                                                                 <li>
                                                                      <div class="col-mail col-mail-1">
                                                                           <div class="checkbox-wrapper-mail">
                                                                                <input type="checkbox" id="InboxChk30">
                                                                                <label for="InboxChk30" class="toggle"></label>
                                                                           </div>
                                                                           <span class="star-toggle bx bxs-star text-warning"></span>
                                                                           <span class="bx bx-tag-alt important-toggle"></span>
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="title">KanbanFlow</a>
                                                                      </div>
                                                                      <div class="col-mail col-mail-2">
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                                Task assigned: Clone ARP's website &nbsp;&ndash;&nbsp;
                                                                                <span>
                                                                                     You have been assigned a task by Alex@Work on the board Web.
                                                                                </span>
                                                                           </a>
                                                                           <div class="date">Feb 24</div>
                                                                      </div>
                                                                 </li>
                                                                 <li>
                                                                      <div class="col-mail col-mail-1">
                                                                           <div class="checkbox-wrapper-mail">
                                                                                <input type="checkbox" id="InboxChk31">
                                                                                <label for="InboxChk31" class="toggle"></label>
                                                                           </div>
                                                                           <span class="star-toggle bx bx-star"></span>
                                                                           <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="title">Tobias Berggren</a>
                                                                      </div>
                                                                      <div class="col-mail col-mail-2">
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                                Let's go fishing! &nbsp;&ndash;&nbsp;
                                                                                <span>
                                                                                     Hey, You wanna join me and Fred at the lake tomorrow? It'll be awesome.
                                                                                </span>
                                                                           </a>
                                                                           <div class="date">Feb 23</div>
                                                                      </div>
                                                                 </li>
                                                                 <li>
                                                                      <div class="col-mail col-mail-1">
                                                                           <div class="checkbox-wrapper-mail">
                                                                                <input type="checkbox" id="InboxChk32">
                                                                                <label for="InboxChk32" class="toggle"></label>
                                                                           </div>
                                                                           <span class="star-toggle bx bxs-star text-warning"></span>
                                                                           <span class="bx bx-tag-alt important-toggle"></span>
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="title">Charukaw, me (7)</a>
                                                                      </div>
                                                                      <div class="col-mail col-mail-2">
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                                Hey man &nbsp;&ndash;&nbsp;
                                                                                <span>
                                                                                     Nah man sorry i don't. Should i get it?
                                                                                </span>
                                                                           </a>
                                                                           <div class="date">Feb 23</div>
                                                                      </div>
                                                                 </li>
                                                                 <li>
                                                                      <div class="col-mail col-mail-1">
                                                                           <div class="checkbox-wrapper-mail">
                                                                                <input type="checkbox" id="InboxChk33">
                                                                                <label for="InboxChk33" class="toggle"></label>
                                                                           </div>
                                                                           <span class="star-toggle bx bxs-star text-warning"></span>
                                                                           <span class="bx bx-tag-alt important-toggle"></span>
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="title">Stack Exchange</a>
                                                                      </div>
                                                                      <div class="col-mail col-mail-2">
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                                1 new items in your Stackexchange inbox &nbsp;&ndash;&nbsp;
                                                                                <span>
                                                                                     The following items were added to your Stack Exchange global inbox since you last checked it.
                                                                                </span>
                                                                           </a>
                                                                           <div class="date">Feb 21</div>
                                                                      </div>
                                                                 </li>
                                                                 <li>
                                                                      <div class="col-mail col-mail-1">
                                                                           <div class="checkbox-wrapper-mail">
                                                                                <input type="checkbox" id="InboxChk34">
                                                                                <label for="InboxChk34" class="toggle"></label>
                                                                           </div>
                                                                           <span class="star-toggle bx bxs-star text-warning"></span>
                                                                           <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="title">Google Drive Team</a>
                                                                      </div>
                                                                      <div class="col-mail col-mail-2">
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                                You can now use your storage in Google Drive &nbsp;&ndash;&nbsp;
                                                                                <span>
                                                                                     Hey Nicklas Sandell! Thank you for purchasing extra storage space in Google Drive.
                                                                                </span>
                                                                           </a>
                                                                           <div class="date">Feb 20</div>
                                                                      </div>
                                                                 </li>
                                                            </ul> <!-- end message list -->
                                                       </div> <!-- end update mail tab pane -->
                                                       <div class="tab-pane" id="forumsMail">
                                                            <ul class="message-list mb-0">
                                                                 <li class="unread">
                                                                      <div class="col-mail col-mail-1">
                                                                           <div class="checkbox-wrapper-mail">
                                                                                <input type="checkbox" id="InboxChk35">
                                                                                <label for="InboxChk35" class="toggle"></label>
                                                                           </div>
                                                                           <span class="star-toggle bx bxs-star text-warning"></span>
                                                                           <span class="bx bx-tag-alt important-toggle"></span>
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="title">KanbanFlow</a>
                                                                      </div>
                                                                      <div class="col-mail col-mail-2">
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                                Task assigned: Clone ARP's website &nbsp;&ndash;&nbsp;
                                                                                <span>
                                                                                     You have been assigned a task by Alex@Work on the board Web.
                                                                                </span>
                                                                           </a>
                                                                           <div class="date">Feb 24</div>
                                                                      </div>
                                                                 </li>
                                                                 <li class="unread">
                                                                      <div class="col-mail col-mail-1">
                                                                           <div class="checkbox-wrapper-mail">
                                                                                <input type="checkbox" id="InboxChk36">
                                                                                <label for="InboxChk36" class="toggle"></label>
                                                                           </div>
                                                                           <span class="star-toggle bx bx-star"></span>
                                                                           <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="title">Tobias Berggren</a>
                                                                      </div>
                                                                      <div class="col-mail col-mail-2">
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                                Let's go fishing! &nbsp;&ndash;&nbsp;
                                                                                <span>
                                                                                     Hey, You wanna join me and Fred at the lake tomorrow? It'll be awesome.
                                                                                </span>
                                                                           </a>
                                                                           <div class="date">Feb 23</div>
                                                                      </div>
                                                                 </li>
                                                                 <li>
                                                                      <div class="col-mail col-mail-1">
                                                                           <div class="checkbox-wrapper-mail">
                                                                                <input type="checkbox" id="InboxChk37">
                                                                                <label for="InboxChk37" class="toggle"></label>
                                                                           </div>
                                                                           <span class="star-toggle bx bxs-star text-warning"></span>
                                                                           <span class="bx bx-tag-alt important-toggle"></span>
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="title">Charukaw, me (7)</a>
                                                                      </div>
                                                                      <div class="col-mail col-mail-2">
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                                Hey man &nbsp;&ndash;&nbsp;
                                                                                <span>
                                                                                     Nah man sorry i don't. Should i get it?
                                                                                </span>
                                                                           </a>
                                                                           <div class="date">Feb 23</div>
                                                                      </div>
                                                                 </li>
                                                                 <li>
                                                                      <div class="col-mail col-mail-1">
                                                                           <div class="checkbox-wrapper-mail">
                                                                                <input type="checkbox" id="InboxChk38">
                                                                                <label for="InboxChk38" class="toggle"></label>
                                                                           </div>
                                                                           <span class="star-toggle bx bxs-star text-warning"></span>
                                                                           <span class="bx bx-tag-alt important-toggle"></span>
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="title">Stack Exchange</a>
                                                                      </div>
                                                                      <div class="col-mail col-mail-2">
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                                1 new items in your Stackexchange inbox &nbsp;&ndash;&nbsp;
                                                                                <span>
                                                                                     The following items were added to your Stack Exchange global inbox since you last checked it.
                                                                                </span>
                                                                           </a>
                                                                           <div class="date">Feb 21</div>
                                                                      </div>
                                                                 </li>
                                                                 <li>
                                                                      <div class="col-mail col-mail-1">
                                                                           <div class="checkbox-wrapper-mail">
                                                                                <input type="checkbox" id="InboxChk39">
                                                                                <label for="InboxChk39" class="toggle"></label>
                                                                           </div>
                                                                           <span class="star-toggle bx bxs-star text-warning"></span>
                                                                           <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="title">Google Drive Team</a>
                                                                      </div>
                                                                      <div class="col-mail col-mail-2">
                                                                           <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                                You can now use your storage in Google Drive &nbsp;&ndash;&nbsp;
                                                                                <span>
                                                                                     Hey Nicklas Sandell! Thank you for purchasing extra storage space in Google Drive.
                                                                                </span>
                                                                           </a>
                                                                           <div class="date">Feb 20</div>
                                                                      </div>
                                                                 </li>
                                                            </ul> <!-- end message list -->
                                                       </div> <!-- end forum mail tab pane -->
                                                  </div> <!-- end tab content -->
                                             </div>
                                        </div>

                                        <div class="tab-pane fade" id="email-starred" role="tabpanel" aria-labelledby="email-starred-tab">
                                             <ul class="message-list mb-0">
                                                  <li class="unread">
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="StarredChk1">
                                                                 <label for="StarredChk1" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bxs-star star-toggle text-warning"></span>
                                                            <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Daniel J. Olsen</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 Lucas Kriebel (@Daniel J. Olsen) has sent you a direct message on Twitter! &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      @Daniel J. Olsen - Very cool :) Nicklas, You have a new direct message.
                                                                 </span>
                                                            </a>
                                                            <div class="date">11:49 am</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="StarredChk2">
                                                                 <label for="StarredChk2" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bxs-star star-toggle text-warning"></span>
                                                            <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Jack P. Roldan</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 Images
                                                                 <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bx-images text-primary me-2"></i>IMG_201</span>
                                                                 <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bx-images text-primary me-2"></i>IMG_202</span>
                                                                 <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bx-images text-primary me-2"></i>IMG_203</span>
                                                                 <span class="badge bg-light border text-dark fw-semibold rounded-circle">+5</span>
                                                            </a>
                                                            <div class="date">Feb 21</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="StarredChk3">
                                                                 <label for="StarredChk3" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bxs-star star-toggle text-warning"></span>
                                                            <span class="bx bx-tag-alt important-toggle"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Betty C. Cox (11)</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 Train/Bus &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      Yes ok, great! I'm not stuck in Stockholm anymore, we're making progress.
                                                                 </span>
                                                            </a>
                                                            <div class="date">Feb 19</div>
                                                       </div>
                                                  </li>
                                                  <li class="unread">
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="StarredChk4">
                                                                 <label for="StarredChk4" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bxs-star star-toggle text-warning"></span>
                                                            <span class="bx bx-tag-alt important-toggle"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Medium</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 This Week's Top Stories &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      Our top pick for you on Medium this week The Man Who Destroyed America's Ego
                                                                 </span>
                                                            </a>
                                                            <div class="date">Feb 28</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="StarredChk5">
                                                                 <label for="StarredChk5" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bxs-star star-toggle text-warning"></span>
                                                            <span class="bx bx-tag-alt important-toggle"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Death to Stock</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 (no subject)
                                                                 <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bxs-file-pdf text-danger me-2"></i>dashboard.pdf</span>
                                                                 <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bxs-file-pdf text-danger me-2"></i>pages-data.pdf</span>
                                                            </a>
                                                            <div class="date">Feb 28</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="StarredChk6">
                                                                 <label for="StarredChk6" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bxs-star star-toggle text-warning"></span>
                                                            <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Revibe</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 (no subject)
                                                                 <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bxs-file-doc text-blue me-2"></i>doc1.doc</span>
                                                                 <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bxs-file-doc text-blue me-2"></i>doc2.doc</span>
                                                                 <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bxs-file-doc text-blue me-2"></i>doc3.doc</span>
                                                                 <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bxs-file-doc text-blue me-2"></i>doc4.doc</span>
                                                            </a>
                                                            <div class="date">Feb 27</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="StarredChk7">
                                                                 <label for="StarredChk7" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bxs-star star-toggle text-warning"></span>
                                                            <span class="bx bx-tag-alt important-toggle"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Erik, me (5)</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 Regarding our meeting &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      That's great, see you on Thursday!
                                                                 </span>
                                                            </a>
                                                            <div class="date">Feb 24</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="StarredChk8">
                                                                 <label for="StarredChk8" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bxs-star star-toggle text-warning"></span>
                                                            <span class="bx bx-tag-alt important-toggle"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">KanbanFlow</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 Task assigned: Clone ARP's website &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      You have been assigned a task by Alex@Work on the board Web.
                                                                 </span>
                                                            </a>
                                                            <div class="date">Feb 24</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="StarredChk9">
                                                                 <label for="StarredChk9" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bxs-star star-toggle text-warning"></span>
                                                            <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Tobias Berggren</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 Let's go fishing! &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      Hey, You wanna join me and Fred at the lake tomorrow? It'll be awesome.
                                                                 </span>
                                                            </a>
                                                            <div class="date">Feb 23</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="StarredChk10">
                                                                 <label for="StarredChk10" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bxs-star star-toggle text-warning"></span>
                                                            <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Charukaw, me (7)</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 Hey man &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      Nah man sorry i don't. Should i get it?
                                                                 </span>
                                                            </a>
                                                            <div class="date">Feb 23</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="StarredChk11">
                                                                 <label for="StarredChk11" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bxs-star star-toggle text-warning"></span>
                                                            <span class="bx bx-tag-alt important-toggle"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Stack Exchange</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 1 new items in your Stackexchange inbox &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      The following items were added to your Stack Exchange global inbox since you last checked it.
                                                                 </span>
                                                            </a>
                                                            <div class="date">Feb 21</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="StarredChk12">
                                                                 <label for="StarredChk12" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bxs-star star-toggle text-warning"></span>
                                                            <span class="bx bx-tag-alt important-toggle"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Google Drive Team</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 You can now use your storage in Google Drive &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      Hey Nicklas Sandell! Thank you for purchasing extra storage space in Google Drive.
                                                                 </span>
                                                            </a>
                                                            <div class="date">Feb 20</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="StarredChk13">
                                                                 <label for="StarredChk13" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bxs-star star-toggle text-warning"></span>
                                                            <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Peter, me (3)</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 Hello &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      Trip home from Colombo has been arranged, then Jenna will come get me from Stockholm. :)
                                                                 </span>
                                                            </a>
                                                            <div class="date">Mar 6</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="StarredChk14">
                                                                 <label for="StarredChk14" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bxs-star star-toggle text-warning"></span>
                                                            <span class="bx bx-tag-alt important-toggle"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">me, Susanna (7)</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 Since you asked... and i'm inconceivably bored at the train station &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      Alright thanks. I'll have to re-book that somehow, i'll get back to you.
                                                                 </span>
                                                            </a>
                                                            <div class="date">Mar 6</div>
                                                       </div>
                                                  </li>
                                             </ul> <!-- end message list -->
                                        </div>

                                        <div class="tab-pane fade" id="email-draft" role="tabpanel" aria-labelledby="email-draft-tab">
                                             <hr />
                                             <div class="text-center mt-2">
                                                  <p class="mb-0">You don't have any saved drafts.</p>
                                                  <p class="mb-0">Saving a draft allows you to keep a message you aren't ready to send yet.</p>
                                             </div>
                                             <hr class="mb-0" />
                                        </div>

                                        <div class="tab-pane fade" id="email-sent" role="tabpanel" aria-labelledby="email-sent-tab">
                                             <ul class="message-list mb-0">
                                                  <li class="unread">
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="SentChk1">
                                                                 <label for="SentChk1" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bx-star star-toggle"></span>
                                                            <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">To: @Daniel J. Olsen</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 Lucas Kriebel (@Daniel J. Olsen) has sent you a direct message on Twitter! &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      @Daniel J. Olsen - Very cool :) Nicklas, You have a new direct message.
                                                                 </span>
                                                            </a>
                                                            <div class="date">11:49 am</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="SentChk2">
                                                                 <label for="SentChk2" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bxs-star star-toggle text-warning"></span>
                                                            <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">To: @Jack P. Roldan</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 Images
                                                                 <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bx-images text-primary me-2"></i>IMG_201</span>
                                                                 <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bx-images text-primary me-2"></i>IMG_202</span>
                                                                 <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bx-images text-primary me-2"></i>IMG_203</span>
                                                                 <span class="badge bg-light border text-dark fw-semibold rounded-circle">+5</span>
                                                            </a>
                                                            <div class="date">Feb 21</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="SentChk3">
                                                                 <label for="SentChk3" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bxs-star star-toggle text-warning"></span>
                                                            <span class="bx bx-tag-alt important-toggle"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">To: @Betty C. Cox (11)</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 Train/Bus &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      Yes ok, great! I'm not stuck in Stockholm anymore, we're making progress.
                                                                 </span>
                                                            </a>
                                                            <div class="date">Feb 19</div>
                                                       </div>
                                                  </li>
                                                  <li class="unread">
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="SentChk4">
                                                                 <label for="SentChk4" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bx-star star-toggle"></span>
                                                            <span class="bx bx-tag-alt important-toggle"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">To: @Medium</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 This Week's Top Stories &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      Our top pick for you on Medium this week The Man Who Destroyed America's Ego
                                                                 </span>
                                                            </a>
                                                            <div class="date">Feb 28</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="SentChk5">
                                                                 <label for="SentChk5" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bx-star star-toggle"></span>
                                                            <span class="bx bx-tag-alt important-toggle"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">To: @Death to Stock</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 (no subject)
                                                                 <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bxs-file-pdf text-danger me-2"></i>dashboard.pdf</span>
                                                                 <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bxs-file-pdf text-danger me-2"></i>pages-data.pdf</span>
                                                            </a>
                                                            <div class="date">Feb 28</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="SentChk6">
                                                                 <label for="SentChk6" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bx-star star-toggle"></span>
                                                            <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">To: Revibe</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 (no subject)
                                                                 <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bxs-file-doc text-blue me-2"></i>doc1.doc</span>
                                                                 <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bxs-file-doc text-blue me-2"></i>doc2.doc</span>
                                                                 <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bxs-file-doc text-blue me-2"></i>doc3.doc</span>
                                                                 <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bxs-file-doc text-blue me-2"></i>doc4.doc</span>
                                                            </a>
                                                            <div class="date">Feb 27</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="SentChk7">
                                                                 <label for="SentChk7" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bxs-star star-toggle text-warning"></span>
                                                            <span class="bx bx-tag-alt important-toggle"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">To: @Erik, me (5)</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 Regarding our meeting &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      That's great, see you on Thursday!
                                                                 </span>
                                                            </a>
                                                            <div class="date">Feb 24</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="SentChk8">
                                                                 <label for="SentChk8" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bx-star star-toggle"></span>
                                                            <span class="bx bx-tag-alt important-toggle"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">To: KanbanFlow</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 Task assigned: Clone ARP's website &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      You have been assigned a task by Alex@Work on the board Web.
                                                                 </span>
                                                            </a>
                                                            <div class="date">Feb 24</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="SentChk9">
                                                                 <label for="SentChk9" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bx-star star-toggle"></span>
                                                            <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">To: @Tobias Berggren</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 Let's go fishing! &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      Hey, You wanna join me and Fred at the lake tomorrow? It'll be awesome.
                                                                 </span>
                                                            </a>
                                                            <div class="date">Feb 23</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="SentChk10">
                                                                 <label for="SentChk10" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bx-star star-toggle"></span>
                                                            <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">To: Charukaw, me (7)</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 Hey man &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      Nah man sorry i don't. Should i get it?
                                                                 </span>
                                                            </a>
                                                            <div class="date">Feb 23</div>
                                                       </div>
                                                  </li>
                                             </ul> <!-- end message list -->
                                        </div>

                                        <div class="tab-pane fade" id="email-trash" role="tabpanel" aria-labelledby="email-trash-tab">
                                             <hr />
                                             <div class="text-center mt-2">
                                                  <p class="mb-0">
                                                       Messages that have been in Trash more than 30 days will be automatically deleted.
                                                       <a href="javascript: void(0);" class="text-primary ms-2">Empty Trash Now</a>
                                                  </p>
                                             </div>
                                             <hr class="mb-3" />

                                             <ul class="message-list mb-0">
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="TrashChk9">
                                                                 <label for="TrashChk9" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bx-tag-alt important-toggle"></span>
                                                            <span class="bx bxs-trash trash-toggle"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Dolly K. Sullivan</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 Let's go fishing! &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      Hey, You wanna join me and Fred at the lake tomorrow? It'll be awesome.
                                                                 </span>
                                                            </a>
                                                            <div class="date">Feb 23</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="TrashChk10">
                                                                 <label for="TrashChk10" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                            <span class="bx bxs-trash trash-toggle"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Miriam R. Egan (7)</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 Hey man &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      Nah man sorry i don't. Should i get it?
                                                                 </span>
                                                            </a>
                                                            <div class="date">Feb 23</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="TrashChk11">
                                                                 <label for="TrashChk11" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                            <span class="bx bxs-trash trash-toggle"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Lisa G. Nixon</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 1 new items in your Stackexchange inbox &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      The following items were added to your Stack Exchange global inbox since you last checked it.
                                                                 </span>
                                                            </a>
                                                            <div class="date">Feb 21</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="TrashChk12">
                                                                 <label for="TrashChk12" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                            <span class="bx bxs-trash trash-toggle"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Thomas T. Russell</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 You can now use your storage in Google Drive &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      Hey Nicklas Sandell! Thank you for purchasing extra storage space in Google Drive.
                                                                 </span>
                                                            </a>
                                                            <div class="date">Feb 20</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="TrashChk13">
                                                                 <label for="TrashChk13" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bx-tag-alt important-toggle"></span>
                                                            <span class="bx bxs-trash trash-toggle"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Erlinda A. Blair, me (3)</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 Hello &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      Trip home from Colombo has been arranged, then Jenna will come get me from Stockholm. :)
                                                                 </span>
                                                            </a>
                                                            <div class="date">Mar 6</div>
                                                       </div>
                                                  </li>
                                             </ul> <!-- end message list -->
                                        </div>

                                        <div class="tab-pane fade" id="email-important" role="tabpanel" aria-labelledby="email-important-tab">
                                             <ul class="message-list mb-0">
                                                  <li class="unread">
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="ImpChk1">
                                                                 <label for="ImpChk1" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bx-star star-toggle"></span>
                                                            <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Daniel J. Olsen</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 Lucas Kriebel (@Daniel J. Olsen) has sent you a direct message on Twitter! &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      @Daniel J. Olsen - Very cool :) Nicklas, You have a new direct message.
                                                                 </span>
                                                            </a>
                                                            <div class="date">11:49 am</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="ImpChk2">
                                                                 <label for="ImpChk2" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bx-star star-toggle"></span>
                                                            <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Jack P. Roldan</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 Images
                                                                 <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bx-images text-primary me-2"></i>IMG_201</span>
                                                                 <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bx-images text-primary me-2"></i>IMG_202</span>
                                                                 <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bx-images text-primary me-2"></i>IMG_203</span>
                                                                 <span class="badge bg-light border text-dark fw-semibold rounded-circle">+5</span>
                                                            </a>
                                                            <div class="date">Feb 21</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="ImpChk3">
                                                                 <label for="ImpChk3" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bx-star star-toggle"></span>
                                                            <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Betty C. Cox (11)</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 Train/Bus &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      Yes ok, great! I'm not stuck in Stockholm anymore, we're making progress.
                                                                 </span>
                                                            </a>
                                                            <div class="date">Feb 19</div>
                                                       </div>
                                                  </li>
                                                  <li class="unread">
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="ImpChk4">
                                                                 <label for="ImpChk4" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bxs-star star-toggle text-warning"></span>
                                                            <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Medium</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 This Week's Top Stories &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      Our top pick for you on Medium this week The Man Who Destroyed America's Ego
                                                                 </span>
                                                            </a>
                                                            <div class="date">Feb 28</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="ImpChk5">
                                                                 <label for="ImpChk5" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bx-star star-toggle"></span>
                                                            <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Death to Stock</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 (no subject)
                                                                 <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bxs-file-pdf text-danger me-2"></i>dashboard.pdf</span>
                                                                 <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bxs-file-pdf text-danger me-2"></i>pages-data.pdf</span>
                                                            </a>
                                                            <div class="date">Feb 28</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="ImpChk6">
                                                                 <label for="ImpChk6" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bx-star star-toggle"></span>
                                                            <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Revibe</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 (no subject)
                                                                 <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bxs-file-doc text-blue me-2"></i>doc1.doc</span>
                                                                 <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bxs-file-doc text-blue me-2"></i>doc2.doc</span>
                                                                 <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bxs-file-doc text-blue me-2"></i>doc3.doc</span>
                                                                 <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bxs-file-doc text-blue me-2"></i>doc4.doc</span>
                                                            </a>
                                                            <div class="date">Feb 27</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="ImpChk7">
                                                                 <label for="ImpChk7" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bxs-star star-toggle text-warning"></span>
                                                            <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Erik, me (5)</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 Regarding our meeting &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      That's great, see you on Thursday!
                                                                 </span>
                                                            </a>
                                                            <div class="date">Feb 24</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="ImpChk12">
                                                                 <label for="ImpChk12" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bx-star star-toggle"></span>
                                                            <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Google Drive Team</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 You can now use your storage in Google Drive &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      Hey Nicklas Sandell! Thank you for purchasing extra storage space in Google Drive.
                                                                 </span>
                                                            </a>
                                                            <div class="date">Feb 20</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="ImpChk14">
                                                                 <label for="ImpChk14" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bxs-star star-toggle text-warning"></span>
                                                            <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">me, Susanna (7)</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 Since you asked... and i'm inconceivably bored at the train station &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      Alright thanks. I'll have to re-book that somehow, i'll get back to you.
                                                                 </span>
                                                            </a>
                                                            <div class="date">Mar 6</div>
                                                       </div>
                                                  </li>
                                             </ul> <!-- end message list -->
                                        </div>

                                        <div class="tab-pane fade" id="email-updates" role="tabpanel" aria-labelledby="email-updates-tab">
                                             <ul class="message-list mb-0">
                                                  <li class="unread">
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="UpdateChk4">
                                                                 <label for="UpdateChk4" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bx-star star-toggle"></span>
                                                            <span class="bx bx-tag-alt important-toggle"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Medium</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 This Week's Top Stories &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      Our top pick for you on Medium this week The Man Who Destroyed America's Ego
                                                                 </span>
                                                            </a>
                                                            <div class="date">Feb 28</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="UpdateChk5">
                                                                 <label for="UpdateChk5" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bxs-star star-toggle text-warning"></span>
                                                            <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Death to Stock</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 (no subject)
                                                                 <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bxs-file-pdf text-danger me-2"></i>dashboard.pdf</span>
                                                                 <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bxs-file-pdf text-danger me-2"></i>pages-data.pdf</span>
                                                            </a>
                                                            <div class="date">Feb 28</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="UpdateChk6">
                                                                 <label for="UpdateChk6" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bx-star star-toggle"></span>
                                                            <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Revibe</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 (no subject)
                                                                 <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bxs-file-doc text-blue me-2"></i>doc1.doc</span>
                                                                 <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bxs-file-doc text-blue me-2"></i>doc2.doc</span>
                                                                 <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bxs-file-doc text-blue me-2"></i>doc3.doc</span>
                                                                 <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bxs-file-doc text-blue me-2"></i>doc4.doc</span>
                                                            </a>
                                                            <div class="date">Feb 27</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="UpdateChk7">
                                                                 <label for="UpdateChk7" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bxs-star star-toggle text-warning"></span>
                                                            <span class="bx bx-tag-alt important-toggle"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Erik, me (5)</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 Regarding our meeting &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      That's great, see you on Thursday!
                                                                 </span>
                                                            </a>
                                                            <div class="date">Feb 24</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="UpdateChk8">
                                                                 <label for="UpdateChk8" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bxs-star star-toggle text-warning"></span>
                                                            <span class="bx bx-tag-alt important-toggle"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">KanbanFlow</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 Task assigned: Clone ARP's website &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      You have been assigned a task by Alex@Work on the board Web.
                                                                 </span>
                                                            </a>
                                                            <div class="date">Feb 24</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="UpdateChk9">
                                                                 <label for="UpdateChk9" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bx-star star-toggle"></span>
                                                            <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Tobias Berggren</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 Let's go fishing! &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      Hey, You wanna join me and Fred at the lake tomorrow? It'll be awesome.
                                                                 </span>
                                                            </a>
                                                            <div class="date">Feb 23</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="UpdateChk10">
                                                                 <label for="UpdateChk10" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bxs-star star-toggle text-warning"></span>
                                                            <span class="bx bx-tag-alt important-toggle"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Charukaw, me (7)</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 Hey man &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      Nah man sorry i don't. Should i get it?
                                                                 </span>
                                                            </a>
                                                            <div class="date">Feb 23</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="UpdateChk11">
                                                                 <label for="UpdateChk11" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bxs-star star-toggle text-warning"></span>
                                                            <span class="bx bx-tag-alt important-toggle"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Stack Exchange</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 1 new items in your Stackexchange inbox &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      The following items were added to your Stack Exchange global inbox since you last checked it.
                                                                 </span>
                                                            </a>
                                                            <div class="date">Feb 21</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="UpdateChk12">
                                                                 <label for="UpdateChk12" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bxs-star star-toggle text-warning"></span>
                                                            <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Google Drive Team</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 You can now use your storage in Google Drive &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      Hey Nicklas Sandell! Thank you for purchasing extra storage space in Google Drive.
                                                                 </span>
                                                            </a>
                                                            <div class="date">Feb 20</div>
                                                       </div>
                                                  </li>
                                             </ul> <!-- end message list -->
                                        </div>

                                        <div class="tab-pane fade" id="email-social" role="tabpanel" aria-labelledby="email-social-tab">
                                             <ul class="message-list mb-0">
                                                  <li class="unread">
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="SocialChk1">
                                                                 <label for="SocialChk1" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bx-star star-toggle"></span>
                                                            <span class="bx bx-tag-alt important-toggle"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Daniel J. Olsen</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 Lucas Kriebel (@Daniel J. Olsen) has sent you a direct message on Twitter! &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      @Daniel J. Olsen - Very cool :) Nicklas, You have a new direct message.
                                                                 </span>
                                                            </a>
                                                            <div class="date">11:49 am</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="SocialChk2">
                                                                 <label for="SocialChk2" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bxs-star star-toggle text-warning"></span>
                                                            <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Jack P. Roldan</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 Images
                                                                 <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bx-images text-primary me-2"></i>IMG_201</span>
                                                                 <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bx-images text-primary me-2"></i>IMG_202</span>
                                                                 <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bx-images text-primary me-2"></i>IMG_203</span>
                                                                 <span class="badge bg-light border text-dark fw-semibold rounded-circle">+5</span>
                                                            </a>
                                                            <div class="date">Feb 21</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="SocialChk3">
                                                                 <label for="SocialChk3" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bx-star star-toggle"></span>
                                                            <span class="bx bx-tag-alt important-toggle"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Betty C. Cox (11)</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 Train/Bus &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      Yes ok, great! I'm not stuck in Stockholm anymore, we're making progress.
                                                                 </span>
                                                            </a>
                                                            <div class="date">Feb 19</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="SocialChk4">
                                                                 <label for="SocialChk4" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bx-star star-toggle"></span>
                                                            <span class="bx bx-tag-alt important-toggle"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Medium</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 This Week's Top Stories &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      Our top pick for you on Medium this week The Man Who Destroyed America's Ego
                                                                 </span>
                                                            </a>
                                                            <div class="date">Feb 28</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="SocialChk5">
                                                                 <label for="SocialChk5" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bxs-star star-toggle text-warning"></span>
                                                            <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Death to Stock</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 (no subject)
                                                                 <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bxs-file-pdf text-danger me-2"></i>dashboard.pdf</span>
                                                                 <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bxs-file-pdf text-danger me-2"></i>pages-data.pdf</span>
                                                            </a>
                                                            <div class="date">Feb 28</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="SocialChk6">
                                                                 <label for="SocialChk6" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bx-star star-toggle"></span>
                                                            <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Revibe</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 (no subject)
                                                                 <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bxs-file-doc text-blue me-2"></i>doc1.doc</span>
                                                                 <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bxs-file-doc text-blue me-2"></i>doc2.doc</span>
                                                                 <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bxs-file-doc text-blue me-2"></i>doc3.doc</span>
                                                                 <span class="badge bg-light border text-dark fw-semibold ms-1"><i class="bx bxs-file-doc text-blue me-2"></i>doc4.doc</span>
                                                            </a>
                                                            <div class="date">Feb 27</div>
                                                       </div>
                                                  </li>
                                             </ul> <!-- end message list -->
                                        </div>

                                        <div class="tab-pane fade" id="email-promotion" role="tabpanel" aria-labelledby="email-promotion-tab">
                                             <ul class="message-list mb-0">
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="PromotionChk9">
                                                                 <label for="PromotionChk9" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bx-star star-toggle"></span>
                                                            <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Tobias Berggren</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 Let's go fishing! &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      Hey, You wanna join me and Fred at the lake tomorrow? It'll be awesome.
                                                                 </span>
                                                            </a>
                                                            <div class="date">Feb 23</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="PromotionChk10">
                                                                 <label for="PromotionChk10" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bxs-star star-toggle text-warning"></span>
                                                            <span class="bx bx-tag-alt important-toggle"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Charukaw, me (7)</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 Hey man &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      Nah man sorry i don't. Should i get it?
                                                                 </span>
                                                            </a>
                                                            <div class="date">Feb 23</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="PromotionChk11">
                                                                 <label for="PromotionChk11" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bxs-star star-toggle text-warning"></span>
                                                            <span class="bx bx-tag-alt important-toggle"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Stack Exchange</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 1 new items in your Stackexchange inbox &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      The following items were added to your Stack Exchange global inbox since you last checked it.
                                                                 </span>
                                                            </a>
                                                            <div class="date">Feb 21</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="PromotionChk12">
                                                                 <label for="PromotionChk12" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bxs-star star-toggle text-warning"></span>
                                                            <span class="bx bx-tag-alt important-toggle"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Google Drive Team</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 You can now use your storage in Google Drive &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      Hey Nicklas Sandell! Thank you for purchasing extra storage space in Google Drive.
                                                                 </span>
                                                            </a>
                                                            <div class="date">Feb 20</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="PromotionChk13">
                                                                 <label for="PromotionChk13" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bx-star star-toggle"></span>
                                                            <span class="bx bx-tag-alt important-toggle"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Peter, me (3)</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 Hello &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      Trip home from Colombo has been arranged, then Jenna will come get me from Stockholm. :)
                                                                 </span>
                                                            </a>
                                                            <div class="date">Mar 6</div>
                                                       </div>
                                                  </li>
                                             </ul> <!-- end message list -->
                                        </div>

                                        <div class="tab-pane fade" id="email-forums" role="tabpanel" aria-labelledby="email-forums-tab">
                                             <ul class="message-list mb-0">
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="ForumsChk8">
                                                                 <label for="ForumsChk8" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bxs-star star-toggle text-warning"></span>
                                                            <span class="bx bx-tag-alt important-toggle"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">KanbanFlow</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 Task assigned: Clone ARP's website &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      You have been assigned a task by Alex@Work on the board Web.
                                                                 </span>
                                                            </a>
                                                            <div class="date">Feb 24</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="ForumsChk9">
                                                                 <label for="ForumsChk9" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bx-star star-toggle"></span>
                                                            <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Tobias Berggren</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 Let's go fishing! &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      Hey, You wanna join me and Fred at the lake tomorrow? It'll be awesome.
                                                                 </span>
                                                            </a>
                                                            <div class="date">Feb 23</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="ForumsChk10">
                                                                 <label for="ForumsChk10" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bxs-star star-toggle text-warning"></span>
                                                            <span class="bx bx-tag-alt important-toggle"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Charukaw, me (7)</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 Hey man &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      Nah man sorry i don't. Should i get it?
                                                                 </span>
                                                            </a>
                                                            <div class="date">Feb 23</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="ForumsChk11">
                                                                 <label for="ForumsChk11" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bxs-star star-toggle text-warning"></span>
                                                            <span class="bx bx-tag-alt important-toggle"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Stack Exchange</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 1 new items in your Stackexchange inbox &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      The following items were added to your Stack Exchange global inbox since you last checked it.
                                                                 </span>
                                                            </a>
                                                            <div class="date">Feb 21</div>
                                                       </div>
                                                  </li>
                                                  <li>
                                                       <div class="col-mail col-mail-1">
                                                            <div class="checkbox-wrapper-mail">
                                                                 <input type="checkbox" id="ForumsChk12">
                                                                 <label for="ForumsChk12" class="toggle"></label>
                                                            </div>
                                                            <span class="bx bxs-star star-toggle text-warning"></span>
                                                            <span class="bx bxs-tag-alt important-toggle text-warning"></span>
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="title">Google Drive Team</a>
                                                       </div>
                                                       <div class="col-mail col-mail-2">
                                                            <a data-bs-toggle="offcanvas" href="#email-read" class="subject">
                                                                 You can now use your storage in Google Drive &nbsp;&ndash;&nbsp;
                                                                 <span>
                                                                      Hey Nicklas Sandell! Thank you for purchasing extra storage space in Google Drive.
                                                                 </span>
                                                            </a>
                                                            <div class="date">Feb 20</div>
                                                       </div>
                                                  </li>
                                             </ul> <!-- end message list -->
                                        </div>
                                   </div> <!-- end tab-content-->

                                   <div class="px-3 py-2 mt-auto">
                                        <div class="d-flex align-items-center justify-content-between">
                                             <div class=""> Showing 1 - 20 of 289 </div>
                                             <div class="btn-group">
                                                  <button type="button" class="btn btn-light btn-sm">
                                                       <i class="bx bx-chevron-left"></i>
                                                  </button>
                                                  <button type="button" class="btn btn-primary btn-sm">
                                                       <i class="bx bx-chevron-right"></i>
                                                  </button>
                                             </div>
                                        </div>
                                   </div>

                                   <div class="offcanvas offcanvas-end mail-read position-absolute shadow" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="email-read" aria-labelledby="email-readLabel">
                                        <div class="offcanvas-header">
                                             <div class="d-flex gap-2 align-items-center w-50">
                                                  <a href="#" role="button" data-bs-dismiss="offcanvas" aria-label="Close">
                                                       <i class="bx bx-arrow-back fs-18 align-middle"></i>
                                                  </a>
                                                  <h5 class="offcanvas-title text-truncate w-50" id="email-readLabel">Medium</h5>
                                             </div>

                                             <div class="ms-auto">
                                                  <!-- archive, spam & delete -->
                                                  <div class="btn-group">
                                                       <button type="button" class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Archive">
                                                            <i class="bx bx-archive fs-18"></i>
                                                       </button>
                                                       <button type="button" class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Mark as spam">
                                                            <i class="bx bx-info-square fs-18"></i>
                                                       </button>
                                                       <button type="button" class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Delete">
                                                            <i class="bx bx-trash fs-18"></i>
                                                       </button>
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="offcanvas-body p-0 h-100" data-simplebar>
                                             <div class="px-3">
                                                  <div class="mt-2">
                                                       <h5>Hi Jorge, How are you?</h5>

                                                       <hr />

                                                       <div class="d-flex mb-4 mt-1">
                                                            <img class="me-2 rounded-circle avatar-sm" src="assets/Backend/images/users/avatar-2.jpg" alt="Generic placeholder image">
                                                            <div class="flex-grow-1">
                                                                 <span class="float-end">07:23 AM</span>
                                                                 <h6 class="m-0">Jonathan Smith</h6>
                                                                 <small class="text-muted">From: jonathan@domain.com</small>
                                                            </div>
                                                       </div>

                                                       <p><b>Hi Jorge...</b></p>
                                                       <div class="text-muted">
                                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                                                                 commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                                                 penatibus et magnis dis parturient montes, nascetur ridiculus
                                                                 mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
                                                                 quis, sem.</p>
                                                            <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel,
                                                                 aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut,
                                                                 imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede
                                                                 mollis pretium. Integer tincidunt. Cras dapibus. Vivamus
                                                                 elementum semper nisi.</p>
                                                            <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor
                                                                 eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante,
                                                                 dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra
                                                                 nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.
                                                                 Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies
                                                                 nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget
                                                                 condimentum rhoncus, sem quam semper libero, sit amet adipiscing
                                                                 sem neque sed ipsum. Nam quam nunc, blandit vel, luctus
                                                                 pulvinar,</p>
                                                       </div>

                                                       <hr />

                                                       <h6> <i class="fa fa-paperclip mb-2"></i> Attachments <span>(3)</span>
                                                       </h6>

                                                       <div>
                                                            <a href="javascript:void(0);">
                                                                 <img src="assets/Backend/images/small/img-1.jpg" alt="attachment" style="height: 84px;" class="img-thumbnail me-1">
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                 <img src="assets/Backend/images/small/img-2.jpg" alt="attachment" style="height: 84px;" class="img-thumbnail me-1">
                                                            </a>
                                                            <a href="javascript:void(0);">
                                                                 <img src="assets/Backend/images/small/img-3.jpg" alt="attachment" style="height: 84px;" class="img-thumbnail me-1">
                                                            </a>
                                                       </div>

                                                  </div> <!-- card-box -->
                                             </div>
                                        </div>
                                        <div class="p-3">
                                             <div class="d-flex">
                                                  <img class="me-2 rounded-circle avatar-sm" src="assets/Backend/images/users/avatar-7.jpg" alt="Generic placeholder image">
                                                  <div class="flex-grow-1">
                                                       <div class="mb-2">
                                                            <div id="snow-editor" style="height: 200px;">
                                                                 <h3>This is an Air-mode editable area.</h3>
                                                                 <p><br></p>
                                                                 <ul>
                                                                      <li>Select a text to reveal the toolbar.</li>
                                                                      <li>Edit rich document on-the-fly, so elastic!</li>
                                                                 </ul>
                                                                 <p><br></p>
                                                                 <p>End of air-mode area</p>
                                                            </div> <!-- end Snow-editor-->
                                                       </div>
                                                  </div>
                                             </div>

                                             <div class="text-end">
                                                  <button type="button" class="btn btn-primary width-sm" data-bs-dismiss="offcanvas" aria-label="Close">Send</button>
                                             </div>
                                        </div>
                                   </div>

                              </div> <!-- end card -->
                         </div> <!-- end col -->
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

          <!-- Modal -->
          <div class="modal fade compose-mail" id="compose-modal" tabindex="-1" aria-labelledby="compose-modalLabel" aria-hidden="true">
               <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                         <div class="modal-header overflow-hidden bg-primary p-2">
                              <h5 class="modal-title text-white" id="compose-modalLabel">New Message</h5>
                              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                         </div>
                         <div class="modal-body p-4">
                              <div class="overflow-hidden">

                                   <div class="mb-2">
                                        <input type="email" class="form-control" id="toEmail" placeholder="To: ">
                                   </div>
                                   <div class="mb-2">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject ">
                                   </div>

                                   <div class="my-2">
                                        <div id="snow-editor2" style="height: 200px;"></div>
                                   </div>

                                   <div class="d-flex float-end">
                                        <div class="dropdown me-1">
                                             <a href="javascript:void(0);" class="dropdown-toggle arrow-none btn btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                  <i class="bx bx-dots-vertical-rounded fs-18"></i>
                                             </a>
                                             <div class="dropdown-menu dropdown-menu-up">
                                                  <a href="javascript:void(0);" class="dropdown-item">Default to full screen</a>
                                                  <div class="dropdown-divider"></div>
                                                  <a href="javascript:void(0);" class="dropdown-item">Label</a>
                                                  <a href="javascript:void(0);" class="dropdown-item">Palin text mode</a>
                                                  <div class="dropdown-divider"></div>
                                                  <a href="javascript:void(0);" class="dropdown-item">Smart Compose Feedback</a>
                                             </div>
                                        </div>
                                        <a href="javascript: void(0);" class="btn btn-light compose-close"><i class="bx bxs-trash fs-18"></i></a>
                                   </div>
                                   <div>
                                        <a href="javascript: void(0);" class="btn btn-primary">Send</a>
                                   </div>

                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <!-- data-bs-scroll="true" data-bs-backdrop="false" -->

     </div>
     <!-- END Wrapper -->

     <!-- Vendor Javascript (Require in all Page) -->
     <script src="assets/Backend/js/vendor.js"></script>

     <!-- App Javascript (Require in all Page) -->
     <script src="assets/Backend/js/app.js"></script>

     <!-- Page Js -->
     <script src="assets/Backend/js/pages/app-email.js"></script>

</body>


<!-- Mirrored from techzaa.getappui.com/larkon/admin/apps-email.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Sep 2024 06:07:57 GMT -->
</html>
