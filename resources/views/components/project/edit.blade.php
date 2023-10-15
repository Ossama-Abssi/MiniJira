@extends('components/Template')

@section('title')
Edit-projet
@endsection
@section('namePage')
projet-edite
@endsection

@section('content')

<form method="POST" action="{{ route('project.update', $Projets->id) }}">
    @csrf
    @method('GET')

    <div class="form-group">
        <label for="Nom">Nom</label>
        <input type="text" name="Nom" id="Nom" class="form-control" required value="{{ $Projets->Nom }}">
    </div>

    <div class="form-group">
        <label for="Description">Description</label>
        <input style="height:auto;" name="Description" id="Description" class="form-control" required value="{{ $Projets->Description }}" />
    </div>

    <div class="form-group">
        <label for="DateDebut">Date de début</label>
        <input type="date" name="DateDebut" id="DateDebut" class="form-control" value="{{ $Projets->DateDebut }}" required>
    </div>

    <div class="form-group">
        <label for="DateFin">Date de fin</label>
        <input type="date" name="DateFin" id="DateFin" class="form-control" required value="{{ $Projets->DateFin }}">
    </div>

    <div class="form-group">
        <label for="EtatDeRealisation">État de réalisation</label>
        <select name="EtatDeRealisation" id="EtatDeRealisation" class="form-control" required value="{{ $Projets->EtatDeRealisation }}">
            <option value="0">Non réalisé</option>
            <option value="1">Réalisé</option>
        </select>
    </div>

    <div class="form-group">
        <label for="organisme_id">ID de l'organisemmm</label>
        <select name="organisme_id" id="organisme_id" class="form-control" required value="{{ $Projets->EtatDeRealisation }}">
            <option value="{{ $Projets->organisme_id }}">{{ $Projets->organisme_id }}</option>

            @foreach($organismes as $organisme)
            <option value="{{ $organisme->id }}">{{ $organisme->id }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>



@endsection
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

</div>
</div>

</main>