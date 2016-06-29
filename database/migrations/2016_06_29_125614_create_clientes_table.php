<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        
        Schema::create('clientes', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->string('nome', 80);
            $table->string('complemento', 45)->nullable();
            $table->integer('numero');
            $table->string('telefone', 15);
            $table->bigInteger('endereco_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('clientes', function($table) {
            
            $table->foreign('endereco_id')->references('id')->on('enderecos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('clientes');
    }
}
