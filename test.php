<?php

class ReverseTest extends PHPUnit_Framework_TestCase
{
	public function testNull()
	{
		$this->assertEquals(reverse_and_replace(null), '');
		$this->assertEquals(reverse_and_replace(''), '');
	}

	public function testReverse()
	{
		$this->assertEquals(reverse_and_replace('Hello World!'), '!dlrW llH');
		$this->assertEquals(reverse_and_replace('bcdfg'), 'gfdcb');
		$this->assertEquals(reverse_and_replace('aeiou'), '');
	}
}
