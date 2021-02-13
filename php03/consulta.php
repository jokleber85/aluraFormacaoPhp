<?php
    /*require_once 'src/conta0.php';

    $conta = criarConta('123.456.789-10', 'Vinicius Dias', 500);
    var_dump($conta);*/

    require_once 'src/Conta.php';

    $primeiraConta = new Conta();
    //var_dump($primeiraConta);
    //echo "<br>";

    $primeiraConta->cpfTitular = '123.456.789-00';
    //var_dump($primeiraConta);
    //echo "<br>";

    $primeiraConta->nomeTitular = 'Vinicius Dias';
    //var_dump($primeiraConta);
    //echo "<br><br>";

    $primeiraConta->saldo = 300;
    var_dump($primeiraConta);
    //echo $primeiraConta->saldo;
    echo "<br>";
    
    $segundaConta = new Conta();
    $segundaConta->cpfTitular = '987.654.321.00';
    $segundaConta->nomeTitular = 'Patrícia';
    $segundaConta->saldo = 0;
    
    //var_dump($segundaConta);

    $primeiraConta->transferir(300, $segundaConta);
    echo $primeiraConta->saldo.'<br>';
    echo $segundaConta->saldo;
    

?>