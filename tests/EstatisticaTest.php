<?php

class EstatisticaTest extends PHPUnit_Framework_TestCase
{

	public $sequencia = array(6, 9, 15, -2, 92, 11);

	public function testValorMinimo()
	{
		$e = new Estatistica($this->sequencia);
		$this->assertEquals(-2, $e->getMinino());
	}

	public function testValorMaximo()
	{
		$e = new Estatistica($this->sequencia);
		$this->assertEquals(92, $e->getMaximo());
	}

	public function testContaSequencia()
	{
		$e = new Estatistica($this->sequencia);
		$this->assertCount(6, $e->getSequencia());
	}

	public function testValorMedio()
	{
		$e = new Estatistica($this->sequencia);
		$this->assertEquals(21.833333333333, $e->getValorMedio());
	}

}