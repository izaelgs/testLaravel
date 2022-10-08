<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudante extends Model
{
    use HasFactory;

    protected $fillable = [
        'area',
        'curso',
        'nome_completo',
        'email',
        'endereco',
        'registro_academico',
        'periodo',
        'forma_integracao'
    ];

    function curso() {
        return $this->belongsTo(Curso::class, 'curso');
    }

    public function projetos() {
        return $this->belongsToMany(Projeto::class, 'interesses');
    }
}
