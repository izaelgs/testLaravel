<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    use HasFactory;

    protected $table = 'colaboradores';

    protected $fillable = [
        'area',
        'nome_completo',
        'email',
        'endereco',
        'telefone',
        'responsavel',
        'email_profissional',
        'forma_integracao',
    ];

    public function interesse() {
        return $this->hasMany(Interesse::class);
    }
}
