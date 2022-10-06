<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableColaboradores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colaboradores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('area')
                ->constrained('area_atuacao')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('nome_completo');
            $table->string('email');
            $table->string('endereco');
            $table->string('telefone');
            $table->string('email_profissional');
            $table->string('site')->nullable(true);
            $table->string('instagram')->nullable(true);
            $table->string('facebook')->nullable(true);
            $table->string('linkedin')->nullable(true);
            $table->string('responsável')->nullable(true);
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
        Schema::dropIfExists('colaborador');
    }
}
