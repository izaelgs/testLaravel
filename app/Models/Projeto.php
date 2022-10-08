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
        return $this->gelongsToMany(Estudante::class, 'interesse');
    }

    public function colaboradoes() {
        return $this->gelongsToMany(Colaborador::class, 'interesse');
    }
}
