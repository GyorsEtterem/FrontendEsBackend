<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Facades\Session;
//use Hash;
use Session;
use Illuminate\Validation\Rules\Unique;
use SebastianBergmann\Environment\Console;

class CustomAuthController extends Controller
{
    public function login(){//(Request $request)
        //return $request->input();
        return view("pages.login");
    }
    public function registration(){
         //return "Registration";
        return view("pages.registration");

    }
    public function registerUser(Request $request){
        $request -> validate([
            'name' => 'required', 
            'birthdate' => 'required', 
            'lakohely' => 'required', 
            'tel' => 'required', 
            'email' => 'required|email|unique:users', 
            'password' => 'required|min:6|max:15', 
        ]);
        // $request ->validate([
        //     'name' => 'required';
        // ]);
        $user = new User();
        $user -> name = $request -> name;
        $user -> birthdate = $request -> birthdate;
        $user -> lakohely = $request -> lakohely;
        $user -> tel = $request -> tel;
        $user -> email = $request -> email;
        //$user -> password = $request -> password;
        $user -> password = Hash::make($request -> password);
        $res = $user -> save();
        
        if($res){
            return back()->with('sikeres','Sikeresen regisztrálta a dolgozót');
        }else{
            return back()->with('sikertelen','Valamelyik adatot nem jól adta meg');
        }
    }
    
    public function loginUser(Request $request){
        $request -> validate([
            'email' => 'required|email', 
            'password' => 'required|min:6|max:15', 
        ]);
        $user = User :: where('email','=', $request ->email)->first();
        if ($user){
            if(Hash::check($request-> password, $user -> password)){ //Hash::check(
                $request -> session()->put('loginId', $user-> id);
                return redirect('dashboard');
            }else{
                return back() -> with('sikertelen', 'Nem jó a jelszó');       
            }
        }else{
            return back() -> with('sikertelen', 'Még nem regisztráltak ezzel az email címmel');
        }
    }
    public function dashboard(){
        
        return view("pages.profil");
    }
}

