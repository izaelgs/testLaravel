<?php

namespace Database\Seeders;

use App\Models\AreaAtuacaoProjeto;
use Illuminate\Database\Seeder;

class AreaAtuacaoProjetoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $area_atuacao_projeto = AreaAtuacaoProjeto::insert([
            ['titulo' => 'Desenvolvimento Web Front end'],
            ['titulo' => 'Desenvolvimento Web Back end'],
            ['titulo' => 'Desenvolvimento Mobile'],
            ['titulo' => 'Desenvolvimento Desktop'],
            ['titulo' => 'Banco de Dados'],
            ['titulo' => 'BI e Data Science'],
            ['titulo' => 'Infraestrutura em Nuvem'],
            ['titulo' => 'Documentação e Levantamento de Requisitos'],
            ['titulo' => 'Segurança da Informação'],
            ['titulo' => 'Gestão de Projetos'],
        ]);
    }
}
