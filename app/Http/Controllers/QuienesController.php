<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuienesController extends Controller
{
    public function index()
    {
        $in = 'qui';
        return view("quienes", compact('in'));
    }
}
