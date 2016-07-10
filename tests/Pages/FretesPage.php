<?php

namespace Tests\Pages;

use Tests\Pages\Page;
use Facebook\WebDriver\WebDriverSelect;
use Facebook\WebDriver\WebDriverBy;
use Faker\Factory as FakerFactory;

class FretesPage extends Page {

	public function __construct($webdriver) {
		parent::__construct($webdriver);
	}

	public function visit() {
		$this->webdriver->get($this->getBaseUrl().'/fretes');
	}

	public function fillForm() {
		
		$frete = FakerFactory::create('pt_BR');

		$this->webdriver->findElement(WebDriverBy::id('cliente'));

		$select = new WebDriverSelect($this->webdriver->findElement(WebDriverBy::id('cliente')));
		$select->selectByValue('9');

		$this->webdriver->findElement(WebDriverBy::id('descricao'))->sendKeys($frete->sentence(4, true));
		$this->webdriver->findElement(WebDriverBy::id('cep'))->sendKeys('83215000');
		$this->webdriver->findElement(WebDriverBy::id('numero'))->sendKeys($frete->buildingNumber);
		$this->webdriver->findElement(WebDriverBy::id('data_saida'))->sendKeys('08/07/2016');
		$this->webdriver->findElement(WebDriverBy::id('data_entrada'))->sendKeys('19/07/2016');
		$this->webdriver->findElement(WebDriverBy::id('peso'))->sendKeys($frete->randomFloat(2, 0, 10));
	}
}