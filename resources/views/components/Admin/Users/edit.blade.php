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
Update User
@endsection
@section('namePage')
Update User
@endsection

@section('content')
<div class="card-table">


    <form action="{{route('user.update',$user->id)}}" method="post">

        @csrf
        @method('PUT')
        <div class="d-flex w-100">

            <div class="form-grouptext-center" style="width:48%">
                <label class="label" for="nom">nom : </label><br>
                <input type="text" name="nom" class="input form-control w-100" id="nom" value="{{$user->nom}}">
            </div>
            <br>
            <div class="form-group" style="width:48%;margin-left:4%">
                <label class="label" for="prenom">prenom : </label><br>
                <input type="text" name="prenom" class="input form-control" id="prenom" value="{{$user->prenom}}">
            </div>
        </div>
        <br>
        <div class="form-group">
            <label class="label" for="About">About : </label><br>
            <input type="text" name="About" class="input form-control" style="min-height:100px;" id="About" value="{{$user->About}}">
        </div>
        <br>
        <div class="d-flex w-100">

            <div class="form-group" style="width:48%;">
                <label class="label" for="Age">Age : </label><br>
                <input type="number" name="Age" class="input form-control" id="Age" value="{{$user->Age}}">
            </div>
            <br>
            <div class="form-group" style="width:48%;margin-left:4%">
                <label class="label" for="photo">photo : </label><br>
                <input type="file" name="photo" class="input form-control" id="photo" value="{{$user->photo}}">
            </div>
        </div>
        <br>
        <div class="form-group">
            <label class="label" for="Adresse">Adresse : </label><br>
            <input type="text" name="Adresse" class="input form-control" style="min-height:50px;" id="Adresse" value="{{$user->Adresse}}">
        </div>
        <br>

        <br><br>
        <div class="d-flex w-100">

            <br><br>
            <div class="form-group" style="width:48%;">
                <label class="label" for="telephone">telephone : </label><br>
                <input type="number" name="telephone" class="input form-control" id="telephone" value="{{$user->telephone}}">
            </div>

            <br>
            <div class="form-group" style="width:48%;margin-left:4%">
                <label class="label" for="profil_id">Profil : </label><br>
                <select class="input form-select" aria-label="Default select example" name="profil_id">
                    @foreach($profils as $profil)
                    <option value="{{$profil->id}}">{{$profil->role}}</option>
                    @endforeach
                    <option value="new"><a href="" class="btn btn-dark">Auter</a></option>

                </select>
            </div>
        </div>

        <br>
        <button type="submit" name="snd" class="btn btn-outline-warning">Update</button>
    </form>
</div>
@endsection