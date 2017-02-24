<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class ContainTest extends FluentAssertionsTestCase
{
    public function testStringContainsString()
    {
        $this->assert("nevada")->should()->contain("eva");
    }

    public function testStringContainsStringAtStart()
    {
        $this->assert("nevada")->should()->contain("nev");
    }

    public function testEmptyStringThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert("nevada")->should()->contain("");
    }

    public function testNullThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert("nevada")->should()->contain(null);
    }

    public function testStringContainsStringAtEnd()
    {
        $this->assert("nevada")->should()->contain("ada");
    }

    public function testIntThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(1)->should()->contain("1");
    }

    public function testFloatThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(1.0)->should()->contain("1.0");
    }

    public function testArrayThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(array("1st", "2nd"))->should()->contain("1st");
    }

    public function testNullResultThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(null)->should()->contain("null");
    }

    // TODO -- Handle resources
    // public function testResourceThrowsException()
    // {
    //     $this->setExpectedException("InvalidArgumentException");
    //     $this->assert()->should()->contain();
    // }

    public function testCallableThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(function() { return "test"; })->should()->contain("test");
    }

    public function testObjectThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(new stdClass())->should()->contain("stdClass");
    }
}
