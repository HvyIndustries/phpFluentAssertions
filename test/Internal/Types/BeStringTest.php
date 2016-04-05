<?php

// TODO -- This is horrible; find a solution
require_once dirname(dirname(dirname(__DIR__))) . "/src/FluentAssertions.php";

class BeStringTest extends PHPUnit_FluentAssertions_TestCase
{
    public function testString()
    {
        $this->assert("nevada")->should()->beString();
    }
}
