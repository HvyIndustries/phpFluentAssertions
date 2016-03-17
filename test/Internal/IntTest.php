<?php

// TODO -- This is horrible; find a solution
require_once dirname(dirname(__DIR__)) . "/src/FluentAssertions.php";

class IntTest extends PHPUnit_FluentAssertions_TestCase
{
    public function test1ShouldBe1()
    {
        $this->Assert(1)->Should()->Be(1);
    }
    public function test1ShouldNotBe2()
    {
        $this->Assert(1)->Should()->NotBe(2);
    }
}
