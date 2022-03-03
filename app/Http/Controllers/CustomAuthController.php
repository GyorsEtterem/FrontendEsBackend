<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomAuthController extends Controller
{
    public function login(Request $req){
        return $req->input();
    }
    // public function registration(){
    //     return "Registration";
    // }
}

