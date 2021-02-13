<?php

    class Conta{
        //private string $cpfTitular;
        //private string $nomeTitular;
        private $titular;
        private float $saldo; 
        public static $numeroDeContas = 0;

        public function __construct(/*string $cpfTitular, string $nomeTitular*/ Titular $titular){
            //$this->cpfTitular = $cpfTitular;
            //$this->validaNomeTitular($nomeTitular);
            //$this->nomeTitular = $nomeTitular; 
            $this->titular = $titular;
            $this->saldo = 0; 

            self::$numeroDeContas++;  
        }

        public function __destruct(){
            self::$numeroDeContas--;
        } 

        public function sacar(float $valorAsacar): void{
            if ($valorAsacar > $this->saldo){
                echo "Saldo Indisponível";
                return;
            }
            $this->saldo -= $valorAsacar;
        }    
        
        public function depositar(float $valorAdepositar): void{
            if ($valorAdepositar < 0){
                echo "Valor inválido para depósito";
            }
            
            $this->saldo += $valorAdepositar; 
        }

        public function transferir(float $valorAtransferir, Conta $contaDestino): void{
            if($valorAtransferir > $this->saldo){
                echo 'Saldo Indiponível';
            }
           
            $this->sacar($valorAtransferir);
            $contaDestino->depositar($valorAtransferir);
        }


        public function recuperarSaldo(): float{
            return $this->saldo;
        }
        
        public static function recuperaNumeroContas() :int{
            return self::$numeroDeContas; 
        }

        public function recuperarCpfTitular(): string{
            //return $this->cpfTitular; 
            return $this->titular->recuperaCpf();
        }

        public function recuperarNomeTitular(): string{
            //return $this->nomeTitular;
            return $this->titular->recuperaNome();
        }

    /*  public function definirCpfTitular(string $cpfTitular): void{
            $this->cpfTitular = $cpfTitular;
        }

        public function definirNomeTitular(string $nomeTitular): void{
            $this->nomeTitular = $nomeTitular;
        }

        public function validaNomeTitular(string $nomeTitular): void{
            if (strlen($nomeTitular) < 5 ){
                echo "Nome inválido para cadastro";
                exit();
            }
        }
    */   
    }
?>