<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class StudentFile extends Component
{
    public $selectedStudentId;
    
    protected $listeners = [
        'StudentUploadSelected',
    ];

    public function render()
    {
        return view('livewire.user.student-file');
    }

    public function StudentUploadSelected($studentId) {
        $this->selectedStudentId = $studentId;
    }

    public function GoBack() {
        $this->reset('selectedStudentId');
        $this->emit('UnselectStudentId');
    }
}
