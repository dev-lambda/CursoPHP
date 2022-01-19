<?php 

	//Funções para manipulação de Strings

	$frase = "A repetição é a mãe da retenção";

	$palavra = "mãe";

	$q = strpos($frase, $palavra);//Posição da palavra

	var_dump($q);

	echo "<br>";

	$texto = substr($frase, 0, $q);

	echo $texto;

	echo "<br>";

	$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

	echo $texto2 . "<br>";

	var_dump($texto, $texto2);
 ?>