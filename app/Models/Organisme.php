<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisme extends Model
{
    use HasFactory;
    protected $fillable =[ "Nom" , "Adresse" , "Numero_de_telephone" , "Le_nom_de_contact" , "Email_de_contact" , "Adresse_web"];
}
