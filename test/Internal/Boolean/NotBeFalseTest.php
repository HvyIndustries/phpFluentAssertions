<?php

// TODO -- This is horrible; find a solution
require_once dirname(dirname(dirname(__DIR__))) . "/src/FluentAssertions.php";

class NotBeFalseTest extends PHPUnit_FluentAssertions_TestCase
{
    public function testTrueIsNotFalse()
    {
        $this->assert(true)->should()->notBeFalse();
    }

    public function testIntThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(1)->should()->notBeFalse();
    }

    public function testFloatThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(1.0)->should()->notBeFalse();
    }

    public function testStringThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert("1")->should()->notBeFalse();
    }

    public function testArrayThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(array("1st", "2nd"))->should()->notBeFalse();
    }

    public function testNullThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(null)->should()->notBeFalse();
    }

    // TODO -- Handle resources
    // public function testResourceThrowsException()
    // {
    //     $this->setExpectedException("InvalidArgumentException");
    //     $this->assert()->should()->notBeFalse();
    // }

    public function testCallableThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(function() { return "test"; })->should()->notBeFalse();
    }

    public function testObjectThrowsException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->assert(new stdClass())->should()->notBeFalse();
    }
}
