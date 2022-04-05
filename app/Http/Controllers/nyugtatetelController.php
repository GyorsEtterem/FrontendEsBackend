<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nyugtatetel;

class nyugtatetelController extends Controller
{
    //
    public function index()

    {

        return nyugtatetel::all();
    }



    public function show($termek_id)

    {

        return nyugtatetel::find($termek_id);
    }



    public function store(Request $request)

    {

        //kötelező oszlopok

        $request->validate([/* 
            'poszt' => 'required' */
        ]);

        return nyugtatetel::create($request->all());
    }



    public function update(Request $request, $termek_id)

    {

        $article = nyugtatetel::find($termek_id);

        $request->validate([/* 
            'poszt' => 'required' */
        ]);

        $article->update($request->all());



        return $article;
    }



    public function delete(Request $request, $termek_id)

    {

        $article = nyugtatetel::find($termek_id);

        $article->delete();

        return ['message' => 'Törölve'];
    }
}
