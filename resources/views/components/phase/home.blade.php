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
Profil
@endsection
@section('namePage')
Profil
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
                <h1>{{$countPhaseTr}}</h1>
                <div>Phases Termine</div>
            </div>
            <div>
                <span class="las la-list-alt"></span>
            </div>
        </div>
        <div class="card-single">
            <div>
                <h1>{{$countPhasePasTr}}</h1>
                <div>Phases En cours</div>
            </div>
            <div>
                <span class="las la-list"></span>
            </div>
        </div>



    </div>
</main>
<h2 class="mt-5 mb-3">List Phases</h2>
<a href="{{route('phase.create')}}"><button type="button" class="btn btn-outline-success position-absolute end-0  bg-danger">Ajouter un Phase</button></a>
<br>
<br>
<br>

<div class="card-table">
    <div class="containerData" style="height:auto;">
        <table id="ppppp" class="table table-hover " style="border-radius:20px;">
            <thead>
                <tr>
                    <th scope="col">Libellé</th>
                    <th scope="col" class="th">Description</th>
                    <th scope="col">Date Debut</th>
                    <th scope="col">Date Fin</th>
                    <th scope="col">Montant A Payé</th>
                    <th scope="col">Etat De Realisation</th>
                    <th scope="col">Etat De Facture</th>
                    <th scope="col">Etat De Paiement</th>
                    <th scope="col">Projet</th>

                    <th scope="col">Equep</th>
                    <th scope="col" class="thAction">Action</th>





                </tr>
            </thead>
            <tbody>
                @foreach($phases as $phase)
                <tr>
                    <td>{{$phase->Libellé}}</td>
                    <td class="th">{{$phase->Description}}</td>
                    <td>{{$phase->DateDebut}}</td>
                    <td>{{$phase->DateFin}}</td>

                    @if($phase->MontantAPayé ==1)
                    <td>
                        <div id="divCondtion" style="background-color:blue;">Termine</div>
                    </td>
                    @else
                    <td>
                        <div id="divCondtion" style="background-color:#09fe57;">En cours</div>
                    </td>
                    @endif
                    @if($phase->EtatDeRealisation ==1)
                    <td>
                        <div id="divCondtion" style="background-color:blue;">Termine</div>
                    </td>
                    @else
                    <td>
                        <div id="divCondtion" style="background-color:#09fe57;">En cours</div>
                    </td>
                    @endif
                    @if($phase->EtatDeFacture == 1)
                    <td>
                        <div id="divCondtion" style="background-color:blue;">Termine</div>
                    </td>
                    @else
                    <td>
                        <div id="divCondtion" style="background-color:#09fe57;">En cours</div>
                    </td>
                    @endif
                    @if($phase->EtatDePaiement == 1)
                    <td>
                        <div id="divCondtion" style="background-color:blue;">Termine</div>
                    </td>
                    @else
                    <td>
                        <div id="divCondtion" style="background-color:#09fe57;">En cours</div>
                    </td>
                    @endif
                    <td>
                        <a href="{{route('ShowProject',$phase->projet_id)}}"><button type="button" class="button btn btn-outline-info">Voir
                                <i class="fa-solid fa-eye" style="width:10px;"></i>
                                <!-- <i class="fa-solid fa-eye" style="color: blue; width:12px"></i> -->
                            </button>
                    </td>


                    <td>
                        <a href="{{route('phaseEquepShow',$phase->id)}}"><button style="width:80px ; padding:8px;padding-right:19px" type="button" class="btn btn-outline-info">Voir
                                <i class="fa-solid fa-eye" style="width:10px;"></i>
                                <!-- <i class="fa-solid fa-eye" style="color: blue; width:12px"></i> -->
                            </button></a>
                    </td>
                    <!-- <button style="width:80px ; padding:8px;padding-right:19px" type="button" class="btn btn-outline-info">
                        Voir
                        
                  <i class="fa-solid fa-pen-to-square" style="width:10px;"></i>
              </button> -->

                    <td  class="thAction">

                        <div style="display:flex">
                            <a href="{{route('phase.edit',$phase->id)}}"><button style="width:80px ; padding:8px;padding-right:19px" type="button" class="btn btn-outline-info">
                                    Edit

                                    <i class="fa-solid fa-pen-to-square" style="width:10px;"></i>
                                </button></a>
                            <form action="{{route('phase.destroy',$phase->id)}}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-outline-danger w-100 mx-3">supperm<i class="fa-sharp fa-solid fa-trash"></i> </button>

                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
<br><br>
<div>
    {{ $phases->links() }}
</div>
</div>

</main>



@endsection