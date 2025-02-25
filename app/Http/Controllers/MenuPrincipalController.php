<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuPrincipalController extends Controller
{
    public function menuprincipal(){
        return view('site.principal');
    }
}
