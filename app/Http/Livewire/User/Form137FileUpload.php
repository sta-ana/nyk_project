<?php

namespace App\Http\Livewire\User;
use Livewire\WithFileUploads;
use App\Models\form137;

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
    
        if (is_null($this->selectedStudentId)) {
            throw new \Exception('Student ID is not set.');
        }
    
        $filePath = 'form137-files';
        $filename = 'form137_' . $this->selectedStudentId . '.' . $this->form137->getClientOriginalExtension();
        $path = $this->form137->storeAs($filePath, $filename);
    
        form137::create([
            'file_name' => $filename,
            'original_filename' => $this->form137->getClientOriginalName(),
            'student_id' => $this->selectedStudentId,
        ]);
        $this->reset(['form137']);
    
        session()->flash('message', 'PSA file uploaded successfully.');
    }

}
