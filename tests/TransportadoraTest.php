<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TransportadoraTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDeveAcessarPaginaInicial() {
        
        $this->visit('/transportadora')
        	->see('Transportadora')
        	->dontSee('Teste');
    }

    public function testDeveSelecionarClientes() {
    	$this->visit('/transportadora')
    		->click('Clientes')
    		->seePageIs('/transportadora/clientes');
    }

    public function testDeve
}
