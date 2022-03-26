<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dolgozo;

class dolgozoController extends Controller
{
    //
    public function index(Request $request)

    {

        $neve = $request->query('q','');
    $keres=dolgozo::where('neve','like',"%$neve%");
    $sort = $request->query('desc','');
        $a='';
        if($sort==""){
            return $keres->get();
        }
        else if($sort=="nevRendezNo"){
            $a='ASC';
        }
        else if($sort=="nevRendezCsokken"){
            $a='DESC';
        }
    return $keres->orderBy('neve', $a)->get();

    }



    public function show($id)

    {

        return dolgozo::find($id);

    }



    public function store(Request $request)

    {

        //kötelező oszlopok

     $request->validate([
        'poszt' => 'required'
        ]);

        return dolgozo::create($request->all());

    }



    public function update(Request $request, $id)

    {

        $article = dolgozo::find($id);

     $request->validate([
        'poszt' => 'required',
        'munkakor_id' => 'required'
     ]);

        $article->update($request->all());



        return $article;

    }



    public function delete(Request $request, $id)

    {

        $article = dolgozo::find($id);

        $article->delete();

        return ['message' => 'Törölve'];

    }
}