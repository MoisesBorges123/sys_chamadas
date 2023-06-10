<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class PageControl extends Component
{
    public $window, $selectedID;
    protected $listeners = [
        'changePage'
    ];
    public function render()
    {
        return view('livewire.admin.page-control');
    }
    public function changePage($page, $id = null){
        $this->window = $page;  
        $this->selectedID = $id;
    }
}
