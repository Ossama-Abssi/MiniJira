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
@section('script')

<!-- Bootstrap bundle JS -->
<script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
<!--plugins-->
<script src="{{url('assets/js/jquery.min.js')}}"></script>
<script src="{{url('assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
<script src="{{url('assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
<script src="{{url('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
<!--app-->
<script src="{{url('assets/js/app.js')}}"></script>
<script src="{{url('assets/js/pace.min.js')}}"></script>

@endsection
@section('title')
Profil
@endsection
@section('namePage')
Profil
@endsection
@section('content')

<div class="cont">

  <div class="menu col-12">
    <b class="titel">Profile</b>
    <p class="descrption"> I'm Web Develloper</p>
  </div>

</div>
<div class="cont">
  <div class="row">
    <div class="col-sm">
      <div class="deatels">

        <b class="titer">Detials</b>
        <h3 class="p-titer">Nom </h3>
        <p>{{$user->name }}</p>
        <h3 class="p-titer">Age</h3>
        <p>{{$user->Age}}</p>
        <h3 class="p-titer">Localion</h3>
        <p>{{$user->Adresse}}</p>
        <div style="display:flex">

          <div class="icons"><ion-icon name="logo-facebook"></ion-icon></div>

          <div class="icons"><ion-icon name="logo-github"></ion-icon></div>


          <div class="icons"><ion-icon name="logo-linkedin"></ion-icon></div>

        </div>
      </div>
    </div>
    <div class="col-sm">
      <div class="about ">
        <b class="titer">Contact</b><br><br>
        <div style="display: flex;">
          <ion-icon style="font-size: 18px;margin-right:10px;" name="call-outline"></ion-icon>
          <p>{{$user->telephone}}</p>
        </div><br>
        <div style="display: flex;">
          <ion-icon style="font-size: 18px;margin-right:10px;" name="mail-outline"></ion-icon>

          <p>{{$user->email}}</p>
        </div>
        <br>
        <button class="btnPro" type="submit">contact me</button>
      </div>
    </div>
    <div class="col-sm">
      <div class="photo ">
        <img src="{{auth()->user()->photo}}" class="img" width="80%" height="20px" />
        <h1 class="titer" style="color: aliceblue;margin-top: 20px;">About me</h1>
        <p>{{$user->About}}
        </p>
      </div>
    </div>
  </div>
</div>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>



@endsection