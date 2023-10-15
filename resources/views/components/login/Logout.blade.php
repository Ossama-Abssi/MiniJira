@extends($page)
@section('style')
<!--plugins-->
<link href="{{url('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
<link href="{{url('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
<link href="{{url('assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
<!-- Bootstrap CSS -->
<link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
<link href="{{url('assets/css/bootstrap-extended.css')}}" rel="stylesheet" />
<link href="{{url('assets/css/style.css')}}" rel="stylesheet" />
<link href="{{url('assets/css/icons.css')}}" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<!-- loader-->
<link href="{{url('assets/css/pace.min.css')}}" rel="stylesheet" />


<!--Theme Styles-->
<link href="{{url('assets/css/dark-theme.css')}}" rel="stylesheet" />
<link href="{{url('assets/css/light-theme.css')}}" rel="stylesheet" />
<link href="{{url('assets/css/semi-dark.css')}}" rel="stylesheet" />
<link href="{{url('assets/css/header-colors.css')}}" rel="stylesheet" />
@endsection
@section('title')
Profil
@endsection
@section('namePage')
Profil
@endsection
@section('content')


<!--start wrapper-->
<div class="wrapper">


  <!--start content-->
  <main class="authentication-content">
    <div class="container">
      <div class="mt-4">
        <div class="card rounded-0 overflow-hidden shadow-none border mb-5 mb-lg-0" style="display: flex;">
          <div class="row g-0" style="display: flex;">
            <div class="col-12 order-1 col-xl-8 d-flex align-items-center justify-content-center border-end">
              <img src="assets/images/error/auth-img-7.png" class="img-fluid" alt="">
            </div>
            <div class="col-12 col-xl-4 order-xl-2">
              <div class="card-body p-4 p-sm-5">
                <h5 class="card-title">Log Out</h5>
                <p class="card-text mb-4">See your growth and get consulting support!</p>
                <form class="form-body" action="{{route('logout')}}" method="post">
                  @csrf
                  <div class="row g-3">
                    <div class="col-12">
                      <label for="inputEmailAddress" class="form-label">Email Address</label>
                      <div class="ms-auto position-relative">
                        <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div>
                        <input type="email" class="form-control radius-30 ps-5" id="inputEmailAddress" placeholder="Email">
                      </div>
                    </div>
                    <div class="col-12">
                      <label for="inputChoosePassword" class="form-label">Enter Password</label>
                      <div class="ms-auto position-relative">
                        <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                        <input type="password" class="form-control radius-30 ps-5" id="inputChoosePassword" placeholder="Password">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
                        <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="d-grid">
                      <input type="submit" class="btn btn-primary radius-30" value="Log Out">
                    </div>
                  </div>
                  <!-- <div class="col-12">
                      <div class="login-separater text-center"> <span>OR Log Out WITH EMAIL</span>
                        <hr>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="d-flex align-items-center gap-3 justify-content-center">
                        <button type="button" class="btn btn-white text-danger"><i class="bi bi-google me-0"></i></button>
                        <button type="button" class="btn btn-white text-primary"><i class="bi bi-linkedin me-0"></i></button>
                        <button type="button" class="btn btn-white text-info"><i class="bi bi-facebook me-0"></i></button>
                      </div>
                    </div> -->
                  <!-- <div class="col-12 text-center">
                    <p class="mb-0">Don't have an account yet? <a href="authentication-signup-with-header-footer.html">Sign up here</a></p>
                  </div> -->

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <br><br>
  <!--end page main-->



</div>
<!--end wrapper-->

@section('style')
<!--plugins-->
<link href="{{url('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
<link href="{{url('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
<link href="{{url('assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
<!-- Bootstrap CSS -->
<link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
<link href="{{url('assets/css/bootstrap-extended.css')}}" rel="stylesheet" />
<link href="{{url('assets/css/style.css')}}" rel="stylesheet" />
<link href="{{url('assets/css/icons.css')}}" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<!-- loader-->
<link href="{{url('assets/css/pace.min.css')}}" rel="stylesheet" />


<!--Theme Styles-->
<link href="{{url('assets/css/dark-theme.css')}}" rel="stylesheet" />
<link href="{{url('assets/css/light-theme.css')}}" rel="stylesheet" />
<link href="{{url('assets/css/semi-dark.css')}}" rel="stylesheet" />
<link href="{{url('assets/css/header-colors.css')}}" rel="stylesheet" />
@endsection
@section('script')

<!-- Bootstrap bundle JS -->
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<!--plugins-->
<script src="{{url('assets/js/jquery.min.js')}}"></script>
<script src="{{url('assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
<script src="{{url('assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
<script src="{{url('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
<!--app-->
<script src="{{url('assets/js/app.js')}}"></script>
<script src="{{url('assets/js/pace.min.js')}}"></script>
<!-- Bootstrap bundle JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>

<!--plugins-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/pace.min.js"></script>
@endsection





@endsection