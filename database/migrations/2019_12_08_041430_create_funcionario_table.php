<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionario', function (Blueprint $table) {
            $table->bigInteger('matricula')->primary()->unique();
            $table->string('nome_funcionario');
            $table->string('tipo');
            $table->bigInteger('fk_setor_cod_setor');
            $table->foreign('fk_setor_cod_setor')->references('cod_setor')->on('setor');
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
        Schema::dropIfExists('funcionario');
    }
}
