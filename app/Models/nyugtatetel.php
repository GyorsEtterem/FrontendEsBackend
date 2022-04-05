<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nyugtatetel extends Model
{
    use HasFactory;
    protected $primaryKey = 'nyugta';

    protected $fillable = [
        'nyugta',
        'termek_id',
        'etelAllapot'
    ];
}
