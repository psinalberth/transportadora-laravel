<?php

use PHPUnit\Extensions\Selenium2TestCase;
use Tests\Pages\HomePage;

class SeleniumTest extends PHPUnit_Extensions_Selenium2TestCase {

	public function setUp() {
		$this->setBrowser('chrome');
		$this->setBrowserUrl('http://www.google.com.br');
	}

	public function tearDown() {

	}

	/*public function testHomePage() {
		
		$homePage = new HomePage($this);
		$homePage->visit();
		
		$this->assertEquals('Transportadora', $homePage->getTitle());
	}

	public function testClickMenu() {
		
		$homePage = new HomePage($this);
		$homePage->visit();
		
		$homePage->findByPartialLink('clientes')->click();
	}

	public function testClickMensu() {
		
		$homePage = new HomePage($this);
		$homePage->visit();
		
		$homePage->findByPartialLink('clientes')->click();
		$homePage->findByPartialLink('create')->click();
		$homePage->findByName('cep')->value('01412000');
	}*/
}