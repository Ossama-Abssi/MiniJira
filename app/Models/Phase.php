<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Phase extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $filabel =[
        'Libellé',
        'Description',
        'DateDebut',
        'DateFin',
        'MontantAPayé',
        'EtatDeRealisation',
        'EtatDeFacture',
        'EtatDePaiement',
        'projet_id',

    ];


    public function employes(){
        return $this->belongsToMany(Employe::class);
    }
}
