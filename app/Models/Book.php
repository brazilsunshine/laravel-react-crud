<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // $fillable is used to allow mass-assignment of certain fields,
    // $guarded is used to protect certain fields from mass-assignment.
    protected $guarded = [];
}
