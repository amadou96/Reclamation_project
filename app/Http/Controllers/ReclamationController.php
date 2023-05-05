<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReclamationController extends Controller
{
    public function index(){
        return view('reclamations.index');
    }
    public function create(){
        return view('reclamations.create');
    }
}
