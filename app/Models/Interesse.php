<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interesse extends Model
{
    use HasFactory;

    function cstudante() {
        return $this->belongsTo(Estudante::class, 'curso');
    }

    function colaborador() {
        return $this->belongsTo(Colaborador::class, 'colaborador');
    }
}
