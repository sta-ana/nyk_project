<?php

namespace App\Http\Livewire\User;


use Livewire\Component;
use App\models\Student;
use Masmerise\Toaster\Toaster;

class AddStudent extends Component
{

    public $firstName, $lastName, $middleName, $gender, $birthDate, $course, $bloodType, $address, $school_year;
    

    public function render()
    {
        return view('livewire.user.add-student')->extends('layouts.user-app');
    }
    public function rules(){
        return [
            'firstName' => ['required', 'string'],
            'lastName' => ['required', 'string'],
            'middleName' => ['required', 'string'],
            'gender' => ['required'],
            'birthDate' => ['required'],
            'course' => ['required'],
            'bloodType' => ['required'],
            'address' => ['required'],
            'school_year' => ['required', 'numeric'],
        ];

    }
    public function addStudent() {
        $this->validate();

        Student::create([
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'middle_name' => $this->middleName,
            'gender' => $this->gender,
            'date_of_birth' => $this->birthDate,
            'course' => $this->course,
            'blood_type' => $this->bloodType,
            'address' => $this->address,
            'school_year_id' => $this->school_year
        ]);
        $this->reset();
        session()->flash('message', 'Post successfully updated.');
    }
}
