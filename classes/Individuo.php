<?php

    // DESAFIO IMC - Nível I
    /*
     * Temos quer criar uma classe Individuo que contém as propriedades:
     * PESO e ALTURA
     * 
     * Depois precisaremos retornar o IMC desse Individuo, que é calculado
     * através do PESO / (ALTURA * ALTURA) * 10000
     * 
     * Obs. multiplicamos por dez mil pois esperamos receber
     * o peso em KG e altura em CM.
     * 
     * Retornar NOME, PESO, ALTURA e IMC de cada objeto instanciado.
    */

    // Estamos criando uma classe. Para isso, precisamos usar a keyword class e, em seguida, o nome da classe. Lembrando que as classes, por convenção, começam cada palavra em CaixaAlta.
    class Individuo {

        // Criando uma propriedades públicas
        public $nome;
        public $peso;
        public $altura;
        
        // Criando o método construct com 3 parâmetros 
        public function __construct($nomeRecebido, $pesoRecebido, $alturaRecebida) {

            // Atrelando o valor dos parâmetros recebidos às propriedades
            $this->nome = $nomeRecebido;
            $this->peso = $pesoRecebido;
            $this->altura = $alturaRecebida;

            function calcularImc($peso, $altura){
                // Retorna o resultado do cáulco considerando o peso recebido em kg e a altura em cm.
                return ( $peso / ($altura * $altura) * 10000 );
            }
            echo "O IMC de " . $this->nome . " é " . calcularImc($this->peso, $this->altura) . "<br/><hr/><br/>";

        }
    }

?>