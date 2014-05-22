<?php

class CalculadoraTest extends PHPUnit_Framework_TestCase
{

	public function testSoma()
	{
		$calc = new Calculadora;
		$this->assertEquals($calc->soma(1, 1), 2);
	}	

	public function testMultiplicacao()
	{
		$calc = new Calculadora;
		$this->assertEquals($calc->multi(2, 2), 4);
	}

	public function testDivisao()
	{
		$calc = new Calculadora;
		$this->assertEquals($calc->divisao(10, 2), 5);
	}

	public function testSubtracao()
	{
		$calc = new Calculadora;
		$this->assertEquals($calc->subtrai(30, 20), 10);
	}


}