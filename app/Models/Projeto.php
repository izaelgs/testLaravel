<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo', 'descricao', 'area', 'disabled_at'
    ];

    function areaAtuacao() {
        return $this->belongsTo(AreaAtuacao::class, 'area');
    }
}
