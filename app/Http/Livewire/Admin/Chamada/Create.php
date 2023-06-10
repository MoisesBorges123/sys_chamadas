<?php

namespace App\Http\Livewire\Admin\Chamada;

use App\Models\Schamada;
use App\Models\Sturma;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Session as FacadesSession;
use Livewire\Component;

class Create extends Component
{
    public $turma, $DIAAULA, $ALUNOSCURSO=[];
    public function mount($idTurma)
    {
        date_default_timezone_set('America/Sao_Paulo');
        $this->turma = Sturma::find($idTurma);
       /* $data= date('Y-m-d',time());
        $tempo= date('H:s:i',time());
        $this->DIAAULA = $data.'T'.$tempo;*/ 
        
    }
 
    public function render()
    {
        return view('livewire.admin.chamada.create');
    }
    public function submit()
    {
        
        
         
        try{
            if(!empty($this->DIAAULA)){
                foreach($this->turma->alunos as $aluno){
                    $chamada = Schamada::where('idAluno',$aluno->id)->where('idCurso',$aluno->pivot->idCURSO)->where('idTURMA',$this->turma->id)->where('DIAAULA',strval($this->DIAAULA).":00")->first();
                    if(!empty($chamada)){
                        $chamada->update([                            
                            'PRESENTEAUSENTE'=> in_array($aluno->id.'-'.$aluno->pivot->idCURSO,$this->ALUNOSCURSO) ? 'A':'P'
                        ]);
                    }else{
                        Schamada::create([
                            'idALUNO'=>$aluno->id,
                            'idTURMA'=>$this->turma->id,
                            'idCURSO'=>$aluno->pivot->idCURSO,
                            'idPROFESSOR'=>FacadesSession::get('professor'),
                            'DIAAULA'=>strval($this->DIAAULA).":00",
                            'PRESENTEAUSENTE'=> in_array($aluno->id.'-'.$aluno->pivot->idCURSO,$this->ALUNOSCURSO) ? 'A':'P'
                        ]);

                    }
                }
                $this->emit('toast','Chamada salva com sucesso!','success');
                $this->emit('changePage','');
            }else{
                $this->emit('toast','Você precisa definir a data da CHAMADA','warning');
            }
        }catch(\Exception $e)
        {
            $this->emit('swal',$e->getMessage(),'error');
        }
    }
}
