@extends('components/Admin/Template')

@section('title')
User
@endsection
@section('namePage')
User
@endsection

@section('content')
<main>

    <div class="cards">
        <div class="card-single">
            <div class="col">
                <h1>{{ $userCount }}</h1>
                <div>Users</div>
            </div>
            <div>
            <ion-icon style="font-size: 46px;color:blue" name="people-outline"></ion-icon>
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
                <h1>{{ $userCount}}</h1>
                <div>Compts</div>
            </div>
            <div>
            <i style="font-size: 36px;color:blue"  class="fa-solid fa-users-line"></i>
            </div>
        </div>

    </div>
</main>


<br><br>
<a href="{{route('user.create')}}"><button type="button" class="button btn btn-outline-success position-absolute end-0">Ajouter un User</button></a>

<br><br>
<br><br>
<div class="card-table">
    <h1>List Users</h1>
    <div class="containerData" style="height:auto">
        <table class="table table-striped" style="border-radius:20px;">
            <thead>
                <tr>
                    <th scope="col">nom</th>
                    <th scope="col">prenom</th>
                    <th scope="col">Age</th>
                    <th scope="col" class="th">About</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">photo</th>
                    <th scope="col">email</th>
                    <th scope="col">telephone</th>
                    <th scope="col">profil</th>

                    <th scope="col">Compte</th>


                    <th scope="col" class="thAction">Action</th>




                </tr>
            </thead>
            <tbody style="height: 10px !important; overflow: scroll; ">
                @foreach($users as $user)
                <tr>
                    <td>{{$user->nom}}</td>
                    <td>{{$user->prenom}}</td>
                    <td>{{$user->Age}}</td>
                    <td class="th">{{$user->About}}</td>
                    <td>{{$user->Adresse}}</td>
                    <td>{{$user->photo}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->telephone}}</td>
                    <td>{{$user->profil_id}}</td>
                    <td>
                        <a href="{{route('user.show',$user->id)}}"><button style="width:80px ; padding:8px;padding-right:19px" type="button" class="btn btn-outline-info">
                                Voir

                                <i class="fa-solid fa-eye" style="width:10px;"></i>
                            </button></a>
                    </td>
                    <td class="thAction">
                        <div style="display: flex;">


                            <a href="{{route('user.edit',$user->id)}}"><button style="width:80px ; padding:8px;padding-right:19px" type="button" class="btn btn-outline-info">
                                    Edit

                                    <i class="fa-solid fa-pen-to-square" style="width:10px;"></i>
                                </button></a>
                            <form action="{{route('user.destroy',$user->id)}}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-outline-danger mx-3">supperm <i class="fa-sharp fa-solid fa-trash"></i></i></button>
                            </form>
                        </div>
                    </td>
           

                </tr>
                @endforeach
            </tbody>
        </table>


    </div>

</div>

<div>
    {{ $users->links() }}
</div>




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