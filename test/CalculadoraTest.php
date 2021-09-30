<?php 

require '../../phpunit/vendor/autoload.php';
require 'app/Calculadora.php';
use \PHPUnit\Framework\TestCase;

final class CalculadoraTest extends TestCase
{
	private $calc;

	//Inicializar las variable $calc
	public function setUp():void{
		$this->calc = new Calculadora;
	}

	public function testFuncionSuma()
	{
		$expected = 7;
		$suma = $this->calc->suma(3,4);
			$this->assertEquals($expected, $suma);
	}

	public function testFuncionSumarArreglo()
	{
		$expected = 6;
		$arreglo = [1,2,3];
		$sumarArreglo = $this->calc->sumarArreglo($arreglo);
			$this->assertEquals($expected, $sumarArreglo);
	}

	public function testFuncionDivide()
	{
		$expected = 5;
		$divide = $this->calc->divide(10,2);
			$this->assertEquals($expected, $divide);
	}

	public function testFuncionDivideX0()
	{
		$this->expectException(DivisionByZeroError::class);
		$divide = $this->calc->divide(10,0);
	}

}


//Videos:
	//https://www.youtube.com/watch?v=LvkoN8IVCgI&ab_channel=PuroC%C3%B3digo
	//https://www.youtube.com/watch?v=khhz8RAoSww&ab_channel=VidaMRR-Dise%C3%B1oydesarrolloweb

?>