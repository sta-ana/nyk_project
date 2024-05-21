<?php

namespace App\Http\Livewire\User;
use Livewire\WithFileUploads;

use Livewire\Component;

class Form137FileUpload extends Component
{
    use WithFileUploads;

    public $selectedStudentId;
    public $form137;

    public function render()
    {
        return view('livewire.user.form137-file-upload');
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
