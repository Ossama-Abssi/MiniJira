<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocTechenique extends Model
{
    use HasFactory;
    protected $filabel =[
        'nom',
        'Description',
        'projet_id',

    ];
}
