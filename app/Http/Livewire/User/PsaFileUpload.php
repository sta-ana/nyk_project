<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use App\Models\psa_document;

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

    if (is_null($this->selectedStudentId)) {
        throw new \Exception('Student ID is not set.');
    }

    $filePath = 'psa-files';
    $filename = 'psa_' . $this->selectedStudentId . '.' . $this->PSA->getClientOriginalExtension();
    $path = $this->PSA->storeAs($filePath, $filename);

    psa_document::create([
        'file_name' => $filename,
        'original_filename' => $this->PSA->getClientOriginalName(),
        'student_id' => $this->selectedStudentId,
    ]);
    $this->reset(['PSA']);

    session()->flash('message', 'PSA file uploaded successfully.');
}

}
