<?php

echo "Numeros Impares <br/>";
$numLimite = 100;

for($i=1; $i <= $numLimite; $i++){
	if($i % 2 != 0){
		echo "> $i <br/>";
	}
}

echo "<br/><br/> Tabuada<br/>";

$numero = 7;

for ($i=1; $i <= 10; $i++){
	$resultado = $numero * $i;
	echo "> $numero X $i = $resultado<br/>";
}

echo "<br/><br> Calculo do IMC<br/>";

$peso = 50;
$altura = 1.74;
$imc = $peso / ($altura * $altura);

if ($imc <= 18.5){
	echo "Magro, precisa comer";
}else if($imc >= 18.6 && $imc <= 24.9){
	echo "Peso ideal";
}else{
	echo "Gordo, precisa parar de comer";
}

?>