<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsouTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usou', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('fk_produdo_id_produto')->nullable();
            $table->foreign('fk_produdo_id_produto')->references('id_produto')->on('produto');
            $table->bigInteger('fk_chamado_id')->nullable()->unsigned();
            $table->foreign('fk_chamado_id')->references('id')->on('chamado');
            $table->integer('quantidade');
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
        Schema::dropIfExists('usous');
    }
}
