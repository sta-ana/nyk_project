<?php

namespace App\Http\Livewire\User;

use App\Models\Document;
use Livewire\Component;
use App\Models\SchoolYear;

class Dashboard extends Component
{
    public $totalDocument;
    public function render()
    {
        return view('livewire.user.dashboard')->extends('layouts.user-app')->with('school_years', SchoolYear::get());
    }
}
