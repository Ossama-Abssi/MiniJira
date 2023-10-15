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
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

@endsection
@section('title')
Employe
@endsection
@section('namePage')
Employe
@endsection
@section('content')
<main>
    <div class="cards">


        <div class="card-single">
            <div>
                <h1>{{$contProject}}</h1>
                <span>Project</span>
            </div>
            <div>
                <span class="las la-clipboard"></span>
            </div>
        </div>
        <!--class="las la-clipboard"-->
        <div class="card-single">
            <div>
                <h1>{{$contPhase}}</h1>
                <span>Tasks</span>
            </div>
            <div>
                <span class="las la-clipboard-list"></span>
            </div>
        </div>

        <div class="card-single">
            <div>
                <h1>124</h1>
                <span>Tasks fair</span>
            </div>
            <div>
                <span class="las la-list-alt"></span>
            </div>
        </div>
        <div class="card-single">
            <div>
                <h1>124</h1>
                <span>Tasks pas fair</span>
            </div>
            <div>
                <span class="las la-list"></span>
            </div>
        </div>



    </div>
</main>
<h2 class="mt-5 mb-3">List employes</h2>
<br>
<br>
<div class="card-table">
    <div class="containerData" style="height:auto">

        <form action="{{route('tim.update',$idPhase)}}" method="post">
            @csrf
            @method('PUT')
            <table class="table table-striped" style="border-radius:20px;">
                <thead>
                    <tr>
                        <th scope="col">Chioser</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">Numero De Telepone</th>
                        <th scope="col">profil_id</th>





                    </tr>
                </thead>
                <tbody>
                    @foreach($employes as $employe)
                    <tr>
                        <td class="text-center" style="   display: flex;       justify-content: center;       align-items: center;       width: 100%;       min-height: 9vh">
                            <div class="form-check text-center">
                                <input class="form-check-input" type="checkbox" value="{{$employe->id}}" name="checkbox[]">

                            </div>
                            <!-- <form action="{{route('employe.destroy',$employe->id)}}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger mx-3">supperm</button>
                                </form>  -->
                        </td>
                        <td scope="row" class="text-center"   ><img src="{{$employe->photo}}" alt="incon photo" width="32px"  height="32px"  style="border-radius: 50%;" srcset=""></td>
                        <td> {{$employe->nom}}</td>
                        <td>{{$employe->prenom}}</td>
                        <td>{{$employe->nomberPhone}}</td>
                        <td>{{$employe->Adresse}}</td>
                        <td>{{$employe->Age}}</td>
                        <td>{{$employe->email}}</td>

                        <td>{{$employe->profil_id}}</td>



                    </tr>
                    @endforeach
                </tbody>
            </table>

    </div>

</div>
<br><br>
<input type="submit" class="btn btn-outline-primary position-absolute" value="Ajouter">

<br><br>
</form>
</div>
<div>
</div>
<br><br>
<br><br>


</main>
@endsection