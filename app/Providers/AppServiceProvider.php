<?php

namespace App\Providers;

use App\Models\Employe;
use App\Models\Organisme;
use App\Models\Phase;
use App\Models\Profil;
use App\Models\Projet;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $userCount = User::count();


        $contProject = Projet::count();
        $contPhase = Phase::count();
        $countPhaseTr = Phase::where('EtatDeRealisation', 1)->count();
        $countPhasePasTr = Phase::where('EtatDeRealisation', 0)->count();
        $countProjectTr = Projet::where('EtatDeRealisation', 1)->count();
        $countProjectPasTr = Projet::where('EtatDeRealisation', 0)->count();
        $employeCount = Employe::count();
        $countOrganisme = Organisme::count();
        $organismes = Organisme::all();
        $equepC = DB::table('employe_phase')->groupBy('phase_id')->count();
        $phases = Phase::paginate(5);
        $users = User::paginate(5);


        View::share([
            'userCount' => $userCount,
            'users' => $users,
            'contProject' => $contProject,
            'contPhase' => $contPhase,
            'organismes' => $organismes,
            'countPhaseTr' => $countPhaseTr,
            'countPhasePasTr' => $countPhasePasTr,
            'countProjectTr' => $countProjectTr,
            'countProjectPasTr' => $countProjectPasTr,
            'employeCount' => $employeCount,
            'equepC' => $equepC,
            'phases' => $phases,
            'countOrganisme' => $countOrganisme,
        ]);
    }
}
