@extends('components/Admin/Template')

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
Insert Compts
@endsection
@section('namePage')
Insert Compts
@endsection

@section('content')
<style>
    .gradient-custom-3 {
        /* fallback for old browsers */
        background: #84fab0;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
    }

    .gradient-custom-4 {
        /* fallback for old browsers */
        background: #84fab0;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
    }
</style>
<div class="card-table">
    <div class="card-body p-5">
        <h2 class="text-uppercase text-center mb-5">Create an account</h2>

        <form action="{{route('compt.update',$user->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-outline mb-4">
                <label class="form-label" for="form3Example1cg">Email</label>
                <input type="temailext" id="form3Example1cg" name="email" value="{{$user->email}}" class="form-control form-control-lg" />
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3cg">Phone</label>
                <input type="number" id="form3Example3cg" name="telephone" value="{{$user->telephone}}" class="form-control form-control-lg" />
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4cg">Password</label>
                <input type="password" id="form3Example4cg" name="password" value="{{$user->password}}" class="form-control form-control-lg" />
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                <input type="password" id="form3Example4cdg" name="password" value="{{$user->password}}" class="form-control form-control-lg" />
            </div>

            <div class="form-check d-flex justify-content-center mb-5">

                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                <label class="form-check-label" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                </label>
            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Create</button>
            </div>


        </form>

    </div>
</div><br>
@endsection