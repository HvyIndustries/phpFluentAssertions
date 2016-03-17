<?php

// TODO -- This is horrible; find a solution
require_once dirname(dirname(dirname(__DIR__))) . "/src/FluentAssertions.php";

class NotHaveLengthTest extends PHPUnit_FluentAssertions_TestCase
{
    public function testStringHasLength()
    {
        $this->Assert("nevada")->Should()->NotHaveLength(10);
    }

    public function testIntResultThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(1)->Should()->NotHaveLength("1");
    }

    public function testBoolResultThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(true)->Should()->NotHaveLength("1");
    }

    public function testFloatResultThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(1.0)->Should()->NotHaveLength("1.0");
    }

    public function testArrayResultThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(array("1st", "2nd"))->Should()->NotHaveLength("1st");
    }

    public function testNullResultThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(null)->Should()->NotHaveLength("null");
    }

    // TODO -- Handle resources
    // public function testResourceResultThrowsException()
    // {
    //     $this->setExpectedException("InvalidArgumentException");
    //     $this->Assert()->Should()->NotHaveLength();
    // }

    public function testCallableResultThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(function() { return "test"; })->Should()->NotHaveLength("test");
    }

    public function testObjectResultThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(new stdClass())->Should()->NotHaveLength("stdClass");
    }

    public function testNullExpectationException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert("nevada")->Should()->NotHaveLength(null);
    }

    public function testBoolExpectationThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert("nevada")->Should()->NotHaveLength(true);
    }

    public function testFloatExpectationThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert("nevada")->Should()->NotHaveLength(1.0);
    }

    public function testArrayExpectationThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert("nevada")->Should()->NotHaveLength(array("1st", "2nd"));
    }

    // TODO -- Handle resources
    // public function testResourceExpectationThrowsException()
    // {
    //     $this->setExpectedException("InvalidArgumentException");
    //     $this->Assert("nevada")->Should()->NotHaveLength();
    // }

    public function testCallableExpectationThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert("nevada")->Should()->NotHaveLength(function() { return 6; });
    }

    public function testObjectExpectationThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert("nevada")->Should()->NotHaveLength(new stdClass());
    }
}
