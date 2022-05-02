<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kedvezmeny extends Model
{
    use HasFactory;
    protected $primaryKey = 'kedvezmeny_id';

    protected $fillable = [
        'kedvezmeny',
        'mettol',
        'meddig'
    ];
}
