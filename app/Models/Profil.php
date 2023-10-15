<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
    protected $filabel = [
        'role',
    ];
    public function user(){
        return $this->hasOne(User::class);
    }
   
}
