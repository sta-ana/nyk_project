<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class Viewstudentlist extends Component
{
    public function render()
    {
        return view('livewire.user.viewstudentlist')->extends('user.dashboard');
    }
}
