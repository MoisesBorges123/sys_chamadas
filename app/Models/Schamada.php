<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Schamada extends Model
{
    use HasFactory;
    protected $table = 'tbSCHAMADA';
    public $fillable = [
        'id',
        'idALUNO',
        'idTURMA',
        'idCURSO',
        'idPROFESSOR',
        'DIAAULA',
        'HORACHAMADA',
        'PRESENTEAUSENTE'
    ];

    public function aluno(){
        return $this->belongsTo(Saluno::class,'idAluno','id');
    }
    public function turma(){
        return $this->belongsTo(Sturma::class,'idTurma','id');
    }
    public function curso(){
        return $this->belongsTo(Scurso::class,'idCURSO','id');
    }
    public function professor(){
        return $this->belongsTo(Scurso::class,'idPROFESSOR','id');
    }
}
