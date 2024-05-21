<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class FileList extends Component
{
    public function render()
    {
        return view('livewire.user.file-list')->extends('layouts.user-app');
    }
}
