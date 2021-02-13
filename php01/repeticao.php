<?php
	$contador = 1;
	while ($contador <= 15){
		echo "# $contador <br/>";
		$contador = $contador + 1;	
	}

	for ($i=1; $i <= 15; $i++){
		if ($i !== 13){
			echo "# $i <br/>";
			//continue;
			//break;
		}
	}
?>