<?php

class Aluno{

    private string $nome;
    private int $idade;
    private Turma $turma;

    //tostring

    public function __toString()
    {
            return "Aluno: ".$this->nome. "\nIdade: ".$this->idade."\n";
    }
    //gets and set

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }

    public function setIdade(int $idade): self
    {
        $this->idade = $idade;

        return $this;
    }


    public function getTurma(): Turma
    {
        return $this->turma;
    }


    public function setTurma(Turma $turma): self
    {
        $this->turma = $turma;

        return $this;
    }
}