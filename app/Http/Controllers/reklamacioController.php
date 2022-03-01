<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reklamacio;

class reklamacioController extends Controller
{
    //
    public function index()

    {

        return reklamacio::all();

    }

 

    public function show($id)

    {

        return reklamacio::find($id);

    }

    public function store(Request $request)

    {

        //kötelező oszlopok

     $request->validate([
        'poszt' => 'required'
        ]);

        return reklamacio::create($request->all());

    }



    public function update(Request $request, $id)

    {

        $article = reklamacio::find($id);

     $request->validate([
        'poszt' => 'required'
     ]);

        $article->update($request->all());



        return $article;

    }



    public function delete(Request $request, $id)

    {

        $article = reklamacio::find($id);

        $article->delete();

        return ['message' => 'Törölve'];

    }
}
