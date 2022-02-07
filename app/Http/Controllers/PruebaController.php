<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function show($id)
    {        
        
        return view('prueba', ['name' => $id]);
        
    }
}
