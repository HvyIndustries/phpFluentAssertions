<?php

// TODO -- This is horrible; find a solution
require_once dirname(dirname(dirname(__DIR__))) . "/src/FluentAssertions.php";

class NotBeTest extends PHPUnit_FluentAssertions_TestCase
{
    public function testBool()
    {
        $this->Assert(true)->Should()->NotBe(false);
    }

    public function testInt()
    {
        $this->Assert(1)->Should()->NotBe("1");
    }

    public function testFloat()
    {
        $this->Assert(1.0)->Should()->NotBe(1);
    }

    public function testString()
    {
        $this->Assert("nevada")->Should()->NotBe("scout");
    }

    public function testArray()
    {
        $this->Assert(array("1st", "2nd"))->Should()->NotBe(array("1st", "3rd"));
    }

    public function testNull()
    {
        $this->Assert(null)->Should()->NotBe(false);
    }

    // TODO -- Handle testing resources
    // public function testResource()
    // {
    //     $this->Assert()->Should()->NotBe();
    // }

    public function testCallable()
    {
        $callable = function() { return "test"; };
        $this->Assert($callable)->Should()->NotBe("test");
    }

    public function testObject()
    {
        $class = new stdClass();
        $this->Assert($class)->Should()->NotBe(false);
    }
}
