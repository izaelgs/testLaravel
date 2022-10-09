<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = [
        'area',
        'razao_social',
        'cnpj',
        'tipo',
        'telefone',
        'nome_contato',
        'endereco',
        'email',
        'site',
        'instagram',
        'facebook',
        'linkedin'
    ];

    function areaAtuacao() {
        return $this->belongsTo(AreaAtuacao::class, 'area');
    }

    public function proponente() {
        return $this->hasMany(Proponente::class);
    }
}
