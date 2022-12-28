<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadFormDepartment extends Model
{
    use HasFactory;
    protected $table = 'upload_form_department';
    protected $fillable = [
      'department',
      'upload_form_id'
    ];
}
