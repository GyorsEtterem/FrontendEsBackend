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



    public function show($id)

    {

        return nyugtatetel::find($id);
    }



    public function store(Request $request)

    {

        //kötelező oszlopok

        $request->validate([
            'poszt' => 'required'
        ]);

        return nyugtatetel::create($request->all());
    }



    public function update(Request $request, $id)

    {

        $article = nyugtatetel::find($id);

        $request->validate([
            'poszt' => 'required'
        ]);

        $article->update($request->all());



        return $article;
    }



    public function delete(Request $request, $id)

    {

        $article = nyugtatetel::find($id);

        $article->delete();

        return ['message' => 'Törölve'];
    }
}
