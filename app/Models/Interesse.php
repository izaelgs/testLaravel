<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interesse extends Model
{
    use HasFactory;

    protected $fillable = [
        'area',
        'colaborador_id',
        'estudante_id',
        'projeto_id'
    ];

    function areaAtuacao() {
        return $this->belongsTo(AreaAtuacaoProjeto::class, 'area');
    }

    function projeto() {
        return $this->belongsTo(Projeto::class,'projeto_id');
    }

    function estudante() {
        return $this->belongsTo(Estudante::class,'estudante_id');
    }

    function colaborador() {
        return $this->belongsTo(Colaborador::class,'colaborador_id');
    }
}
