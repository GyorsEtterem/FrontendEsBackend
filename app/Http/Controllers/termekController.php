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



    public function update(Request $request,string $termek_id)

    {

        // $article = termek::find($id);

        $request->validate([
            'termeknev' => 'required',
            'ar' => 'required',
            'kedvezmeny_id' => 'required',
            'kep' => 'required'
        ]);

        $termek = termek::find($termek_id);
        $termek -> termeknev = $request -> termeknev;
        $termek -> ar = $request -> ar;
        $termek -> kedvezmeny_id = $request -> kedvezmeny_id;
        $termek -> kep = $request -> kep;
        $termek -> save();


        return ['message' => 'Módosítva'];

    }



    public function delete(Request $request, $id)

    {

        $article = termek::find($id);

        $article->delete();

        return ['message' => 'Törölve'];

    }
}
