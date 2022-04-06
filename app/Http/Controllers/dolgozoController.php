<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dolgozo;
use Illuminate\Support\Facades\DB;

class dolgozoController extends Controller
{
    //
    public function index(Request $request)

    {
        // DB::table('dolgozos')
        // -> join( 'munkakors', 'dolgozos.munkakor_id', '=' ,'munkakors.munkakor_id')
        // -> select(
        //     'dolgozos.neve',
        //     'dolgozos.telefonszam',
        //     'dolgozos.szuldatum',
        //     'dolgozos.cim',
        //     'dolgozos.email',
        //     'dolgozos.jelszo',
        //     'munkakors.megnevezes',
        //     'munkakors.munkakor_id'
        // )
        // // ->query('q', '')->where('neve', 'like', "%$neve%");

        // ->get();

        $neve = $request->query('q', '');
        
        if($neve===null){
            $keres = DB::table('dolgozos')
            -> join( 'munkakors', 'dolgozos.munkakor_id', '=' ,'munkakors.munkakor_id')
            -> select(
                'dolgozos.dolg_id',
                'dolgozos.neve',
                'dolgozos.telefonszam',
                'dolgozos.szuldatum',
                'dolgozos.cim',
                'dolgozos.email',
                'dolgozos.jelszo',
                'munkakors.megnevezes',
                'munkakors.munkakor_id'
            );
        }else{
            $keres = dolgozo::where('neve', 'like', "%$neve%")-> join( 'munkakors', 'dolgozos.munkakor_id', '=' ,'munkakors.munkakor_id')
            -> select(
                'dolgozos.dolg_id',
                'dolgozos.neve',
                'dolgozos.telefonszam',
                'dolgozos.szuldatum',
                'dolgozos.cim',
                'dolgozos.email',
                'dolgozos.jelszo',
                'munkakors.megnevezes',
                'munkakors.munkakor_id'
            );
        }
        $sort = $request->query('desc', '');
        $a = '';
        if ($sort == "") {
            return $keres->get();
        } else if ($sort == "nevRendezNo") {
            $a = 'ASC';
        } else if ($sort == "nevRendezCsokken") {
            $a = 'DESC';
        }
        return $keres->orderBy('neve', $a)->get();
    }



    public function show($id)

    {

        return dolgozo::find($id);
    }



    public function store(Request $request)

    {


        $request->validate([]);

        return dolgozo::create($request->all());
    }



    public function update(Request $request, string $dolg_id)

    {

        $request->validate([
            'neve' => 'required',
            'szuldatum' => 'required',
            'cim' => 'required',
            'telefonszam' => 'required',
            'email' => 'required',
            'munkakor_id' => 'required',
            'jelszo' => 'required'
        ]);
        $dolgozo = dolgozo::find($dolg_id);
        $dolgozo->neve = $request->neve;
        $dolgozo->szuldatum = $request->szuldatum;
        $dolgozo->cim = $request->cim;
        $dolgozo->telefonszam = $request->telefonszam;
        $dolgozo->email = $request->email;
        $dolgozo->munkakor_id = $request->munkakor_id;
        $dolgozo->jelszo = $request->jelszo;
        $dolgozo->save();


        return ['message' => 'Módosítva'];
    }



    public function delete(Request $request, $id)

    {

        $article = dolgozo::find($id);

        $article->delete();

        return ['message' => 'Törölve'];
    }
}
