<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
    	$in = 'ini';
        return view("inicio", compact('in'));
    }
}
