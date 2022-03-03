<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alapanyag;

class alapanyagController extends Controller
{
    //
    public function index()

    {

        return alapanyag::all();

    }

 

    public function show($id)

    {

        return alapanyag::find($id);

    }



    public function store(Request $request)

    {

        //kötelező oszlopok

     $request->validate([
        'poszt' => 'required'
        ]);

        return alapanyag::create($request->all());

    }



    public function update(Request $request, $id)

    {

        $article = alapanyag::find($id);

     $request->validate([
        'poszt' => 'required'
     ]);

        $article->update($request->all());



        return $article;

    }



    public function delete(Request $request, $id)

    {

        $article = alapanyag::find($id);

        $article->delete();

        return ['message' => 'Törölve'];

    }
}
