<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PulauSulawesi extends Model
{
    use HasFactory;

    protected $table = 'pulausulawesi';

    protected $fillable = [
        'id',
        'pulau',
        'thumbnailLink',
        'ytLink',
    ];
}
