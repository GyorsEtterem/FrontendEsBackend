<?php

namespace App\Http\Controllers;

use App\Models\dolgozo;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class CustomAuthController extends Controller
{
    public function login()
    {
        return view("pages.login");
    }
    public function registration()
    {
        return view("pages.registration");
    }
    public function registerUser(Request $request)
    {
        $request->validate([
            'neve' => 'required',
            'telefonszam' => 'required',
            'szuldatum' => 'required',
            'cim' => 'required',
            'email' => 'required|email|unique:dolgozos',
            'jelszo' => 'required|min:6|max:15',
        ]);
        $dolgozo = new dolgozo();
        $dolgozo->neve = $request->neve;
        $dolgozo->szuldatum = $request->szuldatum;
        $dolgozo->cim = $request->cim;
        $dolgozo->telefonszam = $request->telefonszam;
        $dolgozo->email = $request->email;
        $dolgozo->munkakor_id = 2;
        $dolgozo->jelszo = Hash::make($request->jelszo);
        $res = $dolgozo->save();

        if ($res) {
            return back()->with('sikeres', 'Sikeresen regisztrálta a dolgozót');
        } else {
            return back()->with('sikertelen', 'Valamelyik adatot nem jól adta meg');
        }
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'jelszo' => 'required|min:6|max:15',
        ]);
        $dolgozo = dolgozo::where('email', '=', $request->email)->first(); // elenőrzi hogy van-e az a datbázisban ilyen emailcímmel, jelszóval ember
        if ($dolgozo) {
            if (Hash::check($request->jelszo, $dolgozo->jelszo)) {
                $request->session()->put('loginId', $dolgozo->id);
                return redirect('index');
            } else {
                return back()->with('sikertelen', 'Nem jó a jelszó');
            }
        } else {
            return back()->with('sikertelen', 'Még nem regisztráltak ezzel az email címmel');
        }
    }

    public function logout()
    {

        if (!Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('login');
        }
    }
}
