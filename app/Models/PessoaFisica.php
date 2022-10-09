<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PessoaFisica extends Model
{
    use HasFactory;

    protected $table = 'pessoas_fisicas';

    protected $fillable = [
        'area',
        'email',
        'endereco',
        'id',
        'nome_contato',
        'telefone',
        'tipo_empresa'
    ];

    function areaAtuacao() {
        return $this->belongsTo(AreaAtuacao::class, 'area');
    }

    public function proponente() {
        return $this->hasMany(Proponente::class);
    }
}
