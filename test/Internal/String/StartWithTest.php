<?php

// TODO -- This is horrible; find a solution
require_once dirname(dirname(dirname(__DIR__))) . "/src/FluentAssertions.php";

class StartWithTest extends PHPUnit_FluentAssertions_TestCase
{
    public function testStringStartsWithString()
    {
        $this->assert("nevada")->should()->startWith("nev");
    }

    public function testStringContainsEntireString()
    {
        $this->assert("nevada")->should()->startWith("nevada");
    }

    public function testEmptyStringThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert("nevada")->should()->startWith("");
    }

    public function testNullThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert("nevada")->should()->startWith(null);
    }

    public function testIntThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(1)->should()->startWith("1");
    }

    public function testFloatThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(1.0)->should()->startWith("1.0");
    }

    public function testArrayThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(array("1st", "2nd"))->should()->startWith("1st");
    }

    public function testNullResultThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(null)->should()->startWith("null");
    }

    // TODO -- Handle resources
    // public function testResourceThrowsException()
    // {
    //     $this->setExpectedException("InvalidArgumentException");
    //     $this->assert()->should()->startWith();
    // }

    public function testCallableThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(function() { return "test"; })->should()->startWith("test");
    }

    public function testObjectThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(new stdClass())->should()->startWith("stdClass");
    }
}