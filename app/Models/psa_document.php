<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class psa_document extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'file_name',
        'original_filename',
        'student_id'
    ];
}
