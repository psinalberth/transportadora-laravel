<?php

namespace Tests\Pages;

use Tests\Pages\Page;

class HomePage extends Page {

	public function __construct($webdriver) {
		parent::__construct($webdriver);
		
	}

	public function visit() {
		$this->webdriver->get($this->getBaseUrl());
	}
}