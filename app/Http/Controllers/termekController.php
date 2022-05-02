<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\termek;

class termekController extends Controller
{
    //
    public function index()

    {

        return termek::all();
    }



    public function show($id)

    {

        return termek::find($id);
    }

    public function store(Request $request)

    {

        //kötelező oszlopok

        $request->validate([
            //'poszt' => 'required'
        ]);

        return termek::create($request->all());
    }



    public function update(Request $request, $termek_id)

    {

        $request->validate([
            'fajta' => 'required',
            'termeknev' => 'required',
            'eladhato' => 'required',
            'raktaron' => 'required',
            'meret' => 'required',
            'kedvezmeny_id' => 'required',
            'ar' => 'required',
            'kep' => 'required'
        ]);

        $termek = termek::find($termek_id);
        $termek->fajta = $request->fajta;
        $termek->termeknev = $request->termeknev;
        $termek->eladhato = $request->eladhato;
        $termek->raktaron = $request->raktaron;
        $termek->meret = $request->meret;
        $termek->kedvezmeny_id = $request->kedvezmeny_id;
        $termek->ar = $request->ar;
        $termek->kep = $request->kep;
        $termek->save();


        return ['message' => 'Módosítva'];
    }



    public function delete(Request $request, $id)

    {

        $article = termek::find($id);

        $article->delete();

        return ['message' => 'Törölve'];
    }
}
