<?php

namespace App\Http\Livewire\User;
use App\Models\Student;

use Livewire\Component;

class StudentList extends Component
{
    public $school_year;
    public function render()
    {
        return view('livewire.user.student-list');
    }
    public function delStudent($id){
        Student::destroy($id);
        $this->emit('StudentDeleted');        
    }
}

