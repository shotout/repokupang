<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contributors extends Model
{
    use HasFactory;
    protected $table = 'contributors';
    protected $fillable = [
      'name'
    ];
}
