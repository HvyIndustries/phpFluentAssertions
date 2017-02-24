<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class BeTest extends FluentAssertionsTestCase
{
    public function testBool()
    {
        $this->assert(true)->should()->be(true);
    }

    public function testInt()
    {
        $this->assert(1)->should()->be(1);
    }

    public function testFloat()
    {
        $this->assert(1.0)->should()->be(1.0);
    }

    public function testString()
    {
        $this->assert("nevada")->should()->be("nevada");
    }

    public function testArray()
    {
        $this->assert(array("1st", "2nd"))->should()->be(array("1st", "2nd"));
    }

    public function testNull()
    {
        $this->assert(null)->should()->be(null);
    }

    // TODO -- Handle testing resources
    // public function testResource()
    // {
    //     $this->assert(null)->should()->be(null);
    // }

    public function testCallable()
    {
        $callable = function() { return "test"; };
        $this->assert($callable)->should()->be($callable);
    }

    public function testObject()
    {
        $class = new stdClass();
        $this->assert($class)->should()->be($class);
    }
}
