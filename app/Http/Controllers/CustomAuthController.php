<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Hash;

class CustomAuthController extends Controller
{
    public function login(){
        // return $req->input();
        return view("pages.login");
    }
    public function registration(){
         //return "Registration";
        return view("pages.registration");

    }
    public function registerUser(Request $request){
        // return $req->input();
        //return view("pages.registration-user");
        echo 'value posted';
        // $request ->validate([
        //     'name' => 'required';
        // ]);
        $user = new User();
        $user -> name = $request -> name;
        $user -> email = $request -> email;
        $user -> password = $request -> password;
        //$user -> password = Hash::make($request -> password);
        $res = $user -> save();
        if($res){
            return back()->with('sikeres','Sikeresen regisztrálta a dolgozót');
        }else{
            return back()->with('sikertelen','Valamelyik adatot nem jól adta meg');
        }
    }
}

