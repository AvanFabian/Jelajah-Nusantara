<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PulauSumatera extends Model
{
    use HasFactory;

    protected $table = 'pulausumatera';

    protected $fillable = [
        'id',
        'pulau',
        'thumbnailLink',
        'ytLink',
    ];
}
