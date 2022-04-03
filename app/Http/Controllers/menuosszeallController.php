<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menuosszeall;

class menuosszeallController extends Controller
{
    //
    public function index()

    {

        return menuosszeall::all();
    }



    public function show($id)

    {

        return menuosszeall::find($id);
    }



    public function store(Request $request)

    {

        //kötelező oszlopok

        $request->validate([
            'poszt' => 'required'
        ]);

        return menuosszeall::create($request->all());
    }



    public function update(Request $request, $id)

    {

        $article = menuosszeall::find($id);

        $request->validate([
            'poszt' => 'required'
        ]);

        $article->update($request->all());



        return $article;
    }



    public function delete(Request $request, $id)

    {

        $article = menuosszeall::find($id);

        $article->delete();

        return ['message' => 'Törölve'];
    }
}
