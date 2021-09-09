<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class BalancedStringsTest extends TestCase
{
    public function test1() : void
    {
        $this->assertEquals(true, BalancedStrings::isBalanced(""));
    }

    public function test2() : void
    {
        $this->assertEquals(true, BalancedStrings::isBalanced("()"));
    }

    public function test3() : void
    {
        $this->assertEquals(false, BalancedStrings::isBalanced(")("));
    }
    
}
