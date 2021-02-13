<?php
  /*$conta1 = ['titular' => 'Vinicius', 'saldo' => 1000];
    $conta2 = ['titular' => 'Maria', 'saldo' => 10000];
    $conta3 = ['titular' => 'Alberto', 'saldo' => 300];

    $contaCorrente = [$conta1, $conta2, $conta3];

    foreach ($contaCorrente as $conta){
        echo $conta['titular']."<br>";
    }*/

    $contaCorrente = [12345678910 => ['titular' => 'Vinicius', 'saldo' => 1000], 12345678911 => ['titular' => 'Maria', 'saldo' => 10000], 12345678912 => ['titular' => 'Alberto', 'saldo' => 300]];

    foreach ($contaCorrente as $cpf => $conta){
        //echo $contaCorrente[$cpf]['titular'];
        //echo "CPF: ".$cpf." - Titular: ".$conta['titular']."<br>";
    }

    $contaCorrente[12345678913] = ['titular' => 'Cláudia', 'saldo' => 2000];

    foreach ($contaCorrente as $cpf => $conta){
        //echo $contaCorrente[$cpf]['titular'];
        echo $conta['titular']."<br>";
    }

    //Add um item a lista
    //$lista[] = $item;
    //$lista[$chave] = $item;
?>