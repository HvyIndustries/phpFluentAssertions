<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class BeNullTest extends FluentAssertionsTestCase
{
    public function testNull()
    {
        $this->assert(null)->should()->beNull();
    }
}
