<?php 

	//  Escopo de variaveis
	
	$nome = "Lucio";

	function teste(){
		global $nome;
		echo $nome;
	}

	function teste2(){
		global $nome;
		echo $nome . "Agora teste2";
	}

	teste();
	teste2();

 ?>