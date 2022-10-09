<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableInteresse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interesses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('estudante_id')
                ->nullable()
                ->constrained('estudantes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('colaborador_id')
                ->nullable()
                ->constrained('colaboradores')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('projeto_id')
                ->constrained('projetos')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('area')
                ->constrained('area_atuacao_projetos')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('interesse');
    }
}
