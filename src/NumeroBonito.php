<?php

class NumeroBonito
{
	public function isBonito($numero)
	{	return ! strpos((string) $numero, '9') && strpos((string) $numero, '4');
	}

	public function getBonitos($numeros)
	{	return array_filter($numeros, 'NumeroBonito::isBonito');
	}
}