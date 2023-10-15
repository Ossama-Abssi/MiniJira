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
          <a href="{{route('employe.create')}}"><button type="button" class="btn btn-outline-success position-absolute end-0">Ajouter un employe</button></a>
          <br>
          <br>
        <div class="containerData">
               <table  class="table table-striped" style="border-radius:20px;">
            <thead>
              <tr>
                <th scope="col">#Code</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Numero De Telepone</th>
                <th scope="col">profil_id</th>
              
                <th scope="col">Equep</th>




              </tr>
            </thead>
            <tbody>
                @foreach($employes as $employe)
                <tr>
                    <th scope="row" class="text-center">{{$employe->id}}</th>
                    <td>{{$employe->Nom}}</td>
                    <td>{{$employe->Prenom}}</td>
                    <td>{{$employe->NumeroDeTelepone}}</td>
                    <td>{{$employe->profil_id}}</td>


                    <td class="text-center">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="{{$employe->id}}" id="flexCheckIndeterminate">
                    </div>
                        <!-- <form action="{{route('employe.destroy',$employe->id)}}" method="post">
                            @method('delete')
                            @csrf
                             <button type="submit" class="btn btn-outline-danger mx-3">supperm</button>
                        </form>  -->
                    </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
       
        </div>
 
       </main>
@endsection