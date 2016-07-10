<?php 

namespace Tests\Pages;

abstract class Page {

	protected $webdriver;
	protected $baseUrl = 'http://localhost:8000/transportadora';

	public function __construct($webdriver) {
		$this->webdriver = $webdriver;
	}

	public function getTitle() {
		return $this->webdriver->getTitle();
	}

	public function findByPartialLink($link) {
		return $this->webdriver->byCssSelector('a[href*='.$link.']');
	}

	public function findByName($name) {
		return $this->webdriver->byName($name);
	}

	public function getBaseUrl() {
		return $this->baseUrl;
	}

	abstract function visit();
}