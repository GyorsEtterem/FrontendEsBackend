<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reklamacio extends Model
{
    use HasFactory;
    protected $primaryKey = 'reklam_id';

    protected $fillable = [
        'reklam_id',
        'termek_id',
        'mennyiseg',
        'leiras',
        'csere_ideje',
        'nyugta'
    ];
}
