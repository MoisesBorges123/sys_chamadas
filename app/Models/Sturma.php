<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sturma extends Model
{
    use HasFactory;
    protected $table = 'tbSTURMA';
    public $fillable = [
        'NOME',
        'idCURSO'
    ];
    public function professores()
    {
        return $this->belongsToMany(Sprofessor::class, 'tbSPROFESSORTURMA', 'idPROFESSOR', 'idTURMA');
    }
}
