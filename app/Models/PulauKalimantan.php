<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PulauKalimantan extends Model
{
    use HasFactory;

    protected $table = 'pulaukalimantan';

    protected $fillable = [
        'id',
        'pulau',
        'thumbnailLink',
        'ytLink',
    ];
}
