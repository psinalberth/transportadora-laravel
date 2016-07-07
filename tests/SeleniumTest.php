<?php

require_once 'PHPUnit/Extensions/Selenium2TestCase.php';

class SeleniumTest extends PHPUnit_Extensions_Selenium2TestCase {

	public function setUp() {
		$this->setBrowser('firefox');
		$this->setBrowserUrl('http://www.google.com.br');
	}

	public function testHomePage() {
		$this->url('http://www.google.com.br');
		$this->assertEquals('Google', $this->title());
	}
}