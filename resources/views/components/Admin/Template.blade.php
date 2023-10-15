<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @yield('style')

  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
  <title>App - @yield('title')</title>
</head>

<body>
<div class="preloader-wrapper">
    <div class="preloader">
      <img src="{{ asset('images/805.gif') }}" alt="NILA">
    </div>
  </div>

  <!--start wrapper-->
  <div class="wrapper">
    <!--start top header-->
    <header class="top-header">
      <nav class="navbar navbar-expand gap-3">
        <div class="mobile-toggle-icon fs-3">
          <i class="bi bi-list"></i>
        </div>
        <form class="searchbar">
          <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><i class="bi bi-search"></i></div>
          <input class="form-control" type="text" name="keyword" placeholder="Type here to search">
          <a href="#">
            <div class="position-absolute top-50 translate-middle-y search-close-icon"><i class="bi bi-x-lg"></i></div>
          </a>
        </form>
        <div class="top-navbar-right ms-auto">
          <ul class="navbar-nav align-items-center">
            <li class="nav-item search-toggle-icon">
              <a class="nav-link" href="#">
                <div class="">
                  <i class="bi bi-search"></i>
                </div>
              </a>
            </li>
            <li class="nav-item dropdown dropdown-user-setting">


              <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                <div class="user-setting d-flex align-items-center">



                  <img src="{{auth()->user()->photo}}" width="54" height="54" class="user-img" alt="photoLogin">
                </div>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <a class="dropdown-item" href="#">
                    <div class="d-flex align-items-center">
                      <img src="{{auth()->user()->photo}}" alt="" class="rounded-circle" width="54" height="54">
                      <div class="ms-3">
                        <h6 class="mb-0 dropdown-user-name">{{auth()->user()->nom}} {{auth()->user()->prenom}}</h6>
                        <small class="mb-0 dropdown-user-designation text-secondary">Administrateur</small>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li>
                  <a class="dropdown-item" href="{{url('profile')}}">
                    <div class="d-flex align-items-center">
                      <div class=""><i class="bi bi-person-fill"></i></div>
                      <div class="ms-3"><span>Profile</span></div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">
                    <div class="d-flex align-items-center">
                      <div class=""><i class="bi bi-gear-fill"></i></div>
                      <div class="ms-3"><span>Setting</span></div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item" href="{{url('project')}}">
                    <div class="d-flex align-items-center">
                      <div class=""><i class="bi bi-speedometer"></i></div>
                      <div class="ms-3"><span>Dashboard</span></div>
                    </div>
                  </a>
                </li>

                <li>
                  <hr class="dropdown-divider">
                </li>
                <li>
                  <a class="dropdown-item" href="{{url('Logout')}}">
                    <div class="d-flex align-items-center">
                      <div class=""><i class="bi bi-lock-fill"></i></div>
                      <div class="ms-3"><span>Logout</span></div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item dropdown dropdown-large">
              <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                <div class="messages">
                  <span class="notify-badge">99</span>
                  <i class="bi bi-chat-right-fill"></i>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end p-0">
                <div class="p-2 border-bottom m-2">
                  <h5 class="h5 mb-0">Messages</h5>
                </div>
                <div class="header-message-list p-2">
                  <a class="dropdown-item" href="#">
                    <div class="d-flex align-items-center">
                      <img src="assets/images/avatars/avatar-1.png" alt="" class="rounded-circle" width="50" height="50">
                      <div class="ms-3 flex-grow-1">
                        <h6 class="mb-0 dropdown-msg-user">Amelio Joly <span class="msg-time float-end text-secondary">1 m</span></h6>
                        <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">The standard chunk of lorem...</small>
                      </div>
                    </div>
                  </a>
                  <a class="dropdown-item" href="#">
                    <div class="d-flex align-items-center">
                      <img src="assets/images/avatars/avatar-2.png" alt="" class="rounded-circle" width="50" height="50">
                      <div class="ms-3 flex-grow-1">
                        <h6 class="mb-0 dropdown-msg-user">Althea Cabardo <span class="msg-time float-end text-secondary">7 m</span></h6>
                        <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Many desktop publishing</small>
                      </div>
                    </div>
                  </a>
                  <a class="dropdown-item" href="#">
                    <div class="d-flex align-items-center">
                      <img src="assets/images/avatars/avatar-3.png" alt="" class="rounded-circle" width="50" height="50">
                      <div class="ms-3 flex-grow-1">
                        <h6 class="mb-0 dropdown-msg-user">Katherine Pechon <span class="msg-time float-end text-secondary">2 h</span></h6>
                        <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Making this the first true</small>
                      </div>
                    </div>
                  </a>
                 
                </div>
                <!-- <li class="nav-item dropdown dropdown-large">
              <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                <div class="messages">
                  <span class="notify-badge">99</span>
                  <i class="bi bi-chat-right-fill"></i>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end p-0">
                <div class="p-2 border-bottom m-2">
                    <h5 class="h5 mb-0">Messages</h5> -->
                <div class="p-2">
                  <div>
                    <hr class="dropdown-divider">
                  </div>
                  <a class="dropdown-item" href="{{url('message')}}">
                    <div class="text-center">View All Messages</div>
                  </a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown dropdown-large">
              <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                <div class="notifications">
                  <span class="notify-badge">8</span>
                  <i class="bi bi-bell-fill"></i>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end p-0">
                <div class="p-2 border-bottom m-2">
                  <h5 class="h5 mb-0">Notifications</h5>
                </div>
                <div class="header-notifications-list p-2">
                  <a class="dropdown-item" href="#">Dashboard
                    <div class="d-flex align-items-center">
                      <div class="notification-box bg-light-primary text-primary"><i class="bi bi-basket2-fill"></i></div>
                      <div class="ms-3 flex-grow-1">
                        <h6 class="mb-0 dropdown-msg-user">New Orders <span class="msg-time float-end text-secondary">1 m</span></h6>
                        <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">You have recived new orders</small>
                      </div>
                    </div>
                  </a>
                  <a class="dropdown-item" href="#">
                    <div class="d-flex align-items-center">
                      <div class="notification-box bg-light-purple text-purple"><i class="bi bi-people-fill"></i></div>
                      <div class="ms-3 flex-grow-1">
                        <h6 class="mb-0 dropdown-msg-user">New Customers <span class="msg-time float-end text-secondary">7 m</span></h6>
                        <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">5 new user registered</small>
                      </div>
                    </div>
                  </a>
                  <a class="dropdown-item" href="#">
                    <div class="d-flex align-items-center">
                      <div class="notification-box bg-light-success text-success"><i class="bi bi-file-earmark-bar-graph-fill"></i></div>
                      <div class="ms-3 flex-grow-1">
                        <h6 class="mb-0 dropdown-msg-user">24 PDF File <span class="msg-time float-end text-secondary">2 h</span></h6>
                        <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">The pdf files generated</small>
                      </div>
                    </div>
                  </a>
               
                </div>
                <div class="p-2">
                  <div>
                    <hr class="dropdown-divider">
                  </div>
                  <a class="dropdown-item" href="#">
                    <div class="text-center">View All Notifications</div>
                  </a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!--end top header-->

    <!--start sidebar -->
    <aside class="sidebar-wrapper" data-simplebar="true">
      <div class="sidebar-header">
        <div>
          <i id="inconLogo" class="fa-brands fa-square-pied-piper"></i>
        </div>
        <div>
          <h4 class="logo-text">MinJira</h4>
        </div>
        <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
        </div>
      </div>
      <!--navigation-->
      <ul class="metismenu" id="menu">
        <li>
          <a href="{{url('user')}}">
            <div class="parent-icon"><i class="bi bi-house-fill"></i>
            </div>
            <div class="menu-title">Dashboard</div>
          </a>

        </li>
        <li>
          <a href="{{url('compt')}}">
            <div class="parent-icon"><ion-icon style="font-size: 25px;" name="people-circle-outline"></ion-icon>
            </div>
            <div class="menu-title">Comptes</div>
          </a>

</li>
        <hr />
        <li>
          <a href="{{url('profile')}}">
            <div class="parent-icon">
              <i class="fa-solid fa-user"></i>
            </div>
            <div class="menu-title">Profile</div>
          </a>

        </li>
        <li>
        <a href="{{url('suporet')}}">

            <div class="parent-icon">
              <i class="fa-solid fa-headphones"></i>
            </div>
            <div class="menu-title">Supporet</div>
          </a>

        </li>

        <li>
          <a href="{{route('profile.show',1)}}">
            <div class="parent-icon">
              <i class="fa-solid fa-id-card"></i>
            </div>
            <div class="menu-title">Users</div>
          </a>

        </li>
        <hr />
        <li>
          <a href="{{url('message')}}">
            <div class="parent-icon">
              <ion-icon name="chatbubbles"></ion-icon>
            </div>
            <div class="menu-title">Messages</div>
          </a>

        </li>

        <li>
          <a href="{{url('Logout')}}">
            <div class="parent-icon">
              <i class="bi bi-lock-fill"></i>
            </div>
            <div class="menu-title">Logout</div>
          </a>

        </li>

      </ul>
      <!--end navigation-->
    </aside>
    <!--end sidebar -->

    <!--start content-->
    <main class="page-content">

      <!--breadcrumb-->
      <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Components</div>
        <div class="ps-3">
          <nav aria-label="breadcrumb ">
            <ol class="breadcrumb mb-0 p-0">
              <li class="breadcrumb-item"><a href="javascript:;"><a href="{{url('project')}}"><i class="bx bx-home-alt"></i></a></a>
              </li>
              <li class="breadcrumb-item active text-dark" aria-current="page">@yield('namePage')</li>
            </ol>
          </nav>
        </div>
        <div class="ms-auto">
          <div class="btn-group">
            <button type="button" class="btn btn-primary">Settings</button>
            <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item" href="javascript:;">Action</a>
              <a class="dropdown-item" href="javascript:;">Another action</a>
              <a class="dropdown-item" href="javascript:;">Something else here</a>
              <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated link</a>
            </div>
          </div>
        </div>
      </div>


      <!--end breadcrumb-->
      <!--content !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->



      <div>
        @yield('content')



        <!--end page main-->






        <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
        <!--end overlay-->

        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->

        <!--start switcher-->
        <div class="switcher-body">
          <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="bi bi-paint-bucket me-0"></i></button>
          <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
            <div class="offcanvas-header border-bottom">
              <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
              <h6 class="mb-0">Theme Variation</h6>
              <hr>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1" checked>
                <label class="form-check-label" for="LightTheme">Light</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2">
                <label class="form-check-label" for="DarkTheme">Dark</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDarkTheme" value="option3">
                <label class="form-check-label" for="SemiDarkTheme">Semi Dark</label>
              </div>
              <hr>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="MinimalTheme" value="option3">
                <label class="form-check-label" for="MinimalTheme">Minimal Theme</label>
              </div>
              <hr />
              <h6 class="mb-0">Header Colors</h6>
              <hr />
              <div class="header-colors-indigators">
                <div class="row row-cols-auto g-3">
                  <div class="col">
                    <div class="indigator headercolor1" id="headercolor1"></div>
                  </div>
                  <div class="col">
                    <div class="indigator headercolor2" id="headercolor2"></div>
                  </div>
                  <div class="col">
                    <div class="indigator headercolor3" id="headercolor3"></div>
                  </div>
                  <div class="col">
                    <div class="indigator headercolor4" id="headercolor4"></div>
                  </div>
                  <div class="col">
                    <div class="indigator headercolor5" id="headercolor5"></div>
                  </div>
                  <div class="col">
                    <div class="indigator headercolor6" id="headercolor6"></div>
                  </div>
                  <div class="col">
                    <div class="indigator headercolor7" id="headercolor7"></div>
                  </div>
                  <div class="col">
                    <div class="indigator headercolor8" id="headercolor8"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--end switcher-->

      </div>
      <!--end wrapper-->


      <footer class="text-center text-white" style="background-color: #21081a;">
        <!-- Grid container -->
        <div class="container p-4"></div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2020 Copyright:
          <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
      </footer>
      @yield('script')
      <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script>
        $(document).ready(function($) {
          var Body = $('body');
          Body.addClass('preloader-site');
        });
        $(window).on('load', function() {
          $('.preloader-wrapper').fadeOut();
          $('body').removeClass('preloader-site');
        });
      </script>


    </body>

</html>