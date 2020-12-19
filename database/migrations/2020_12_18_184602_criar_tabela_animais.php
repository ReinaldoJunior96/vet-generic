<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaAnimais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_animais', function (Blueprint $table) {
            $table->id('idAnimal');
            $table->unsignedBigInteger('idProprietario');
            $table->string('nome')->nullable();
            $table->string('idade')->nullable();
            $table->string('raca')->nullable();
            $table->string('sexo')->nullable();
            $table->foreign('idProprietario')->references('idCliente')->on('tbl_clientes')->onDelete('cascade');
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
        Schema::dropIfExists('tbl_animais');
    }
}
