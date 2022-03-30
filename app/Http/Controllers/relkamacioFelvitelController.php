<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reklamacio;

class relkamacioFelvitelController extends Controller
{

    public function reklamFelvitel(Request $request){

        $request -> validate([ 

            'termek_id' => 'required', 
            'nyugta' => 'required', 
            'leiras' => 'required|unique:reklamacios', 
            'menny' => 'required', 
            'csere_ideje' => 'required', 
        ]);
        $reklamal = new reklamacio();
            $reklamal -> termek_id = $request -> termek_id;
            $reklamal -> nyugta = $request -> nyugta;
            $reklamal -> leiras = $request -> leiras;
            $reklamal -> menny = $request -> menny;
            $reklamal -> csere_ideje = $request -> csere_ideje;
            $res = $reklamal -> save();

            if($res){
                return back()->with('sikeres','A reklamációt rögzítettük');
            }else{
                 return back()->with('sikertelen','Valamelyik adatot nem jól adta meg');
            }
    }
}