<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class NotContainItemTest extends FluentAssertionsTestCase
{
    public function testArrayDoesNotContainItem()
    {
        $this->assert(array("1st", "2nd", "3rd"))->should()->notContainItem("4th");
    }

    public function testArrayDoesNotContainEmptyStringItem()
    {
        $this->assert(array("1st", "2nd", "3rd"))->should()->notContainItem("");
    }

    // TODO -- Multi-dimentional arrays

    public function testArrayDoesNotContainObject()
    {
        $array = array(new SecondTempClass("test"), new SecondTempClass("test2"));
        $this->assert($array)->should()->notContainItem(new SecondTempClass("test3"));
    }
}

class SecondTempClass
{
    public $prop;

    function __construct($propVal)
    {
        $this->prop = $propVal;
    }
}
