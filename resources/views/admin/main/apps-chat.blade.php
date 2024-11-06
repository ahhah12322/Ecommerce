<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from techzaa.getappui.com/larkon/admin/apps-chat.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Sep 2024 06:07:30 GMT -->
<head>
     <!-- Title Meta -->
     <meta charset="utf-8" />
     <title>Chat | Larkon - Responsive Admin Dashboard Template</title>
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
                                   <h4 class="fw-bold topbar-button pe-none text-uppercase mb-0">Chat</h4>
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

                    <div class="row g-1">
                         <div class="col-xxl-3">
                              <div class="offcanvas-xxl offcanvas-start h-100" tabindex="-1" id="Contactoffcanvas" aria-labelledby="ContactoffcanvasLabel">
                                   <div class="card position-relative overflow-hidden">
                                        <div class="card-header border-0 d-flex justify-content-between align-items-center">
                                             <h4 class="card-title">Chat</h4>
                                             <a href="#user-setting" class="fs-18" type="button" data-bs-toggle="offcanvas" aria-haspopup="true" aria-expanded="true">
                                                  <i class="bx bx-cog"></i>
                                             </a>
                                        </div>

                                        <form class="chat-search px-3">
                                             <div class="chat-search-box">
                                                  <input class="form-control" type="text" name="search" placeholder="Search ...">
                                                  <button type="submit" class="btn btn-sm btn-link search-icon p-0"><i class="bx bx-search-alt"></i></button>
                                             </div>
                                        </form>

                                        <div class="swiper mySwiper p-1 mx-3">
                                             <div class="swiper-wrapper">
                                                  <div class="swiper-slide avatar-sm">
                                                       <div class="chat-user-status-box">
                                                            <span><img src="assets/Backend/images/users/avatar-1.jpg" alt="avatar-1" class="img-fluid avatar-sm rounded-circle avatar-border" /></span>
                                                       </div>
                                                  </div>
                                                  <div class="swiper-slide avatar-sm">
                                                       <div class="chat-user-status-box">
                                                            <span><img src="assets/Backend/images/users/avatar-2.jpg" alt="avatar-2" class="img-fluid avatar-sm rounded-circle avatar-border" /></span>
                                                       </div>
                                                  </div>
                                                  <div class="swiper-slide avatar-sm">
                                                       <div class="chat-user-status-box">
                                                            <span><img src="assets/Backend/images/users/avatar-3.jpg" alt="avatar-3" class="img-fluid avatar-sm rounded-circle avatar-border" /></span>
                                                       </div>
                                                  </div>
                                                  <div class="swiper-slide avatar-sm">
                                                       <div class="chat-user-status-box">
                                                            <span><img src="assets/Backend/images/users/avatar-4.jpg" alt="avatar-4" class="img-fluid avatar-sm rounded-circle avatar-border" /></span>
                                                       </div>
                                                  </div>
                                                  <div class="swiper-slide avatar-sm">
                                                       <div class="chat-user-status-box">
                                                            <span><img src="assets/Backend/images/users/avatar-5.jpg" alt="avatar-5" class="img-fluid avatar-sm rounded-circle avatar-border" /></span>
                                                       </div>
                                                  </div>
                                                  <div class="swiper-slide avatar-sm">
                                                       <div class="chat-user-status-box">
                                                            <span><img src="assets/Backend/images/users/avatar-6.jpg" alt="avatar-6" class="img-fluid avatar-sm rounded-circle avatar-border" /></span>
                                                       </div>
                                                  </div>
                                                  <div class="swiper-slide avatar-sm">
                                                       <div class="chat-user-status-box">
                                                            <span><img src="assets/Backend/images/users/avatar-7.jpg" alt="avatar-7" class="img-fluid avatar-sm rounded-circle avatar-border" /></span>
                                                       </div>
                                                  </div>
                                                  <div class="swiper-slide avatar-sm">
                                                       <div class="chat-user-status-box">
                                                            <span><img src="assets/Backend/images/users/avatar-8.jpg" alt="avatar-8" class="img-fluid avatar-sm rounded-circle avatar-border" /></span>
                                                       </div>
                                                  </div>
                                                  <div class="swiper-slide avatar-sm">
                                                       <div class="chat-user-status-box">
                                                            <span><img src="assets/Backend/images/users/avatar-9.jpg" alt="avatar-9" class="img-fluid avatar-sm rounded-circle avatar-border" /></span>
                                                       </div>
                                                  </div>
                                                  <div class="swiper-slide avatar-sm">
                                                       <div class="chat-user-status-box">
                                                            <span><img src="assets/Backend/images/users/avatar-10.jpg" alt="avatar-10" class="img-fluid avatar-sm rounded-circle avatar-border" /></span>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>

                                        <ul class="nav nav-tabs nav-justified nav-bordered border-top mt-2">
                                             <li class="nav-item">
                                                  <a href="#chat-list" data-bs-toggle="tab" aria-expanded="false" class="nav-link active py-2">
                                                       Chat
                                                  </a>
                                             </li>
                                             <li class="nav-item">
                                                  <a href="#group-list" data-bs-toggle="tab" aria-expanded="true" class="nav-link py-2">
                                                       Group
                                                  </a>
                                             </li>
                                             <li class="nav-item">
                                                  <a href="#contact-list" data-bs-toggle="tab" aria-expanded="true" class="nav-link py-2">
                                                       Contact
                                                  </a>
                                             </li>
                                        </ul>
                                        <div class="tab-content">
                                             <div class="tab-pane show active" id="chat-list">

                                                  <div class="px-3 mb-3 chat-setting-height" data-simplebar>
                                                       <a href="javascript:void(0);" class="text-body">
                                                            <div class="d-flex align-items-center p-2">
                                                                 <div class="flex-shrink-0 position-relative">
                                                                      <img src="assets/Backend/images/users/avatar-2.jpg" class="me-2 rounded-circle" height="36" alt="avatar-2" />
                                                                 </div>
                                                                 <div class="flex-grow-1 overflow-hidden">
                                                                      <h5 class="my-0">
                                                                           <span class="float-end text-muted fs-13">10:20am</span>
                                                                           Gaston Lapierre
                                                                      </h5>
                                                                      <p class="mt-1 mb-0 fs-13 text-muted d-flex align-items-end justify-content-between">
                                                                           <span class="w-75">How are you today?</span>
                                                                           <i class="bx bx-check-double text-success"></i>
                                                                      </p>
                                                                 </div>
                                                            </div>
                                                       </a>
                                                       <a href="javascript:void(0);" class="text-body">
                                                            <div class="d-flex align-items-center p-2">
                                                                 <div class="flex-shrink-0 position-relative">
                                                                      <img src="assets/Backend/images/users/avatar-3.jpg" class="me-2 rounded-circle" height="36" alt="avatar-3" />
                                                                 </div>
                                                                 <div class="flex-grow-1 overflow-hidden">
                                                                      <h5 class="my-0">
                                                                           <span class="float-end text-muted fs-13">11:03am</span>
                                                                           Fantina LeBatelier
                                                                      </h5>
                                                                      <p class="mt-1 mb-0 fs-13 text-muted d-flex align-items-end justify-content-between">
                                                                           <span class="w-75">Hey! a reminder for tommorow's meeting...</span>
                                                                           <i class="bx bx-check-double text-success"></i>
                                                                      </p>
                                                                 </div>
                                                            </div>
                                                       </a>
                                                       <a href="javascript:void(0);" class="text-body">
                                                            <div class="d-flex align-items-center bg-light bg-opacity-50 p-2 rounded-1">
                                                                 <div class="flex-shrink-0 position-relative">
                                                                      <img src="assets/Backend/images/users/avatar-4.jpg" class="me-2 rounded-circle" height="36" alt="avatar-4" />
                                                                 </div>
                                                                 <div class="flex-grow-1 overflow-hidden">
                                                                      <h5 class="my-0">
                                                                           <span class="float-end text-muted fs-13">now</span>
                                                                           Gilbert Chicoine
                                                                      </h5>
                                                                      <p class="mt-1 mb-0 fs-13 text-muted">
                                                                           <span class="w-75 text-primary">typing...</span>
                                                                      </p>
                                                                 </div>
                                                            </div>
                                                       </a>
                                                       <a href="javascript:void(0);" class="text-body">
                                                            <div class="d-flex align-items-center p-2">
                                                                 <div class="flex-shrink-0 position-relative">
                                                                      <img src="assets/Backend/images/users/avatar-5.jpg" class="me-2 rounded-circle" height="36" alt="avatar-5" />
                                                                 </div>
                                                                 <div class="flex-grow-1 overflow-hidden">
                                                                      <h5 class="my-0">
                                                                           <span class="float-end text-muted fs-13">Yesterday</span>
                                                                           Mignonette Brodeur
                                                                      </h5>
                                                                      <p class="mt-1 mb-0 fs-13 text-muted d-flex align-items-end justify-content-between">
                                                                           <span class="w-75">Are we going to have this week's planning meeting today?</span>
                                                                           <i class="bx bx-check-double text-success"></i>
                                                                      </p>
                                                                 </div>
                                                            </div>
                                                       </a>
                                                       <a href="javascript:void(0);" class="text-body">
                                                            <div class="d-flex align-items-center p-2">
                                                                 <div class="flex-shrink-0 position-relative">
                                                                      <img src="assets/Backend/images/users/avatar-6.jpg" class="me-2 rounded-circle" height="36" alt="avatar-6" />
                                                                 </div>
                                                                 <div class="flex-grow-1 overflow-hidden">
                                                                      <h5 class="my-0">
                                                                           <span class="float-end text-muted fs-13">Yesterday</span>
                                                                           Thomas Menard
                                                                      </h5>
                                                                      <p class="mt-1 mb-0 fs-13 text-muted d-flex align-items-end justify-content-between">
                                                                           <span class="w-75">Please check this template...</span>
                                                                           <i class="bx bx-check-double text-success"></i>
                                                                      </p>
                                                                 </div>
                                                            </div>
                                                       </a>
                                                       <a href="javascript:void(0);" class="text-body">
                                                            <div class="d-flex align-items-center p-2">
                                                                 <div class="flex-shrink-0 position-relative">
                                                                      <img src="assets/Backend/images/users/avatar-7.jpg" class="me-2 rounded-circle" height="36" alt="avatar-7" />
                                                                 </div>
                                                                 <div class="flex-grow-1 overflow-hidden">
                                                                      <h5 class="my-0">
                                                                           <span class="float-end text-muted fs-13">Yesterday</span>
                                                                           Melisande Lapointe
                                                                      </h5>
                                                                      <p class="mt-1 mb-0 fs-13 text-muted d-flex align-items-end justify-content-between">
                                                                           <span class="w-75">Are free for 10 minutes? would like to discuss something...</span>
                                                                           <i class="bx bx-check-double text-success"></i>
                                                                      </p>
                                                                 </div>
                                                            </div>
                                                       </a>
                                                       <a href="javascript:void(0);" class="text-body">
                                                            <div class="d-flex align-items-center p-2">
                                                                 <div class="flex-shrink-0 position-relative">
                                                                      <img src="assets/Backend/images/users/avatar-8.jpg" class="me-2 rounded-circle" height="36" alt="avatar-8" />
                                                                 </div>
                                                                 <div class="flex-grow-1 overflow-hidden">
                                                                      <h5 class="my-0">
                                                                           <span class="float-end text-muted fs-13">7/8/21</span>
                                                                           Danielle Despins
                                                                      </h5>
                                                                      <p class="mt-1 mb-0 fs-13 text-muted d-flex align-items-end justify-content-between">
                                                                           <span class="w-75">How are you?</span>
                                                                           <i class="bx bx-check-double text-success"></i>
                                                                      </p>
                                                                 </div>
                                                            </div>
                                                       </a>
                                                       <a href="javascript:void(0);" class="text-body">
                                                            <div class="d-flex align-items-center p-2">
                                                                 <div class="flex-shrink-0 position-relative">
                                                                      <img src="assets/Backend/images/users/avatar-9.jpg" class="me-2 rounded-circle" height="36" alt="avatar-9" />
                                                                 </div>
                                                                 <div class="flex-grow-1 overflow-hidden">
                                                                      <h5 class="my-0">
                                                                           <span class="float-end text-muted fs-13">7/8/21</span>
                                                                           Onfroi Pichette
                                                                      </h5>
                                                                      <p class="mt-1 mb-0 fs-13 text-muted d-flex align-items-end justify-content-between">
                                                                           <span class="w-75">whats going on?</span>
                                                                           <i class="bx bx-check-double text-success"></i>
                                                                      </p>
                                                                 </div>
                                                            </div>
                                                       </a>
                                                       <a href="javascript:void(0);" class="text-body">
                                                            <div class="d-flex align-items-center p-2">
                                                                 <div class="flex-shrink-0 position-relative">
                                                                      <img src="assets/Backend/images/users/avatar-10.jpg" class="me-2 rounded-circle" height="36" alt="avatar-10" />
                                                                 </div>
                                                                 <div class="flex-grow-1 overflow-hidden">
                                                                      <h5 class="my-0">
                                                                           <span class="float-end text-muted fs-13">7/8/21</span>
                                                                           Kari Boisvert
                                                                      </h5>
                                                                      <p class="mt-1 mb-0 fs-13 text-muted">
                                                                           <span class="w-75">Would you like to join us?</span>
                                                                      </p>
                                                                 </div>
                                                            </div>
                                                       </a>
                                                  </div>
                                             </div>

                                             <div class="tab-pane" id="group-list">
                                                  <div class="px-3 mb-3 chat-setting-height" data-simplebar>

                                                       <div class="d-flex align-items-center position-relative mb-3">
                                                            <a href="javascript:void(0);" class="me-2 stretched-link rounded text-bg-primary avatar d-flex align-items-center justify-content-center fs-18">
                                                                 <i class="bx bxs-user"></i>
                                                            </a>
                                                            <div class="flex-grow-1">
                                                                 <h5 class="my-0 fs-14">New Group</h5>
                                                            </div>
                                                       </div>
                                                       <div class="d-flex mb-3 align-items-center position-relative">
                                                            <a href="javascript:void(0);" class="me-2 stretched-link rounded bg-soft-primary text-primary avatar d-flex align-items-center justify-content-center fs-18">G</a>
                                                            <div class="flex-grow-1 ps-1 overflow-hidden">
                                                                 <h5 class="fs-14 m-0">#General</h5>
                                                            </div>
                                                       </div>
                                                       <div class="d-flex mb-3 align-items-center position-relative">
                                                            <a href="javascript:void(0);" class="me-2 stretched-link rounded bg-soft-primary text-primary avatar d-flex align-items-center justify-content-center fs-18">C</a>
                                                            <div class="flex-grow-1 ps-1 overflow-hidden">
                                                                 <div class="float-end"><span class="badge badge-outline-danger">+33</span></div>
                                                                 <h5 class="fs-14 m-0">#Company</h5>
                                                            </div>
                                                       </div>
                                                       <div class="d-flex mb-3 align-items-center position-relative">
                                                            <a href="javascript:void(0);" class="me-2 stretched-link rounded bg-soft-primary text-primary avatar d-flex align-items-center justify-content-center fs-18">L</a>
                                                            <div class="flex-grow-1 ps-1 overflow-hidden">
                                                                 <div class="float-end"><span class="badge badge-outline-danger">+17</span></div>
                                                                 <h5 class="fs-14 m-0">#Life Suckers</h5>
                                                            </div>
                                                       </div>
                                                       <div class="d-flex mb-3 align-items-center position-relative">
                                                            <a href="javascript:void(0);" class="me-2 stretched-link rounded bg-soft-primary text-primary avatar d-flex align-items-center justify-content-center fs-18">D</a>
                                                            <div class="flex-grow-1 ps-1 overflow-hidden">
                                                                 <h5 class="fs-14 m-0">#Drama Club</h5>
                                                            </div>
                                                       </div>
                                                       <div class="d-flex mb-3 align-items-center position-relative">
                                                            <a href="javascript:void(0);" class="me-2 stretched-link rounded bg-soft-primary text-primary avatar d-flex align-items-center justify-content-center fs-18">U</a>
                                                            <div class="flex-grow-1 ps-1 overflow-hidden">
                                                                 <h5 class="fs-14 m-0">#Unknown Friends</h5>
                                                            </div>
                                                       </div>
                                                       <div class="d-flex mb-3 align-items-center position-relative">
                                                            <a href="javascript:void(0);" class="me-2 stretched-link rounded bg-soft-primary text-primary avatar d-flex align-items-center justify-content-center fs-18">F</a>
                                                            <div class="flex-grow-1 ps-1 overflow-hidden">
                                                                 <div class="float-end"><span class="badge badge-outline-danger">+65</span></div>
                                                                 <h5 class="fs-14 m-0">#Family Ties</h5>
                                                            </div>
                                                       </div>
                                                       <div class="d-flex mb-3 align-items-center position-relative">
                                                            <a href="javascript:void(0);" class="me-2 stretched-link rounded bg-soft-primary text-primary avatar d-flex align-items-center justify-content-center fs-18">2</a>
                                                            <div class="flex-grow-1 ps-1 overflow-hidden">
                                                                 <h5 class="fs-14 m-0">#2Good4U</h5>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>

                                             <div class="tab-pane" id="contact-list">

                                                  <div class="px-3 mb-3 chat-setting-height" data-simplebar>
                                                       <div class="d-flex align-items-center position-relative py-2">
                                                            <a href="javascript:void(0);" class="me-2 stretched-link rounded-circle text-bg-primary avatar d-flex align-items-center justify-content-center fs-18">
                                                                 <i class="bx bx-group"></i>
                                                            </a>
                                                            <div class="flex-grow-1">
                                                                 <h5 class="my-0 fs-14">New Group</h5>
                                                            </div>
                                                       </div>
                                                       <div class="d-flex align-items-center position-relative py-2">
                                                            <a href="javascript:void(0);" class="me-2 stretched-link rounded-circle text-bg-primary avatar d-flex align-items-center justify-content-center fs-18">
                                                                 <i class="bx bx-user-plus"></i>
                                                            </a>
                                                            <div class="flex-grow-1">
                                                                 <h5 class="my-0 fs-14">New Contact</h5>
                                                            </div>
                                                       </div>
                                                       <div class="d-flex align-items-center position-relative py-2">
                                                            <a href="#!" class="stretched-link"><img src="assets/Backend/images/users/avatar-2.jpg" class="me-2 rounded-circle" height="36" alt="avatar-2" /></a>
                                                            <div class="flex-grow-1">
                                                                 <h5 class="my-0 fs-14">Gaston Lapierre</h5>
                                                            </div>
                                                       </div>
                                                       <div class="d-flex align-items-center position-relative py-2">
                                                            <a href="#!" class="stretched-link"><img src="assets/Backend/images/users/avatar-3.jpg" class="me-2 rounded-circle" height="36" alt="avatar-2" /></a>
                                                            <div class="flex-grow-1">
                                                                 <h5 class="my-0 fs-14">Fantina LeBatelier</h5>
                                                                 <p class="mt-1 mb-0 text-muted"><span class="w-75">** no status **</span></p>
                                                            </div>
                                                       </div>
                                                       <div class="d-flex align-items-center position-relative py-2">
                                                            <a href="#!" class="stretched-link"><img src="assets/Backend/images/users/avatar-4.jpg" class="me-2 rounded-circle" height="36" alt="avatar-2" /></a>
                                                            <div class="flex-grow-1">
                                                                 <h5 class="my-0 fs-14">Gilbert Chicoine</h5>
                                                                 <p class="mt-1 mb-0 text-muted"><span class="w-75">|| Karma ||</span></p>
                                                            </div>
                                                       </div>
                                                       <div class="d-flex align-items-center position-relative py-2">
                                                            <a href="#!" class="stretched-link"><img src="assets/Backend/images/users/avatar-5.jpg" class="me-2 rounded-circle" height="36" alt="avatar-2" /></a>
                                                            <div class="flex-grow-1">
                                                                 <h5 class="my-0 fs-14">Mignonette Brodeur</h5>
                                                                 <p class="mt-1 mb-0 text-muted"><span class="w-75">Hey there! I am using Chat.</span></p>
                                                            </div>
                                                       </div>
                                                       <div class="d-flex align-items-center position-relative py-2">
                                                            <a href="#!" class="stretched-link"><img src="assets/Backend/images/users/avatar-6.jpg" class="me-2 rounded-circle" height="36" alt="avatar-2" /></a>
                                                            <div class="flex-grow-1">
                                                                 <h5 class="my-0 fs-14">Thomas Menard</h5>
                                                                 <p class="mt-1 mb-0 text-muted"><span class="w-75">TM</span></p>
                                                            </div>
                                                       </div>
                                                       <div class="d-flex align-items-center position-relative py-2">
                                                            <a href="#!" class="stretched-link"><img src="assets/Backend/images/users/avatar-7.jpg" class="me-2 rounded-circle" height="36" alt="avatar-2" /></a>
                                                            <div class="flex-grow-1">
                                                                 <h5 class="my-0 fs-14">Melisande Lapointe</h5>
                                                                 <p class="mt-1 mb-0 text-muted"><span class="w-75">Available</span></p>
                                                            </div>
                                                       </div>
                                                       <div class="d-flex align-items-center position-relative py-2">
                                                            <a href="#!" class="stretched-link"><img src="assets/Backend/images/users/avatar-8.jpg" class="me-2 rounded-circle" height="36" alt="avatar-2" /></a>
                                                            <div class="flex-grow-1">
                                                                 <h5 class="my-0 fs-14">Danielle Despins</h5>
                                                                 <p class="mt-1 mb-0 text-muted"><span class="w-75">Hey there! I am using Chat.</span></p>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>

                                        </div>

                                        <div class="offcanvas offcanvas-start position-absolute shadow w-100" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="user-setting" aria-labelledby="user-settingLabel">
                                             <div class="offcanvas-header">
                                                  <h5 class="offcanvas-title text-truncate w-50" id="user-settingLabel">Profile</h5>
                                                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                             </div>
                                             <div class="offcanvas-body p-0 h-100" data-simplebar>
                                                  <h4 class="page-title p-3 my-0">Setting</h4>

                                                  <div class="d-flex align-items-center px-3 pb-3 border-bottom">
                                                       <img src="assets/Backend/images/users/avatar-1.jpg" class="me-2 rounded-circle" height="36" alt="avatar-1" />
                                                       <div class="flex-grow-1">
                                                            <div class="float-end">
                                                                 <a href="javascript:void(0);"><i class="bx bx-qr-scan fs-20"></i></a>
                                                            </div>
                                                            <h5 class="my-0 fs-14">Gaston Lapierre</h5>
                                                            <p class="mt-1 mb-0 text-muted"><span class="w-75">Hey there! I am using Larkon Chat.</span></p>
                                                       </div>
                                                  </div>

                                                  <div class="px-3 my-3 app-chat-setting">
                                                       <div class="accordion custom-accordion" id="accordionSetting">
                                                            <div class="accordion-item border-0">
                                                                 <h5 class="accordion-header my-0" id="headingAccount">
                                                                      <button class="accordion-button px-0 pt-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAccount" aria-expanded="false" aria-controls="collapseAccount">
                                                                           <span class="d-flex align-items-center">
                                                                                <i class="bx bx-key me-3 fs-20"></i>
                                                                                <span class="flex-grow-1">
                                                                                     <span class="fs-14 h5 mt-0 mb-1 d-block">Account</span>
                                                                                     <span class="mt-1 mb-0 text-muted w-75">Privacy, security, change number</span>
                                                                                </span>
                                                                           </span>
                                                                      </button> <!-- end accordion button -->
                                                                 </h5> <!-- end accordion header -->
                                                                 <div id="collapseAccount" class="accordion-collapse collapse" aria-labelledby="headingAccount" data-bs-parent="#accordionSetting">
                                                                      <div class="accordion-body pb-0">
                                                                           <ul class="list-unstyled mb-0">
                                                                                <li class="mb-2"><a href="javascript:void(0);"><i class="bx bx-lock-alt fs-18 me-2"></i>Privacy</a></li>
                                                                                <li class="mb-2"><a href="javascript:void(0);"><i class="bx bx-check-Larkon fs-18 me-2"></i>Security</a></li>
                                                                                <li class="mb-2"><a href="javascript:void(0);"><i class="bx bx-badge-check fs-18 me-2"></i>Two-step verification</a></li>
                                                                                <li class="mb-2"><a href="javascript:void(0);"><i class="bx bx-arrow-from-left fs-18 me-2"></i>Change number</a></li>
                                                                                <li class="mb-2"><a href="javascript:void(0);"><i class="bx bx-info-circle fs-18 me-2"></i>Request account info</a></li>
                                                                                <li><a href="javascript:void(0);"><i class="bx bx-trash fs-18 me-2"></i>Delete my account</a></li>
                                                                           </ul>
                                                                      </div> <!-- end accordion body -->
                                                                 </div> <!-- end accordion collapse -->
                                                            </div> <!-- end accordion-item -->
                                                            <div class="accordion-item border-0">
                                                                 <h5 class="accordion-header my-0" id="headingChats">
                                                                      <button class="accordion-button px-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseChats" aria-expanded="false" aria-controls="collapseChats">
                                                                           <span class="d-flex align-items-center">
                                                                                <i class="bx bx-message-dots me-3 fs-20"></i>
                                                                                <span class="flex-grow-1">
                                                                                     <span class="fs-14 h5 mt-0 mb-1 d-block">Chats</span>
                                                                                     <span class="mt-1 mb-0 text-muted w-75">Theme, wallpapers, chat history</span>
                                                                                </span>
                                                                           </span>
                                                                      </button> <!-- end accordion button -->
                                                                 </h5> <!-- end accordion header -->
                                                                 <div id="collapseChats" class="accordion-collapse collapse" aria-labelledby="headingChats" data-bs-parent="#accordionSetting">
                                                                      <div class="accordion-body pb-0">
                                                                           <h5 class="mb-2">Display</h5>
                                                                           <ul class="list-unstyled mb-0">
                                                                                <li class="mb-2 d-flex">
                                                                                     <i class="bx bx-palette fs-18 me-2"></i>
                                                                                     <div class="flex-grow-1">
                                                                                          <a href="javascript:void(0);">Theme</a>
                                                                                          <p class="mb-0 text-muted fs-12">System default</p>
                                                                                     </div>
                                                                                </li>
                                                                                <li class="mb-2"><a href="javascript:void(0);"><i class="bx bx-image fs-16 me-2"></i>Wallpaper</a></li>
                                                                           </ul>
                                                                           <hr>
                                                                           <h5>Chat Setting</h5>
                                                                           <ul class="list-unstyled">
                                                                                <li class="mb-2 ms-2">
                                                                                     <div class="float-end">
                                                                                          <div class="form-check form-switch">
                                                                                               <input class="form-check-input" type="checkbox" id="media" checked>
                                                                                          </div>
                                                                                     </div>
                                                                                     <a href="javascript:void(0);">Media Visibility</a>
                                                                                     <p class="mb-0 text-muted fs-12">Show Newly downloaded media in your phone's gallery</p>
                                                                                </li>
                                                                                <li class="mb-2 ms-2">
                                                                                     <div class="float-end">
                                                                                          <div class="form-check form-switch">
                                                                                               <input class="form-check-input" type="checkbox" id="enter">
                                                                                          </div>
                                                                                     </div>
                                                                                     <a href="javascript:void(0);">Enter is send</a>
                                                                                     <p class="mb-0 text-muted fs-12">Enter key will send your message</p>
                                                                                </li>
                                                                                <li class="mb-2 ms-2">
                                                                                     <a href="javascript:void(0);">Font size</a>
                                                                                     <p class="mb-0 text-muted fs-12">small</p>
                                                                                </li>
                                                                           </ul>
                                                                           <hr>
                                                                           <ul class="list-unstyled mb-0">
                                                                                <li class="mb-2">
                                                                                     <div class="d-flex">
                                                                                          <i class="bx bx-text fs-16 me-2"></i>
                                                                                          <div class="flex-grow-1">
                                                                                               <a href="javascript:void(0);">App Language</a>
                                                                                               <p class="mb-0 text-muted fs-12">English</p>
                                                                                          </div>
                                                                                     </div>
                                                                                </li>
                                                                                <li class="mb-2"><a href="javascript:void(0);"><i class="bx bx-cloud-upload fs-16 me-2"></i>Chat Backup</a></li>
                                                                                <li><a href="javascript:void(0);"><i class="bx bx-history fs-16 me-2"></i>Chat History</a></li>
                                                                           </ul>
                                                                      </div> <!-- end accordion body -->
                                                                 </div> <!-- end accordion collapse -->
                                                            </div> <!-- end accordion-item -->
                                                            <div class="accordion-item border-0">
                                                                 <h5 class="accordion-header my-0" id="headingNotification">
                                                                      <button class="accordion-button px-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNotification" aria-expanded="false" aria-controls="collapseNotification">
                                                                           <span class="d-flex align-items-center">
                                                                                <i class="bx bx-bell me-3 fs-20"></i>
                                                                                <span class="flex-grow-1">
                                                                                     <span class="fs-14 h5 mt-0 mb-1 d-block">Notification</span>
                                                                                     <span class="mt-1 mb-0 text-muted w-75">Message, group, call tones</span>
                                                                                </span>
                                                                           </span>
                                                                      </button> <!-- end accordion button -->
                                                                 </h5> <!-- end accordion header -->
                                                                 <div id="collapseNotification" class="accordion-collapse collapse" aria-labelledby="headingNotification" data-bs-parent="#accordionSetting">
                                                                      <div class="accordion-body pb-0">
                                                                           <ul class="list-unstyled mb-0">
                                                                                <li class="mb-2">
                                                                                     <div class="float-end">
                                                                                          <div class="form-check form-switch">
                                                                                               <input class="form-check-input" type="checkbox" id="conversation" checked>
                                                                                          </div>
                                                                                     </div>
                                                                                     <a href="javascript:void(0);">Conversation Tones</a>
                                                                                     <p class="mb-0 text-muted fs-12">Play sound for incoming and outgoing message.</p>
                                                                                </li>
                                                                           </ul>
                                                                           <hr>
                                                                           <h5>Messages</h5>
                                                                           <ul class="list-unstyled mb-0">
                                                                                <li class="mb-2">
                                                                                     <a href="javascript:void(0);">Notification Tone</a>
                                                                                     <p class="mb-0 text-muted fs-12">Default ringtone</p>
                                                                                </li>
                                                                                <li class="mb-2">
                                                                                     <a href="javascript:void(0);">Vibrate</a>
                                                                                     <p class="mb-0 text-muted fs-12">Default</p>
                                                                                </li>
                                                                                <li class="mb-2">
                                                                                     <a href="javascript:void(0);">Light</a>
                                                                                     <p class="mb-0 text-muted fs-12">White</p>
                                                                                </li>
                                                                           </ul>
                                                                           <hr>
                                                                           <h5>Groups</h5>
                                                                           <ul class="list-unstyled mb-0">
                                                                                <li class="mb-2">
                                                                                     <a href="javascript:void(0);">Notification Tone</a>
                                                                                     <p class="mb-0 text-muted fs-12">Default ringtone</p>
                                                                                </li>
                                                                                <li class="mb-2">
                                                                                     <a href="javascript:void(0);">Vibrate</a>
                                                                                     <p class="mb-0 text-muted fs-12">Off</p>
                                                                                </li>
                                                                                <li class="mb-2">
                                                                                     <a href="javascript:void(0);">Light</a>
                                                                                     <p class="mb-0 text-muted fs-12">Dark</p>
                                                                                </li>
                                                                           </ul>
                                                                           <hr>
                                                                           <h5>Calls</h5>
                                                                           <ul class="list-unstyled mb-0">
                                                                                <li class="mb-2">
                                                                                     <a href="javascript:void(0);">Ringtone</a>
                                                                                     <p class="mb-0 text-muted fs-12">Default ringtone</p>
                                                                                </li>
                                                                                <li>
                                                                                     <a href="javascript:void(0);">Vibrate</a>
                                                                                     <p class="mb-0 text-muted fs-12">Default</p>
                                                                                </li>
                                                                           </ul>
                                                                      </div> <!-- end accordion body -->
                                                                 </div> <!-- end accordion collapse -->
                                                            </div> <!-- end accordion-item -->
                                                            <div class="accordion-item border-0">
                                                                 <h5 class="accordion-header my-0" id="headingStorage">
                                                                      <button class="accordion-button px-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseStorage" aria-expanded="false" aria-controls="collapseStorage">
                                                                           <span class="d-flex align-items-center">
                                                                                <i class="bx bx-history me-3 fs-20"></i>
                                                                                <span class="flex-grow-1">
                                                                                     <span class="fs-14 h5 mt-0 mb-1 d-block">Storage and data</span>
                                                                                     <span class="mt-1 mb-0 text-muted w-75">Network usage, auto download</span>
                                                                                </span>
                                                                           </span>
                                                                      </button> <!-- end accordion button -->
                                                                 </h5> <!-- end accordion header -->
                                                                 <div id="collapseStorage" class="accordion-collapse collapse" aria-labelledby="headingStorage" data-bs-parent="#accordionSetting">
                                                                      <div class="accordion-body pb-0">
                                                                           <ul class="list-unstyled mb-0">
                                                                                <li class="d-flex">
                                                                                     <i class="bx bx-folder fs-16 me-2"></i>
                                                                                     <div class="flex-grow-1">
                                                                                          <a href="javascript:void(0);">Manage storage</a>
                                                                                          <p class="mb-0 text-muted fs-12">2.4 GB</p>
                                                                                     </div>
                                                                                </li>
                                                                           </ul>
                                                                           <hr>
                                                                           <ul class="list-unstyled mb-0">
                                                                                <li class="d-flex">
                                                                                     <i class="bx bx-wifi fs-16 me-2"></i>
                                                                                     <div class="flex-grow-1">
                                                                                          <a href="javascript:void(0);">Network usage</a>
                                                                                          <p class="mb-0 text-muted fs-12">7.2 GB sent - 13.8 GB received</p>
                                                                                     </div>
                                                                                </li>
                                                                           </ul>
                                                                           <hr>
                                                                           <h5 class="mb-0">Media auto-download</h5>
                                                                           <p class="mb-0 text-muted fs-12">Voice message are always automatically downloaded</p>
                                                                           <ul class="list-unstyled mb-0 mt-2">
                                                                                <li class="mb-2">
                                                                                     <a href="javascript:void(0);">When using mobile data</a>
                                                                                     <p class="mb-0 text-muted fs-12">No media</p>
                                                                                </li>
                                                                                <li class="mb-2 ms-2">
                                                                                     <a href="javascript:void(0);">When connected on wi-fi</a>
                                                                                     <p class="mb-0 text-muted fs-12">No media</p>
                                                                                </li>
                                                                                <li class="mb-2 ms-2">
                                                                                     <a href="javascript:void(0);">When roaming</a>
                                                                                     <p class="mb-0 text-muted fs-12">No media</p>
                                                                                </li>
                                                                           </ul>
                                                                           <hr>
                                                                           <h5 class="mb-0">Media upload quality</h5>
                                                                           <p class="mb-0 text-muted fs-12">Choose the quality of media files to be sent</p>
                                                                           <ul class="list-unstyled mb-0 mt-2">
                                                                                <li class="ms-2">
                                                                                     <a href="javascript:void(0);">Photo upload quality</a>
                                                                                     <p class="mb-0 text-muted fs-12">Auto (recommended)</p>
                                                                                </li>
                                                                           </ul>
                                                                      </div> <!-- end accordion body -->
                                                                 </div> <!-- end accordion collapse -->
                                                            </div> <!-- end accordion-item -->
                                                            <div class="accordion-item border-0">
                                                                 <h5 class="accordion-header my-0" id="headingHelp">
                                                                      <button class="accordion-button px-0 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHelp" aria-expanded="false" aria-controls="collapseHelp">
                                                                           <span class="d-flex align-items-center">
                                                                                <i class="bx bx-info-circle me-3 fs-20"></i>
                                                                                <span class="flex-grow-1">
                                                                                     <span class="fs-14 h5 mt-0 mb-1 d-block">Help</span>
                                                                                     <span class="mt-1 mb-0 text-muted w-75">Help center, contact us, privacy policy</span>
                                                                                </span>
                                                                           </span>
                                                                      </button> <!-- end accordion button -->
                                                                 </h5> <!-- end accordion header -->
                                                                 <div id="collapseHelp" class="accordion-collapse collapse" aria-labelledby="headingHelp" data-bs-parent="#accordionSetting">
                                                                      <div class="accordion-body pb-0">
                                                                           <ul class="list-unstyled mb-0">
                                                                                <li class="mb-2"><a href="javascript:void(0);"><i class="bx bx-info-circle fs-16 me-2"></i>Help center</a></li>
                                                                                <li class="mb-2 d-flex">
                                                                                     <i class="bx bxs-contact fs-16 me-2"></i>
                                                                                     <div class="flex-grow-1">
                                                                                          <a href="javascript:void(0);">Contact us</a>
                                                                                          <p class="mb-0 text-muted fs-12">Questions?</p>
                                                                                     </div>
                                                                                </li>
                                                                                <li class="mb-2"><a href="javascript:void(0);"><i class="bx bx-book-content fs-16 me-2"></i>Teams and Privacy Policy</a></li>
                                                                                <li><a href="javascript:void(0);"><i class="bx bx-info-circle fs-16 me-2"></i>App info</a></li>
                                                                           </ul>
                                                                      </div> <!-- end accordion body -->
                                                                 </div> <!-- end accordion collapse -->
                                                            </div> <!-- end accordion-item -->
                                                       </div>
                                                  </div>

                                             </div>
                                        </div>

                                   </div> <!-- end card -->
                              </div>
                         </div> <!-- end col -->

                         <div class="col-xxl-9">
                              <div class="card position-relative overflow-hidden">

                                   <div class="card-header d-flex align-items-center mh-100">
                                        <button class="btn btn-light d-xxl-none d-flex align-items-center px-2 me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#Contactoffcanvas" aria-controls="Contactoffcanvas">
                                             <i class="bx bx-menu fs-18"></i>
                                        </button>

                                        <div class="d-flex align-items-center">
                                             <img src="assets/Backend/images/users/avatar-4.jpg" class="me-2 rounded" height="36" alt="avatar-4" />
                                             <div class="d-none d-md-flex flex-column">
                                                  <h5 class="my-0 fs-16 fw-semibold">
                                                       <a data-bs-toggle="offcanvas" href="#user-profile" class="text-dark">
                                                            Gilbert Chicoine
                                                       </a>
                                                  </h5>
                                                  <p class="mb-0 text-success fw-semibold fst-italic">typing...</p>
                                             </div>
                                        </div>

                                        <div class="flex-grow-1">
                                             <ul class="list-inline float-end d-flex gap-3 mb-0">
                                                  <li class="list-inline-item fs-20 dropdown">
                                                       <a href="javascript: void(0);" class="text-dark" data-bs-toggle="modal" data-bs-target="#videocall">
                                                            <i class="bx bx-video"></i>
                                                       </a>
                                                  </li>

                                                  <li class="list-inline-item fs-20 dropdown">
                                                       <a href="javascript: void(0);" class="text-dark" data-bs-toggle="modal" data-bs-target="#voicecall">
                                                            <i class="bx bx-phone-call"></i>
                                                       </a>
                                                  </li>

                                                  <li class="list-inline-item fs-20 dropdown">
                                                       <a data-bs-toggle="offcanvas" href="#user-profile" class="text-dark">
                                                            <i class="bx bx-user"></i>
                                                       </a>
                                                  </li>

                                                  <li class="list-inline-item fs-20 dropdown d-none d-md-flex">
                                                       <a href="javascript: void(0);" class="dropdown-toggle arrow-none text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                       </a>
                                                       <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="javascript: void(0);"><i class="bx bx-user-circle me-2"></i>View Profile</a>
                                                            <a class="dropdown-item" href="javascript: void(0);"><i class="bx bx-music me-2"></i>Media, Links and Docs</a>
                                                            <a class="dropdown-item" href="javascript: void(0);"><i class="bx bx-search me-2"></i>Search</a>
                                                            <a class="dropdown-item" href="javascript: void(0);"><i class="bx bx-image me-2"></i>Wallpaper</a>
                                                            <a class="dropdown-item" href="javascript: void(0);"><i class="bx bx-right-arrow-circle me-2"></i>More</a>
                                                       </div>
                                                  </li>
                                             </ul>
                                        </div>
                                   </div>

                                   <div class="chat-box">
                                        <ul class="chat-conversation-list p-3 chatbox-height">

                                             <li class="clearfix">
                                                  <div class="chat-conversation-text">
                                                       <div class="d-flex">
                                                            <div class="chat-ctext-wrap">
                                                                 <p>Hey 😊</p>
                                                            </div>
                                                            <div class="chat-conversation-actions dropdown dropend">
                                                                 <a href="javascript: void(0);" class="ps-1" data-bs-toggle="dropdown" aria-expanded="false"><i class='bx bx-dots-vertical-rounded fs-18'></i></a>
                                                                 <div class="dropdown-menu">
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-share me-2"></i>Reply
                                                                      </a>
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-share-alt me-2"></i>Forward
                                                                      </a>
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-copy me-2"></i>Copy
                                                                      </a>
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-bookmark me-2"></i>Bookmark
                                                                      </a>
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-star me-2"></i>Starred
                                                                      </a>
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-info-square me-2"></i>Mark as Unread
                                                                      </a>
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-trash me-2"></i>Delete
                                                                      </a>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                       <p class="text-muted fs-12 mb-0 mt-1 ms-2">8:20 am</p>
                                                  </div>
                                             </li>
                                             <li class="clearfix odd">
                                                  <div class="chat-conversation-text ms-0">
                                                       <div class="d-flex justify-content-end">
                                                            <div class="chat-conversation-actions dropdown dropstart">
                                                                 <a href="javascript: void(0);" class="pe-1" data-bs-toggle="dropdown" aria-expanded="false"><i class='bx bx-dots-vertical-rounded fs-18'></i></a>
                                                                 <div class="dropdown-menu">
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-share me-2"></i>Reply
                                                                      </a>
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-share-alt me-2"></i>Forward
                                                                      </a>
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-copy me-2"></i>Copy
                                                                      </a>
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-bookmark me-2"></i>Bookmark
                                                                      </a>
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-star me-2"></i>Starred
                                                                      </a>
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-info-square me-2"></i>Mark as Unread
                                                                      </a>
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-trash me-2"></i>Delete
                                                                      </a>
                                                                 </div>
                                                            </div>
                                                            <div class="chat-ctext-wrap">
                                                                 <p>Hi </p>
                                                            </div>
                                                       </div>
                                                       <p class="text-muted fs-12 mb-0 mt-1">8:20 am<i class="bx bx-check-double ms-1 text-primary"></i></p>
                                                  </div>
                                             </li>
                                             <li class="clearfix">
                                                  <div class="chat-conversation-text ms-0">
                                                       <div class="d-flex">
                                                            <div class="chat-ctext-wrap">
                                                                 <p>Hi Gaston, thanks for joining the meeting. Let's dive into our quarterly performance review.</p>
                                                            </div>
                                                            <div class="chat-conversation-actions dropdown dropend">
                                                                 <a href="javascript: void(0);" class="ps-1" data-bs-toggle="dropdown" aria-expanded="false"><i class='bx bx-dots-vertical-rounded fs-18'></i></a>
                                                                 <div class="dropdown-menu">
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-share me-2"></i>Reply
                                                                      </a>
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-share-alt me-2"></i>Forward
                                                                      </a>
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-copy me-2"></i>Copy
                                                                      </a>
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-bookmark me-2"></i>Bookmark
                                                                      </a>
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-star me-2"></i>Starred
                                                                      </a>
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-info-square me-2"></i>Mark as Unread
                                                                      </a>
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-trash me-2"></i>Delete
                                                                      </a>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </li>
                                             <li class="clearfix odd">
                                                  <div class="chat-conversation-text ms-0">
                                                       <div class="d-flex justify-content-end">
                                                            <div class="chat-conversation-actions dropdown dropstart">
                                                                 <a href="javascript: void(0);" class="pe-1" data-bs-toggle="dropdown" aria-expanded="false"><i class='bx bx-dots-vertical-rounded fs-18'></i></a>
                                                                 <div class="dropdown-menu">
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-share me-2"></i>Reply
                                                                      </a>
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-share-alt me-2"></i>Forward
                                                                      </a>
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-copy me-2"></i>Copy
                                                                      </a>
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-bookmark me-2"></i>Bookmark
                                                                      </a>
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-star me-2"></i>Starred
                                                                      </a>
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-info-square me-2"></i>Mark as Unread
                                                                      </a>
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-trash me-2"></i>Delete
                                                                      </a>
                                                                 </div>
                                                            </div>
                                                            <div class="chat-ctext-wrap">
                                                                 <p>Hi Gilbert, thanks for having me. I'm ready to discuss how things have been going.</p>
                                                            </div>
                                                       </div>
                                                       <p class="text-muted fs-12 mb-0 mt-1">8:25 am<i class="bx bx-check-double ms-1 text-primary"></i></p>
                                                  </div>
                                             </li>
                                             <li class="clearfix">
                                                  <div class="chat-conversation-text ms-0">
                                                       <div class="d-flex">
                                                            <div class="chat-ctext-wrap">
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
                                                            <div class="chat-conversation-actions dropdown dropend">
                                                                 <a href="javascript: void(0);" class="ps-1" data-bs-toggle="dropdown" aria-expanded="false"><i class='bx bx-dots-vertical-rounded fs-18'></i></a>
                                                                 <div class="dropdown-menu">
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-share me-2"></i>Reply
                                                                      </a>
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-share-alt me-2"></i>Forward
                                                                      </a>
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-copy me-2"></i>Copy
                                                                      </a>
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-bookmark me-2"></i>Bookmark
                                                                      </a>
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-star me-2"></i>Starred
                                                                      </a>
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-info-square me-2"></i>Mark as Unread
                                                                      </a>
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-trash me-2"></i>Delete
                                                                      </a>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                       <p class="text-muted fs-12 mb-0 mt-1 ms-2">8:26 am</p>
                                                  </div>
                                             </li>

                                             <li class="clearfix odd">
                                                  <div class="chat-conversation-text ms-0">
                                                       <div class="d-flex justify-content-end">
                                                            <div class="chat-conversation-actions dropdown dropstart">
                                                                 <a href="javascript: void(0);" class="pe-1" data-bs-toggle="dropdown" aria-expanded="false"><i class='bx bx-dots-vertical-rounded fs-18'></i></a>
                                                                 <div class="dropdown-menu">
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-share me-2"></i>Reply
                                                                      </a>
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-share-alt me-2"></i>Forward
                                                                      </a>
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-copy me-2"></i>Copy
                                                                      </a>
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-bookmark me-2"></i>Bookmark
                                                                      </a>
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-star me-2"></i>Starred
                                                                      </a>
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-info-square me-2"></i>Mark as Unread
                                                                      </a>
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-trash me-2"></i>Delete
                                                                      </a>
                                                                 </div>
                                                            </div>
                                                            <div class="chat-ctext-wrap">
                                                                 <p>I appreciate your honesty. Can you elaborate on some of those challenges? I want to understand how we can support you better in the future.</p>
                                                            </div>
                                                       </div>
                                                       <p class="text-muted fs-12 mb-0 mt-1">8:27 am<i class="bx bx-check-double ms-1 text-primary"></i></p>
                                                  </div>
                                             </li>

                                             <li class="clearfix">
                                                  <div class="chat-conversation-text ms-0">
                                                       <div class="d-flex">
                                                            <div class="chat-ctext-wrap">
                                                                 <p>Thanks, Emily. I appreciate your support. Overall, I'm optimistic about our team's performance and looking forward to tackling new challenges in the next quarter.</p>
                                                            </div>
                                                            <div class="chat-conversation-actions dropdown dropend">
                                                                 <a href="javascript: void(0);" class="ps-1" data-bs-toggle="dropdown" aria-expanded="false"><i class='bx bx-dots-vertical-rounded fs-18'></i></a>
                                                                 <div class="dropdown-menu">
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-share me-2"></i>Reply
                                                                      </a>
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-share-alt me-2"></i>Forward
                                                                      </a>
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-copy me-2"></i>Copy
                                                                      </a>
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-bookmark me-2"></i>Bookmark
                                                                      </a>
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-star me-2"></i>Starred
                                                                      </a>
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-info-square me-2"></i>Mark as Unread
                                                                      </a>
                                                                      <a class="dropdown-item" href="javascript: void(0);">
                                                                           <i class="bx bx-trash me-2"></i>Delete
                                                                      </a>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                       <p class="text-muted fs-12 mb-0 mt-1">8:29 am</p>
                                                  </div>
                                             </li>
                                        </ul> <!-- end chat-conversation-list -->
                                        <div class="bg-light bg-opacity-50 p-2">
                                             <form class="needs-validation" name="chat-form" id="chat-form">
                                                  <div class="row align-items-center">
                                                       <div class="col mb-2 mb-sm-0 d-flex">
                                                            <div class="input-group">
                                                                 <a href="javascript: void(0);" class="btn btn-sm btn-light d-flex align-items-center input-group-text"><i class="bx bx-smile fs-18"></i></a>
                                                                 <input type="text" class="form-control border-0" placeholder="Enter your message">
                                                            </div>
                                                       </div>
                                                       <div class="col-sm-auto">
                                                            <div class="">
                                                                 <div class="btn-group btn-toolbar">
                                                                      <a href="javascript: void(0);" class="btn btn-sm btn-light"><i class="bx bx-paperclip fs-18"></i></a>
                                                                      <a href="javascript: void(0);" class="btn btn-sm btn-light"><i class="bx bx-video fs-18"></i></a>
                                                                      <button type="submit" class="btn btn-sm btn-primary chat-send"><i class="bx bx-send fs-18"></i></button>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </form>
                                        </div>
                                   </div>

                                   <!-- video call Modal -->
                                   <div class="modal fade" id="videocall" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-sm">
                                             <div class="modal-content video-call">

                                                  <div class="modal-header border-0 mb-5 justify-content-end">
                                                       <div class="video-call-head">
                                                            <img src="assets/Backend/images/users/avatar-4.jpg" class="rounded" alt="avatar-4" />
                                                       </div>
                                                  </div>

                                                  <div class="modal-body">
                                                       <div class="video-call-action text-center pt-4 pb-2">
                                                            <ul class="list-inline">
                                                                 <li class="list-inline-item avatar-sm fw-bold me-2">
                                                                      <a href="javascript: void(0);" class="avatar-title rounded-circle bg-soft-light text-white fs-16">
                                                                           <i class="bx bx-microphone-off"></i>
                                                                      </a>
                                                                 </li>
                                                                 <li class="list-inline-item avatar fw-bold me-2">
                                                                      <a href="javascript: void(0);" class="avatar-title rounded-circle bg-danger text-white fs-18">
                                                                           <i class="bx bx-video-off" data-bs-dismiss="modal"></i>
                                                                      </a>
                                                                 </li>
                                                                 <li class="list-inline-item avatar-sm fw-bold">
                                                                      <a href="javascript: void(0);" class="avatar-title rounded-circle bg-soft-light text-white fs-16">
                                                                           <i class="bx bx-volume-full"></i>
                                                                      </a>
                                                                 </li>
                                                            </ul>
                                                       </div>
                                                  </div>

                                             </div>
                                        </div>
                                   </div>

                                   <!-- voice call modal -->
                                   <div class="modal fade" id="voicecall" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-sm">
                                             <div class="modal-content voice-call">

                                                  <div class="modal-header border-0 mt-5 justify-content-center">
                                                       <div class="voice-call-head">
                                                            <img src="assets/Backend/images/users/avatar-4.jpg" class="rounded-circle" alt="avatar-4" />
                                                       </div>
                                                  </div>

                                                  <div class="modal-body pt-0 text-center">
                                                       <h5>Gaston Lapierre</h5>
                                                       <p class="mb-5">Calling...</p>
                                                       <div class="voice-call-action pt-4 pb-2">
                                                            <ul class="list-inline">
                                                                 <li class="list-inline-item avatar-sm fw-bold me-2">
                                                                      <a href="javascript: void(0);" class="avatar-title rounded-circle bg-soft-secondary text-dark fs-16">
                                                                           <i class="bx bx-microphone-off"></i>
                                                                      </a>
                                                                 </li>
                                                                 <li class="list-inline-item avatar fw-bold me-2" data-bs-dismiss="modal">
                                                                      <a href="javascript: void(0);" class="avatar-title rounded-circle bg-danger text-white fs-18">
                                                                           <i class="bx bx-phone-off"></i>
                                                                      </a>
                                                                 </li>
                                                                 <li class="list-inline-item avatar-sm fw-bold">
                                                                      <a href="javascript: void(0);" class="avatar-title rounded-circle bg-soft-secondary text-dark fs-16">
                                                                           <i class="bx bx-volume-full"></i>
                                                                      </a>
                                                                 </li>
                                                            </ul>
                                                       </div>
                                                  </div>

                                             </div>
                                        </div>
                                   </div>

                                   <!-- Profile Start -->
                                   <div class="offcanvas offcanvas-end position-absolute shadow border-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="user-profile" aria-labelledby="user-profileLabel">
                                        <div class="offcanvas-header">
                                             <h5 class="offcanvas-title text-truncate w-50" id="user-profileLabel">Profile</h5>
                                             <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body p-0 h-100" data-simplebar>
                                             <div class="p-3">
                                                  <div class="text-center">
                                                       <img src="assets/Backend/images/users/avatar-4.jpg" alt="shreyu" class="img-thumbnail avatar-lg rounded-circle mb-1">
                                                       <h4>Gilbert Chicoine</h4>
                                                       <button class="btn btn-primary btn-sm mt-1"><i class="bi bi-envelope me-1"></i>Send Email</button>
                                                       <p class="text-muted mt-2 fs-14">Last Interacted: <strong class="text-success">Online</strong></p>
                                                  </div>

                                                  <div class="mt-3">
                                                       <hr>


                                                       <p class="mt-3 mb-1"><strong><i class="bi bi-phone"></i> Phone Number:</strong></p>
                                                       <p>+1 456 9595 9594</p>

                                                       <p class="mt-3 mb-1"><strong><i class="bi bi-geo-alt"></i> Location:</strong></p>
                                                       <p>California, USA</p>

                                                       <p class="mt-3 mb-1"><strong><i class="bi bi-globe"></i> Languages:</strong></p>
                                                       <p>English, German, Spanish</p>

                                                       <p class="mt-3 mb-2"><strong><i class="bi bi-people"></i> Groups:</strong></p>
                                                       <p class="mb-0">
                                                            <span class="badge badge-soft-success p-1 fs-14">Work</span>
                                                            <span class="badge badge-soft-primary p-1 fs-14">Friends</span>
                                                       </p>
                                                  </div>


                                                  <h5 class="mt-3">
                                                       <a href="javascript:void(0);" class="my-0">
                                                            <span class="float-end">See All</span>
                                                            Shared Photoes
                                                       </a>
                                                  </h5>
                                                  <div class="row gx-1 pt-2">
                                                       <div class="col-4">
                                                            <a href="javascript:void(0);">
                                                                 <img src="assets/Backend/images/small/img-1.jpg" alt="img-1" class="img-fluid rounded">
                                                            </a>
                                                       </div>
                                                       <div class="col-4">
                                                            <a href="javascript:void(0);">
                                                                 <img src="assets/Backend/images/small/img-2.jpg" alt="img-2" class="img-fluid rounded">
                                                            </a>
                                                       </div>
                                                       <div class="col-4">
                                                            <div class="position-relative overflow-hidden rounded">
                                                                 <a href="javascript:void(0);">
                                                                      <img src="assets/Backend/images/small/img-3.jpg" alt="img-3" class="img-fluid rounded">
                                                                      <div class="bg-overlay bg-dark"></div>
                                                                      <h3 class="position-absolute top-50 start-50 translate-middle my-0 text-white">+3</h3>
                                                                 </a>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <!-- Profile End -->

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

     </div>
     <!-- END Wrapper -->

     <!-- Vendor Javascript (Require in all Page) -->
     <script src="assets/Backend/js/vendor.js"></script>

     <!-- App Javascript (Require in all Page) -->
     <script src="assets/Backend/js/app.js"></script>

     <!-- Page Js -->
     <script src="assets/Backend/js/pages/app-chat.js"></script>

</body>


<!-- Mirrored from techzaa.getappui.com/larkon/admin/apps-chat.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Sep 2024 06:07:33 GMT -->
</html>