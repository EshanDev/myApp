<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serials extends Model
{
    use HasFactory;


    protected $fillable = [
        'serials', 'count'
    ];



}
