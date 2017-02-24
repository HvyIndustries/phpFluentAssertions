<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class BeStringTest extends FluentAssertionsTestCase
{
    public function testString()
    {
        $this->assert("nevada")->should()->beString();
    }
}
