<?php

class MockeryTest extends TestCase {

	public function setUp() {
		parent::setUp();
	}

	public function tearDown() {

		parent::tearDown();
		Mockery::close();
	}

	public function setUpMockery() {

		$clientes = Mockery::mock(ClienteRepository::class );
		$this->app->instance(ClienteRepository::class , $clientes);

		return $clientes;
	}

	public function testCountClientes() {

		$clientes = $this->setUpMockery();
		$clientes->shouldReceive('count')->once()->andReturn(5);

		$this->assertEquals(5, $clientes->count());
	}

	public function testGetClientes() {

		$clientes = $this->setUpMockery();
		$clientes->shouldReceive('all')->once();
		$this->call('GET', 'transportadora/clientes');

		$this->assertEquals(['Joao das Neves', 'Jose das Couves', 'Manolo Cabrero'], $clientes->all());
	}

	public function testGetClientsPage() {

		$clientes = $this->setUpMockery();
		$clientes->shouldReceive('all')->once();
		$this->call('GET', 'transportadora/clientes');

		$this->assertViewHas('clientes');
	}
}
