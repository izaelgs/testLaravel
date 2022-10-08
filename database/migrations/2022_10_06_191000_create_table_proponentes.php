<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProponentes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proponentes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('area')
                ->constrained('area_atuacao_projetos')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('empresa')
                ->nullable()
                ->constrained('empresas')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('pessoa_fisica')
                ->nullable()
                ->constrained('pessoas_fisicas')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->boolean('app');
            $table->tinyInteger('contato');
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
        Schema::dropIfExists('proponente');
    }
}
