<?php

class JokenpoTest extends PHPUnit_Framework_TestCase
{

	public function testPedraVsPedra()
	{
		$j = new Jokenpo;
		$this->assertEquals(Jokenpo::EMPATE, $j->jogar(Jokenpo::PEDRA, Jokenpo::PEDRA));
	}

	public function testPedraVsTesoura()
	{
		$j = new Jokenpo;
		$this->assertEquals(Jokenpo::TESOURA, $j->jogar(Jokenpo::PEDRA, Jokenpo::TESOURA));
	}

	public function testTesouraVsTesoura()
	{
		$j = new Jokenpo;
		$this->assertEquals(Jokenpo::EMPATE, $j->jogar(Jokenpo::TESOURA, Jokenpo::TESOURA));
	}

	public function testTesouraVsPapel()
	{
		$j = new Jokenpo;
		$this->assertEquals(Jokenpo::TESOURA, $j->jogar(Jokenpo::TESOURA, Jokenpo::PAPEL));
	}

	public function testPapelVsPapel()
	{
		$j = new Jokenpo;
		$this->assertEquals(Jokenpo::EMPATE, $j->jogar(Jokenpo::PAPEL, Jokenpo::PAPEL));
	}

}