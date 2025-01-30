<?php 

require_once("Veiculos.php");

Class Moto extends Veiculos{
    private $marca;
    private $modelo;
    private $cilindrada;
    private $potencia;
    private $cor;
    private $ano;

    

    public function __toString()
    {
        
        return "O modelo: " . $this->modelo . " da marca: " . $this->marca . "com " . $this->cilindrada. " cilindradas" . " com potencia: " . $this->potencia . " de cor: " . $this->cor. " de potência: " . $this->ano;
        
    }

    /**
     * Get the value of marca
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     */
    public function setMarca($marca): self
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get the value of modelo
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     */
    public function setModelo($modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get the value of potencia
     */
    public function getPotencia()
    {
        return $this->potencia;
    }

    /**
     * Set the value of potencia
     */
    public function setPotencia($potencia): self
    {
        $this->potencia = $potencia;

        return $this;
    }

    /**
     * Get the value of cor
     */
    public function getCor()
    {
        return $this->cor;
    }

    /**
     * Set the value of cor
     */
    public function setCor($cor): self
    {
        $this->cor = $cor;

        return $this;
    }

    /**
     * Get the value of ano
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set the value of ano
     */
    public function setAno($ano): self
    {
        $this->ano = $ano;

        return $this;
    }
}
