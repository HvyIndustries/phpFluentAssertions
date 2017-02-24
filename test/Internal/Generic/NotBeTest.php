<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class NotBeTest extends FluentAssertionsTestCase
{
    public function testBool()
    {
        $this->assert(true)->should()->notBe(false);
    }

    public function testInt()
    {
        $this->assert(1)->should()->notBe("1");
    }

    public function testFloat()
    {
        $this->assert(1.0)->should()->notBe(1);
    }

    public function testString()
    {
        $this->assert("nevada")->should()->notBe("scout");
    }

    public function testArray()
    {
        $this->assert(array("1st", "2nd"))->should()->notBe(array("1st", "3rd"));
    }

    public function testNull()
    {
        $this->assert(null)->should()->notBe(false);
    }

    // TODO -- Handle testing resources
    // public function testResource()
    // {
    //     $this->assert()->should()->notBe();
    // }

    public function testCallable()
    {
        $callable = function() { return "test"; };
        $this->assert($callable)->should()->notBe("test");
    }

    public function testObject()
    {
        $class = new stdClass();
        $this->assert($class)->should()->notBe(false);
    }
}
