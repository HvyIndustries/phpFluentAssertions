<?php

// TODO -- This is horrible; find a solution
require_once dirname(dirname(dirname(__DIR__))) . "/src/FluentAssertions.php";

class BeFalseTest extends PHPUnit_FluentAssertions_TestCase
{
    public function testFalseIsFalse()
    {
        $this->Assert(false)->Should()->BeFalse();
    }

    public function testIntThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(1)->Should()->BeFalse();
    }

    public function testFloatThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(1.0)->Should()->BeFalse();
    }

    public function testStringThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert("1")->Should()->BeFalse();
    }

    public function testArrayThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(array("1st", "2nd"))->Should()->BeFalse();
    }

    public function testNullThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(null)->Should()->BeFalse();
    }

    // TODO -- Handle resources
    // public function testResourceThrowsException()
    // {
    //     $this->setExpectedException("InvalidArgumentException");
    //     $this->Assert()->Should()->BeFalse();
    // }

    public function testCallableThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(function() { return "test"; })->Should()->BeFalse();
    }

    public function testObjectThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(new stdClass())->Should()->BeFalse();
    }
}
