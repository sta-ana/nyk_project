<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use App\Models\psa_document;
use App\Models\Student;
use App\Models\form137;


class FileList extends Component
{
    use WithFileUploads;

    public $selectedStudentId;
    public $PSA;
    public $students = [], $psa = [];
    public $form137 = [];

    public function render()
    {
        return view('livewire.user.file-list')->extends('layouts.user-app');
    }

    public function mount() {
        $this->students = Student::get();
        foreach (psa_document::get() as $psa) {
            $this->psa[$psa->student_id] = $psa;
        }
        foreach (form137::get() as $form137){
            $this->form137[$form137->student_id] = $form137;
        }
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
        $path = $this->PSA->storeAs($filePath, $filename, 'public');
    
        psa_document::create([
            'file_name' => $path,
            'original_filename' => $this->PSA->getClientOriginalName(),
            'student_id' => $this->selectedStudentId,
        ]);
    
        session()->flash('message', 'PSA file uploaded successfully.');
    }
}
