<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phase;
use App\Models\Employe;
use App\Models\Projet;


class EquepController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $phases = Phase::with('employes')->get();
         return view('components/phase/equeps', compact('phases'));
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        // $Projets=Projet::all();
        //  $contProject = $Projets->count(); 
        //  $employes = Employe::all();
        //  $phases=Phase::all();
        //  $contPhase = $phases->count();

        // return view('components/phase/createEquep',compact('contPhase','employes','contProject'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request ,$idPhase)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $idPhase=$id;
         $Projets=Projet::all();
         $contProject = $Projets->count(); 
         $employes = Employe::all();
         $phases=Phase::all();
         $contPhase = $phases->count();

        return view('components/phase/createEquep',compact('contPhase','employes','contProject','idPhase'));
   
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
// <?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Phase;
// use App\Models\Employe;
// use App\Models\Projet;


// class EquepController extends Controller
// {
//     public function indexEquep()
//     {
//         $phases = Phase::with('employes')->get();
//         return view('components/phase/equeps', compact('phases'));
//     }
//     public function deleteEquep()
//     {
//        return "delete my";
//     }

//     public function createEquep($id)
//     {

//     return $id;

//         // foreach($request->checkbox as $key=>$name)
//         // {
//         //     $insert=[
//         //         'idEm'=>$request->checkbox[$key],
//         //         'code'=>$data->count,
//         //     ];
//         //    DB::table('employe_phase')->insert($insert);           
//         // }


//     //     $Projets=Projet::all();
//     //     $contProject = $Projets->count(); 
//     //     $employes = Employe::all();
//     //     $phases=Phase::all();
//     //     $contPhase = $phases->count();

//     //    return view('components/phase/createEquep',compact('contPhase','employes','contProject'));
//     }
// }

