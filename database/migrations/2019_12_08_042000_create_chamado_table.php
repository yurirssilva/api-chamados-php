<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChamadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chamado', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descricao');
            $table->integer('status');
            $table->bigInteger('fk_funcionario_matricula');
            $table->foreign('fk_funcionario_matricula')->references('matricula')->on('funcionario');
            $table->timestamp('data_hora_abertura');
            $table->bigInteger('fk_tipo_de_servico_cod_servico');
            $table->foreign('fk_tipo_de_servico_cod_servico')->references('cod_servico')->on('tipo_de_servico');
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
        Schema::dropIfExists('chamados');
    }
}
