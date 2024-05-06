<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\SchoolYear;
use Illuminate\Http\Request;

class ImportController extends Controller
{
    public function importCSV(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:csv,txt',
            'school_year' => 'required|exists:school_years,id',
        ]);

        $file = $request->file('file')->getRealPath();
        $data = array_map('str_getcsv', file($file));

        foreach ($data as $row) {
            Student::create([
                'first_name' => $row[0],
                'last_name' => $row[1],
                'middle_name' => $row[2] ?? null,
                'date_of_birth' => $row[3],
                'gender' => $row[4],
                'address' => $row[5] ?? null,
                'blood_type' => $row[6],
                'course' => $row[7] ?? null,
                'school_year_id' => $request->input('school_year'),
            ]);
        }

        return redirect()->route('user.dashboard')->with('success', 'CSV data imported successfully');
    }
}
