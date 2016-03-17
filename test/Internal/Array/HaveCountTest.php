<?php

// TODO -- This is horrible; find a solution
require_once dirname(dirname(dirname(__DIR__))) . "/src/FluentAssertions.php";

class HaveCountTest extends PHPUnit_FluentAssertions_TestCase
{
    public function testArrayHasCount()
    {
        $this->Assert(array("1st", "2nd", "3rd"))->Should()->HaveCount(3);
    }

    public function testIntResultThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(1)->Should()->HaveCount("1");
    }

    public function testBoolResultThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(true)->Should()->HaveCount("1");
    }

    public function testFloatResultThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(1.0)->Should()->HaveCount("1.0");
    }

    public function testArrayResultThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(array("1st", "2nd"))->Should()->HaveCount("1st");
    }

    public function testNullResultThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(null)->Should()->HaveCount("null");
    }

    // TODO -- Handle resources
    // public function testResourceResultThrowsException()
    // {
    //     $this->setExpectedException("InvalidArgumentException");
    //     $this->Assert()->Should()->HaveCount();
    // }

    public function testCallableResultThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(function() { return "test"; })->Should()->HaveCount("test");
    }

    public function testObjectResultThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(new stdClass())->Should()->HaveCount("stdClass");
    }

    public function testNullExpectationException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(array("1st", "2nd", "3rd"))->Should()->HaveCount(null);
    }

    public function testBoolExpectationThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(array("1st", "2nd", "3rd"))->Should()->HaveCount(true);
    }

    public function testFloatExpectationThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(array("1st", "2nd", "3rd"))->Should()->HaveCount(1.0);
    }

    public function testArrayExpectationThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(array("1st", "2nd", "3rd"))->Should()->HaveCount(array("1st", "2nd"));
    }

    // TODO -- Handle resources
    // public function testResourceExpectationThrowsException()
    // {
    //     $this->setExpectedException("InvalidArgumentException");
    //     $this->Assert(array("1st", "2nd", "3rd"))->Should()->HaveCount();
    // }

    public function testCallableExpectationThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(array("1st", "2nd", "3rd"))->Should()->HaveCount(function() { return 6; });
    }

    public function testObjectExpectationThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(array("1st", "2nd", "3rd"))->Should()->HaveCount(new stdClass());
    }
}
