<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Projeto;

class ProjetosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projeto = Projeto::create(
        ['titulo' => 'Website',
        'descricao' => 'Primeiro Projeto',
        'area' => 1
        ],
        ['titulo' => 'Agendamento de Laboratorio e Notebook',
        'descricao' => 'Primeiro Projeto',
        'area' => 1
        ],
        ['titulo' => 'Brainstorm para Software de Biciletário - Shopping Boulevard',
        'descricao' => 'Primeiro Projeto',
        'area' => 1
        ],
        ['titulo' => 'Biomonitoramento - IEMA',
        'descricao' => 'Primeiro Projeto',
        'area' => 1
        ],
        ['titulo' => 'Ensalamento',
        'descricao' => 'Primeiro Projeto',
        'area' => 1
        ],
        ['titulo' => 'Fresadora com furadeira - Madeira',
        'descricao' => 'Primeiro Projeto',
        'area' => 1
        ],
        ['titulo' => 'Fliperama',
        'descricao' => 'Primeiro Projeto',
        'area' => 1
        ],
        ['titulo' => 'Óculos 3D',
        'descricao' => 'Primeiro Projeto',
        'area' => 1
        ],
        ['titulo' => 'Psicologia',
        'descricao' => 'Primeiro Projeto',
        'area' => 1
        ],
        ['titulo' => 'Quiz acadêmico',
        'descricao' => 'Primeiro Projeto',
        'area' => 1
        ]);
    }
}
