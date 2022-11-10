<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class irakli extends Model
{
    use HasFactory;

    protected $table = 'iraklis';

    protected $fillable = [
        "title",
        "body",
        "author",
        "active"
    ];
}
