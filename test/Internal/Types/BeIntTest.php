<?php

// TODO -- This is horrible; find a solution
require_once dirname(dirname(dirname(__DIR__))) . "/src/FluentAssertions.php";

class BeIntTest extends PHPUnit_FluentAssertions_TestCase
{
    public function testInt()
    {
        $this->Assert(1)->Should()->BeInt();
    }
}
