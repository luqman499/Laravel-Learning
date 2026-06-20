<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingupController extends Controller
{
    public function create(){
        return view('auth.signup');
    }

}
