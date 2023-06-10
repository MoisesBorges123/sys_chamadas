<?php

namespace App\Http\Livewire\Admin\Professor\Turmas;
use App\Models\Sprofessor;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Index extends Component
{
    public $turmas;
    public function mount()
    {
        
        $this->turmas = Sprofessor::where('id',Session::get('professor'))->first()->turmas;
        
    }
    public function render()
    {
        return view('livewire.admin.professor.turmas.index');
    }
}
