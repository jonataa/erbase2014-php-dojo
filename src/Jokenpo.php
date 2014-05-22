<?php

class Jokenpo
{
	const PEDRA = 1;	
	const TESOURA = 3;
	const PAPEL = 2;
	const EMPATE = 0;

	public function jogar($a, $b)
	{
		if ($a === $b)
			return self::EMPATE;	
		
		return $a > $b ? $a : $b;			
	}

}