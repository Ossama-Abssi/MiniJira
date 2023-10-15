<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phase;
use App\Models\Employe;
use App\Models\Projet;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class TimController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $equepC = DB::table('employe_phase')->groupBy('phase_id')->count();
    
        $phases = Phase::with('employes')->get();
        return view('components/phase/equeps', compact('phases','equepC'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 1;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function update(Request $request,$idPhase)
    {
        $data = $idPhase;
        foreach($request->checkbox as $key=>$name)
        {
            $insert=[
                'employe_id'=>$request->checkbox[$key],
                'phase_id'=>$data,
            ];
           DB::table('employe_phase')->insert($insert);           
        }
        return redirect()->route('tim.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
         $idPhase=$id;
         $som =  $idPhase + 5;
         $Projets=Projet::all();
         $contProject = $Projets->count(); 

         $employes = User::all();
         $phases=Phase::all();
         $contPhase = $phases->count();
        $phases = Phase::with('employes')->get();
        return view('components/phase/createEquep', compact('employes','contProject','contPhase','idPhase','phases','som'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id )
    {
        return "hhhhh";
    }

    /**
     * Update the specified resource in storage.
     */
  

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($SomData)
    {
      return parent::destroy($SomData);
    }
}