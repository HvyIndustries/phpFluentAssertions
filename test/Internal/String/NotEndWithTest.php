<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class NotEndWithTest extends FluentAssertionsTestCase
{
    public function testStringDoesNotEndWithString()
    {
        $this->assert("nevada")->should()->notEndWith("scout");
    }

    public function testEmptyStringThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert("nevada")->should()->notEndWith("");
    }

    public function testEmptyStringResult()
    {
        $this->assert("")->should()->notEndWith("ada");
    }

    public function testNullThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert("nevada")->should()->notEndWith(null);
    }

    public function testIntThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(1)->should()->notEndWith("1");
    }

    public function testFloatThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(1.0)->should()->notEndWith("1.0");
    }

    public function testArrayThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(array("1st", "2nd"))->should()->notEndWith("1st");
    }

    public function testNullResultThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(null)->should()->notEndWith("null");
    }

    // TODO -- Handle resources
    // public function testResourceThrowsException()
    // {
    //     $this->setExpectedException("InvalidArgumentException");
    //     $this->assert()->should()->notEndWith();
    // }

    public function testCallableThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(function() { return "test"; })->should()->notEndWith("test");
    }

    public function testObjectThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(new stdClass())->should()->notEndWith("stdClass");
    }
}
