<?php

// TODO -- This is horrible; find a solution
require_once dirname(dirname(dirname(__DIR__))) . "/src/FluentAssertions.php";

class ContainItemTest extends PHPUnit_FluentAssertions_TestCase
{
    public function testArrayHasStringItem()
    {
        $this->Assert(array("1st", "2nd", "3rd"))->Should()->ContainItem("1st");
    }

    public function testArrayHasEmptyStringItem()
    {
        $this->Assert(array("1st", "", "3rd"))->Should()->ContainItem("");
    }

    // TODO -- Multi-dimentional arrays

    public function testArrayHasObject()
    {
        $array = array(new TempClass("test"), new TempClass("test2"));
        $this->Assert($array)->Should()->ContainItem(new TempClass("test"));
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
