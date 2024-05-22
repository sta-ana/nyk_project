<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\psa_document;

use Illuminate\Http\Request;

class uploadDocuControlller extends Controller
{
    public function show(Request $request){
        $documents = psa_document::where('file_name', $request->fileName)->firstorFail();

        // if ($documents->student_id != Auth::id()){
        //     abort(401);
        // }
        $path = storage_path('app/psa-files/' . $documents->file_name);
        // if(!file_exists($path)){
        //     abort(404);
        // }
        return response()->file($path);
    }

    public function showForm137(Request $request){
        $documents = form137_document::where('file_name', $request->fileName)->firstorFail();

        // if ($documents->student_id != Auth::id()){
        //     abort(401);
        // }
        $path = storage_path('app/form137-files/' . $documents->file_name);
        // if(!file_exists($path)){
        //     abort(404);
        // }
        return response()->file($path);
    }
}
