<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class AddStudent extends Component
{
    public function render()
    {
        return view('livewire.user.add-student')->extends('layouts.user-app');
    }
}
