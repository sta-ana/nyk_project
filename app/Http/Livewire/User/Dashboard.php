<?php

namespace App\Http\Livewire\User;

use App\Models\Document;
use Livewire\Component;
use App\Models\SchoolYear;
use App\Models\Student;

class Dashboard extends Component
{
    protected $listeners = [
        'StudentDeleted',
    ];

    public $students;
    public function render()
    {
        return view('livewire.user.dashboard')->extends('layouts.user-app')->with('school_years', SchoolYear::get());
    }
    public function mount()
    {
        $this->students = Document::where('user_id', auth()->user()->id)->get();
    }
    
    public function delschoolyear($schoolyear){
        $sy = SchoolYear::where('school_year', $schoolyear)->firstOrFail();
        if ($sy) {
            // Delete students belonging to school year
            foreach (Student::where('school_year_id', $sy->id)->get() as $student) {
                Student::destroy($student->id);
            }
            // Delete school year
            $result = SchoolYear::destroy($sy->id);

            if ($result) {
                return redirect()->to('/user/dashboard');
            }
        }
    }
    public function delStudent($id){
        Student::destroy($id);
    }
    public function StudentDeleted(){
            
    }
       
}
