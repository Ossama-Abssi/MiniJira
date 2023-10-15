@extends('components/Organisme/Template')

@section('title')
Organisme
@endsection
@section('namePage')
Organisme
@endsection

@section('content')
<main>

  <div class="cards">
    <div class="card-single">
      <div class="col">
        <h1>{{ $countOrganisme }}</h1>
        <div>Organismes</div>
      </div>
      <div>
      <i style="font-size:30px;color:blue" class="fa-solid fa-users"></i>
      </div>
    </div>

    <div class="card-single">
      <div class="col"> 
        <h1>{{ $contProject }}</h1>
        <div>Projects</div>
      </div>
      <div>
        <span class="las la-clipboard"></span>
      </div>
    </div>
    <!--class="las la-clipboard"-->
    <div class="card-single">
      <div class="col">
        <h1>{{ $countProjectTr}}</h1>
        <div>Project Termine</div>
      </div>
      <div>
        <span class="las la-list-alt"></span>
      </div>
    </div>

    <div class="card-single">
      <div class="col">
        <h1>{{ $countProjectPasTr }}</h1>
        <div style="width:auto">Project pas Termine</div>
      </div>
      <div>
        <span class="las la-list"></span>
      </div>
    </div>
  </div>
</main>
<h2 class="mt-5 mb-5">List Organisme</h2>
<a href="{{route('organisme.create')}}"><button type="button" class="btn btn-outline-primary position-absolute end-0  ">Ajouter un Organisme</button></a>
<br>
<br>
<br>
<div class="card-table">
  <div class="containerData" style="height:auto">
    <table class="table table-hover" style="background-color:#fff;border-radius:20px;">
      <thead>
        <tr>
          <th scope="col">#id</th>
          <th scope="col">Nom</th>
          <th scope="col" class="th">Adresse</th>
          <th scope="col">Numero_de_telephone</th>
          <th scope="col">Le nom de contact</th>
          <th scope="col">Email de contact</th>
          <th scope="col">Adresse web</th>
          <th scope="col">Action</th>



        </tr>
      </thead>
      <tbody>
        @foreach($organismes as $organisme)
        <tr>
          <th scope="row" class="text-center">{{$organisme->id}}</th>
          <td>{{$organisme->Nom}}</td>
          <td class="th">{{$organisme->Adresse}}</td>
          <td>{{$organisme->Numero_de_telephone}}</td>
          <td>{{$organisme->Le_nom_de_contact}}</td>
          <td>{{ $organisme->Email_de_contact }}</td>
          <td><a href="{{ $organisme ->Adresse_web }}">{{ $organisme ->Adresse_web }}</a></td>

          <td class="thAction">
            <div style="display: flex;">
              <a href="{{route('organisme.edit',$organisme->id)}}"><button class="btn btn-outline-warning"><i class="fa-solid fa-user-pen"></i>&nbspEdit</button></a>
              <form action="{{route('organisme.show',$organisme->id)}}" method="post">
                @method('GET')
                @csrf
                <button type="submit" class="btn btn-outline-danger mx-3">supperm <i class="fa-sharp fa-solid fa-trash"></i></i></button>
              </form>
            </div>
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
    <script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
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
  {{ $organismes->links() }}
</div>
<div>

</div>
</div>

</main>



@endsection