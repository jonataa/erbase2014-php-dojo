<?php

class Estatistica
{

	private $sequencia;

	public function __construct(Array $sequencia)
	{	$this->sequencia = $sequencia;
	}

	public function getMinino()
	{	return min($this->sequencia);
	}

	public function getMaximo()
	{	return max($this->sequencia);
	}

	public function getSequencia()
	{	return $this->sequencia;
	}

	public function getValorMedio()
	{	return array_sum($this->sequencia)/count($this->sequencia);
	}

}