<?php 

	function ola($texto = "Definido", $periodo = "Bom dia"){
		return "Ola $texto $periodo!<br>";
	}

	echo ola("Mundo");
	echo ola("Lucio", "Boa noite");
	echo ola();
	echo ola(""); // Sera exibido vazio

 ?>