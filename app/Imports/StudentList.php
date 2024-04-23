<?php

namespace App\Imports;

use App\Models\Students;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentList implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Students([
            'lastName' => $row ['firstName'],
            'firstName' => $row ['firstName'],
            'middleName' => $row ['middleName'],
            'bday' => $row ['bday'],
            'gender' => $row ['gender'],
            'address' => $row ['address'],
            'bloodType' => $row ['BloodType'],
            'course' => $row ['course'],
        ]);
    }
}
