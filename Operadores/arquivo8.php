<?php 

	//prioridade de operadores
	$result = (10 + 3) / 2;

	echo $result;

	echo "<br><br>";

	$result = (10 + 3) / 2 > 5 && 10 + 5 < 3;

	var_dump($result);

	echo "<br><br>";

	$result = (10 + 3) / 2 > 5 && 10 + 5 < 20;

	var_dump($result);

	echo "<br><br>";

	$result = (10 + 3) / 2 > 5 || 10 + 5 < 3;

	var_dump($result);


 ?>