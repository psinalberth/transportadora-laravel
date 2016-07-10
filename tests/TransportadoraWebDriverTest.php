<?php 

use Tests\Pages\HomePage;
use Tests\Pages\ClientesPage;
use Tests\Pages\FretesPage;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\WebDriverSelect;
use Facebook\WebDriver\WebDriverWait;
use Facebook\WebDriver\WebDriverExpectedCondition;

class TransportadoraWebDriverTest extends PHPUnit_Framework_TestCase {

	private $webdriver;

	public function setUp() {
		$this->webdriver = RemoteWebDriver::create('http://localhost:4444/wd/hub', DesiredCapabilities::chrome());
	}

	public function tearDown() {
		$this->webdriver->quit();
	}

	/*public function testGoToHomePage() {
		
		$homePage = new HomePage($this->webdriver);
		$homePage->visit();

		$this->assertEquals($homePage->getTitle(), 'Transportadora');
	}

	public function testClickClientesMenu() {
		
		$homePage = new HomePage($this->webdriver);
		$homePage->visit();		

		$this->webdriver->findElement(WebDriverBy::linkText('Clientes'))->click();
	}

	public function testCreateCliente() {

		$clientesPage = new ClientesPage($this->webdriver);
		$clientesPage->visit();
		$this->webdriver->findElement(WebDriverBy::xpath("//a[@href='http://localhost:8000/transportadora/clientes/create']"))->click();
		$clientesPage->fillForm();

		$submit = $this->webdriver->findElement(WebDriverBy::cssSelector('.btn.btn-primary'));

		$this->webdriver->wait(10, 5000)->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::cssSelector('.btn.btn-primary')));

		$submit->click();
	}

	public function testDeleteCliente() {

		$clientesPage = new ClientesPage($this->webdriver);
		$clientesPage->visit();

		$button = $this->webdriver->findElement(WebDriverBy::cssSelector('.fa.fa-trash-o'));
		$button->click();

		$submit = $this->webdriver->findElement(WebDriverBy::cssSelector('.btn.btn-primary'));

		$this->webdriver->wait(10, 5000)->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::cssSelector('.btn.btn-primary')));

		$submit->click();

		$this->webdriver->wait(10, 5000);
	}*/

	public function testSSSS() {

		$fretesPage = new FretesPage($this->webdriver);
		$fretesPage->visit();

		$this->webdriver->findElement(WebDriverBy::xpath("//a[@href='http://localhost:8000/transportadora/fretes/create']"))->click();

		$fretesPage->fillForm();

		$submit = $this->webdriver->findElement(WebDriverBy::cssSelector('.btn.btn-primary'));

		$this->webdriver->wait(10, 5000)->until(WebDriverExpectedCondition::elementToBeClickable(WebDriverBy::cssSelector('.btn.btn-primary')));

	}
}