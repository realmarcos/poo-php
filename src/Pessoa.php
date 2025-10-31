<?php

//* 1° Abstração: classe pai PESSOA, demais classes ESTUDANTE, PROFESSOR, SERVIDOR, VISITANTE

//* Array para armazenar objetos do tipo Pessoa
$pessoaIFTO = [];

class Pessoa
{
    //* 2° Encapsulamento: atributos com visibilidade public e protected
    public $nome;
    protected $idade;

    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function apresentar()
    {
        echo "Olá, meu nome é " . $this->nome . " e tenho " . $this->idade . " anos.";
    }
}

//* 3° Herança: classe Estudante herda atributos e métodos da classe Pessoa
class Estudante extends Pessoa
{
    private $matricula;

    public function __construct($nome, $idade, $matricula)
    {
        parent::__construct($nome, $idade); //* Aplica o construtor da classe pai
        $this->matricula = $matricula;
    }

    public function exibirMatricula()
    {
        echo "Minha matrícula é: " . $this->matricula;
    }

    //* 4° Polimorfismo: sobrescrita do método apresentar
    public function apresentar()
    {
        echo "Olá, sou o estudante " . $this->nome . ", tenho " . $this->idade . ".";
    }
}


function adicionarPessoa($pessoa)
{
    global $pessoaIFTO;
    $pessoaIFTO[] = $pessoa;
}

$fulano1 = new Estudante("Ana", 20, "2023001");
$fulano2 = new Estudante("João", 30, "2023002");

adicionarPessoa($fulano1);
adicionarPessoa($fulano2);

echo "Lista de Pessoas no IFTO:";
foreach ($pessoaIFTO as $pessoa) {
    echo "<br>";
    echo $pessoa->nome;
}
