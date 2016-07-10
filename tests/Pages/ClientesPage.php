<?php

namespace Tests\Pages;

use Tests\Pages\Page;
use Facebook\WebDriver\WebDriverBy;

class ClientesPage extends Page {

	public function __construct($webdriver) {
		parent::__construct($webdriver);
	}

	public function visit() {
		$this->webdriver->get($this->getBaseUrl().'/clientes');
	}

	public function fillForm() {

		$this->webdriver->findElement(WebDriverBy::id('nome'))->sendKeys('Usuário WebDriver');
		$this->webdriver->findElement(WebDriverBy::id('cep'))->sendKeys('83215000');
		$this->webdriver->findElement(WebDriverBy::id('numero'))->sendKeys('58');
		$this->webdriver->findElement(WebDriverBy::id('telefone'))->sendKeys('33029921');
	}
}