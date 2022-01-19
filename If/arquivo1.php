<?php 
	//Controle de fluxo
	$suaIdade = 68;
	
	$idadeCrianca = 12;
	$idadeMaior = 18;
	$idadeMelhor = 65;
	if ($suaIdade < $idadeCrianca) {
		echo "Criança";
	}else if($suaIdade < $idadeMaior){
		echo "Adolescente";
	}else if ($suaIdade < $idadeMelhor) {
		echo "Adulto";
	}else{
		echo "Idoso";
	}

	echo "<br>";

	//Operador Ternario
	echo ($suaIdade < $idadeMaior)?"Menor de idade":"Maior de idade";

 ?>