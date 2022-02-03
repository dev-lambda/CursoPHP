<?php 
	//Convertendo json para array
	$json = '[{"nome":"Jo\u00e3o","Idade":20},{"nome":"Glaucio","Idade":25}]';

	$data = json_decode($json, true);
	var_dump($data);
 ?>