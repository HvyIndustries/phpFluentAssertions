<?php

// TODO -- This is horrible; find a solution
require_once dirname(dirname(dirname(__DIR__))) . "/src/FluentAssertionsTestCase.php";

class BeIntTest extends FluentAssertionsTestCase
{
    public function testInt()
    {
        $this->assert(1)->should()->beInt();
    }
}
