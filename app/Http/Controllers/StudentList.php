<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentList extends Controller
{

    public function index(){

    }

    public function importCSV(){
        return view('csvupload');
    }
}
