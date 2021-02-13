<?php

$idade = 17;
$acompanhado = true;

echo "Você só pode entrar se tiver a partir de 18 anos, ou a partir de 16 anos se estiver acompanhado:<br/><br/>";

if ($idade >= 18){
	echo "Você tem $idade anos. Pode entrar sozinho";
}else if($idade >= 16 && $acompanhado == true){
	echo "Você tem $idade anos. Pode entrar, por estar acompanhado(a)";
}else{
	echo "Você tem $idade anos. Não esta acompanhado. Não pode entrar";
}

echo "<br/><br/> ADEUS!!!";




?>