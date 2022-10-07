<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableEstudantes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudantes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('area')
                ->nullable()
                ->constrained('area_atuacao')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('curso')
                ->constrained('cursos')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('nome_completo');
            $table->string('email');
            $table->string('endereco');
            $table->string('registro_academico');
            $table->tinyInteger('periodo');
            $table->tinyInteger('forma_integracao');
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
        Schema::dropIfExists('estudante');
    }
}
