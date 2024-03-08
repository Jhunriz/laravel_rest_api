<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Games_api extends Model
{
    use HasFactory;

    protected $table = "Games_apis";
    protected $fillable = ['title','description'];
}
