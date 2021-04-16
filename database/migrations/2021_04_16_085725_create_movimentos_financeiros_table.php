<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMovimentosFinanceirosTable extends Migration
{
    public function up()
    {
        Schema::create('movimentos_financeiros', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('descricao')->nullable();
            $table->integer('valor')->nullable();
            $table->date('data')->nullable();
            $table->string('tipo');
            $table->bigInteger('empresa_id')->unsigned();
            $table->foreign('empresa_id')->references('id')->on('empresas');
        });
    }

    public function down()
    {
        Schema::drop('movimentos_financeiros');
    }
}
