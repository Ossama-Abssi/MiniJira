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
Insert Phase
@endsection
@section('namePage')
Insert Phase
@endsection

@section('content')
<div class="card-table">


  <form action="{{route('phase.update',$phase->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-grouptext-center">
      <label class="label" for="Libellé">Libellé : </label><br>
      <input type="text" name="Libellé" class="input form-control w-100" id="Libellé" value="{{$phase->Libellé}}" placeholder="Enter Libellé .">
    </div>
    <br>
    <div class="form-group">
      <label class="label" for="Description">Description : </label><br>
      <input type="text" name="Description" class="input form-control" style="min-height:100px;" value="{{$phase->Description}}" id="Description" placeholder="Enter Description .">
    </div>
    <br>
    <div class="d-flex w-100">
      <div class="form-group " style="width:48%;">
        <label class="label" for="DateDebut">Date Debut : </label><br>
        <input type="date" name="DateDebut" class="input form-control w-100" id="DateDebut" value="{{$phase->DateDebut}}" placeholder="Enter DateDebut .">
      </div>
      <div class="form-group " style="width:48%;margin-left:4%">
        <label class="label" for="DateFin">Date Fin : </label><br>
        <input type="date" name="DateFin" class="input form-control w-100" id="DateFin" value="{{$phase->DateFin}}" placeholder="Enter DateFin .">
      </div>
    </div>
    <br>
    <div class="form-group">
      <label class="label" for="EtatDeRealisation">Etat De Realisation : </label><br>
      <select class="input form-select" aria-label="Default select example" value="{{$phase->EtatDeRealisation}}" name="EtatDeRealisation">
        @if($phase->EtatDeRealisation ==1)

        <option selected value="1">Termine</option>
        <option value="0">En cours</option>
        @else
        <option value="1">Termine</option>
        <option selected value="0">En cours</option>
        @endif

      </select>

    </div>
    <br>
    <div class="d-flex w-100">

      <div class="form-group" style="width:48%;">
        <label class="label" for="MontantAPayé">Montant A Payé : </label><br>
        <select class="input form-select" aria-label="Default select example" value="{{$phase->MontantAPayé}}" name="MontantAPayé">
          @if($phase->MontantAPayé ==1)


          <option selected value="1">Termine</option>
          <option value="0">En cours</option>
          @else
          <option value="1">Termine</option>
          <option selected value="0">En cours</option>
          @endif
        </select>
      </div>

      <br>
      <div class="form-group" style="width:48%;margin-left:4%">
        <label class="label" for="EtatDePaiement">Etat De Paiement : </label><br>

        <select class="input form-select" aria-label="Default select example" value="{{$phase->EtatDePaiement}}" name="EtatDePaiement">
          @if($phase->EtatDePaiement ==1)

          <option selected value="1">Termine</option>
          <option value="0">En cours</option>
          @else
          <option value="1">Termine</option>
          <option selected value="0">En cours</option>
          @endif
        </select>
      </div>
    </div>
    <br>

    <div class="form-group">
      <label class="label" for="EtatDeFacture">Etat De Facture : </label><br>
      <select class="input form-select" aria-label="Default select example" value="{{$phase->EtatDeFacture}}" name="EtatDeFacture">
        @if($phase->EtatDeFacture ==1)

        <option selected value="1">Termine</option>
        <option value="0">En cours</option>
        @else
        <option value="1">Termine</option>
        <option selected value="0">En cours</option>
        @endif
      </select>
    </div>

    <div class="form-group">
      <label class="label" for="projet_id">id de project : </label><br>
      <select class="input form-select" aria-label="Default select example" value="{{$phase->projet_id}}" name="projet_id">
        @foreach($projects as $project)

        <option value="{{$project->id}}">{{$project->id}} - {{$project->Nom}}</option>
        @endforeach
      </select>
    </div>
    <br>

    <button type="submit" name="" class="button btn btn-outline-warning">Insert</button>
  </form>
</div>
@endsection