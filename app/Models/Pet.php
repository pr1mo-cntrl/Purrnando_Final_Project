<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory; // This is the magic line that fixes your error!

    protected $fillable = ['name', 'breed', 'age', 'description', 'status'];
}