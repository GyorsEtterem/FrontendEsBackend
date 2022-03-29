<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reklamacio;
use Illuminate\Support\Facades\DB;

class elmult10pRendController extends Controller
{
    //
    public function index(Request $request)

    {
        
        $neve = $request->query('q','');
        $keres=DB::table('nyugtatetels')
        ->join('termeks', 'termeks.termek_id', '=' ,'nyugtatetels.termek_id')
        ->select(
            'termeks.termeknev',
            'termeks.ar',
            'nyugtatetels.mennyiseg',
            'nyugtatetels.datumKesz',
            'termeks.nyugta'
        )
        
        ->whereRaw('nyugtatetels.datumKesz <= now() - interval 10 minute')->get();


        //->where('nyugtatetels.datumKesz','<=', 'DATEADD(minute,-10, getdate())')

        //$result = DB::table('db_user')->where('id_user','=',Session::get('id_user'))

        //return reklamacio::all();

    }

 

  
}
