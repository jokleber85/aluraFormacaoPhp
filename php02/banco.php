<?php
  /*function soma($num1){
        return $num1 + 2; 
    };

    $resultado = soma(10);
    echo "Resultado: ".$resultado;

    exit();*/
    
    //include 'funcoes.php';

    require_once 'funcoes.php';

    $contaCorrente = [12345678910 => ['titular' => 'Vinicius', 'saldo' => 1000], 12345678911 => ['titular' => 'Maria', 'saldo' => 10000], 12345678912 => ['titular' => 'Alberto', 'saldo' => 300]];

    $contaCorrente[12345678910] = sacar($contaCorrente[12345678910], 500); //saque 1000 - 500
    
    $contaCorrente[12345678911] = depositar($contaCorrente[12345678911], 300); //depósito 10000 + 300

    letraMaiuscula($contaCorrente[12345678910]);

    //unset($contaCorrente[12345678910]);

/*  foreach ($contaCorrente as $cpf => $conta){
        //echo $contaCorrente[$cpf]['titular'];
        
        //exibeMensagem("CPF: ".$cpf." - Titular: ".$conta['saldo']);
        //exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}"); // exibição complexo
        
        //[list ('titular' => $titular, 'saldo' => $saldo)] = $conta;
        ['titular' => $titular, 'saldo' => $saldo] = $conta;
        exibeMensagem("$cpf $titular $saldo");
    }*/

    echo "<ul>";
    foreach($contaCorrente as $cpf => $conta){
        exibeConta($conta);
    }
    echo "</ul>";

?>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title></title>
        </head>
        <body>
            <h1>Contas Correntes</h1>
             <dl>
                <?php foreach($contaCorrente as $cpf => $conta){ ?>
                    <dt><h3><?= $conta['titular']; ?> - <?= $cpf;?></h3></dt>
                    <dd>Saldo: <?= $conta['saldo'];?></dd>
                <?php } ?>
             </dl>   

             <h1>Rodar servidor local</h1>
             <ul>
                <li>Abrir o promp comando</li>
                <li>Caminhar até a pasta contendo arquivos .php</li>
                <li>php -S localhost:8080</li>
             </ul>
        </body>
</html>