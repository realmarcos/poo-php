

<?php
use PHPUnit\Framework\TestCase;
use Caixa;

final class CaixaTest extends TestCase
{

    // retornar o saldo esperado
    public function testEmitirExtrato(): void
    {
        $meuCaixa = new Caixa("Fulano");

        $this->assertSame(0, $meuCaixa->EmitirExtrato());
    }

    // verificar o saldo antes e depois do depósito
    public function testDepositar(): void {
        $meuCaixa = new Caixa("Fulano");

        $this->assertSame(0, $meuCaixa->EmitirExtrato());

        $meuCaixa->Depositar(100);

        $this->assertSame(100, $meuCaixa->EmitirExtrato());
    }
}