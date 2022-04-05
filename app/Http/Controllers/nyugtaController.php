<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nyugta;

class nyugtaController extends Controller
{
    //
    public function index()

    {

        return nyugta::all();
    }



    public function show($nyugtaszam)

    {

        return nyugta::find($nyugtaszam);
    }



    public function store(Request $request)

    {

        //kötelező oszlopok

        $request->validate([/* 
            'poszt' => 'required' */
        ]);

        return nyugta::create($request->all());
    }



    public function update(Request $request, $nyugtaszam)

    {

        $article = nyugta::find($nyugtaszam);

        $request->validate([/* 
            'poszt' => 'required' */
        ]);

        $article->update($request->all());



        return $article;
    }



    public function delete(Request $request, $nyugtaszam)

    {

        $article = nyugta::find($nyugtaszam);

        $article->delete();

        return ['message' => 'Törölve'];
    }
}
