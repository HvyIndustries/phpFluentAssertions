<?php

// TODO -- This is horrible; find a solution
require_once dirname(dirname(__DIR__)) . "/src/FluentAssertions.php";

class BoolTest extends PHPUnit_FluentAssertions_TestCase
{
    public function testTrueShouldBeTrue()
    {
        $this->Assert(true)->Should()->Be(true);
        $this->Assert(true)->Should()->BeTrue();
    }

    public function testTrueShouldNotBeFalse()
    {
        $this->Assert(true)->Should()->NotBe(false);
        $this->Assert(true)->Should()->NotBeFalse();
    }

    public function testFalseShouldBeFalse()
    {
        $this->Assert(false)->Should()->Be(false);
        $this->Assert(false)->Should()->BeFalse();
    }

    public function testFalseShouldNotBeTrue()
    {
        $this->Assert(false)->Should()->NotBe(true);
        $this->Assert(false)->Should()->NotBeTrue();
    }

    public function testTrueShouldNotBeNull()
    {
        $this->Assert(true)->Should()->NotBeNull();
    }

    public function testFalseShouldNotBeNull()
    {
        $this->Assert(false)->Should()->NotBeNull();
    }

    public function testTrueShouldBeBool()
    {
        $this->Assert(true)->Should()->BeBool();
    }

    public function testFalseShouldBeBool()
    {
        $this->Assert(false)->Should()->BeBool();
    }

    public function testFalseContainsShouldThrowException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(false)->Should()->Contain("false");
    }

    public function testTrueContainsShouldThrowException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(true)->Should()->Contain("true");
    }

    public function testFalseNotContainsShouldThrowException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(false)->Should()->NotContain("false");
    }

    public function testTrueNotContainsShouldThrowException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(true)->Should()->NotContain("true");
    }

    public function testFalseShouldNotBeIntFalseValue()
    {
        $this->Assert(false)->Should()->NotBe(0);
    }

    public function testTrueShouldNotBeIntTrueValue()
    {
        $this->Assert(true)->Should()->NotBe(1);
    }
}
