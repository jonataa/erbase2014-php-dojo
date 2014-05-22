<?php

class NumeroBonitoTest extends PHPUnit_Framework_TestCase
{

	public function testIsBonito()
	{
		$nb = new NumeroBonito;
		$this->assertTrue($nb->isBonito(14063));
	}

	public function testQuantidadeNumeros()
	{
		$nb = new NumeroBonito;
		$this->assertCount(3047, $nb->getBonitos(range(14063, 24779)));
	}

}