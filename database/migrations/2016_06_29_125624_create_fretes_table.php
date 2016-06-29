<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFretesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        
        Schema::create('fretes', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->string('descricao', 100);
            $table->date('data_saida');
            $table->date('data_chegada');
            $table->float('peso');
            $table->double('valor', 10, 2);
            $table->bigInteger('cliente_id')->unsigned();
            $table->bigInteger('endereco_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('fretes', function($table) {
            
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('endereco_id')->references('id')->on('enderecos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('fretes');
    }
}
