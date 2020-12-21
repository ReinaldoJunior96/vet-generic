<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaAtendimento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_atendimento', function (Blueprint $table) {
            $table->id('idAtendimento');
            $table->unsignedBigInteger('codeAnimal');
            $table->string('tipo')->nullable();
            $table->text('anamnese')->nullable();
            $table->text('exameFisico')->nullable();
            $table->text('examesSolicitados')->nullable();
            $table->text('observacao')->nullable();
            $table->dateTime('dataCriacao');
            $table->dateTime('dataAlteracao');
            $table->foreign('codeAnimal')->references('idAnimal')->on('tbl_animais')->on('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_atendimento');
    }
}
