<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnderecosTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        
        Schema::create('enderecos', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->string('cep', 8);
            $table->string('logradouro', 80);
            $table->string('complemento', 45)->nullable();
            $table->string('uf', 2);
            $table->string('cidade', 100);
            $table->string('bairro', 60);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('enderecos');
    }
}
