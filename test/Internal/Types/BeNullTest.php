<?php

// TODO -- This is horrible; find a solution
require_once dirname(dirname(dirname(__DIR__))) . "/src/FluentAssertionsTestCase.php";

class BeNullTest extends FluentAssertionsTestCase
{
    public function testNull()
    {
        $this->assert(null)->should()->beNull();
    }
}
