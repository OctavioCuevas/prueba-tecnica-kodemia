<?php 
	$instrucciones = "
	Dada una matriz cuadrada de (n x n) elementos...<br>
	Crea una función que sume las diagonales de la matriz e imprima y retorne el valor absoluto de la diferencia de la suma de ambas diagonales, es decir:<br><br>
	x = | diagonalAscendente = diagonalDescendente |<br><br>
	donde<br><br>
	diagonalAscendente = la sumatoria de todos los elementos en la diagonal ascendente<br>
	diagonalDescendente = la sumatoria de todos los elementos en la diagonal descendente<br><br>
	Ejemplo:<br><br>
	si tenemos la matriz<br><br>
	const matriz = [<br>
		[ 1, 2, -1 ],<br>
		[ 6, 5, 4 ],<br>
		[ -9, 8, 9 ],<br>
	]<br><br>
	diagonalAscendente = -9 + 5 + (-1) = -5<br>
	diagonalDescendente = 1 + 5 + 9 = 15<br><br>
	x = | (-5) - (15) |<br>
	x = | -20 |<br>
	x = 20<br>
	";

	echo $instrucciones;

	echo "***************** Respuesta *****************<br>";

	$datos = [
    [1, 2, -1],
    [6, 5, 4],
    [-9, 8, 9]
	];
	echo "Datos:<br>";
	print_r($datos);
	echo "<br>";
	$indxAs = 2;
	$indxDes = 0;
	$diagonalAscendente = array();
	$diagonalDescendente = array();
	for ($i=0; $i < count($datos); $i++) {
		$renglon = $datos[$i];
		for ($j=0; $j < count($renglon); $j++) {
			if ($j == $indxAs) {
				array_push($diagonalAscendente, $renglon[$j]);
			}
			if ($j == $indxDes) {
				array_push($diagonalDescendente, $renglon[$j]);
			}
		}
		$indxAs--;
		$indxDes++;
	}
	
	$sumAs = sumar_arreglo("Diagonal Ascendente", $diagonalAscendente);

	$sumDes = sumar_arreglo("Diagonal Descendente", $diagonalDescendente);

	echo "x = | ($sumAs) - ($sumDes) |<br>";
	$x = $sumAs - $sumDes;
	echo "x = $x<br>";
	$x = abs($x);
	echo 'x = ' . abs($x);

	function sumar_arreglo($nombre, $arreglo) {
		echo "$nombre = ";
		$suma = 0;
		for ($i=0; $i < count($arreglo); $i++) {
			echo ($i == 0 ? '' : ' + ') . ($arreglo[$i] < 0 ? '(' . $arreglo[$i] . ')' : $arreglo[$i]);
			$suma += $arreglo[$i];
		}
		echo " = $suma<br>";
		return $suma;
	}
?>
