<?php

 class Fabricante{

    private string $nome;
    private string $sigla;



    public function __toString()
    {
        return $this->nome.",".$this->sigla."\n";
    }
    


    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getSigla(): string
    {
        return $this->sigla;
    }

    public function setSigla(string $sigla): self
    {
        $this->sigla = $sigla;

        return $this;
    }
 }