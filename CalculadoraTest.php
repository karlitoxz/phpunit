<?php 

require '../../phpunit/vendor/autoload.php';
use \PHPUnit\Framework\TestCase;

final class CalculadoraTest extends TestCase
{

	public function testSuma()
	{
		$calc = new Calculadora();
			$this->assertEquals(
				7, $calc->suma(3,4)
			);
	}


}




?>