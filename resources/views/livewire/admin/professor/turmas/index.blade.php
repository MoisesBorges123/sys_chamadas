<div class="card">
    <div class="card-header">
        <h3 class="card-title">Turmas</h3>
    </div>
    <div class="table-responsive">
        <table class="table card-table table-vcenter text-nowrap">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th></th>                    
                </tr>
            </thead>
            <tbody>
                @foreach($turmas as $turma)                           
                    <tr>
                        <th scope="row">{{$turma->id}}</th>
                        <td>{{$turma->NOME}}</td>                        
                        <td>
                            <button wire:click='$emit("changePage","chamada","{{$turma->id}}")' type="button" class="btn btn-icon btn-primary">Fazer Chamada&nbsp;&nbsp;<i class="fa fa-check-square-o"></i></button>                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>