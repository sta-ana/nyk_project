<?php

namespace App\Imports;

use App\Models\Students;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentImports implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Students([
            'lname' => $row ['firstName'],
            'fname' => $row ['lastName'],
            'Midname' => $row ['middleName'],
            'bday' => $row ['bday'],
            'gender' => $row ['gender'],
            'address' => $row ['address'],
            'btype' => $row ['BloodType'],
            'course' => $row ['course'],
        ]);
    }
}
