<?php

require_once __DIR__ . "/../../../src/FluentAssertionsTestCase.php";

class NotStartWithTest extends FluentAssertionsTestCase
{
    public function testStringDoesNotStartWithString()
    {
        $this->assert("nevada")->should()->notStartWith("vada");
    }

    public function testEmptyStringThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert("nevada")->should()->notStartWith("");
    }

    public function testNullThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert("nevada")->should()->notStartWith(null);
    }

    public function testIntThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(1)->should()->notStartWith("1");
    }

    public function testBoolThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(true)->should()->notStartWith("1");
    }

    public function testFloatThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(1.0)->should()->notStartWith("1.0");
    }

    public function testArrayThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(array("1st", "2nd"))->should()->notStartWith("1st");
    }

    public function testNullResultThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(null)->should()->notStartWith("null");
    }

    // TODO -- Handle resources
    // public function testResourceThrowsException()
    // {
    //     $this->setExpectedException("InvalidArgumentException");
    //     $this->assert()->should()->notStartWith();
    // }

    public function testCallableThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(function() { return "test"; })->should()->notStartWith("test");
    }

    public function testObjectThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(new stdClass())->should()->notStartWith("stdClass");
    }
}
