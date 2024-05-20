<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\StudentFiles;


class StudentFile extends Component
{

    use WithFileUploads;

    public $selectedStudentId;
    public $PSA;
    public $form137;
    
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

    public function uploadPsa()
    {
        $this->validate([
            'PSA' => 'required|file|mimes:pdf|max:10240', 
        ]);

        $psaPath = $this->PSA->store('psa-files', 'public');

        session()->flash('message', 'PSA file uploaded successfully.');
    }

    public function uploadForm137()
    {
        $this->validate([
            'form137' => 'required|file|mimes:pdf|max:10240', 
        ]);

        $form137Path = $this->form137->store('form137-files', 'public');

        StudentFile::create([
            'student_id' => $this->selectedStudentId,
            'file_type' => 'Form137',
            'file_path' => $form137Path,
        ]);

        session()->flash('message', 'Form 137 file uploaded successfully.');
    }

}
