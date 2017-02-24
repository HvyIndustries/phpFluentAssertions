<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class BeIntTest extends FluentAssertionsTestCase
{
    public function testInt()
    {
        $this->assert(1)->should()->beInt();
    }
}
