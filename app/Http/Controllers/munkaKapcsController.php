<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class munkaKapcsController extends Controller
{
    public function index()
    {
        return DB::table('dolgozos')
            ->join('munkakors', 'dolgozos.munkakor_id', '=', 'munkakors.munkakor_id')
            ->select(
                'dolgozos.dolg_id',
                'dolgozos.neve',
                'dolgozos.telefonszam',
                'dolgozos.szuldatum',
                'dolgozos.cim',
                'dolgozos.email',
                'dolgozos.jelszo',
                'munkakors.megnevezes',
                'munkakors.munkakor_id'
            )

            ->get();
    }
}
