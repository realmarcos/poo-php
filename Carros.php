<?php

class Carro
{
    // ATRIBUTOS
    public $cor;
    public $marca;
    public $tipo;
    public $km;
    public $velocidadeAtual;

    public function __construct($cor, $marca, $tipo, $km) // CONSTRUTOR (EXECUTA AO INSTÂNCIAR UM NOVO OBJETO)
    {
        $this->cor = $cor;
        $this->marca = $marca;
        $this->tipo = $tipo;
        $this->km = $km;
        $this->velocidadeAtual = 0;
    }

    // MÉTODOS
    public function ligar()    {
        echo "Seu carro está ligado!";
    }

    public function acelerar($velocidade) {
        $this->velocidadeAtual = $this->velocidadeAtual + $velocidade;
        echo "Aceleramos até a velocidade de " . $this->velocidadeAtual . " Km/h";
    }

    public function frear($velocidade) {
        $this->velocidadeAtual = $this->velocidadeAtual - $velocidade;
        echo "Carro reduzindo até a velocidade " . $this->velocidadeAtual . " Km/h";
    }
}

$MeuCarro = new Carro("Cinza", "Fiat", "Sedan", 32000); // Criando objeto carro

$MeuCarro->ligar(); // executando método
echo "<br>";
$MeuCarro->acelerar(50);
echo "<br>";
$MeuCarro->acelerar(20);
echo "<br>";
$MeuCarro->frear(40);

echo $MeuCarro->cor;

echo "<br>";
 


?>
