<?php

namespace App\Http\Controllers;

use App\Models\Organisme;
use Illuminate\Http\Request;

class OrganismeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $organismes = Organisme::paginate(5);

        return view('components/Organisme/index', compact('organismes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('components/Organisme/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Organisme::create([
            "Nom" => $request->Nom,
            "Adresse" => $request->Adresse,
            "Numero_de_telephone" => $request->Numero_de_telephone,
            "Le_nom_de_contact" => $request->Le_nom_de_contact,
            "Email_de_contact" => $request->Email_de_contact,
            "Adresse_web" => $request->Adresse_web
        ]);
        return redirect()->to('organisme');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $phaseD = Organisme::find($id);
        $phaseD->delete();
        return redirect()->to('organisme');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $organisemmm = Organisme::find($id);
        return view('components/Organisme/edit', compact('organisemmm'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $organisemmm = Organisme::findorFail($id);
        $organisemmm->Nom = $request->Nom;
        $organisemmm->Adresse = $request->Adresse;
        $organisemmm->Numero_de_telephone = $request->Numero_de_telephone;
        $organisemmm->Le_nom_de_contact = $request->Le_nom_de_contact;
        $organisemmm->Email_de_contact = $request->Email_de_contact;
        $organisemmm->Adresse_web = $request->Adresse_web;
        $organisemmm->save();

        return redirect()->to('organisme');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        return $id;


        // $phaseD = Organisme::find($id);
        // $phaseD->delete();
        // return redirect()->to('organisme');

    }
}
