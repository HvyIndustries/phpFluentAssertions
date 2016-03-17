<?php

// TODO -- This is horrible; find a solution
require_once dirname(dirname(__DIR__)) . "/src/FluentAssertions.php";

class StringTest extends PHPUnit_FluentAssertions_TestCase
{
    public function testStringShouldContainString()
    {
        $this->Assert("nevada")->Should()->Contain("vad");
    }

    public function testStringShouldNotContainString()
    {
        $this->Assert("nevada")->Should()->NotContain("scout");
    }

    public function testContainUsingNonStringTypeShouldThrowException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(4)->Should()->Contain("scout");
    }

    public function testNotContainUsingNonStringTypeShouldThrowException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert(4)->Should()->NotContain("scout");
    }

    public function testContainUsingNonStringTypeAsExpectedShouldThrowException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert("nevada")->Should()->Contain(5);
    }

    public function testNotContainUsingNonStringTypeAsExpectedShouldThrowException()
    {
        $this->setExpectedException("InvalidArgumentException");
        $this->Assert("nevada")->Should()->NotContain(5);
    }

    public function testStringShouldBeStringType()
    {
        $this->Assert("nevada")->Should()->BeString();
    }

    public function testIntShouldNotBeStringType()
    {
        $this->Assert(1)->Should()->NotBeString();
    }
}
