<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

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
    }
    public function insertStudent(){
        
    }
}
