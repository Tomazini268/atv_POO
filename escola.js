// Classe base
class Pessoa {
    #idade; // atributo privado (encapsulamento)

    constructor(nome, idade) {
        this.nome = nome;
        this.#idade = idade;
    }

    getIdade() {
        return this.#idade;
    }

    falar() {
        console.log(`${this.nome} está conversando.`);
    }
}

// Classe Aluno
class Aluno extends Pessoa {
    falar() {
        console.log(`${this.nome} diz: Estou estudando para tirar notas excelentes e me formar!`);
    }
}

// Classe Professor
class Professor extends Pessoa {
    falar() {
        console.log(`${this.nome} diz: Hoje vamos aprender algo novo e importante.`);
    }
}

// Classe Diretor
class Diretor extends Pessoa {
    falar() {
        console.log(`${this.nome} diz: Meu objetivo é manter a escola organizada e funcionando.`);
    }
}

// Classe Funcionário
class Funcionario extends Pessoa {
    falar() {
        console.log(`${this.nome} diz: Estou trabalhando para ajudar no funcionamento da escola.`);
    }
}

// Teste de herança e polimorfismo
const pessoas = [
    new Aluno("João", 16),
    new Aluno("Maria", 17),
    new Professor("Carlos", 40),
    new Diretor("Ana", 50),
    new Funcionario("Pedro", 35)
];

// Executando
pessoas.forEach(pessoa => {
    pessoa.falar();
    console.log(`Tenho: ${pessoa.getIdade()} anos`);
    
});