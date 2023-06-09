<div>
    <x-slot name='title'>Chamadas</x-slot> 

    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Chamadas</h4>
            
        </div>
        <div class="page-rightheader">
            <div class="row">
                <div class="col-2"></div>
                
            </div>
            <div class="btn btn-list">
                @if($window != 'create')
                <button  class='btn btn-primary' wire:click="changePage('create')"  type='button'>Fazer Chamada</button>
                @endif
                @if($window != 'index')
                <button  class='btn btn-outline-primary' wire:click="changePage('index')"  type='button'>Listar Chamadas</button>
                @endif
            </div>
            
        </div>
    </div>
    @if($window=='index')    
        <livewire:admin.chamada.index></livewire:admin.chamada.index>
    @elseif($window=='create')
        <livewire:admin.chamada.create></livewire:admin.chamada.create>
    @endif

    <livewire:admin.chamada.delete>    
    
    


</div>
