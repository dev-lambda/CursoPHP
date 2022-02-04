<?php 

	function soma( int ... $valores):float{
		return array_sum($valores);
	}

	echo soma(2,2);
	echo "<br>";
	echo soma(25,33);
	echo "<br>";
	echo soma(2.5,2.4);
	echo "<br>";

 ?>