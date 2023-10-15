<div>
    <form class="searchbar">
        <div class="position-absolute translate-middle-y search-icon ms-3" style="margin-top: 20px;" ><i class="bi bi-search"></i></div>
        <input class="form-control" type="text" name="keyword" wire:model="searchProject" style="width: 450px;margin:40px 0 15px 0" placeholder="Type here to search...">
        <a href="#">
            <div class="position-absolute translate-middle-y search-close-icon"><i class="bi bi-x-lg"></i></div>
        </a>
    </form>

    <br>

    @if($porjects && $porjects->count() > 0)
    <div class=" position-absolute bg-light mt-1 p-3" style="border-radius: 15px; min-width:300px;" >
        @foreach($porjects as $project)
        <a href="{{route('viorProjectSearch',$project->id)}}">
            <b>{{$project->Nom}}</b><br>
        </a>
        @endforeach
    </div>

    @endif


</div>