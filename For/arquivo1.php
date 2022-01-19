<?php 
	//Conhecendo a estrutura do For
	for ($i=0; $i < 10; $i++) { 
		echo $i . "<br>";
	}
	echo "<br>";

	//Pular treco do for
	for ($i=0; $i < 10; $i++) { 
		if ($i > 5 && $i < 8) continue;
		echo $i . "<br>";
	}
	echo "<br>";

	//parando a execução do for
	for ($i=0; $i < 10; $i++) { 
		if ($i === 5) break;
		echo $i . "<br>";
	}


 ?>