<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PulauBali extends Model
{
    use HasFactory;

    protected $table = 'pulaubali';

    protected $fillable = [
        'id',
        'pulau',
        'thumbnailLink',
        'ytLink',
    ];
}
