<div>
    <x-slot name='title'>Professores</x-slot> 

    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Professores</h4>
            
        </div>
        <div class="page-rightheader">
            <div class="row">
                <div class="col-2"></div>
                
            </div>
            <div class="btn btn-list">
                @if($window != 'create')
                <button  class='btn btn-primary' wire:click="changePage('create')"  type='button'>Novo Professor</button>
                @endif
                @if($window != 'index')
                <button  class='btn btn-outline-primary' wire:click="changePage('index')"  type='button'>Listar Professores</button>
                @endif
            </div>
            
        </div>
    </div>
    @if($window=='index')    
        <livewire:admin.professor.index></livewire:admin.professor.index>
    @elseif($window=='create')
        <livewire:admin.professor.create></livewire:admin.professor.create>
    @elseif($window=='edit')
        <livewire:admin.professor.edit>    
    
    @endif
    <livewire:painel.legal-processes.delete>
    


</div>
