<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cursos = Curso::insert([
            ['titulo' => 'Engenharia de Software', 'periodos' => 8],
            ['titulo' => 'Sistema de Informação', 'periodos' => 8],
            ['titulo' => 'TADS - Tecnologia em Analise e Desenvolvimento de Sistemas', 'periodos' => 5],
        ]);
    }
}
