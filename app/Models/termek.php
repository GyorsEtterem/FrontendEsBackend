<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class termek extends Model
{
    use HasFactory;
    protected $primaryKey='termek_id';

    protected $fillable = [
        'termeknev',
        'ar',
        'kedvezmeny_id',
        'kep'
    ];
}
