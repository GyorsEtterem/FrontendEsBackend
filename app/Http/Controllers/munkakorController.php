<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\munkakor;

class munkakorController extends Controller
{
    //
    public function index()

    {

        return munkakor::all();
    }



    public function show($id)

    {

        return munkakor::find($id);
    }



    public function store(Request $request)

    {

        //kötelező oszlopok

        $request->validate([
            'poszt' => 'required'
        ]);

        return munkakor::create($request->all());
    }



    public function update(Request $request, $id)

    {

        $article = munkakor::find($id);

        $request->validate([
            'poszt' => 'required'
        ]);

        $article->update($request->all());



        return $article;
    }



    public function delete(Request $request, $id)

    {

        $article = munkakor::find($id);

        $article->delete();

        return ['message' => 'Törölve'];
    }
}
