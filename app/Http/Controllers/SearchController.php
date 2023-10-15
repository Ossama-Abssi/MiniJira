<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function viorProjectSearch($id){
        $Projets = Projet::where('id','=',$id)->paginate(5);
        return view('components/phase/indexProject', compact('Projets'));
    }



    // public function search(Request $request)
    // {
    //     $request->validate([
    //         'keyword' => 'required',
    //     ]);

    //     $keyword = $request->keyword;
    //     $filterProject = Projet::where('Nom', 'Like', '%' . $keyword . '%')
    //         ->orWhere('Description', 'Like', '%' . $keyword . '%')->paginate(5);
    //     // ->orWhere('DateDebut', 'Like', '%' . $keyword . '%') 
    //     // ->orWhere('DateFin', 'Like', '%' . $keyword . '%') 
    //     // ->orWhere('EtatDeRealisation', 'Like', '%' . $keyword . '%');
    //     if ($filterProject->count()) {
    //         return view('components/phase/indexProject')->with([
    //             'Projets' => $filterProject,
    //         ]);
    //     }else{
    //         return redirect('chafProject')->with([
    //             'status'=>'search ne fildes...!! Pals try agin']);
    //     }
    // }
}
