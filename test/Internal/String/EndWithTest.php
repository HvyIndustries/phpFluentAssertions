<?php

// TODO -- This is horrible; find a solution
require_once dirname(dirname(dirname(__DIR__))) . "/src/FluentAssertions.php";

class EndWithTest extends PHPUnit_FluentAssertions_TestCase
{
    public function testStringEndsWithString()
    {
        $this->assert("nevada")->should()->endWith("ada");
    }

    public function testStringEndsWithEntireString()
    {
        $this->assert("nevada")->should()->endWith("nevada");
    }

    public function testEmptyStringThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert("nevada")->should()->endWith("");
    }

    public function testNullThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert("nevada")->should()->endWith(null);
    }

    public function testIntThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(1)->should()->endWith("1");
    }

    public function testFloatThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(1.0)->should()->endWith("1.0");
    }

    public function testArrayThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(array("1st", "2nd"))->should()->endWith("1st");
    }

    public function testNullResultThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(null)->should()->endWith("null");
    }

    // TODO -- Handle resources
    // public function testResourceThrowsException()
    // {
    //     $this->setExpectedException("InvalidArgumentException");
    //     $this->assert()->should()->endWith();
    // }

    public function testCallableThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(function() { return "test"; })->should()->endWith("test");
    }

    public function testObjectThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(new stdClass())->should()->endWith("stdClass");
    }
}