<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Appcontroller extends Controller
{
    function index(){
        return view('app.create');
    }
    function add(){
        return view('app.add');
    }
    function edit(){
        return view('app.edit');
    }
}

