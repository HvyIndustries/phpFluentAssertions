<?php

// TODO -- This is horrible; find a solution
require_once dirname(dirname(dirname(__DIR__))) . "/src/FluentAssertions.php";

class BeBoolTest extends PHPUnit_FluentAssertions_TestCase
{
    public function testBool()
    {
        $this->assert(true)->should()->beBool();
    }
}
