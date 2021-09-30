<?php 

require '../../phpunit/vendor/autoload.php';

final class CalculadoraTest extends \PHPUnit\Framework\TestCase 
{

	public function testSuma()
	{
		$calc = new Calculadora();
			$this->assertEquals(
				8, $calc->suma(3,4)
			);
	}


}




?>