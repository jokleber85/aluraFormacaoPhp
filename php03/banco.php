<?php
    require_once 'src/Conta.php';
    require_once 'src/Titular.php';
    require_once 'src/Cpf.php';

    $primeiraConta = new Conta(new Titular(new CPF("123.456.789-10"), "John Kleber"));
    $primeiraConta->depositar(500);
    $primeiraConta->sacar(300); // ok de fazer
    echo var_dump($primeiraConta). "<br><br>";

//  $primeiraConta->saldo -=300; // proibido de fazer pelo método private
//  $primeiraConta->definirCpfTitular("123.456.789-10");
    
    echo $primeiraConta->recuperarCpfTitular()."<br>";
    echo $primeiraConta->recuperarNomeTitular()."<br>";
    echo $primeiraConta->recuperarSaldo()."<br><br><br>";
    
    $segundaConta = new Conta(new Titular(new CPF("123.456.789-20"), "Patrícia"));
    
    $outra = new Conta(new Titular(new CPF("123"),"Fulano"));
    echo Conta::$numeroDeContas."<br>";

?>