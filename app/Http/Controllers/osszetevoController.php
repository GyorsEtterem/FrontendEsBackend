<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\osszetevo;

class osszetevoController extends Controller
{
    //
    public function index()

    {

        return osszetevo::all();
    }



    public function show($id)

    {

        return osszetevo::find($id);
    }



    public function store(Request $request)

    {

        //kötelező oszlopok

        $request->validate([
            'poszt' => 'required'
        ]);

        return osszetevo::create($request->all());
    }



    public function update(Request $request, $id)

    {

        $article = osszetevo::find($id);

        $request->validate([
            'poszt' => 'required'
        ]);

        $article->update($request->all());



        return $article;
    }



    public function delete(Request $request, $id)

    {

        $article = osszetevo::find($id);

        $article->delete();

        return ['message' => 'Törölve'];
    }
}
