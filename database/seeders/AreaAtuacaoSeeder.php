<?php

namespace Database\Seeders;

use App\Models\AreaAtuacao;
use Illuminate\Database\Seeder;

class AreaAtuacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $area_atuacao = AreaAtuacao::create([
            'titulo' => 'Me Gerencie via Api como Administrador'
        ]);
    }
}
