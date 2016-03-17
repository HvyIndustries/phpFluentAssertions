<?php

// TODO -- This is horrible; find a solution
require_once dirname(dirname(dirname(__DIR__))) . "/src/FluentAssertions.php";

class NotBeTrueTest extends PHPUnit_FluentAssertions_TestCase
{
    public function testFalseIsNotTrue()
    {
        $this->Assert(false)->Should()->NotBeTrue();
    }

    public function testIntThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(1)->Should()->NotBeTrue();
    }

    public function testFloatThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(1.0)->Should()->NotBeTrue();
    }

    public function testStringThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert("1")->Should()->NotBeTrue();
    }

    public function testArrayThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(array("1st", "2nd"))->Should()->NotBeTrue();
    }

    public function testNullThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(null)->Should()->NotBeTrue();
    }

    // TODO -- Handle resources
    // public function testResourceThrowsException()
    // {
    //     $this->setExpectedException("InvalidArgumentException");
    //     $this->Assert()->Should()->NotBeTrue();
    // }

    public function testCallableThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(function() { return "test"; })->Should()->NotBeTrue();
    }

    public function testObjectThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(new stdClass())->Should()->NotBeTrue();
    }
}
