<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function create($circle){

        return view('program.crud.add');
    }

    public function store(){

        return view('program.crud.add');
    }
}
