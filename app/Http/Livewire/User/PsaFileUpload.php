<?php

namespace App\Http\Livewire\User;
use Livewire\WithFileUploads;
use App\Models\psa_document;
use Illuminate\Support\Facades\Auth;
use Illuminate\SupportFacades\Storage;

use Livewire\Component;

class PsaFileUpload extends Component
{
    use WithFileUploads;

    public $selectedStudentId;
    public $PSA;

    public function render()
    {
        return view('livewire.user.psa-file-upload');
    }
    public function uploadPsa()
    {
        $this->validate([
            'PSA' => 'required|file|mimes:pdf|max:10240', 
        ]);


        $userId = Auth::student_id();
        $filePath = 'psa-files';
        $filename = 'psa_' . $userId . '.' . $this->file->getClientOriginalExtension();
        $this->file->storeAs($filePath, $filename);
       
        StudentFile::create([
            'file_name' => $filename,
            'original_filename' => $this->file->getClientOriginalextension(),
            'student_id' => auth::user()->id,
        ]);
    }
}
