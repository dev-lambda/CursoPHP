<?php 
	//Passagem de parametro por valor
	$a = 10;

	function trocaValor($a){
		$a = 50;

		return $a;
	}
	echo $a . "<br>";
	echo trocaValor($a);
 ?>