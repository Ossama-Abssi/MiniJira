<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use App\Models\Profil;
use Illuminate\Http\Request;
use App\Models\Projet;

use App\Models\Phase;
use App\Models\User;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = auth()->user()->id;
        $user = User::where('id', $id)->first();

        $idPro = auth()->user()->profil_id;
        $roleName=Profil::find($idPro);  
        
        
        if ($roleName->role === 'chafeProject'){
            $page = 'components/Template';
        } else if ($roleName->role  === 'secrtire') {
            $page = 'components/Organisme/Template';
        }else if ($roleName->role  === 'Administrator') {
            $page = 'components/Admin/Template';
        }
        return view('components/Profile/index',compact('id','user','page'));
        // $Projets = Projet::all();
        // $contProject = $Projets->count();

        // $phases = Phase::all();
        // $contPhase = $phases->count();
        // return view('components/Profile/Profil', compact('contProject', 'contPhase'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Profil $profil)
    {
        
        $employes = User::all();

        $id = auth()->user()->profil_id;
        $roleName=Profil::find($id);  
        
        
        if ($roleName->role === 'chafeProject'){
            $page = 'components/Template';
        } else if ($roleName->role  === 'secrtire') {
            $page = 'components/Organisme/Template';
        }else if ($roleName->role  === 'Administrator') {
            $page = 'components/Admin/Template';
        }
        return view('components/Profile/users',compact('employes','page'));

        // $Projets = Projet::all();
        // $contProject = $Projets->count();
        // $phases = Phase::all();
        // $contPhase = $phases->count();
        // return view('components/Profile/index', compact('contProject', 'contPhase'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)

    {
        $user = User::where('id', $id)->first();
        
        return view('components/Profile/index',compact('user'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profil $profil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profil $profil)
    {
        //
    }
}
