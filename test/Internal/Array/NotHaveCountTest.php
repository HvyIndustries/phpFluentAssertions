<?php

// TODO -- This is horrible; find a solution
require_once dirname(dirname(dirname(__DIR__))) . "/src/FluentAssertions.php";

class NotHaveCountTest extends PHPUnit_FluentAssertions_TestCase
{
    public function testArrayHasCount()
    {
        $this->assert(array("1st", "2nd", "3rd"))->should()->notHaveCount(4);
    }

    public function testIntResultThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(1)->should()->notHaveCount("1");
    }

    public function testBoolResultThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(true)->should()->notHaveCount("1");
    }

    public function testFloatResultThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(1.0)->should()->notHaveCount("1.0");
    }

    public function testArrayResultThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(array("1st", "2nd"))->should()->notHaveCount("1st");
    }

    public function testNullResultThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(null)->should()->notHaveCount("null");
    }

    // TODO -- Handle resources
    // public function testResourceResultThrowsException()
    // {
    //     $this->setExpectedException("InvalidArgumentException");
    //     $this->assert()->should()->notHaveCount();
    // }

    public function testCallableResultThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(function() { return "test"; })->should()->notHaveCount("test");
    }

    public function testObjectResultThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(new stdClass())->should()->notHaveCount("stdClass");
    }

    public function testNullExpectationException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(array("1st", "2nd", "3rd"))->should()->notHaveCount(null);
    }

    public function testBoolExpectationThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(array("1st", "2nd", "3rd"))->should()->notHaveCount(true);
    }

    public function testFloatExpectationThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(array("1st", "2nd", "3rd"))->should()->notHaveCount(1.0);
    }

    public function testArrayExpectationThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(array("1st", "2nd", "3rd"))->should()->notHaveCount(array("1st", "2nd"));
    }

    // TODO -- Handle resources
    // public function testResourceExpectationThrowsException()
    // {
    //     $this->setExpectedException("InvalidArgumentException");
    //     $this->assert(array("1st", "2nd", "3rd"))->should()->notHaveCount();
    // }

    public function testCallableExpectationThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(array("1st", "2nd", "3rd"))->should()->notHaveCount(function() { return 6; });
    }

    public function testObjectExpectationThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(array("1st", "2nd", "3rd"))->should()->notHaveCount(new stdClass());
    }
}
