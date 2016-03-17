<?php

// TODO -- This is horrible; find a solution
require_once dirname(dirname(dirname(__DIR__))) . "/src/FluentAssertions.php";

class NotBeIntTest extends PHPUnit_FluentAssertions_TestCase
{
    public function testBool()
    {
        $this->Assert(true)->Should()->NotBeInt();
    }

    public function testFloat()
    {
        $this->Assert(1.0)->Should()->NotBeInt();
    }

    public function testString()
    {
        $this->Assert("1")->Should()->NotBeInt();
    }

    public function testArray()
    {
        $this->Assert(array("1st", "2nd"))->Should()->NotBeInt();
    }

    public function testNull()
    {
        $this->Assert(null)->Should()->NotBeInt();
    }

    // TODO -- Handle resources
    // public function testResource()
    // {
    //     $this->Assert()->Should()->NotBeInt();
    // }

    public function testCallable()
    {
        $this->Assert(function() { return "test"; })->Should()->NotBeInt();
    }

    public function testObject()
    {
        $this->Assert(new stdClass())->Should()->NotBeInt();
    }
}
