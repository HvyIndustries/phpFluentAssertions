<?php

// TODO -- This is horrible; find a solution
require_once dirname(dirname(dirname(__DIR__))) . "/src/FluentAssertions.php";

class HaveLengthTest extends PHPUnit_FluentAssertions_TestCase
{
    public function testStringHasLength()
    {
        $this->Assert("nevada")->Should()->HaveLength(6);
    }

    public function testIntResultThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(1)->Should()->HaveLength("1");
    }

    public function testBoolResultThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(true)->Should()->HaveLength("1");
    }

    public function testFloatResultThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(1.0)->Should()->HaveLength("1.0");
    }

    public function testArrayResultThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(array("1st", "2nd"))->Should()->HaveLength("1st");
    }

    public function testNullResultThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(null)->Should()->HaveLength("null");
    }

    // TODO -- Handle resources
    // public function testResourceResultThrowsException()
    // {
    //     $this->setExpectedException("InvalidArgumentException");
    //     $this->Assert()->Should()->HaveLength();
    // }

    public function testCallableResultThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(function() { return "test"; })->Should()->HaveLength("test");
    }

    public function testObjectResultThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(new stdClass())->Should()->HaveLength("stdClass");
    }

    public function testNullExpectationException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert("nevada")->Should()->HaveLength(null);
    }

    public function testBoolExpectationThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert("nevada")->Should()->HaveLength(true);
    }

    public function testFloatExpectationThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert("nevada")->Should()->HaveLength(1.0);
    }

    public function testArrayExpectationThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert("nevada")->Should()->HaveLength(array("1st", "2nd"));
    }

    // TODO -- Handle resources
    // public function testResourceExpectationThrowsException()
    // {
    //     $this->setExpectedException("InvalidArgumentException");
    //     $this->Assert("nevada")->Should()->HaveLength();
    // }

    public function testCallableExpectationThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert("nevada")->Should()->HaveLength(function() { return 6; });
    }

    public function testObjectExpectationThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert("nevada")->Should()->HaveLength(new stdClass());
    }
}
