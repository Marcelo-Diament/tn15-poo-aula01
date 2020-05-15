<?php

    // PROPRIEDADES
    echo "<h2>PROPRIEDADES</h2>";
    // Chamando/trazendo o arquivo da classe para que possamos instanciar um objeto a partir dela.
    require_once("./classes/PessoaX.php");

    // Vamos instanciar uma pessoaX (objeto) a partir da classe PessoaX:
    $fulano = new PessoaX();
    $fulano->nome = "Fulano";
    $fulano->sobrenome = "da Silva";
    echo $fulano->nome . " " . $fulano->sobrenome;
    echo "<br/><hr/><br/>";

    // Vamos instanciar uma nova pessoaX (objeto) a partir da classe PessoaX:
    $beltrano = new PessoaX();
    $beltrano->nome = "Beltrano";
    $beltrano->sobrenome = "da Silva";
    echo $beltrano->nome . " " . $beltrano->sobrenome;
    echo "<br/><hr/><br/>";

    // Vamos instanciar uma última pessoaX (objeto) a partir da classe PessoaX:
    $ciclano = new PessoaX();
    $ciclano->nome = "Ciclano";
    $ciclano->sobrenome = "da Silva";
    echo $ciclano->nome . " " . $ciclano->sobrenome;
    echo "<br/><hr/><br/>";

?>