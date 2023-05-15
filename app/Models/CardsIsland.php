<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardsIsland extends Model
{
    use HasFactory;

    protected $table = 'CardsIslands';
    protected $fillable = [
        'ytLink',
        'titleKonten',
        'descriptionKonten',
    ];
}
