<?php

namespace App\Http\Controllers;

use App\Models\reklamacio;
use Illuminate\Http\Request;
use App\Models\elmult10pRend;
use Illuminate\Support\Facades\DB;
use DateTime;

class elmult10pRendController extends Controller
{
    //
    public function index()

    {
        $lekerdez = DB::table('nyugtatetels')
            ->join('termeks', 'termeks.termek_id', '=', 'nyugtatetels.termek_id')
            ->select(

                'termeks.termek_id as termek_id',
                'termeks.ar as termekar',
                'termeks.termeknev as termeknev',
                'nyugtatetels.datumKesz as csere_ideje',
                'nyugtatetels.nyugta as nyugta'
            )

            ->whereRaw('nyugtatetels.datumKesz >= now() - interval 10 minute')->get();

        return $lekerdez;
    }
}
