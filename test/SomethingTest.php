<?php

class SomethingTest extends \PHPUnit_Framework_TestCase
{
	public function testWhatEver()
	{
		$something = new Something;

		$this->assertSame("WhatEver", $something->whatever());
	}
}
