<?php

// TODO -- This is horrible; find a solution
require_once dirname(dirname(dirname(__DIR__))) . "/src/FluentAssertions.php";

class BeNullTest extends PHPUnit_FluentAssertions_TestCase
{
    public function testNull()
    {
        $this->Assert(null)->Should()->BeNull();
    }
}
