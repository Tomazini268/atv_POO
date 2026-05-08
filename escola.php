<?php

// Classe base
class Pessoa {
    private $idade; // encapsulamento

    protected $nome;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function falar() {
        echo "{$this->nome} está conversando.";
    }
}

// Classe Aluno
class Aluno extends Pessoa {
    public function falar() {
        echo "{$this->nome} fala: Estou estudando para tirar notas boas e me formar!";
    }
}

// Classe Professor
class Professor extends Pessoa {
    public function falar() {
        echo "{$this->nome} fala: Hoje iremos aprender algo importante no ramo de trabalho.";
    }
}

// Classe Diretor
class Diretor extends Pessoa {
    public function falar() {
        echo "{$this->nome} fala: Meu objetivo é manter a escola organizada e eficiente.";
    }
}

// Classe Funcionário
class Funcionario extends Pessoa {
    public function falar() {
        echo "{$this->nome} fala: Estou trabalhando para ajudar no funcionamento da escola.";
    }
}

// Teste
$pessoas = [
    new Aluno("João", 16),
    new Aluno("Maria", 17),
    new Professor("Carlos", 40),
    new Diretor("Ana", 50),
    new Funcionario("Pedro", 35)
];

// Executando
foreach ($pessoas as $pessoa) {
    $pessoa->falar();
    echo "Tenho: " . $pessoa->getIdade() . " anos.";
}

?>