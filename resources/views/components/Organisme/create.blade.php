@extends('components/Template')

@section('title')
Add-organisems
@endsection
@section('namePage')
Organisem-Add
@endsection

@section('content')

<form action="{{route('organisme.store')}}" method="post">
    @csrf
    @method('post')
    <div class="form-group">
        <label for="nom">Nom:</label>
        <input type="text" class="form-control" id="nom" name="Nom" placeholder="Enter Nom"required>
    </div>
    <div class="form-group">
        <label for="adresse">Adresse:</label>
        <input type="text" class="form-control" id="adresse" name="Adresse" placeholder="Enter Adresse"  required>        
    </div>
    <div class="form-group">
        <label for="numero_telephone">Numéro de téléphone:</label>
        <input type="text" class="form-control" id="numero_telephone"  name="Numero_de_telephone" placeholder="Enter Numéro de téléphone"  required>
    </div>
    <div class="form-group">
        <label for="nom_contact">Le nom de contact:</label>
        <input type="text" class="form-control" id="nom_contact" placeholder="Enter Le nom de contact" name="Le_nom_de_contact"   required>
    </div>
    <div class="form-group">
        <label for="email_contact">Email de contact:</label>
        <input type="email" class="form-control" id="email_contact" placeholder="Enter Email de contact" name="Email_de_contact"  required>
    </div>
    <div class="form-group">
        <label for="adresse_web">Adresse web:</label>
        <input type="text" class="form-control" id="adresse_web" placeholder="Enter Adresse web" name="Adresse_web"   required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
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



