<?php

namespace App\Http\Controllers;

use App\Models\reklamacio;
use Illuminate\Http\Request;
use App\Models\elmult10pRend;
use Illuminate\Support\Facades\DB;
use DateTime;

class elmult10pRendController extends Controller
{
    //
    public function index()

    {
        $date = new DateTime;
        $date->modify('-5 minutes');
        $formatted_date = $date->format('Y-m-d H:i:s');

        
        $lekerdez=DB::table('nyugtatetels')
        ->join('termeks', 'termeks.termek_id', '=' ,'nyugtatetels.termek_id')
        ->select(
            
            'termeks.termek_id as termek_id',
            'termeks.ar as termekar',
            'nyugtatetels.datumKesz as csere_ideje' ,
            'nyugtatetels.nyugta as nyugta'
        )
        
        ->whereRaw('nyugtatetels.datumKesz >= now() - interval 10 minute')->get();

        return $lekerdez;


        //->where('nyugtatetels.datumKesz','<=', 'DATEADD(minute,-10, getdate())')

        //$result = DB::table('db_user')->where('id_user','=',Session::get('id_user'))

        //return reklamacio::all();

    }

    // public function reklamFelvitel(Request $request){
    //     $request -> validate([
    //         'termek_id' => 'required', 
    //         'nyugta' => 'required', 
    //         'leiras' => 'required', 
    //         'menny' => 'required', 
    //         'csere_ideje' => 'required|unique:reklamacios', 
    //     ]);
    //     $reklamal = new reklamacio();
    //         $reklamal -> termek_id = $request -> termek_id;
    //         $reklamal -> nyugta = $request -> nyugta;
    //         $reklamal -> leiras = $request -> leiras;
    //         $reklamal -> menny = $request -> menny;
    //         $reklamal -> csere_ideje = $request -> csere_ideje;
    //         $res = $reklamal -> save();
        
    //         if($res){
    //             return back()->with('sikeres','Sikeresen regisztrálta a dolgozót');
    //         }else{
    //              return back()->with('sikertelen','Valamelyik adatot nem jól adta meg');
    //         }
    // }

    // public function show($id)

    // {

    //     return elmult10pRend::find($id);

    // }



    // public function store(elmult10pRend $request)

    // {

    //     //kötelező oszlopok

    //  $request->validate([
    //     // 'poszt' => 'required',
    //     // 'munkakor_id' => 'required'
    //     ]);

    //     return elmult10pRend::create($request->all());

    // }





    // public function delete(Request $request, $id)

    // {

    //     $article = elmult10pRend::find($id);

    //     $article->delete();

    //     return ['message' => 'Törölve'];

    //}
}