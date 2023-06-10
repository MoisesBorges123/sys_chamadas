<div class="row justify-content-center">
    <div class="col-md-8 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Fazer Chamada</h5>
            </div>
            <div class="card-body">
               
                <form wire:submit.prevent="submit">
                    <div class="form">
                        <div class="form-group">
                            <label for="number_process">Data</label>
                            <input type="datetime-local" class="form-control" wire:model='DIAAULA'>
                        </div>
                    </div>  
                    <h6 class='mt-5'>Lista de Alunos</h6><hr class='text-primary mt-2'>                 
                    <div class="form">
                        <div class="form-label">Marque apenas os alunos que estão ausentes</div>                       
                        @foreach($this->turma->alunos as $aluno)                           
                            <div class="custom-controls-stacked">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" wire:model="ALUNOSCURSO" value="{{$aluno->id}}-{{$aluno->pivot->idCURSO}}"  >
                                    <span class="custom-control-label">{{$aluno->NOME}}</span>
                                </label>                            
                            </div>                            
                        @endforeach
                    </div>              
                    <div class="form">
                        <div class="form-row">
                            <div class="col-md-12 text-center">
                                <button class="btn btn-primary" type='submit'>Salvar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
</div>