<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advice extends Model
{
    use HasFactory;
    // table name
    protected $table = 'advices';
    // fillable all column
    protected $fillable = [
        'id',
        'name',
        'email',
        'advice',
    ];
}
