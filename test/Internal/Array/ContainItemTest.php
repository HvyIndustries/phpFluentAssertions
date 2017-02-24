<?php

// TODO -- This is horrible; find a solution
require_once dirname(dirname(dirname(__DIR__))) . "/src/FluentAssertionsTestCase.php";

class ContainItemTest extends FluentAssertionsTestCase
{
    public function testArrayHasStringItem()
    {
        $this->assert(array("1st", "2nd", "3rd"))->should()->containItem("1st");
    }

    public function testArrayHasEmptyStringItem()
    {
        $this->assert(array("1st", "", "3rd"))->should()->containItem("");
    }

    // TODO -- Multi-dimentional arrays

    public function testArrayHasObject()
    {
        $array = array(new TempClass("test"), new TempClass("test2"));
        $this->assert($array)->should()->containItem(new TempClass("test"));
    }
}

class TempClass
{
    public $prop;

    function __construct($propVal)
    {
        $this->prop = $propVal;
    }
}
