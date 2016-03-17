<?php

// TODO -- This is horrible; find a solution
require_once dirname(dirname(dirname(__DIR__))) . "/src/FluentAssertions.php";

class EndWithTest extends PHPUnit_FluentAssertions_TestCase
{
    public function testStringEndsWithString()
    {
        $this->Assert("nevada")->Should()->EndWith("ada");
    }

    public function testStringEndsWithEntireString()
    {
        $this->Assert("nevada")->Should()->EndWith("nevada");
    }

    public function testEmptyStringThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert("nevada")->Should()->EndWith("");
    }

    public function testNullThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert("nevada")->Should()->EndWith(null);
    }

    public function testIntThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(1)->Should()->EndWith("1");
    }

    public function testFloatThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(1.0)->Should()->EndWith("1.0");
    }

    public function testArrayThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(array("1st", "2nd"))->Should()->EndWith("1st");
    }

    public function testNullResultThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(null)->Should()->EndWith("null");
    }

    // TODO -- Handle resources
    // public function testResourceThrowsException()
    // {
    //     $this->setExpectedException("InvalidArgumentException");
    //     $this->Assert()->Should()->EndWith();
    // }

    public function testCallableThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(function() { return "test"; })->Should()->EndWith("test");
    }

    public function testObjectThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(new stdClass())->Should()->EndWith("stdClass");
    }
}