<?php

    // __CONSTRUCT e __DESTRUCT
    // Métodos mágicos, executados no início e no final do ciclo de vida de um objeto - respectivamente.

    // Estamos criando uma classe. Para isso, precisamos usar a keyword class e, em seguida, o nome da classe. Lembrando que as classes, por convenção, começam cada palavra em CaixaAlta.
    class Professor {

        // O método 'mágico' construct (começa com dois underlines) será executado tão o objeto for instanciado. Ou seja, quando der um 'new Professor()' o que estiver declarado dentro dele já será executado.
        public function __construct() {
            
            // Declarando um método dentro do método mágico construct
            function ensinar() {
                echo "O professor está ensinando<br/>";
            }
            // Executando o método dentro do construct, de forma que será não só declarado mas também executado assim que um novo objeto for instanciado.
            ensinar();

        }

        public function __destruct() {
            
            function finalizarAula() {
                echo "<br/>O professor vai preparar mais aulas! Fim dessa aula!<br/>";
            }
            finalizarAula();

        }

    }

?>