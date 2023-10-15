<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
    protected $filabel = [
        'Nom','Prenom','About','Age','Adresse','NumeroDeTelepone','profil_id',
    ];

    public function phases(){
        return $this->belongsToMany(Phase::class);
    }

    public function profil(){
        return $this->belongsTo(Profil::class);
    }

}
