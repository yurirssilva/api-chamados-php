<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResolveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resolve', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fk_funcionario_matricula');
            $table->foreign('fk_funcionario_matricula')->references('matricula')->on('funcionario');
            $table->bigInteger('fk_chamado_id')->nullable()->unsigned();
            $table->foreign('fk_chamado_id')->references('id')->on('chamado');
            $table->string('descricao_solucao');
            $table->timestamp('data_hora_solucao')->nullable()->default(null);
            $table->timestamp('data_hora_vinculo')->nullable()->default(null);
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
        Schema::dropIfExists('resolve');
    }
}
