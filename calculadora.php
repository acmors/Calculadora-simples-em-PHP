<?php
$n1 = 0;
$n2 = 0;
$result = 0;
$calcular = 'somar';

if (isset($_GET["n1"], $_GET["n2"], $_GET["calcular"])){
	$n1 = $_GET['n1'];
	$n2 = $_GET['n2'];
	$calcular = $_GET['calcular'];

	switch($calcular){
		case 'somar':
			$result = $n1 + $n2;
		break;

		case 'subtrair':
			$result = $n1 - $n2;
		break;	

		case 'multiplicar':
			$result = $n1 * $n2;
		break;

		case 'dividir':
			$result = $n1 / $n2;
		break;

		default: echo 'conta inválida';
	}
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calculator</title>
</head>

<body>
	<form>
		<h3>Número 1: </h3>
		<input type="number" name="n1" <?= $n1 ?> ><br>
		
		<h3>Número 2: </h3>
		<input type="number" name="n2" <?= $n2 ?>><br>

		<select name="calcular">
			<option value="somar">Somar</option>
			<option value="subtrair">Subtrair</option>
			<option value="multiplicar">Multiplicar</option>
			<option value="dividir">Dividir</option>
		</select>
		<br>
		<br>
		<br>
		<input type="submit" value="Calcular">

	<br>
	<br>
	<br>
	<p>O resultado é: <?= $result ?></p>
	</form>

</body>

</html>