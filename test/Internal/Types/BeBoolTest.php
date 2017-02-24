<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class BeBoolTest extends FluentAssertionsTestCase
{
    public function testBool()
    {
        $this->assert(true)->should()->beBool();
    }
}
