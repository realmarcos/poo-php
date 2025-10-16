<?php


class Carros
{
    public $cor;
    public $marca;
    public $tipo;
    public $velocidade;

    public function __construct($cor, $marca, $tipo)
    {
        $this->cor = $cor;
        $this->marca = $marca;
        $this->tipo = $tipo;
        $this->velocidade = 0;
    }

    public function Ligar()
    {
        echo "Seu carro está ligado!";
    }

    public function Acelerar($velocidade)
    {
        $this->velocidade = $this->velocidade + $velocidade;
        echo "Carro está a " . $this->velocidade . " Km/h.";
    }

    public function Frear($velocidade)
    {
        $this->velocidade = $this->velocidade - $velocidade;
        echo "Agora seu carro está a " . $this->velocidade . " Km/h.";
    }
}

$carroDoJoao = new Carros("verde", "Fiat", "Sedan");

$carroDoJoao->Ligar();

$carroDoJoao->Acelerar(40);
$carroDoJoao->Acelerar(40);

$carroDoJoao->Frear(20);

?>