<?php

// TODO -- This is horrible; find a solution
require_once dirname(dirname(dirname(__DIR__))) . "/src/FluentAssertions.php";

class NotHaveCountTest extends PHPUnit_FluentAssertions_TestCase
{
    public function testArrayHasCount()
    {
        $this->Assert(array("1st", "2nd", "3rd"))->Should()->NotHaveCount(4);
    }

    public function testIntResultThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(1)->Should()->NotHaveCount("1");
    }

    public function testBoolResultThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(true)->Should()->NotHaveCount("1");
    }

    public function testFloatResultThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(1.0)->Should()->NotHaveCount("1.0");
    }

    public function testArrayResultThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(array("1st", "2nd"))->Should()->NotHaveCount("1st");
    }

    public function testNullResultThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(null)->Should()->NotHaveCount("null");
    }

    // TODO -- Handle resources
    // public function testResourceResultThrowsException()
    // {
    //     $this->setExpectedException("InvalidArgumentException");
    //     $this->Assert()->Should()->NotHaveCount();
    // }

    public function testCallableResultThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(function() { return "test"; })->Should()->NotHaveCount("test");
    }

    public function testObjectResultThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(new stdClass())->Should()->NotHaveCount("stdClass");
    }

    public function testNullExpectationException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(array("1st", "2nd", "3rd"))->Should()->NotHaveCount(null);
    }

    public function testBoolExpectationThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(array("1st", "2nd", "3rd"))->Should()->NotHaveCount(true);
    }

    public function testFloatExpectationThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(array("1st", "2nd", "3rd"))->Should()->NotHaveCount(1.0);
    }

    public function testArrayExpectationThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(array("1st", "2nd", "3rd"))->Should()->NotHaveCount(array("1st", "2nd"));
    }

    // TODO -- Handle resources
    // public function testResourceExpectationThrowsException()
    // {
    //     $this->setExpectedException("InvalidArgumentException");
    //     $this->Assert(array("1st", "2nd", "3rd"))->Should()->NotHaveCount();
    // }

    public function testCallableExpectationThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(array("1st", "2nd", "3rd"))->Should()->NotHaveCount(function() { return 6; });
    }

    public function testObjectExpectationThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(array("1st", "2nd", "3rd"))->Should()->NotHaveCount(new stdClass());
    }
}
