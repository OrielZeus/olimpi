<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function index()
    {
    	$in = 'marc';
        return view("marcas", compact('in'));
    }
}
