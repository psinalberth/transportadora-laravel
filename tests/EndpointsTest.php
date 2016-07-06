<?php

class EndpointsTest extends TestCase {

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

	public function testMustGetCepAsJsonObject() {

		$this->get('transportadora/enderecos/cep/01207000')
		     ->seeJson(['cep' => '01207000', 'uf' => 'SP']);
	}
}
