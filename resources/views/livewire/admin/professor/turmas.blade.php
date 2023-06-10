<div>
    
    @if(empty($window))
        <livewire:admin.professor.turmas.index>
    @elseif($window == 'chamada')
        <livewire:admin.chamada.create idTurma={{$selectedID}}>
    @endif
</div>