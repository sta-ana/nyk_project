<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Livewire\WithFileUploads;


class StudentFile extends Component
{

    use WithFileUploads;

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
    public function uploadPsa(){

        dd('test');


    }
    public function uploadForm137(){

        dd('test');

    }
}
