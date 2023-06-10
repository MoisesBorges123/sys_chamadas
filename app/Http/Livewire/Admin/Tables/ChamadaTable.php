<?php

namespace App\Http\Livewire\Admin\Tables;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Schamada;
use Illuminate\Support\Facades\Session;

class ChamadaTable extends DataTableComponent
{
    protected $model = Schamada::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }
    public function builder(): Builder
    {      
        return Schamada::query()        
            ->where('idProfessor',Session::get('professor'))
            ->where('idTurma',Session::get('professor'));            
        
    }
    public function columns(): array
    {
        return [            
            Column::make("ID", "id")
                ->sortable(),
            Column::make("Aluno", "aluno.nome")
                ->sortable(),
            Column::make("Turma", "turma.nome")
                ->sortable(),
            Column::make("Curso", "curso.nome")
                ->sortable(),
            Column::make("Professor", "professor.nome")
                ->sortable(),
            Column::make("Data", "DIAAULA")
                ->sortable(),           
            Column::make("Presente / Ausente", "PRESENTEAUSENTE")
                ->sortable()           
        ];
    }
}
