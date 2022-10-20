<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableEmpresas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('area')
                ->nullable()
                ->constrained('area_atuacao')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('razao_social');
            $table->string('cnpj');
            $table->tinyInteger('tipo_empresa');
            $table->string('telefone');
            $table->string('nome_contato');
            $table->string('endereco');
            $table->string('email');
            $table->string('site')->nullable(true);
            $table->string('instagram')->nullable(true);
            $table->string('facebook')->nullable(true);
            $table->string('linkedin')->nullable(true);
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
        Schema::dropIfExists('empresa');
    }
}
