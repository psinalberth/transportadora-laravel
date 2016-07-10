<?php

namespace Tests\Pages;

use Tests\Pages\Page;
use Facebook\WebDriver\WebDriverBy;
use Faker\Factory as FakerFactory;

class ClientesPage extends Page {

	public function __construct($webdriver) {
		parent::__construct($webdriver);
	}

	public function visit() {
		$this->webdriver->get($this->getBaseUrl().'/clientes');
	}

	public function fillForm() {

		$cliente = FakerFactory::create('pt_BR');

		$this->webdriver->findElement(WebDriverBy::id('nome'))->sendKeys($cliente->name);
		$this->webdriver->findElement(WebDriverBy::id('cep'))->sendKeys('83215000');
		$this->webdriver->findElement(WebDriverBy::id('numero'))->sendKeys($cliente->buildingNumber);
		$this->webdriver->findElement(WebDriverBy::id('telefone'))->sendKeys($cliente->phone);
	}
}