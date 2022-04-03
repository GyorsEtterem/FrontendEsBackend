<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kedvezmeny;

class kedvezmenyController extends Controller
{
    //
    public function index()

    {

        return kedvezmeny::all();

    }

 

    public function show($id)

    {

        return kedvezmeny::find($id);

    }



    public function store(Request $request)

    {

        //kötelező oszlopok

     $request->validate([
        //'poszt' => 'required'
        ]);

        return kedvezmeny::create($request->all());

    }

    public function update(Request $request,string $id)

    {

        $article = kedvezmeny::find($id);

     $request->validate([
        //'poszt' => 'required'
     ]);

        $article->update($request->all());



        return $article;

    }

    public function delete(Request $request, $id)

    {

        $article = kedvezmeny::find($id);

        $article->delete();

        return ['message' => 'Törölve'];

    }

    /* public function kedvFelvitel(Request $request){
        $request -> validate([
            'kedvezmeny' => 'required',
            'mettol' => 'required',
            'meddig' => 'required'
        ]);
        $kedvez = new kedvezmeny();
        $kedvez -> kedvezmeny = $request -> kedvezmeny;
        $kedvez -> mettol = $request -> mettol;
        $kedvez -> meddig = $request -> meddig;
    } */
}
