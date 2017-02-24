<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class BeTrueTest extends FluentAssertionsTestCase
{
    public function testTrueIsTrue()
    {
        $this->assert(true)->should()->beTrue();
    }

    public function testIntThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(1)->should()->beTrue();
    }

    public function testFloatThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(1.0)->should()->beTrue();
    }

    public function testStringThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert("1")->should()->beTrue();
    }

    public function testArrayThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(array("1st", "2nd"))->should()->beTrue();
    }

    public function testNullThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(null)->should()->beTrue();
    }

    // TODO -- Handle resources
    // public function testResourceThrowsException()
    // {
    //     $this->setExpectedException("InvalidArgumentException");
    //     $this->assert()->should()->beTrue();
    // }

    public function testCallableThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(function() { return "test"; })->should()->beTrue();
    }

    public function testObjectThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(new stdClass())->should()->beTrue();
    }
}
