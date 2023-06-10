<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sprofessor extends Model
{
    use HasFactory;
    protected $table =  'tbSPROFESSOR';
    public $fillable = [
        'id',
        'NOME',        
    ];
    public function turmas()
    {
        return $this->belongsToMany(Sturma::class, 'tbSPROFESSORTURMA', 'idPROFESSOR', 'idTURMA');
    }
}
