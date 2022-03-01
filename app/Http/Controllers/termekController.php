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
        'poszt' => 'required'
        ]);

        return termek::create($request->all());

    }



    public function update(Request $request, $id)

    {

        $article = termek::find($id);

     $request->validate([
        'poszt' => 'required'
     ]);

        $article->update($request->all());



        return $article;

    }



    public function delete(Request $request, $id)

    {

        $article = termek::find($id);

        $article->delete();

        return ['message' => 'Törölve'];

    }
}
