<?php 
	//Convertendo array em json
	$pessoas = array();

	array_push($pessoas, Array(
		'nome' => 'João',
		'Idade' => 20
	));

	array_push($pessoas, Array(
		'nome' => 'Glaucio',
		'Idade' => 25
	));

	echo json_encode($pessoas);

 ?>