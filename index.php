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


    // MÉTODOS
    echo "<h2>MÉTODOS</h2>";

    // Chamando/trazendo o arquivo da classe para que possamos instanciar um objeto a partir dela.
    require_once("./classes/Aluno.php");

    // Vamos instanciar um aluno (objeto) a partir da classe Aluno:
    $rodrigoMachado = new Aluno();
    $rodrigoMachado->nome = "Rodrigo Machado";
    echo "Aluno " . $rodrigoMachado->nome . "<br/>";
    $rodrigoMachado->estudar();
    echo  "<br/>" . $rodrigoMachado->descansar() . "<br/>";
    echo "<br/><hr/><br/>";

    // Vamos instanciar um aluno (objeto) a partir da classe Aluno:
    $luigiProfeti = new Aluno();
    $luigiProfeti->nome = "Luigi Profeti";
    echo "Aluno " . $luigiProfeti->nome . "<br/>";
    $luigiProfeti->estudar();
    echo  "<br/>" . $luigiProfeti->descansar() . "<br/>";
    echo "<br/><hr/><br/>";


    // $this
    echo "<h2>\$this</h2>";

    // Chamando/trazendo o arquivo da classe para que possamos instanciar um objeto a partir dela.
    require_once("./classes/Escola.php");

    // Vamos instanciar uma Escola (objeto) a partir da classe Escola:
    $dhsp = new Escola();
    $dhsp->nomeDaEscola = "Digital House SP";
    $dhsp->cidade = "São Paulo";
    $dhsp->localizar();
    echo "<br/><hr/><br/>";

    // Vamos instanciar uma Escola (objeto) a partir da classe Escola:
    $dhny = new Escola();
    $dhny->nomeDaEscola = "Digital House NY";
    $dhny->cidade = "New York";
    $dhny->localizar();
    echo "<br/><hr/><br/>";

?>