<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Wedayyy | Dashboard 🫃</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link href="{{asset('img/wedd.png')}}" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{asset('../assets/vendor/fonts/boxicons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('../assets/vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('../assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('../assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

    <link rel="stylesheet" href="{{asset('../assets/vendor/libs/apex-charts/apex-charts.css')}}" />
    <style>
        #container {
            width: 1000px;
            margin: 20px auto;
        }
        .ck-editor__editable[role="textbox"] {
            /* Editing area */
            min-height: 200px;
        }
        .ck-content .image {
            /* Block images */
            max-width: 80%;
            margin: 20px auto;
        }
    </style>

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{asset('../assets/vendor/js/helpers.js')}}"></script>

    <script src="{{asset('../assets/js/config.js')}}"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="/" class="app-brand-link" target="__blank">
              <span class="app-brand-logo demo">
                <img src="{{asset('img/wedding.gif')}}" alt="" width="40">
              </span>
              <span class="app-brand-text demo menu-text fw-bolder ms-2">WeDayyy</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item {{Request::is('dashboard') ? 'active' : ''}}">
              <a href="/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">DASHBOARD</div>
              </a>
            </li>

            <!-- Layouts -->
            <li class="menu-item {{Request::is('headerAdmin') || Request::is('aboutAdmin') || Request::is('serviceAdmin') || Request::is('teamAdmin') ? 'active' : ''}}">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">LAYOUTS</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item {{Request::is('headerAdmin') ? 'active' : ''}}">
                  <a href="/headerAdmin" class="menu-link">
                    <div data-i18n="Without menu">HEADER</div>
                  </a>
                </li>
                <li class="menu-item {{Request::is('aboutAdmin') ? 'active' : ''}}">
                  <a href="/aboutAdmin" class="menu-link">
                    <div data-i18n="Without navbar">ABOUT</div>
                  </a>
                </li>
                <li class="menu-item {{Request::is('serviceAdmin') ? 'active' : ''}}">
                  <a href="/serviceAdmin" class="menu-link">
                    <div data-i18n="Container">SERVICE</div>
                  </a>
                </li>
                <li class="menu-item {{Request::is('teamAdmin') ? 'active' : ''}}">
                  <a href="/teamAdmin" class="menu-link">
                    <div data-i18n="Blank">TEAM</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item {{Request::is('decorAdmin') || Request::is('cateringAdmin') || Request::is('packageAdmin') ? 'active' : ''}}">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon fas fa-th-large"></i>
                <div data-i18n="Layouts">MENUS</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item {{Request::is('decorAdmin') ? 'active' : ''}}">
                  <a href="/decorAdmin" class="menu-link">
                    <div data-i18n="Without menu">DECORATION</div>
                  </a>
                </li>
                <li class="menu-item {{Request::is('cateringAdmin') ? 'active' : ''}}">
                  <a href="/cateringAdmin" class="menu-link">
                    <div data-i18n="Without navbar">CATERING</div>
                  </a>
                </li>
                <li class="menu-item {{Request::is('packageAdmin') ? 'active' : ''}}">
                  <a href="/packageAdmin" class="menu-link">
                    <div data-i18n="Container">PACKAGE</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item {{Request::is('reserAdmin') || Request::is('contactAdmin') || Request::is('testiAdmin') ? 'active' : ''}}">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon fas fa-mail-bulk"></i>
                <div data-i18n="Layouts">MESSAGES</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item {{Request::is('reserAdmin') ? 'active' : ''}}">
                  <a href="/reserAdmin" class="menu-link">
                    <div data-i18n="Without menu">RESERVATIONS</div>
                  </a>
                </li>
                <li class="menu-item {{Request::is('contactAdmin') ? 'active' : ''}}">
                  <a href="/contactAdmin" class="menu-link">
                    <div data-i18n="Without navbar">CONTACT</div>
                  </a>
                </li>
                <li class="menu-item {{Request::is('testiAdmin') ? 'active' : ''}}">
                  <a href="/testiAdmin" class="menu-link">
                    <div data-i18n="Container">COMMENT</div>
                  </a>
                </li>
              </ul>
            </li>

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Accounts</span>
            </li>
            <li class="menu-item {{Request::is('usersAdmin') ? 'active' : ''}}">
              <a href="/usersAdmin" class="menu-link">
                <i class="fas fa-users-cog menu-icon"></i>
                <div data-i18n="Analytics">ADMIN</div>
              </a>
            </li>
            <li class="menu-item {{Request::is('users') ? 'active' : ''}}">
              <a href="/users" class="menu-link">
                <i class="fas fa-user menu-icon"></i>
                <div data-i18n="Analytics">CUSTOMER</div>
              </a>
            </li>

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">EMPLOYEE</span>
            </li>
            <li class="menu-item {{Request::is('employee') ? 'active' : ''}}">
              <a href="/employee" class="menu-link">
                <i class="fas fa-user menu-icon"></i>
                <div data-i18n="Analytics">EMPLOYEE</div>
              </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  Welcome, Back {{auth()->user()->name}}
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
              
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="{{asset('storage/images/'.auth()->user()->img)}}" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="{{asset('storage/images/'.auth()->user()->img)}}" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">{{auth()->user()->name}}</span>
                            <small class="text-muted">{{auth()->user()->level}}</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="/logout">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col mb-4 order-0">
                  @yield('content')
                </div>
                
                
              </div>
              
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">Raffa Yuda</a>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{asset('../assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('../assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{asset('../assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{asset('../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <script src="{{asset('../assets/vendor/js/menu.js')}}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{asset('../assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('../assets/js/main.js')}}"></script>

    <!-- Page JS -->
    <script src="{{asset('../assets/js/dashboards-analytics.js')}}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/super-build/ckeditor.js"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    @include('partials.ck')
  </body>
</html>
