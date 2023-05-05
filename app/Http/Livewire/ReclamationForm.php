<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Reclamation;

class ReclamationForm extends Component
{
    public $nom;
    public $prenom;
    public $ine;
    public $email;
    public $promo;
    public $formation;
    public $semestre;
    public $eno;


    public function store(){
        $this->validate([
            'ine'=>'required',
            'email'=>'required|email',
            'prenom'=>'required',
            'nom'=>'required',
        ]);

        Reclamation::create([
            'ine'=>$this->ine,
            'prenom'=>$this->prenom,
            'email'=>$this->email,
            'nom'=>$this->nom,
            'promo'=>$this->promo,
            'formation'=>$this->formation,
            'semestre'=>$this->semestre,
            'eno'=>$this->eno,
        ]);
        return redirect()->route('reclamation')->with('message','reclamation sauvegarde');
    }
    public function render()
    {
        return view('livewire.reclamation-form');
    }
}
