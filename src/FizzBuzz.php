<?php

class FizzBuzz
{

	public function isFizz($number)
	{	return $number % 3 == 0;
	}

	public function isBuzz($number)
	{	return $number % 5 == 0;
	}

	public function isFizzBuzz($number)
	{	return ($number % 3 == 0) && ($number % 5 == 0);
	}

	public function getList($min = 1, $max = 100)
	{	return range($min, $max);
	}

}