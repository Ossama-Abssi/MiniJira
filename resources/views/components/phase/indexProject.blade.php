@extends('components/Template')
@livewireStyles
@section('search')
@livewire('projects')
@endsection
@section('title')
Project
@endsection
@section('namePage')
Project
@endsection

@section('content')

@if (session('status'))
<div class="alert alert-danger">
  {{session('status')}}
</div>

@endif
<main>
  <div class="cards">


    <div class="card-single">
      <div>
        <h1>{{$contProject}}</h1>
        <div>Projects</div>
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
        <h1>{{$countProjectTr}}</h1>
        <div>Project Termine</div>
      </div>
      <div>
        <span class="las la-list-alt"></span>
      </div>
    </div>
    <div class="card-single">
      <div>
        <h1>{{$countProjectPasTr}}</h1>
        <div>Project En cours</div>
      </div>
      <div>
        <span class="las la-list"></span>
      </div>
    </div>



  </div>
</main>
<h2 class="mt-5 mb-5">List Projects</h2>
<div class="card-table">
  <div class="containerData" style="height:auto">
    <table class="table table-striped" style="border-radius:20px;">

      <thead>
        <tr>
          <th scope="col">#Code</th>
          <th scope="col">Nom</th>
          <th scope="col" class="th">Description</th>
          <th scope="col">Date Debut</th>
          <th scope="col">Date Fin</th>
          <th scope="col">etat</th>
          <th scope="col">Phases</th>


        </tr>
      </thead>
      <tbody>
        @foreach($Projets as $Projet)
        <tr>
          <th scope="row" class="text-center">{{$Projet->id}}</th>
          <td>{{$Projet->Nom}}</td>
          <td class="th">{{$Projet->Description}}</td>
          <td>{{$Projet->DateDebut}}</td>
          <td>{{$Projet->DateFin}}</td>
          @if($Projet->EtatDeRealisation ==1)
          <td>
            <div id="divCondtion" style="background-color:blue;">Termine</div>
          </td>
          @else
          <td>
            <div id="divCondtion" style="background-color:#09fe57;">En cours</div>
          </td>
          @endif
          <td class="text-center">
            <a href="{{route('phase.show',$Projet->id)}}"><button style="width:80px ; padding:8px;padding-right:19px" type="button" class="btn btn-outline-info">Voir
                <i class="fa-solid fa-eye" style="width:10px;"></i>
                <!-- <i class="fa-solid fa-eye" style="color: blue; width:12px"></i> -->
              </button></a>
          </td>
        </tr>

        @endforeach
      </tbody>
    </table>
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
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <!--plugins-->
    <script src="{{url('assets/js/jquery.min.js')}}"></script>
    <script src="{{url('assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
    <script src="{{url('assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
    <script src="{{url('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
    <!--app-->
    <script src="{{url('assets/js/app.js')}}"></script>
    <script src="{{url('assets/js/pace.min.js')}}"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    @endsection
  </div>
</div>
<div>
  {{ $Projets->links() }}
</div>
</div>

</main>
@livewireScripts


@endsection