<?php

namespace App\Http\Livewire\Admin\Professor;

use App\Http\Livewire\Admin\PageControl;


class Turmas extends PageControl
{
    public $turmas;
    public function mount()
    {
        
    }
    public function render()
    {

        return view('livewire.admin.professor.turmas');
    }
}
