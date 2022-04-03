<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dolgozo extends Model
{
    use HasFactory;
    protected $primaryKey = 'dolg_id';

    protected $fillable = [
        'neve',
        'szuldatum',
        'cim',
        'telefonszam',
        'email',
        'munkakor_id',
        'jelszo'
    ];
}
