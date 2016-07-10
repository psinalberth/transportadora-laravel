<?php

namespace Tests\Pages;

use Tests\Pages\Page;
use Facebook\WebDriver\WebDriverSelect;
use Facebook\WebDriver\WebDriverBy;

class FretesPage extends Page {

	public function __construct($webdriver) {
		parent::__construct($webdriver);
	}

	public function visit() {
		$this->webdriver->get($this->getBaseUrl().'/fretes');
	}

	public function fillForm() {
		$this->webdriver->findElement(WebDriverBy::id('cliente'));

		$select = new WebDriverSelect($this->webdriver->findElement(WebDriverBy::id('cliente')));
		$select->selectByValue('9');
	}
}