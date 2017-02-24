<?php

// TODO -- This is horrible; find a solution
require_once dirname(dirname(dirname(__DIR__))) . "/src/FluentAssertionsTestCase.php";

class BeStringTest extends FluentAssertionsTestCase
{
    public function testString()
    {
        $this->assert("nevada")->should()->beString();
    }
}
