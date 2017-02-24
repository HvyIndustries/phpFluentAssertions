<?php

// TODO -- This is horrible; find a solution
require_once dirname(dirname(dirname(__DIR__))) . "/src/FluentAssertionsTestCase.php";

class BeBoolTest extends FluentAssertionsTestCase
{
    public function testBool()
    {
        $this->assert(true)->should()->beBool();
    }
}
