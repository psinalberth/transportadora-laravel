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

	/*public function testDeveCriarCliente() {

	$this->visit('/transportadora/clientes/create')
	->type('Paciente Zero', 'nome')
	->type('0120700', 'cep')
	->type('21', 'numero')
	->type('1474884', 'telefone')
	->press('Salvar')
	->seePageIs('/transportadora/clientes');
	}*/

	public function testDeveRetornarQuantidadeClientes() {

		$mock = $this->setUpMockery();

		$mock->shouldReceive('count')->once()->andReturn(10);

		$this->call('GET', 'transportadora/clientes');

		$this->assertViewHas('clientes');

		$this->assertEquals(10, $mock->count());
	}

	public function testDummy() {

		$this->assertTrue(true);
	}

	public function testCX() {

		$clientes = \App\Http\Model\Cliente::count();

		// $clientes->shouldReceive('count')->once()->andReturn(664);

		var_dump($clientes);

	}
}
