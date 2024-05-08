<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class StudentDataWindow extends Component
{
    public $school_year;

    public $selectedStudentId;

    public $showingTable = true;

    protected $listeners = [
        'StudentUploadSelected', 'UnselectStudentId'
    ];


    public function render()
    {
        return view('livewire.user.student-data-window');
    }

    public function StudentUploadSelected($studentId) {
        $this->showingTable = false;
        $this->selectedStudentId = $studentId;
    }

    public function UnselectStudentId() {
        $this->reset('selectedStudentId');
        $this->showingTable = true;
    }

    // public function CloseModal() {
    //     $this->reset('selectedStudentId');
    //     $this->showingTable = true;
    //     $this->emit('$refresh');
    // }
}
