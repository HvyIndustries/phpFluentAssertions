<?php

// TODO -- This is horrible; find a solution
require_once dirname(dirname(dirname(__DIR__))) . "/src/FluentAssertions.php";

class NotContainItemTest extends PHPUnit_FluentAssertions_TestCase
{
    public function testArrayDoesNotContainItem()
    {
        $this->Assert(array("1st", "2nd", "3rd"))->Should()->NotContainItem("4th");
    }

    public function testArrayDoesNotContainEmptyStringItem()
    {
        $this->Assert(array("1st", "2nd", "3rd"))->Should()->NotContainItem("");
    }

    // TODO -- Multi-dimentional arrays
    // TODO -- Objects in arrays
}
