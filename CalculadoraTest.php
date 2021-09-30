<?php 

require '../../phpunit/vendor/autoload.php';
use \PHPUnit\Framework\TestCase;

final class CalculadoraTest extends TestCase
{

	public function testSuma()
	{
		$expected = 7;
		$calc = new Calculadora();
			$this->assertEquals($expected, $calc->suma(3,4));
	}


}




?>