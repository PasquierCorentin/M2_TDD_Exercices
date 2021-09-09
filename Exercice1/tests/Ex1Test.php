<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class Ex1Test extends TestCase
{
    public function testLeapYears() : void
    {
        $this->assertEquals(true, Exo1::isLeapYear(2016)); //' Exo1:: ' permet de link à la class de l'autre fichier, grâce à l'autoload, si pas utilisé il faut utiliser require
        $this->assertEquals(true, Exo1::isLeapYear(2000));
    }

    public function testNonLeapYears() : void
    {
        $this->assertEquals(false, Exo1::isLeapYear(2015));
        $this->assertEquals(false, Exo1::isLeapYear(1900));
    }

}
