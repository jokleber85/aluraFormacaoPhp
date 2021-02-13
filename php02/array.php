<?php
     //$idadeList = array(01, 02, 03, 04, 05);
     $idadeList = [1, 2, 3, 4, 5];
     
     $selectIdade = $idadeList[0];
     echo "SelectIdade: ".$selectIdade."<br>";

     for ($i = 0; $i < count($idadeList); $i++){
          echo $idadeList[$i]."<br>";
     }
?>