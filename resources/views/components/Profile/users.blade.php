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
Users
@endsection
@section('namePage')
Users
@endsection
@section('content')

<div id="divbody">
    <swiper-container class="mySwiper" pagination="true" effect="coverflow" grab-cursor="true" centered-slides="true" slides-per-view="auto" coverflow-effect-rotate="50" coverflow-effect-stretch="0" coverflow-effect-depth="100" coverflow-effect-modifier="1" coverflow-effect-slide-shadows="true">
        @foreach($employes as $employe)
        <swiper-slide>
            <div class="slide-container ">
                <div class="silde-content ">
                    <div class="card-wrapper">
                        <div class="cardPro">
                            <div class="image-content">
                                <div class="overlayCSS"></div>

                                <div class="card-image">
                                    <img src="{{$employe->photo}}" class="card-img" alt="your profil">
                                </div>
                            </div>
                            <div class="card-content">
                                <h2 class="name">{{$employe->nom}}</h2>

                                <p class="description">{{$employe->About}}</p>
                                <a href="{{route('profile.edit',$employe->id)}}" class="button">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </swiper-slide>

        @endforeach
    </swiper-container>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
</div>




@endsection