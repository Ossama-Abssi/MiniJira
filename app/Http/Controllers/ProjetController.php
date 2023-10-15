<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Phase;
use App\Models\Projet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Projets = Projet::paginate(5);
        return view('components/project/index', compact('Projets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('components/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $request;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $projectD = Projet::where('id', '=', $id);
        $projectD->delete();
        return redirect()->to('project');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $Projets = Projet::findorFail($id);
        return view('components/project/edit', compact('Projets'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $projectU = Projet::find($id);
        $projectU->Nom = $request->Nom;
        $projectU->Description = $request->Description;
        $projectU->DateDebut = $request->DateDebut;
        $projectU->DateFin = $request->DateFin;
        $projectU->EtatDeRealisation = $request->EtatDeRealisation;

        $projectU->organisme_id = $request->organisme_id;

        $projectU->save();
        return redirect()->to('project');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        return 'vsuiasb asohoah';
    }
}
