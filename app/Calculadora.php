<?php 


class Calculadora{

	public function __constructor(){

		echo "suma numérica";
	}

	public function suma($a, $b){
		return $a+$b;
	}

	public function sumarArreglo($arreglo = []){
		return array_sum($arreglo);
	}

	public function divide($a, $b){
		if ($b === 0) {
			throw new DivisionByZeroError();
		}
		return $a / $b;
	}




}



?>