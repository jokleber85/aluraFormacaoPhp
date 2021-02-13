<?php
        function exibeMensagem(string $mensagem){ // sub-rotina com parâmetro
            echo $mensagem. "<br>";
        }
    
        function sacar(array $conta, float $valorASacar): array{
            if ($valorASacar > $conta['saldo']){
                exibeMensagem("Você não pode Sacar");
            }else{
                $conta['saldo'] -= $valorASacar;     
            }
    
            return $conta;
        }
    
        function depositar(array $conta, float $valorADepositar): array{
            if ($valorADepositar < 0){
                exibeMensagem("Valor inválido para depósito");
            }else{
                $conta['saldo'] += $valorADepositar;
            }
    
            return $conta;
        }

        function letraMaiuscula(&$conta){
            $conta['titular'] = strtoupper($conta['titular']);
        }

        function exibeConta(array $conta){
            //echo "<li>Titular: $conta[titular]. Saldo: {$conta['saldo']}</li>";
            
            ['titular' => $titular, 'saldo' => $saldo] = $conta;
            echo "<li>Titular: $titular. Saldo: $saldo</li>";

        }
?>