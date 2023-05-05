<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Patient;

class PatientForm extends Component
{
    public $code;
    public $name;
    public $email;
    public $contact;
    public $notes;

    public function store(){
        $this->validate([
            'name'=>'required',
            'email'=>'required|email',
            'contact'=>'required',
        ]);

        Patient::create([
            'code'=>$this->code,
            'name'=>$this->name,
            'email'=>$this->email,
            'contact'=>$this->contact,
            'notes'=>$this->notes,
        ]);
        return redirect()->route('patient')->with('message','Patient sauvegarde');
    }
    public function render()
    {
        $this->code = Str::random(5);
        return view('livewire.patient-form');
    }
}
