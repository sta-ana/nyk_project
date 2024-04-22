<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class Csvupload extends Component
{
    public function render()
    {
        return view('livewire.user.csvupload')->extends('layouts.user-app');
    }

    public function test(){
        dd('test');
    }
}
