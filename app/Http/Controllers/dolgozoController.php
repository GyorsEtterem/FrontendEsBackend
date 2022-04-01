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
        // 'poszt' => 'required',
        // 'munkakor_id' => 'required'
        ]);

        return dolgozo::create($request->all());

    }



    public function update(Request $request,string $dolg_id)  //

    {

        //$article = dolgozo::find($dolg_id);

      $request->validate([
         'neve' => 'required',
         'szuldatum' => 'required',
         'cim' => 'required',
         'telefonszam' => 'required',
         'email' => 'required',
         'munkakor_id' => 'required',
         'jelszo' => 'required'
      ]);
        $dolgozo = dolgozo::find($dolg_id);
        $dolgozo-> neve = $request-> neve;
        $dolgozo-> szuldatum = $request-> szuldatum;
        $dolgozo-> cim = $request-> cim;
        $dolgozo-> telefonszam = $request-> telefonszam;
        $dolgozo-> email = $request-> email;
        $dolgozo-> munkakor_id = $request-> munkakor_id;
        $dolgozo-> jelszo = $request-> jelszo;
        $dolgozo->save();


        return ['message' => 'Módosítva'];

    }



    public function delete(Request $request, $id)

    {

        $article = dolgozo::find($id);

        $article->delete();

        return ['message' => 'Törölve'];

    }
}