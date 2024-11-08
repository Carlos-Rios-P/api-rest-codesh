<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $table = 'foods';

    protected $fillable = ['name'];
}
