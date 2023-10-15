<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use App\Models\Projet;

use App\Models\Phase;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;

class PhaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($slug = null)
    {


        $phases = Phase::paginate(5);

        return view('components/phase/home', compact('phases'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $projects = Projet::all();
        return view('components/phase/create', compact('projects'));
        // return "hello";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $phase = new Phase();
        $phase->Libellé = $request->Libellé;
        $phase->Description = $request->Description;
        $phase->DateDebut = $request->DateDebut;
        $phase->DateFin = $request->DateFin;
        $phase->MontantAPayé = $request->MontantAPayé;
        $phase->EtatDeRealisation = $request->EtatDeRealisation;
        $phase->EtatDeFacture = $request->EtatDeFacture;
        $phase->EtatDePaiement = $request->EtatDePaiement;
        $phase->projet_id = $request->projet_id;

        $phase->save();
        $id = $request->projet_id;
        $phasesP = Phase::paginate(5);

        // Alert::info('Info Title', 'Info Message');
        return view('components/phase/index', compact('phasesP', 'id'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $phasesP = Phase::where('projet_id', $id)->paginate(5);

        return view('components/phase/index', compact('phasesP', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        
        $phase = Phase::where('id', $id)->first();
        $projects = Projet::all();
        // return  $phase;

        return view('components/phase/update', compact('phase', 'projects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $phaseN = Phase::find($id);
        $phaseN->Libellé = $request->Libellé;
        $phaseN->Description = $request->Description;
        $phaseN->DateDebut = $request->DateDebut;
        $phaseN->DateFin = $request->DateFin;
        $phaseN->MontantAPayé = $request->MontantAPayé;
        $phaseN->EtatDeRealisation = $request->EtatDeRealisation;
        $phaseN->EtatDeFacture = $request->EtatDeFacture;
        $phaseN->EtatDePaiement = $request->EtatDePaiement;
        $phaseN->EtatDePaiement = $request->projet_id;

        $phaseN->save();

        
        $phasesP = Phase::where('projet_id',  $request->projet_id)->paginate(5);
        $id =  $request->projet_id;
        // return  $id  ;

        return view('components/phase/index', compact('phasesP','id'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $phaseD = Phase::find($id);
        $phaseD->delete();
        return redirect()->route('phase.index');


        // return "hello destroyed!!";
    }
}
