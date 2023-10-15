<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $filabel = [
        'Nom',
        'Description',
        'DateDebut',
        'DateFin',
        'EtatDeRealisation',
        'organisme_id'

    ];
    use HasFactory;
    
}
