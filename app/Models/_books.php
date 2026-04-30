<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class _books extends Model
{
    protected $table = '_books';
    protected $fillable = ['name','pages','year'];
}
