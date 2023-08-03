<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    // mass assignment
    protected $fillable = [
        'title', 'short_notes', 'price'
    ];
}
