<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo', 'descricao', 'area'
    ];

    public function estudantes() {
        return $this->belongsToMany(Estudante::class, 'interesses');
    }

    public function colaboradoes() {
        return $this->belongsToMany(Colaborador::class, 'interesses');
    }
}
