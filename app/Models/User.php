<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use HasFactory;
    
    protected $table = 'tbGUSUARIO';
    public $fillable = ['USUARIO','SENHA','idPROFESSOR'];
    
    public function professor()
    {
        return $this->belongsTo(Sprofessor::class,'idPROFESSOR','id');
    }
}
