<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saluno extends Model
{
    use HasFactory;
    protected $table = 'tbSALUNO';
    public $fillable = [
        'id',
        'NOME'
    ];    
}
