<?php

class TransportadoraEndpointsTest extends TestCase {

	public function testMustAccessHomePage() {

		$this->visit('/transportadora')
		     ->see('Transportadora')
		     ->dontSee('Teste');
	}

	public function testMustRedirectToClientsPage() {

		$this->visit('/transportadora')
		     ->click('Clientes')
		     ->seePageIs('/transportadora/clientes');
	}

	public function testGetReponse() {

		$response = $this->call('GET', '/transportadora/clientes');

		$this->assertEquals(200, $response->getStatusCode());
	}

	public function testMustGetCepAsJsonObject() {

		$this->get('transportadora/enderecos/cep/01207000')
		     ->seeJson(['cep' => '01207000', 'uf' => 'SP']);
	}
}
