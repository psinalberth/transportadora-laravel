<?php

class TransportadoraTest extends TestCase {

	public function setUp() {

		parent::setUp();
	}

	public function tearDown() {

	}

	public function setUpMockery() {

		$mock = Mockery::mock(ClienteRepository::class );
		App::instance(ClienteRepository::class , $mock);

		return $mock;
	}

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

	/**
	 * @depends testDeveAcessarPaginaInicial
	 **/

	public function testDeveSelecionarClientes() {

		$this->visit('/transportadora')
		     ->click('Clientes')
		     ->seePageIs('/transportadora/clientes');
	}

	/**
	 * @depends testDummy
	 **/

	public function testDeveCriarCliente() {

		$this->visit('/transportadora/clientes/create')
		     ->type('Paciente Zero', 'nome')
		     ->type('0120700', 'cep')
		     ->type('21', 'numero')
		     ->type('1474884', 'telefone')
		     ->press('Salvar')
		     ->seePageIs('/transportadora/clientes');
	}

	public function testDeveRetornarQuantidadeClientes() {

		$mock = $this->setUpMockery();

		$mock->shouldReceive('count')->once()->andReturn(10);

		$this->assertEquals(10, $mock->count());

		Mockery::close();
	}

	public function testDummy() {

		$this->assertTrue(false);
	}
}
