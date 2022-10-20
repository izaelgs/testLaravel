<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PessoaFisica extends Model
{
    use HasFactory;

    protected $table = 'pessoas_fisicas';

    protected $fillable = [
        'nome_completo',
        'cpf',
        'telefone',
        'nome_contato',
        'email',
        'endereco'
    ];

    function areaAtuacao() {
        return $this->belongsTo(AreaAtuacao::class, 'area');
    }

    public function proponente() {
        return $this->hasMany(Proponente::class);
    }
}
