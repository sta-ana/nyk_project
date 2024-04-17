<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SchoolYear;

class SchoolYearController extends Controller
{
    //
    public function test(Request $request) {
        SchoolYear::create([
            'school_year' => $request->school_year
        ]);
        return to_route('user.dashboard')->with('school_years', SchoolYear::get());
    }
}
