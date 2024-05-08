<?php

namespace App\Http\Livewire\User;
use App\Models\Student;

use Livewire\Component;

class StudentList extends Component
{
    public $school_year;

    public $selectedStudentId;

    protected $listeners = [
        'UnselectStudentId',
    ];

    public function render()
    {
        return view('livewire.user.student-list');
    }

    public function UnselectStudentId() {
        unset($this->selectedStudentId);
    }

    public function delStudent($id){
        Student::destroy($id);
        $this->emit('StudentDeleted');        
    }
    public function fileUpload($studentId){
        $this->selectedStudentId = $studentId;
        $this->emit('StudentUploadSelected', $studentId);
    }
}

