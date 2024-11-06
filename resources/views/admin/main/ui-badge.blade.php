<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from techzaa.getappui.com/larkon/admin/ui-badge.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Sep 2024 06:08:00 GMT -->
<head>
        <!-- Title Meta -->
        <meta charset="utf-8" />
        <title>Badge | Larkon - Responsive Admin Dashboard Template</title>
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
                                     <h4 class="fw-bold topbar-button pe-none text-uppercase mb-0">Badge</h4>
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

                    <!-- start badges -->
                    <div class="row">
                        <div class="col-xl-9">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-1 anchor" id="heading">
                                        Heading <a class="anchor-link" href="#heading">#</a>
                                    </h5>
                                    <p class="text-muted">
                                        Provide contextual feedback messages for typical user actions with the handful of available and flexible alert
                                        messages. Alerts are available for any length of text, as well as an optional dismiss button.
                                    </p>
                                    <div class="mb-3">
                                        <h1>h1.Example heading <span class="badge bg-primary">New</span></h1>
                                        <h2>h2.Example heading <span class="badge bg-secondary">New</span></h2>
                                        <h3>h3.Example heading <span class="badge bg-success">New</span></h3>
                                        <h4>h4.Example heading <span class="badge bg-info">New</span></h4>
                                        <h5>h5.Example heading <span class="badge bg-warning">New</span></h5>
                                        <h6 class="mb-0">h6.Example heading <span class="badge bg-danger">New</span></h6>
                                    </div>

                                    <div class="highlight">
                                        <div class="highlight-toolbar">
                                            <small class="text-uppercase">html</small>
                                            <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                        </div>
                                        <div class="code">
                                            <pre class="language-html">
                                                <code id="headingBadge">
                                                    &lt;h1&gt;h1.Example heading &lt;span class=&quot;badge bg-primary&quot;&gt;New&lt;/span&gt;&lt;/h1&gt;
                                                    &lt;h2&gt;h2.Example heading &lt;span class=&quot;badge bg-secondary&quot;&gt;New&lt;/span&gt;&lt;/h2&gt;
                                                    &lt;h3&gt;h3.Example heading &lt;span class=&quot;badge bg-success&quot;&gt;New&lt;/span&gt;&lt;/h3&gt;
                                                    &lt;h4&gt;h4.Example heading &lt;span class=&quot;badge bg-info&quot;&gt;New&lt;/span&gt;&lt;/h4&gt;
                                                    &lt;h5&gt;h5.Example heading &lt;span class=&quot;badge bg-warning&quot;&gt;New&lt;/span&gt;&lt;/h5&gt;
                                                    &lt;h6&gt;h6.Example heading &lt;span class=&quot;badge bg-danger&quot;&gt;New&lt;/span&gt;&lt;/h6&gt;
                                                </code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-1 anchor" id="default_pill_badges">
                                        Default & Pill Badges <a class="anchor-link" href="#default_pill_badges">#</a>
                                    </h5>
                                    <p class="text-muted">
                                        Use our background utility classes to quickly change the appearance of a badge.
                                        And use the <code>.rounded-pill</code> class to make badges more rounded.
                                    </p>
                                    <div class="mb-3">
                                        <!-- Default Badges -->
                                        <div class="mb-2">
                                            <span class="badge bg-primary me-1">Primary</span>
                                            <span class="badge bg-secondary me-1">Secondary</span>
                                            <span class="badge bg-success me-1">Success</span>
                                            <span class="badge bg-info me-1">Info</span>
                                            <span class="badge bg-warning me-1">Warning</span>
                                            <span class="badge bg-danger me-1">Danger</span>
                                            <span class="badge bg-dark me-1">Dark</span>
                                            <span class="badge bg-purple me-1">Purple</span>
                                            <span class="badge bg-pink me-1">Pink</span>
                                            <span class="badge bg-orange me-1">Orange</span>
                                        </div>
                                        <!-- Pill Badges -->
                                        <div>
                                            <span class="badge bg-primary rounded-pill me-1">Primary</span>
                                            <span class="badge bg-secondary rounded-pill me-1">Secondary</span>
                                            <span class="badge bg-success rounded-pill me-1">Success</span>
                                            <span class="badge bg-info rounded-pill me-1">Info</span>
                                            <span class="badge bg-warning rounded-pill me-1">Warning</span>
                                            <span class="badge bg-danger rounded-pill me-1">Danger</span>
                                            <span class="badge bg-dark rounded-pill me-1">Dark</span>
                                            <span class="badge bg-purple rounded-pill me-1">Purple</span>
                                            <span class="badge bg-pink rounded-pill me-1">Pink</span>
                                            <span class="badge bg-orange rounded-pill me-1">Orange</span>
                                        </div>
                                    </div>

                                    <div class="highlight">
                                        <div class="highlight-toolbar">
                                            <small class="text-uppercase">html</small>
                                            <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                        </div>
                                        <div class="code">
                                            <pre class="language-html">
                                                <code id="defaultPillBadge">
                                                    &lt;!-- Default Badges --&gt;
                                                    &lt;span class=&quot;badge bg-primary me-1&quot;&gt;Primary&lt;/span&gt;
                                                    &lt;span class=&quot;badge bg-secondary me-1&quot;&gt;Secondary&lt;/span&gt;
                                                    &lt;span class=&quot;badge bg-success me-1&quot;&gt;Success&lt;/span&gt;
                                                    &lt;span class=&quot;badge bg-info me-1&quot;&gt;Info&lt;/span&gt;
                                                    &lt;span class=&quot;badge bg-warning me-1&quot;&gt;Warning&lt;/span&gt;
                                                    &lt;span class=&quot;badge bg-danger me-1&quot;&gt;Danger&lt;/span&gt;
                                                    &lt;span class=&quot;badge bg-dark me-1&quot;&gt;Dark&lt;/span&gt;
                                                    &lt;span class=&quot;badge bg-purple me-1&quot;&gt;Purple&lt;/span&gt;
                                                    &lt;span class=&quot;badge bg-pink me-1&quot;&gt;Pink&lt;/span&gt;
                                                    &lt;span class=&quot;badge bg-orange me-1&quot;&gt;Orange&lt;/span&gt;
                                                    &lt;!-- Pill Badges --&gt;
                                                    &lt;span class=&quot;badge bg-primary rounded-pill me-1&quot;&gt;Primary&lt;/span&gt;
                                                    &lt;span class=&quot;badge bg-secondary rounded-pill me-1&quot;&gt;Secondary&lt;/span&gt;
                                                    &lt;span class=&quot;badge bg-success rounded-pill me-1&quot;&gt;Success&lt;/span&gt;
                                                    &lt;span class=&quot;badge bg-info rounded-pill me-1&quot;&gt;Info&lt;/span&gt;
                                                    &lt;span class=&quot;badge bg-warning rounded-pill me-1&quot;&gt;Warning&lt;/span&gt;
                                                    &lt;span class=&quot;badge bg-danger rounded-pill me-1&quot;&gt;Danger&lt;/span&gt;
                                                    &lt;span class=&quot;badge bg-dark rounded-pill me-1&quot;&gt;Dark&lt;/span&gt;
                                                    &lt;span class=&quot;badge bg-purple rounded-pill me-1&quot;&gt;Purple&lt;/span&gt;
                                                    &lt;span class=&quot;badge bg-pink rounded-pill me-1&quot;&gt;Pink&lt;/span&gt;
                                                    &lt;span class=&quot;badge bg-orange rounded-pill me-1&quot;&gt;Orange&lt;/span&gt;
                                                </code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-1 anchor" id="outline_badges">
                                        Outline & Outline Pill Badges <a class="anchor-link" href="#outline_badges">#</a>
                                    </h5>
                                    <p class="text-muted">
                                        Using the <code>.badge-outline-**</code> to quickly create a bordered badges.
                                    </p>

                                    <div class="mb-3">
                                        <!-- Outline Badges -->
                                        <div class="mb-2">
                                            <span class="badge badge-outline-primary me-1">Primary</span>
                                            <span class="badge badge-outline-secondary me-1">Secondary</span>
                                            <span class="badge badge-outline-success me-1">Success</span>
                                            <span class="badge badge-outline-info me-1">Info</span>
                                            <span class="badge badge-outline-warning me-1">Warning</span>
                                            <span class="badge badge-outline-danger me-1">Danger</span>
                                            <span class="badge badge-outline-dark me-1">Dark</span>
                                            <span class="badge badge-outline-purple me-1">Purple</span>
                                            <span class="badge badge-outline-pink me-1">Pink</span>
                                            <span class="badge badge-outline-orange me-1">Orange</span>
                                        </div>
                                        <!-- Outline Pill Badges -->
                                        <div>
                                            <span class="badge badge-outline-primary rounded-pill me-1">Primary</span>
                                            <span class="badge badge-outline-secondary rounded-pill me-1">Secondary</span>
                                            <span class="badge badge-outline-success rounded-pill me-1">Success</span>
                                            <span class="badge badge-outline-info rounded-pill me-1">Info</span>
                                            <span class="badge badge-outline-warning rounded-pill me-1">Warning</span>
                                            <span class="badge badge-outline-danger rounded-pill me-1">Danger</span>
                                            <span class="badge badge-outline-dark rounded-pill me-1">Dark</span>
                                            <span class="badge badge-outline-purple rounded-pill me-1">Purple</span>
                                            <span class="badge badge-outline-pink rounded-pill me-1">Pink</span>
                                            <span class="badge badge-outline-orange rounded-pill me-1">Orange</span>
                                        </div>
                                    </div>

                                    <div class="highlight">
                                        <div class="highlight-toolbar">
                                            <small class="text-uppercase">html</small>
                                            <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                        </div>
                                        <div class="code">
                                            <pre class="language-html">
                                                <code id="outline&PillBadge">
                                                    &lt;!-- Outline Badges --&gt;
                                                    &lt;span class=&quot;badge badge-outline-primary me-1&quot;&gt;Primary&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-outline-secondary me-1&quot;&gt;Secondary&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-outline-success me-1&quot;&gt;Success&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-outline-info me-1&quot;&gt;Info&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-outline-warning me-1&quot;&gt;Warning&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-outline-danger me-1&quot;&gt;Danger&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-outline-dark me-1&quot;&gt;Dark&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-outline-purple me-1&quot;&gt;Purple&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-outline-pink me-1&quot;&gt;Pink&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-outline-orange me-1&quot;&gt;Orange&lt;/span&gt;
                                                    &lt;!-- Outline Pill Badges --&gt;
                                                    &lt;span class=&quot;badge badge-outline-primary rounded-pill me-1&quot;&gt;Primary&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-outline-secondary rounded-pill me-1&quot;&gt;Secondary&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-outline-success rounded-pill me-1&quot;&gt;Success&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-outline-info rounded-pill me-1&quot;&gt;Info&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-outline-warning rounded-pill me-1&quot;&gt;Warning&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-outline-danger rounded-pill me-1&quot;&gt;Danger&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-outline-dark rounded-pill me-1&quot;&gt;Dark&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-outline-purple rounded-pill me-1&quot;&gt;Purple&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-outline-pink rounded-pill me-1&quot;&gt;Pink&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-outline-orange rounded-pill me-1&quot;&gt;Orange&lt;/span&gt;
                                                </code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-1 anchor" id="soft_badges">
                                        Soft & Soft Pill Badges <a class="anchor-link" href="#soft_badges">#</a>
                                    </h5>
                                    <p class="text-muted">
                                        Using the <code>.badge-soft-**</code> modifier class, you can have more soften variation.
                                    </p>

                                    <div class="mb-3">
                                        <!--  Soft Badges -->
                                        <div class="mb-2">
                                            <span class="badge badge-soft-primary me-1">Primary</span>
                                            <span class="badge badge-soft-secondary me-1">Secondary</span>
                                            <span class="badge badge-soft-success me-1">Success</span>
                                            <span class="badge badge-soft-info me-1">Info</span>
                                            <span class="badge badge-soft-warning me-1">Warning</span>
                                            <span class="badge badge-soft-danger me-1">Danger</span>
                                            <span class="badge badge-soft-dark me-1">Dark</span>
                                            <span class="badge badge-soft-purple me-1">Purple</span>
                                            <span class="badge badge-soft-pink me-1">Pink</span>
                                            <span class="badge badge-soft-orange me-1">Orange</span>
                                        </div>
                                        <!--  Soft Pill Badges -->
                                        <div>
                                            <span class="badge badge-soft-primary rounded-pill me-1">Primary</span>
                                            <span class="badge badge-soft-secondary rounded-pill me-1">Secondary</span>
                                            <span class="badge badge-soft-success rounded-pill me-1">Success</span>
                                            <span class="badge badge-soft-info rounded-pill me-1">Info</span>
                                            <span class="badge badge-soft-warning rounded-pill me-1">Warning</span>
                                            <span class="badge badge-soft-danger rounded-pill me-1">Danger</span>
                                            <span class="badge badge-soft-dark rounded-pill me-1">Dark</span>
                                            <span class="badge badge-soft-purple rounded-pill me-1">Purple</span>
                                            <span class="badge badge-soft-pink rounded-pill me-1">Pink</span>
                                            <span class="badge badge-soft-orange rounded-pill me-1">Orange</span>
                                        </div>
                                    </div>

                                    <div class="highlight">
                                        <div class="highlight-toolbar">
                                            <small class="text-uppercase">html</small>
                                            <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                        </div>
                                        <div class="code">
                                            <pre class="language-html">
                                                <code id="soft&PillBadges">
                                                    &lt;!-- Soft Badges --&gt;
                                                    &lt;span class=&quot;badge badge-soft-primary me-1&quot;&gt;Primary&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-soft-secondary me-1&quot;&gt;Secondary&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-soft-success me-1&quot;&gt;Success&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-soft-info me-1&quot;&gt;Info&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-soft-warning me-1&quot;&gt;Warning&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-soft-danger me-1&quot;&gt;Danger&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-soft-dark me-1&quot;&gt;Dark&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-soft-purple me-1&quot;&gt;Purple&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-soft-pink me-1&quot;&gt;Pink&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-soft-orange me-1&quot;&gt;Orange&lt;/span&gt;
                                                    &lt;!-- Soft Pill Badges --&gt;
                                                    &lt;span class=&quot;badge badge-soft-primary rounded-pill me-1&quot;&gt;Primary&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-soft-secondary rounded-pill me-1&quot;&gt;Secondary&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-soft-success rounded-pill me-1&quot;&gt;Success&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-soft-info rounded-pill me-1&quot;&gt;Info&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-soft-warning rounded-pill me-1&quot;&gt;Warning&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-soft-danger rounded-pill me-1&quot;&gt;Danger&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-soft-dark rounded-pill me-1&quot;&gt;Dark&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-soft-purple rounded-pill me-1&quot;&gt;Purple&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-soft-pink rounded-pill me-1&quot;&gt;Pink&lt;/span&gt;
                                                    &lt;span class=&quot;badge badge-soft-orange rounded-pill me-1&quot;&gt;Orange&lt;/span&gt;
                                                </code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-1 anchor" id="component_badges">
                                        Buttons & Position <a class="anchor-link" href="#component_badges">#</a>
                                    </h5>
                                    <p class="text-muted">
                                        Alerts can also contain additional HTML elements like headings, paragraphs and dividers.
                                    </p>

                                    <div class="mb-3">
                                        <div class="mb-2">
                                            <button type="button" class="btn btn-primary me-1 mb-1">
                                                Notifications <span class="badge bg-danger ms-1">4</span>
                                            </button>
                                            <button type="button" class="btn btn-outline-primary me-1 mb-1">
                                                Notifications <span class="badge bg-primary ms-1">new</span>
                                            </button>
                                            <button type="button" class="btn btn-soft-primary me-1 mb-1">
                                                Notifications <span class="badge bg-primary ms-1">11</span>
                                            </button>
                                            <a href="javascript:void(0);" class="btn me-1 mb-1">
                                                Notifications <span class="badge bg-primary ms-1">90+</span>
                                            </a>
                                        </div>

                                        <div>
                                            <button type="button" class="btn btn-primary position-relative me-3">
                                                Inbox
                                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger border border-light">99+</span>
                                            </button>
                                            <button type="button" class="btn btn-primary position-relative">
                                                Profile
                                                <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle"></span>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="highlight">
                                        <div class="highlight-toolbar">
                                            <small class="text-uppercase">html</small>
                                            <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                        </div>
                                        <div class="code">
                                            <pre class="language-html">
                                                <code id="buttonBadge">
                                                    &lt;!-- Buttons --&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-primary me-1&quot;&gt;
                                                        Notifications &lt;span class=&quot;badge bg-danger ms-1&quot;&gt;4&lt;/span&gt;
                                                    &lt;/button&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary me-1&quot;&gt;
                                                        Notifications &lt;span class=&quot;badge bg-primary ms-1&quot;&gt;new&lt;/span&gt;
                                                    &lt;/button&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-soft-primary&quot;&gt;
                                                        Notifications &lt;span class=&quot;badge bg-primary ms-1&quot;&gt;11+&lt;/span&gt;
                                                    &lt;/button&gt;
                                                    &lt;a href=&quot;javascript:void(0);&quot; type=&quot;button&quot; class=&quot;btn&quot;&gt;
                                                        Notifications &lt;span class=&quot;badge bg-primary ms-1&quot;&gt;90+&lt;/span&gt;
                                                    &lt;/a&gt;

                                                    &lt;!-- Position --&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-primary position-relative me-3&quot;&gt;
                                                        Inbox
                                                        &lt;span class=&quot;position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger border border-light&quot;&gt;99+&lt;/span&gt;
                                                    &lt;/button&gt;
                                                    &lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-primary position-relative&quot;&gt;
                                                        Profile
                                                        &lt;span class=&quot;position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle&quot;&gt;&lt;/span&gt;
                                                    &lt;/button&gt;
                                                </code>
                                            </pre>
                                        </div>
                                    </div>
                                </div> <!-- end card body -->
                            </div> <!-- end card -->
                        </div> <!-- end col -->

                        <div class="col-xl-3">
                            <div class="card docs-nav">
                                <ul class="nav bg-transparent flex-column">
                                    <li class="nav-item">
                                        <a href="#heading" class="nav-link">Heading</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#default_pill_badges" class="nav-link">Default & Pill Badges</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#outline_badges" class="nav-link">Outline & Outline Pill Badges</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#soft_badges" class="nav-link">Soft & Soft Pill Badges</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#component_badges" class="nav-link">Buttons & Position</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- end row -->
                    <!-- end badges -->

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


    </body>


<!-- Mirrored from techzaa.getappui.com/larkon/admin/ui-badge.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Sep 2024 06:08:00 GMT -->
</html>
