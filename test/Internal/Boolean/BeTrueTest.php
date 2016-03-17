<?php

// TODO -- This is horrible; find a solution
require_once dirname(dirname(dirname(__DIR__))) . "/src/FluentAssertions.php";

class BeTrueTest extends PHPUnit_FluentAssertions_TestCase
{
    public function testTrueIsTrue()
    {
        $this->Assert(true)->Should()->BeTrue();
    }

    public function testIntThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(1)->Should()->BeTrue();
    }

    public function testFloatThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(1.0)->Should()->BeTrue();
    }

    public function testStringThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert("1")->Should()->BeTrue();
    }

    public function testArrayThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(array("1st", "2nd"))->Should()->BeTrue();
    }

    public function testNullThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(null)->Should()->BeTrue();
    }

    // TODO -- Handle resources
    // public function testResourceThrowsException()
    // {
    //     $this->setExpectedException("InvalidArgumentException");
    //     $this->Assert()->Should()->BeTrue();
    // }

    public function testCallableThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(function() { return "test"; })->Should()->BeTrue();
    }

    public function testObjectThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(new stdClass())->Should()->BeTrue();
    }
}
