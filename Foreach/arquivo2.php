<!DOCTYPE html>
<html>
<head>
	<title>Arquivo 2</title>
</head>
<body>
	<form>
		<input type="text" name="nomes">
		<input type="date" name="nasc">
		<input type="submit" name="Ok">
	</form>

	<?php 

		if (isset($_GET)) {
			foreach ($_GET as $key => $value) {
				echo "Nome do campo: " . $key . "<br>";
				echo "Valor do campo: " . $value;
				echo "<hr>";
			}	
		}


	 ?>
</body>
</html>