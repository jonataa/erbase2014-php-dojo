<?php

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{	

	public function testFizz()
	{		
		$fizzBuzz = new FizzBuzz();
		$this->assertTrue($fizzBuzz->isFizz(3));
		$this->assertFalse($fizzBuzz->isFizz(5));
	}

	public function testBuzz()
	{
		$fizzBuzz = new FizzBuzz();
		$this->assertTrue($fizzBuzz->isBuzz(5));
		$this->assertFalse($fizzBuzz->isBuzz(3));
	}

	public function testFizzBuzz()
	{
		$fizzBuzz = new FizzBuzz();
		$this->assertTrue($fizzBuzz->isFizzBuzz(15));
		$this->assertFalse($fizzBuzz->isFizzBuzz(3));
		$this->assertFalse($fizzBuzz->isFizzBuzz(5));
	}	

}