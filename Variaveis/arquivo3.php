<?php 
	//Exemplos de tipos variaveis

	///////////// Variaveis basicas 
	$nome = "Lucio"; // String
	$sobrenome = 'Santos'; // String aspas simples

	$ano = 1997; // Inteiros

	$salario = 5999.99; // Float

	$bloqueado = false; // Boleando


	////////////// Variaveis Compostas

	$frutas = array("Abacaxi", "Laranja", "Manga"); //Aray

	echo $frutas[2];

	$nascimento = new DateTime();
	echo "<br>";
	//var_dump($nascimento);

	////////////// Variaveis Especiais

	$arquivo = fopen("arquivo3.php", "r");
	var_dump($arquivo);

	echo "<br>";

	$nulo = NULL;
	$vazio = "";
 ?>