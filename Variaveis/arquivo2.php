<?php  
	// Padrão Camelcase
	$anoNascimento = 1997;
	$nomeCompleto = "Lucio Santos Silva";

	//Comentario em linha
	/*Comentario
	de bloco */

	echo $nomeCompleto;

	echo "<br>";

	unset($nomeCompleto);//Apaga variavel

	if (isset($nomeCompleto)) {//Verifica se condição foi declarada
		echo $nomeCompleto;
	}

	$nome = "Lucio";
	$sobrenome = "Santos";
	$nomeCompleto = $nome . " " . $sobrenome;
	echo $nomeCompleto;


?>