<?php

namespace App\Tests\AppBundle\Controller;

use App\Controller\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function testPrintsFizzBuzz()
    {
        $fizz_buzz = new FizzBuzz();
        $this->assertSame(true, $fizz_buzz->isFizzBuzz(15));
    }

    public function testFizz()
    {
        $fizz_buzz = new FizzBuzz();
        $this->assertSame(true, $fizz_buzz->isFizz(3));
    }

    public function testBuzz()
    {
        $fizz_buzz = new FizzBuzz();
        $this->assertSame(true, $fizz_buzz->isBuzz(5));
    }
}