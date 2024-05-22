<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SchoolYear;

class SchoolYearController extends Controller
{
    public function test(Request $request)
    {
        // Validate the input
        $request->validate([
            'school_year' => 'required|unique:school_years,school_year',
        ], [
            'school_year.unique' => 'The selected school year has already been added.',
        ]);

        // Save the school year to the database
        SchoolYear::create([
            'school_year' => $request->school_year
        ]);

        return redirect()->route('user.dashboard')->with('school_years', SchoolYear::all());
    }
}
