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
}
