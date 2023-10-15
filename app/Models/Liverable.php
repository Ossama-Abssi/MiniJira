<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Liverable extends Model
{
    use HasFactory;
    protected $filabel = [
        'Libellé',
        'Description',
        'Chemin Vers Document Disque',
        'phase_id',

    ];
}
