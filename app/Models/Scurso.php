<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scurso extends Model
{
    use HasFactory;
    protected $table = 'tbSCURSO';
    public $fillable  = [
        'id',
        'NOME'
    ];
}
