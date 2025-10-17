

<?php


class Caixa
{
    public $saldo;
    public $titular;

    public function __construct($titular)
    {
        $this->saldo = 0;
        $this->titular = $titular;
    }

    public function EmitirExtrato()
    {
        echo "O extrato do titular " . $this->titular . " é de R$" . $this->saldo;
        echo "<br>";
    }

    public function Depositar($valor)
    {
        if ($valor <= 0) {
            echo "Valor de depósito inválido";
        } else {
            $this->saldo += $valor;
            $this->EmitirExtrato();
            echo "<br>";
        }
    }

    public function Sacar($valor)
    {
        if ($valor > $this->saldo) {
            echo "Seu saldo é insuficiente!";
            echo "<br>";
        } else {
            $this->saldo -= $valor;
            $this->EmitirExtrato();
            echo "<br>";
        }
    }
}

$minhaConta = new Caixa("Marcos");

$minhaConta->EmitirExtrato();
$minhaConta->Depositar(1000);
$minhaConta->Sacar(500);

?>