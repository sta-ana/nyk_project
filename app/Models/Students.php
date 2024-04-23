<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;


    public static function getStudents(){
        $result = DB::table('student_list')
        ->select ('lname', 'fname', 'Midname', 'bday', 'gender', 'address', 'btype', 'course')
        ->get()-> array();
        return result;
    }
}
