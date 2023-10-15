@extends('components/Template')
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
Equeps
@endsection
@section('namePage')
Equepe
@endsection
@section('content')

<main>
    <div class="cards">
        <style>
            .card-footer {

                padding: 0.4em;
                color: black;
                display: flex;

            }
        </style>

        <div class="card-single">
            <div>
                <h1>{{$contProject}}</h1>
                <div>Project</div>
            </div>
            <div>
                <span class="las la-clipboard"></span>
            </div>
        </div>
        <!--class="las la-clipboard"-->
        <div class="card-single">
            <div>
                <h1>{{$contPhase}}</h1>
                <div>Phases</div>
            </div>
            <div>
                <span class="las la-clipboard-list"></span>
            </div>
        </div>

        <div class="card-single">
            <div>
                <h1>{{$employeCount}}</h1>
                <div>Employe</div>
            </div>
            <div>
                <span class="las la-list-alt"></span>
            </div>
        </div>
        <div class="card-single">
            <div>
                <h1>{{$equepC}}</h1>
                <div>Equep</div>
            </div>
            <div>
                <span class="las la-list"></span>
            </div>
        </div>



    </div>
</main>
@foreach($phases as $phase )
<br>
<a href="{{route('tim.show',$phase->id)}}"><button type="button" class="btn btn-outline-success position-absolute end-0">Ajouter un Employe</button></a>
<br>
<br>
<br>

<div class="card-table">
    <div class="containerData" style="height:auto">
        <table class="table table-hover mt-0">
            <tr>
                <th id="thtd" rowspan="2" style="font-size:24px;	text-align: center;">Phase</th>
                <th colspan="6" style="	text-align: center;font-size:24px;">users</th>
            </tr>
            <tr>
                <th>#id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Numero De Telepone</th>
                <th>profil_id</th>
                <th >Action</th>
            </tr>
            <tr>
                <td rowspan="0" style="	text-align: center;font-size:24px;"><a href="{{route('showPhase',$phase->id)}}">{{$phase->id}}</a></td>
            </tr>
            @foreach($phase->employes()->get() as $employe)
            <tr>
                <td>{{$employe->id}}</td>
                <td>{{$employe->Nom}}</td>
                <td>{{$employe->Prenom}}</td>
                <td>{{$employe->NumeroDeTelepone}}</td>
                <td>{{$employe->profil_id}}</td>

                <td>
                    <form action="{{route('EquepDeleted',[ $phase->id,$employe->id])}}" method="post">
                        @csrf
                        @method('GET')
                        <button type="submit" class="btn btn-outline-danger mx-3">supperm <i class="fa-sharp fa-solid fa-trash"></i></i></button>

                    </form>
                </td>

            </tr>
            @endforeach
        </table>
    </div>
</div>
<br><br><br>
@endforeach

@endsection