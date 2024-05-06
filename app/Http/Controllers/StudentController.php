<?php

namespace App\Http\Controllers;

use App\Models\SchoolYear;
use App\Models\Student; // Add this line
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function showStudentData($schoolYearId)
{
    $schoolYear = SchoolYear::findOrFail($schoolYearId);
    $students = Student::where('school_year_id', $schoolYearId)
        ->get([
            'last_name', 'first_name', 'middle_name', 'date_of_birth', 'gender', 'address', 'blood_type', 'course',
        ]);

    return view('dashboard.blade.php', compact('schoolYear', 'students'));
}


}