<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index()
    {
    	$in = 'pro';
        return view("trabajando", compact('in'));
    }
}
