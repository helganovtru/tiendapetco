<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ejemploController extends Controller
{
    public function index(){
    	$nombre="Selena";
    	$edad=22;
    	return view('ejemplo', compact('nombre', 'edad'));
    }
}
