<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Phase;
use App\Models\Profil;
use App\Models\Projet;
use App\Models\User;

class PlusController extends Controller
{



    public function chafProject(User $user)
    {
        $Projets = Projet::paginate(5);
        return view('components/phase/indexProject', compact('Projets'));
    }



    public function EquepDeleted(string $phasetId, string $employeId)
    {
        DB::table('employe_phase')->where('phase_id', $phasetId)->where('employe_id', $employeId)->delete();
        return redirect()->route('tim.index');
    }
    public function ShowEquep($id)
    {
        $phases = Phase::with('employes')->where('id', '=', $id)->get();
        return view('components/phase/equeps', compact('phases'));
    }
    public function ShowProject($id)
    {



        $Projets = Projet::where('id', $id)->paginate(5);

        return view('components/project/index', compact('Projets'));
    }
    public function phasess(string $id, string $project_id)
    {
        $phaseD = Phase::find($id);
        $phaseD->delete();
        $phasesP = Phase::where('projet_id', $project_id)->paginate(5);
        return view('components/phase/index', compact('phasesP'));
    }

    public function singUp()
    {
        return view('components/sing_up/singUp');
    }
    public function convertation()
    {
        return view('components/sing_up/convertation');
    }


    public function Logout()
    {
        $id = auth()->user()->profil_id;
        $roleName = Profil::find($id);


        if ($roleName->role === 'chafeProject') {
            $page = 'components/Template';
        } else if ($roleName->role  === 'secrtire') {
            $page = 'components/Organisme/Template';
        } else if ($roleName->role  === 'Administrator') {
            $page = 'components/Admin/Template';
        }
        return view('components/login/Logout', compact('page'));
    }


    public function message()
    {
        $id = auth()->user()->profil_id;
        $roleName = Profil::find($id);


        if ($roleName->role === 'chafeProject') {
            $page = 'components/Template';
        } else if ($roleName->role  === 'secrtire') {
            $page = 'components/Organisme/Template';
        } else if ($roleName->role  === 'Administrator') {
            $page = 'components/Admin/Template';
        }
        return view('components/messages/index', compact('page'));
    }

    public function showPhase($id)
    {

        $phasesP = Phase::where('id', $id)->paginate(5);

        return view('components/phase/index', compact('phasesP'));
    }
    public function insertPhase($id)
    {

        $projects = Projet::where('id', $id)->get();
        return view('components/phase/create', compact('projects'));
    }


    public function editPhase($id)
    {


        $phase = Phase::where('id', $id)->first();
        $projects = Projet::where('id', $phase->projet_id)->get();

        // // $projects = Projet::all();
        // return  $projects;

        return view('components/phase/update', compact('phase', 'projects'));
    }
}
