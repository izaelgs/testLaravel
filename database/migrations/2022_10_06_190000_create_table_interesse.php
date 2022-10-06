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
        Schema::create('interesse', function (Blueprint $table) {
            $table->id();
            $table->foreignId('estudante')
                ->constrained('estudantes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('colaborador')
                ->constrained('colaboradores')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('projeto')
                ->constrained('projetos')
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
