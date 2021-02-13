<?php
    $string = "Testes de integração com PHP";
    
    //echo strlen($string)."<br>";
    echo mb_strlen($string)."<br>";
    
    //echo strtoupper($string);
    echo mb_strtoupper($string);

    //echo strtolower($string);
    echo mb_strtolower($string);

    echo mb_convert_case($string, MB_CASE_TITLE); // função para que todas as palavras da string fiquem todas maiúsculas
?>