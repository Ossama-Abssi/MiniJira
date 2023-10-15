<?php

namespace App\Http\Livewire;

use App\Models\Projet;
use Livewire\Component;

class Projects extends Component
{
    public $searchProject='';
    public $porjects;
    public function render()
    {
        if(empty($this->searchProject)){
            $this->porjects = Projet::where('Nom',$this->searchProject)->get();
        }else{
            
            $this->porjects = Projet::where('Nom','like','%'.$this->searchProject.'%')->get();
        }
        return view('livewire.projects');
    }
}
