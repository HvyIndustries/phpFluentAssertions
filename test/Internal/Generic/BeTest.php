<?php

// TODO -- This is horrible; find a solution
require_once dirname(dirname(dirname(__DIR__))) . "/src/FluentAssertions.php";

class BeTest extends PHPUnit_FluentAssertions_TestCase
{
    public function testBool()
    {
        $this->Assert(true)->Should()->Be(true);
    }

    public function testInt()
    {
        $this->Assert(1)->Should()->Be(1);
    }

    public function testFloat()
    {
        $this->Assert(1.0)->Should()->Be(1.0);
    }

    public function testString()
    {
        $this->Assert("nevada")->Should()->Be("nevada");
    }

    public function testArray()
    {
        $this->Assert(array("1st", "2nd"))->Should()->Be(array("1st", "2nd"));
    }

    public function testNull()
    {
        $this->Assert(null)->Should()->Be(null);
    }

    // TODO -- Handle testing resources
    // public function testResource()
    // {
    //     $this->Assert(null)->Should()->Be(null);
    // }

    public function testCallable()
    {
        $callable = function() { return "test"; };
        $this->Assert($callable)->Should()->Be($callable);
    }

    public function testObject()
    {
        $class = new stdClass();
        $this->Assert($class)->Should()->Be($class);
    }
}
