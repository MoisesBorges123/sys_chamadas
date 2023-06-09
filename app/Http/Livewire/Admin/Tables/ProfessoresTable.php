<?php

namespace App\Http\Livewire\Admin\Tables;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Sprofessor;

class ProfessoresTable extends DataTableComponent
{
    protected $model = Sprofessor::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [     
            Column::make("ID", "id")
                ->sortable(),
            Column::make("Nome", "NOME")
                ->sortable()
           
        ];
    }
}
