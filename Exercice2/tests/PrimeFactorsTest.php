<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class PrimeFactorsTest extends TestCase
{
    public function testPrime() : void
    {
        $this->assertEquals(true, PrimeFactors::isPrime(1));
        $this->assertEquals(true, PrimeFactors::isPrime(3));
        $this->assertEquals(true, PrimeFactors::isPrime(5));
    }

    public function testNonPrime() : void
    {
        $this->assertEquals(false, PrimeFactors::isPrime(6));
    }

    public function test1()
    {
        $this->assertEquals([], PrimeFactors::generatePrimeFactors(1));
    }

    public function test4()
    {
        $this->assertEquals([2, 2], PrimeFactors::generatePrimeFactors(4));
    }

    public function test6()
    {
        $this->assertEquals([2, 3], PrimeFactors::generatePrimeFactors(6));
    }

    public function test44()
    {
        $this->assertEquals([2, 2, 11], PrimeFactors::generatePrimeFactors(44));
    }

    public function test165()
    {
        $this->assertEquals([3, 5, 11], PrimeFactors::generatePrimeFactors(165));
    }
    
}
