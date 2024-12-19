<?php

abstract class Cargo{
    protected $nome;
    
    public abstract function getSalario();
    public abstract function getCargo();

    public function getSalarioReais() {
        $salario = $this->getSalario();
        return "R$ " . number_format($salario, 2, ',', '.');
    }

    public function SalarioSaida(){
        $resultado = "\nFUNCIONARIO ". $this->nome . " COM CARGO " . $this->getCargo() . ", TEM SALARIO DE " . $this->getSalarioReais();
        return $resultado;
    }

//gets

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }
}