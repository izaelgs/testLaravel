<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proponente extends Model
{
    use HasFactory;

    protected $fillable = [
        'area',
        'empresa',
        'pessoa_fisica',
        'app',
        'contato'
    ];

    function areaAtuacao() {
        return $this->belongsTo(AreaAtuacaoProjeto::class, 'area');
    }

    public function empresa() {
        return $this->belongsTo(Empresa::class, 'empresa');
    }

    public function pessoaFisica() {
        return $this->belongsTo(PessoaFisica::class, 'pessoa_fisica');
    }
}
