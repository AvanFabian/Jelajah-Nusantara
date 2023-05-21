<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PulauPapua extends Model
{
    use HasFactory;

    protected $table = 'pulaupapua';

    protected $fillable = [
        'id',
        'pulau',
        'thumbnailLink',
        'ytLink',
    ];
}
